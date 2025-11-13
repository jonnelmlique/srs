@extends('layouts.app')

@section('title', $student->full_name . ' - Student Record System')

@section('breadcrumb')
<li class="flex items-center">
    <svg class="w-4 h-4 text-gray-400 mx-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
    </svg>
    <a href="{{ route('students.index') }}" class="text-gray-500 hover:text-gray-700 transition-colors">Students</a>
</li>
<li class="flex items-center">
    <svg class="w-4 h-4 text-gray-400 mx-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
    </svg>
    <span class="text-gray-900 font-medium">{{ $student->full_name }}</span>
</li>
@endsection
@section('page-title', $student->full_name)
@section('page-description', 'Student ID: ' . $student->student_id . ' • ' . $student->course_program)

@section('content')
<div class="space-y-6">
    <div class="flex items-center justify-between">
        <div class="flex items-center space-x-4">
            <a href="{{ route('students.index') }}" class="p-2 text-gray-600 hover:text-gray-900 hover:bg-gray-100 rounded-lg transition-all duration-200">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
            </a>
            <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-purple-600 rounded-xl flex items-center justify-center text-white text-lg font-bold shadow-lg">
                {{ strtoupper(substr($student->full_name, 0, 2)) }}
            </div>
            <div class="flex items-center space-x-4">
                <span class="badge badge-primary">{{ $student->course_program }}</span>
                <span class="badge badge-success">Year {{ $student->year_level }}</span>
                <span class="text-sm text-gray-500">{{ $student->date_of_birth->age }} years old</span>
            </div>
        </div>
        <div class="flex space-x-3">
            <a href="{{ route('students.edit', $student) }}" class="btn-primary flex items-center">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                </svg>
                Edit Student
            </a>
            <a href="{{ route('students.print', $student) }}" target="_blank" class="btn-secondary flex items-center">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"></path>
                </svg>
                Print
            </a>
        </div>
    </div>



    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <div class="lg:col-span-2 space-y-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-lg font-bold text-gray-900 flex items-center">
                        <svg class="w-5 h-5 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                        Personal Information
                    </h3>
                </div>
                
                <div class="p-8">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div class="space-y-6">
                            <div>
                                <dt class="text-sm font-semibold text-gray-500 uppercase tracking-wide">Full Name</dt>
                                <dd class="mt-2 text-lg font-medium text-gray-900">{{ $student->full_name }}</dd>
                            </div>
                            
                            <div>
                                <dt class="text-sm font-semibold text-gray-500 uppercase tracking-wide">Student ID</dt>
                                <dd class="mt-2 text-lg font-medium text-gray-900">{{ $student->student_id }}</dd>
                            </div>
                            
                            <div>
                                <dt class="text-sm font-semibold text-gray-500 uppercase tracking-wide">Date of Birth</dt>
                                <dd class="mt-2 text-lg font-medium text-gray-900">{{ $student->date_of_birth->format('F j, Y') }}</dd>
                            </div>
                        </div>
                        
                        <div class="space-y-6">
                            <div>
                                <dt class="text-sm font-semibold text-gray-500 uppercase tracking-wide">Age</dt>
                                <dd class="mt-2 text-lg font-medium text-gray-900">{{ $student->date_of_birth->age }} years old</dd>
                            </div>
                            
                            <div>
                                <dt class="text-sm font-semibold text-gray-500 uppercase tracking-wide">Gender</dt>
                                <dd class="mt-2 text-lg font-medium text-gray-900">{{ $student->gender }}</dd>
                            </div>
                            
                            <div>
                                <dt class="text-sm font-semibold text-gray-500 uppercase tracking-wide">Enrollment Date</dt>
                                <dd class="mt-2 text-lg font-medium text-gray-900">{{ $student->created_at->format('F j, Y') }}</dd>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h3 class="text-lg font-bold text-gray-900 flex items-center">
                        <svg class="w-5 h-5 mr-2 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        Contact Information
                    </h3>
                </div>
                
                <div class="p-8">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div class="space-y-6">
                            <div>
                                <dt class="text-sm font-semibold text-gray-500 uppercase tracking-wide">Email Address</dt>
                                <dd class="mt-2">
                                    <a href="mailto:{{ $student->email }}" class="text-lg font-medium text-blue-600 hover:text-blue-800 transition-colors">
                                        {{ $student->email }}
                                    </a>
                                </dd>
                            </div>
                            
                            <div>
                                <dt class="text-sm font-semibold text-gray-500 uppercase tracking-wide">Phone Number</dt>
                                <dd class="mt-2">
                                    @if($student->phone)
                                        <a href="tel:{{ $student->phone }}" class="text-lg font-medium text-blue-600 hover:text-blue-800 transition-colors">
                                            {{ $student->phone }}
                                        </a>
                                    @else
                                        <span class="text-lg text-gray-400 italic">Not provided</span>
                                    @endif
                                </dd>
                            </div>
                        </div>
                        
                        <div>
                            @if($student->address)
                                <div>
                                    <dt class="text-sm font-semibold text-gray-500 uppercase tracking-wide">Address</dt>
                                    <dd class="mt-2 text-lg font-medium text-gray-900 leading-relaxed">{{ $student->address }}</dd>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="space-y-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-lg font-bold text-gray-900 flex items-center">
                        <svg class="w-5 h-5 mr-2 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                        </svg>
                        Academic Details
                    </h3>
                </div>
                
                <div class="p-6 space-y-6">
                    <div>
                        <dt class="text-sm font-semibold text-gray-500 uppercase tracking-wide">Course/Program</dt>
                        <dd class="mt-2 text-lg font-bold text-gray-900">{{ $student->course_program }}</dd>
                    </div>
                    
                    <div>
                        <dt class="text-sm font-semibold text-gray-500 uppercase tracking-wide">Year Level</dt>
                        <dd class="mt-2">
                            <span class="inline-flex items-center px-4 py-2 rounded-full text-sm font-semibold bg-blue-100 text-blue-800">
                                Year {{ $student->year_level }}
                            </span>
                        </dd>
                    </div>
                    
                    <div>
                        <dt class="text-sm font-semibold text-gray-500 uppercase tracking-wide">Status</dt>
                        <dd class="mt-2">
                            <span class="inline-flex items-center px-4 py-2 rounded-full text-sm font-semibold bg-green-100 text-green-800">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                Active
                            </span>
                        </dd>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h3 class="text-lg font-bold text-gray-900 flex items-center">
                        <svg class="w-5 h-5 mr-2 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Quick Actions
                    </h3>
                </div>
                
                <div class="p-6 space-y-4">
                    <a href="{{ route('students.edit', $student) }}" class="w-full btn-primary flex items-center justify-center">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                        </svg>
                        Edit Information
                    </a>
                    
                    <a href="{{ route('students.print', $student) }}" target="_blank" class="w-full btn-secondary flex items-center justify-center">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"></path>
                        </svg>
                        Print
                    </a>
                    
                    <form action="{{ route('students.destroy', $student) }}" method="POST" class="w-full delete-form">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="w-full btn-danger flex items-center justify-center delete-btn" 
                                data-student-name="{{ $student->full_name }}">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                            </svg>
                            Delete Student
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const deleteBtn = document.querySelector('.delete-btn');
    
    if (deleteBtn) {
        deleteBtn.addEventListener('click', function(e) {
            e.preventDefault();
            
            const studentName = this.getAttribute('data-student-name');
            const form = this.closest('.delete-form');
            const deleteUrl = form.action;
            
            if (typeof Swal === 'undefined') {
                console.error('SweetAlert2 is not loaded!');
                alert('Error: SweetAlert2 library is not loaded. Please refresh the page.');
                return;
            }
            
            Swal.fire({
                title: 'Delete Student',
                html: `Are you sure you want to delete <strong>${studentName}</strong>?<br><small class="text-gray-500">This action cannot be undone.</small>`,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#dc2626',
                cancelButtonColor: '#6b7280',
                confirmButtonText: 'Yes, Delete Student',
                cancelButtonText: 'Cancel',
                reverseButtons: true,
                focusCancel: true,
                customClass: {
                    popup: 'rounded-lg',
                    title: 'text-lg font-semibold text-gray-900',
                    htmlContainer: 'text-sm text-gray-600',
                    confirmButton: 'font-medium px-6 py-2.5 rounded-lg',
                    cancelButton: 'font-medium px-6 py-2.5 rounded-lg'
                },
                buttonsStyling: true
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: 'Deleting...',
                        text: 'Please wait while we delete the student record.',
                        icon: 'info',
                        allowOutsideClick: false,
                        allowEscapeKey: false,
                        showConfirmButton: false,
                        didOpen: () => {
                            Swal.showLoading();
                        }
                    });
                    
                    fetch(deleteUrl, {
                        method: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                            'Accept': 'application/json',
                            'Content-Type': 'application/json',
                            'X-Requested-With': 'XMLHttpRequest'
                        }
                    })
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Network response was not ok');
                        }
                        return response.json();
                    })
                    .then(data => {
                        if (data.success) {
                            Swal.fire({
                                title: 'Deleted!',
                                text: `${studentName} has been successfully deleted.`,
                                icon: 'success',
                                confirmButtonColor: '#059669',
                                confirmButtonText: 'OK',
                                customClass: {
                                    popup: 'rounded-lg',
                                    title: 'text-lg font-semibold text-gray-900',
                                    confirmButton: 'font-medium px-6 py-2.5 rounded-lg'
                                }
                            }).then(() => {
                                window.location.href = '{{ route("students.index") }}';
                            });
                        } else {
                            throw new Error(data.message || 'Failed to delete student');
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        Swal.fire({
                            title: 'Error!',
                            text: 'Failed to delete the student. Please try again.',
                            icon: 'error',
                            confirmButtonColor: '#dc2626',
                            confirmButtonText: 'OK',
                            customClass: {
                                popup: 'rounded-lg',
                                title: 'text-lg font-semibold text-gray-900',
                                confirmButton: 'font-medium px-6 py-2.5 rounded-lg'
                            }
                        });
                    });
                }
            });
        });
    }
});
</script>
@endsection