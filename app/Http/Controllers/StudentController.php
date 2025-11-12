<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\StudentIdSequence;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(Request $request)
    {
        $query = Student::query();

        if ($request->filled('search')) {
            $search = $request->get('search');
            $query->where(function($q) use ($search) {
                $q->where('full_name', 'LIKE', "%{$search}%")
                  ->orWhere('student_id', 'LIKE', "%{$search}%")
                  ->orWhere('email', 'LIKE', "%{$search}%")
                  ->orWhere('course_program', 'LIKE', "%{$search}%");
            });
        }

        if ($request->filled('year_level')) {
            $query->where('year_level', $request->get('year_level'));
        }

        $students = $query->latest()->paginate(10)->withQueryString();
        
        return view('students.index', compact('students'));
    }

    public function create()
    {
        $nextStudentId = $this->generateNextStudentId();
        
        session()->forget('student_form_data');
        
        return view('students.create', compact('nextStudentId'));
    }

    public function storeStep(Request $request)
    {
        $step = $request->input('step', 1);
        
        $rules = $this->getValidationRulesForStep($step);
        
        try {
            $validated = $request->validate($rules);
            
            $formData = session('student_form_data', []);
            $formData = array_merge($formData, $validated);
            session(['student_form_data' => $formData]);
            
            if ($request->expectsJson()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Step data saved successfully',
                    'step' => $step,
                    'next_step' => $step + 1
                ]);
            }
            
            $nextStep = $step + 1;
            
            if ($nextStep > 3) {
                return $this->finalizeStudent();
            }
            
            return redirect()->route('students.create', ['step' => $nextStep]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            if ($request->expectsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Validation failed',
                    'errors' => $e->errors()
                ], 422);
            }
            
            throw $e;
        }
    }

    private function getValidationRulesForStep($step)
    {
        switch ($step) {
            case 1: 
                return [
                    'student_id' => 'nullable|string|unique:students,student_id',
                    'full_name' => 'required|string|max:255',
                    'date_of_birth' => 'required|date',
                    'gender' => 'required|in:Male,Female,Other',
                ];
            case 2: 
                return [
                    'email' => 'required|email|unique:students,email',
                    'phone' => 'nullable|string|max:20',
                    'address' => 'nullable|string',
                ];
            case 3: 
                return [
                    'course_program' => 'required|string|max:255',
                    'year_level' => 'required|integer|min:1|max:6',
                ];
            default:
                return [];
        }
    }

    private function finalizeStudent()
    {
        $formData = session('student_form_data', []);
        
        $validated = validator($formData, [
            'student_id' => 'nullable|string|unique:students,student_id',
            'full_name' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
            'gender' => 'required|in:Male,Female,Other',
            'email' => 'required|email|unique:students,email',
            'course_program' => 'required|string|max:255',
            'year_level' => 'required|integer|min:1|max:6',
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string'
        ])->validate();

        $maxRetries = 5;
        $attempt = 0;
        
        while ($attempt < $maxRetries) {
            try {
                return \DB::transaction(function () use ($validated) {
                    if (empty($validated['student_id'])) {
                        $validated['student_id'] = $this->generateNextStudentIdSafe();
                    }

                    if (Student::where('student_id', $validated['student_id'])->exists()) {
                        throw new \Exception('Student ID already exists, retrying...');
                    }

                    $student = Student::create($validated);

                    session()->forget('student_form_data');

                    $this->broadcastStudentIdUpdate($student->student_id);

                    return redirect()->route('students.index')
                        ->with('success', 'Student created successfully with ID: ' . $student->student_id);
                });
            } catch (\Exception $e) {
                $attempt++;
                if ($attempt >= $maxRetries) {
                    return back()->withErrors(['student_id' => 'Failed to generate unique student ID after multiple attempts. Please try again.']);
                }
                usleep(100000); // 100ms
            }
        }
    }

    private function finalizeStudentAjax()
    {
        try {
            $formData = session('student_form_data', []);
            
            if (empty($formData)) {
                return response()->json([
                    'success' => false,
                    'message' => 'No form data found. Please start over.'
                ], 400);
            }
            
            $validator = validator($formData, [
                'student_id' => 'nullable|string|unique:students,student_id',
                'full_name' => 'required|string|max:255',
                'date_of_birth' => 'required|date',
                'gender' => 'required|in:Male,Female,Other',
                'email' => 'required|email|unique:students,email',
                'course_program' => 'required|string|max:255',
                'year_level' => 'required|integer|min:1|max:6',
                'phone' => 'nullable|string|max:20',
                'address' => 'nullable|string'
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Validation failed',
                    'errors' => $validator->errors()
                ], 422);
            }

            $validated = $validator->validated();

            $maxRetries = 5;
            $attempt = 0;
            
            while ($attempt < $maxRetries) {
                try {
                    $student = \DB::transaction(function () use ($validated) {
                        if (empty($validated['student_id'])) {
                            $validated['student_id'] = $this->generateNextStudentIdSafe();
                        }

                        if (Student::where('student_id', $validated['student_id'])->exists()) {
                            throw new \Exception('Student ID already exists, retrying...');
                        }

                        return Student::create($validated);
                    });

                    session()->forget('student_form_data');

                    $this->broadcastStudentIdUpdate($student->student_id);

                    return response()->json([
                        'success' => true,
                        'message' => 'Student created successfully with ID: ' . $student->student_id,
                        'student' => $student,
                        'redirect_url' => route('students.index')
                    ]);

                } catch (\Exception $e) {
                    $attempt++;
                    if ($attempt >= $maxRetries) {
                        return response()->json([
                            'success' => false,
                            'message' => 'Failed to generate unique student ID after multiple attempts. Please try again.'
                        ], 500);
                    }
                    usleep(100000); // 100ms
                }
            }
        } catch (\Exception $e) {
            \Log::error('Error finalizing student creation: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'An unexpected error occurred. Please try again.'
            ], 500);
        }
    }

    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'student_id' => 'nullable|string|unique:students,student_id',
                'full_name' => 'required|string|max:255',
                'date_of_birth' => 'required|date',
                'gender' => 'required|in:Male,Female,Other',
                'email' => 'required|email|unique:students,email',
                'course_program' => 'required|string|max:255',
                'year_level' => 'required|integer|min:1|max:6',
                'phone' => 'nullable|string|max:20',
                'address' => 'nullable|string'
            ]);

            $maxRetries = 3; 
            $attempt = 0;
            
            while ($attempt < $maxRetries) {
                try {
                    $student = \DB::transaction(function () use ($validated) {
                        if (empty($validated['student_id'])) {
                            $validated['student_id'] = $this->generateNextStudentIdSafe();
                        }

                        if (Student::where('student_id', $validated['student_id'])->exists()) {
                            throw new \Exception('Student ID already exists, retrying...');
                        }

                        return Student::create($validated);
                    });

                    $this->broadcastStudentIdUpdate($student->student_id);

                    if ($request->expectsJson()) {
                        return response()->json([
                            'success' => true,
                            'message' => 'Student created successfully with ID: ' . $student->student_id,
                            'student' => $student,
                            'redirect_url' => route('students.index')
                        ]);
                    }

                    return redirect()->route('students.index')
                        ->with('success', 'Student created successfully with ID: ' . $student->student_id);

                } catch (\Exception $e) {
                    $attempt++;
                    if ($attempt >= $maxRetries) {
                        if ($request->expectsJson()) {
                            return response()->json([
                                'success' => false,
                                'message' => 'Failed to generate unique student ID after multiple attempts. Please try again.'
                            ], 500);
                        }
                        return back()->withErrors(['student_id' => 'Failed to generate unique student ID after multiple attempts. Please try again.'])
                                    ->withInput();
                    }
                    usleep(50000); 
                }
            }
        } catch (\Illuminate\Validation\ValidationException $e) {
            if ($request->expectsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Validation failed',
                    'errors' => $e->errors()
                ], 422);
            }
            
            throw $e;
        } catch (\Exception $e) {
            \Log::error('Error creating student: ' . $e->getMessage());
            
            if ($request->expectsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => 'An unexpected error occurred. Please try again.'
                ], 500);
            }
            
            return back()->withErrors(['general' => 'An unexpected error occurred. Please try again.'])
                        ->withInput();
        }
    }

    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    public function print(Student $student)
    {
        return view('students.print', compact('student'));
    }

    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        try {
            $validated = $request->validate([
                'student_id' => 'required|string|unique:students,student_id,' . $student->id,
                'full_name' => 'required|string|max:255',
                'date_of_birth' => 'required|date',
                'gender' => 'required|in:Male,Female,Other',
                'email' => 'required|email|unique:students,email,' . $student->id,
                'course_program' => 'required|string|max:255',
                'year_level' => 'required|integer|min:1|max:6',
                'phone' => 'nullable|string|max:20',
                'address' => 'nullable|string'
            ]);

            $student->update($validated);

            if ($request->expectsJson()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Student updated successfully!',
                    'student' => $student->fresh(),
                    'redirect_url' => route('students.show', $student)
                ]);
            }

            return redirect()->route('students.show', $student)
                ->with('success', 'Student updated successfully!');

        } catch (\Illuminate\Validation\ValidationException $e) {
            if ($request->expectsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Validation failed',
                    'errors' => $e->errors()
                ], 422);
            }
            
            throw $e;
        } catch (\Exception $e) {
            \Log::error('Error updating student: ' . $e->getMessage());
            
            if ($request->expectsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => 'An unexpected error occurred. Please try again.'
                ], 500);
            }
            
            return back()->withErrors(['general' => 'An unexpected error occurred. Please try again.'])
                        ->withInput();
        }
    }

    public function destroy(Student $student)
    {
        try {
            $studentName = $student->full_name;
            $student->delete();

            if (request()->expectsJson()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Student deleted successfully!',
                    'student_name' => $studentName
                ]);
            }

            return redirect()->route('students.index')
                ->with('success', 'Student deleted successfully!');
        } catch (\Exception $e) {
            if (request()->expectsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Failed to delete student. Please try again.'
                ], 500);
            }

            return redirect()->route('students.index')
                ->with('error', 'Failed to delete student. Please try again.');
        }
    }

    public function export(Request $request)
    {
        $query = Student::query();

        if ($request->filled('search')) {
            $search = $request->get('search');
            $query->where(function($q) use ($search) {
                $q->where('full_name', 'LIKE', "%{$search}%")
                  ->orWhere('student_id', 'LIKE', "%{$search}%")
                  ->orWhere('email', 'LIKE', "%{$search}%")
                  ->orWhere('course_program', 'LIKE', "%{$search}%");
            });
        }

        if ($request->filled('year_level')) {
            $query->where('year_level', $request->get('year_level'));
        }

        $students = $query->orderBy('student_id')->get();

        $filename = 'students_export_' . date('Y-m-d_H-i-s') . '.csv';
        
        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="' . $filename . '"',
        ];

        $callback = function() use ($students) {
            $file = fopen('php://output', 'w');
            
            fputcsv($file, [
                'Student ID',
                'Full Name',
                'Email',
                'Phone',
                'Date of Birth',
                'Age',
                'Gender',
                'Course Program',
                'Year Level',
                'Address',
                'Created At'
            ]);

            foreach ($students as $student) {
                fputcsv($file, [
                    $student->student_id,
                    $student->full_name,
                    $student->email,
                    $student->phone ?? 'N/A',
                    $student->date_of_birth->format('Y-m-d'),
                    $student->date_of_birth->age,
                    $student->gender,
                    $student->course_program,
                    $student->year_level,
                    $student->address ?? 'N/A',
                    $student->created_at->format('Y-m-d H:i:s')
                ]);
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }

    private function generateNextStudentId()
    {
        $currentYear = date('Y');
        $yearPrefix = $currentYear;
        
        $lastStudent = Student::where('student_id', 'LIKE', $yearPrefix . '%')
            ->orderBy('student_id', 'desc')
            ->first();
        
        if ($lastStudent) {
            $lastNumber = (int) substr($lastStudent->student_id, 4);
            $nextNumber = $lastNumber + 1;
        } else {
            $nextNumber = 1;
        }
        
        return $yearPrefix . str_pad($nextNumber, 4, '0', STR_PAD_LEFT);
    }

    private function generateNextStudentIdSafe()
    {
        $currentYear = date('Y');
        
        // Use atomic sequence generation to prevent race conditions
        $nextSequence = StudentIdSequence::getNextSequence($currentYear);
        
        return $currentYear . str_pad($nextSequence, 4, '0', STR_PAD_LEFT);
    }

    private function broadcastStudentIdUpdate($createdId)
    {
   
        \Log::info('Student created with ID: ' . $createdId);
        
        if (function_exists('opcache_reset')) {
            opcache_reset();
        }
    }

    public function generateStudentId()
    {
        return response()->json([
            'student_id' => $this->generateNextStudentId()
        ]);
    }

    public function studentIdStream()
    {
        $currentYear = date('Y');
        
        $sequenceRecord = StudentIdSequence::where('year', $currentYear)->first();
        $currentSequence = $sequenceRecord ? $sequenceRecord->last_sequence : 0;
        
        $nextId = $this->generateNextStudentId();
        
        $studentCount = Student::where('student_id', 'LIKE', $currentYear . '%')->count();
        
        return response()->json([
            'type' => 'current',
            'student_id' => $nextId,
            'sequence' => $currentSequence,
            'student_count' => $studentCount,
            'year' => $currentYear,
            'timestamp' => now()->toISOString()
        ]);
    }
}
