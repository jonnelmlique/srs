@extends('layouts.app')

@section('title', 'Edit ' . $student->full_name . ' - Student Record System')

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
    <a href="{{ route('students.show', $student) }}" class="text-gray-500 hover:text-gray-700 transition-colors">{{ $student->full_name }}</a>
</li>
<li class="flex items-center">
    <svg class="w-4 h-4 text-gray-400 mx-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
    </svg>
    <span class="text-gray-900 font-medium">Edit</span>
</li>
@endsection
@section('page-title', 'Edit Student')
@section('page-description', 'Update information for ' . $student->full_name . ' (ID: ' . $student->student_id . ')')

@section('content')
<div class="space-y-6">
    <div class="flex items-center space-x-4">
        <a href="{{ route('students.show', $student) }}" class="p-2 text-gray-600 hover:text-gray-900 hover:bg-gray-100 rounded-lg transition-all duration-200">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
        </a>
        <div class="w-10 h-10 bg-gradient-to-br from-blue-500 to-purple-600 rounded-xl flex items-center justify-center text-white text-sm font-bold shadow-lg">
            {{ strtoupper(substr($student->full_name, 0, 2)) }}
        </div>
        <div class="flex items-center space-x-2 text-sm text-gray-500">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            <span>Fields marked with * are required</span>
        </div>
    </div>

    <div class="card">
        <form action="{{ route('students.update', $student) }}" method="POST" class="p-8 space-y-8">
            @csrf
            @method('PUT')
            
            <div class="space-y-6">
                <div class="border-b border-gray-200 pb-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                        <div class="w-8 h-8 bg-blue-100 rounded-lg flex items-center justify-center mr-3">
                            <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                        </div>
                        Personal Information
                    </h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="student_id" class="form-label">Student ID *</label>
                            <div class="relative">
                                <input type="text" name="student_id" id="student_id" value="{{ old('student_id', $student->student_id) }}" 
                                       class="form-input bg-gray-50 @error('student_id') border-red-300 focus:border-red-500 focus:ring-red-100 @enderror"
                                       readonly>
                              
                            </div>
                            <p class="mt-1 text-xs text-gray-500 flex items-center">
                                <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                Student ID cannot be changed after creation for data integrity.
                            </p>
                            @error('student_id')
                                <p class="mt-2 text-sm text-red-600 flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <div>
                            <label for="full_name" class="form-label">Full Name *</label>
                            <input type="text" name="full_name" id="full_name" value="{{ old('full_name', $student->full_name) }}" 
                                   class="form-input @error('full_name') border-red-300 focus:border-red-500 focus:ring-red-100 @enderror"
                                   placeholder="Enter student's full name">
                            @error('full_name')
                                <p class="mt-2 text-sm text-red-600 flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <div>
                            <label for="date_of_birth" class="form-label">Date of Birth *</label>
                            <input type="date" name="date_of_birth" id="date_of_birth" value="{{ old('date_of_birth', $student->date_of_birth->format('Y-m-d')) }}" 
                                   class="form-input @error('date_of_birth') border-red-300 focus:border-red-500 focus:ring-red-100 @enderror">
                            @error('date_of_birth')
                                <p class="mt-2 text-sm text-red-600 flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <div>
                            <label for="gender" class="form-label">Gender *</label>
                            <select name="gender" id="gender" 
                                    class="form-input @error('gender') border-red-300 focus:border-red-500 focus:ring-red-100 @enderror">
                                <option value="">Select Gender</option>
                                <option value="Male" {{ old('gender', $student->gender) == 'Male' ? 'selected' : '' }}>Male</option>
                                <option value="Female" {{ old('gender', $student->gender) == 'Female' ? 'selected' : '' }}>Female</option>
                                <option value="Other" {{ old('gender', $student->gender) == 'Other' ? 'selected' : '' }}>Other</option>
                            </select>
                            @error('gender')
                                <p class="mt-2 text-sm text-red-600 flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="border-b border-gray-200 pb-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                        <div class="w-8 h-8 bg-green-100 rounded-lg flex items-center justify-center mr-3">
                            <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        Contact Information
                    </h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="md:col-span-2">
                            <label for="email" class="form-label">Email Address *</label>
                            <input type="email" name="email" id="email" value="{{ old('email', $student->email) }}" 
                                   class="form-input @error('email') border-red-300 focus:border-red-500 focus:ring-red-100 @enderror"
                                   placeholder="student@example.com">
                            @error('email')
                                <p class="mt-2 text-sm text-red-600 flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <div>
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="text" name="phone" id="phone" value="{{ old('phone', $student->phone) }}" 
                                   class="form-input @error('phone') border-red-300 focus:border-red-500 focus:ring-red-100 @enderror"
                                   placeholder="09XX-XXX-XXXX" maxlength="13" pattern="^09\d{2}-\d{3}-\d{4}$">
                            <p class="mt-1 text-xs text-gray-500">
                                Philippine format: 09XX-XXX-XXXX (numbers only will be auto-formatted)
                            </p>
                            @error('phone')
                                <p class="mt-2 text-sm text-red-600 flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <div class="md:col-span-2">
                            <label for="address" class="form-label">Address</label>
                            <textarea name="address" id="address" rows="3" 
                                      class="form-input @error('address') border-red-300 focus:border-red-500 focus:ring-red-100 @enderror"
                                      placeholder="Enter complete address">{{ old('address', $student->address) }}</textarea>
                            @error('address')
                                <p class="mt-2 text-sm text-red-600 flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                    </div>
                </div>

                <div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                        <div class="w-8 h-8 bg-purple-100 rounded-lg flex items-center justify-center mr-3">
                            <svg class="w-4 h-4 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                            </svg>
                        </div>
                        Academic Information
                    </h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="course_program" class="form-label">Course/Program *</label>
                            <input type="text" name="course_program" id="course_program" value="{{ old('course_program', $student->course_program) }}" 
                                   class="form-input @error('course_program') border-red-300 focus:border-red-500 focus:ring-red-100 @enderror"
                                   placeholder="e.g., Computer Science">
                            @error('course_program')
                                <p class="mt-2 text-sm text-red-600 flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <div>
                            <label for="year_level" class="form-label">Year Level *</label>
                            <select name="year_level" id="year_level" 
                                    class="form-input @error('year_level') border-red-300 focus:border-red-500 focus:ring-red-100 @enderror">
                                <option value="">Select Year Level</option>
                                @for($i = 1; $i <= 6; $i++)
                                    <option value="{{ $i }}" {{ old('year_level', $student->year_level) == $i ? 'selected' : '' }}>Year {{ $i }}</option>
                                @endfor
                            </select>
                            @error('year_level')
                                <p class="mt-2 text-sm text-red-600 flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex flex-col sm:flex-row justify-end space-y-3 sm:space-y-0 sm:space-x-4 pt-8 border-t border-gray-200">
                <a href="{{ route('students.show', $student) }}" class="btn-secondary flex items-center justify-center">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                    Cancel
                </a>
                <button type="submit" id="updateBtn" class="btn-primary flex items-center justify-center">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    Update Student
                </button>
            </div>
        </form>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form');
    const updateBtn = document.getElementById('updateBtn');
    let isSubmitting = false;

    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        if (isSubmitting) return;
        
        const requiredFields = [
            { id: 'full_name', name: 'Full Name' },
            { id: 'date_of_birth', name: 'Date of Birth' },
            { id: 'gender', name: 'Gender' },
            { id: 'email', name: 'Email Address' },
            { id: 'course_program', name: 'Course/Program' },
            { id: 'year_level', name: 'Year Level' }
        ];

        const missingFields = [];
        requiredFields.forEach(field => {
            const input = document.getElementById(field.id);
            if (!input || !input.value.trim()) {
                missingFields.push(field.name);
                if (input) {
                    input.classList.add('border-red-300', 'focus:border-red-500', 'focus:ring-red-100');
                    input.classList.remove('border-gray-300');
                }
            } else {
                if (input) {
                    input.classList.remove('border-red-300', 'focus:border-red-500', 'focus:ring-red-100');
                    input.classList.add('border-gray-300');
                }
            }
        });

        if (missingFields.length > 0) {
            Swal.fire({
                icon: 'warning',
                title: 'Required Fields Missing',
                html: `
                    <div class="text-left">
                        <p class="mb-4 text-gray-600 flex items-center">
                            <svg class="w-5 h-5 text-amber-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L4.082 15.5c-.77.833.192 2.5 1.732 2.5z"></path>
                            </svg>
                            Please fill in the following required fields:
                        </p>
                        <div class="bg-red-50 border border-red-200 rounded-lg p-3">
                            <ul class="list-disc list-inside space-y-1 text-red-700">
                                ${missingFields.map(field => `<li class="flex items-center"><span class="w-2 h-2 bg-red-400 rounded-full mr-2"></span>${field}</li>`).join('')}
                            </ul>
                        </div>
                    </div>
                `,
                confirmButtonText: 'OK, I\'ll fix that',
                confirmButtonColor: '#3B82F6',
                showClass: {
                    popup: 'animate__animated animate__fadeInDown animate__faster'
                },
                hideClass: {
                    popup: 'animate__animated animate__fadeOutUp animate__faster'
                },
                customClass: {
                    popup: 'rounded-xl shadow-2xl',
                    title: 'text-gray-800 font-semibold',
                    confirmButton: 'rounded-lg px-6 py-2 font-medium hover:shadow-lg transition-all duration-200'
                }
            }).then(() => {
                const firstMissingField = requiredFields.find(field => {
                    const input = document.getElementById(field.id);
                    return !input || !input.value.trim();
                });
                
                if (firstMissingField) {
                    const input = document.getElementById(firstMissingField.id);
                    if (input) {
                        input.focus();
                        input.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    }
                }
            });
            return;
        }

        isSubmitting = true;
        
        const originalText = updateBtn.innerHTML;
        updateBtn.innerHTML = `
            <svg class="animate-spin -ml-1 mr-2 h-4 w-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
            </svg>
            Updating...
        `;
        updateBtn.disabled = true;

        setTimeout(() => {
            form.submit();
        }, 500);
    });

    const requiredFields = ['full_name', 'date_of_birth', 'gender', 'email', 'course_program', 'year_level'];
    requiredFields.forEach(fieldName => {
        const field = document.getElementById(fieldName);
        if (field) {
            field.addEventListener('input', function() {
                if (this.value.trim()) {
                    this.classList.remove('border-red-300', 'focus:border-red-500', 'focus:ring-red-100');
                    this.classList.add('border-gray-300');
                }
            });
            
            field.addEventListener('blur', function() {
                if (!this.value.trim()) {
                    this.classList.add('border-red-300');
                    this.classList.remove('border-gray-300');
                }
            });
        }
    });

    const phoneField = document.getElementById('phone');
    if (phoneField) {
        phoneField.addEventListener('input', function(e) {
            formatPhoneNumber(e.target);
        });
        
        phoneField.addEventListener('blur', function() {
            validatePhoneNumber(this);
        });
    }

    function formatPhoneNumber(input) {
        let value = input.value.replace(/\D/g, '');
        
        if (value.length > 11) {
            value = value.substring(0, 11);
        }
        
        if (value.length >= 4) {
            if (value.length <= 6) {
                value = value.substring(0, 4) + '-' + value.substring(4);
            } else if (value.length <= 10) {
                value = value.substring(0, 4) + '-' + value.substring(4, 7) + '-' + value.substring(7);
            } else {
                value = value.substring(0, 4) + '-' + value.substring(4, 7) + '-' + value.substring(7, 11);
            }
        }
        
        input.value = value;
    }

    function validatePhoneNumber(field) {
        const value = field.value.trim();
        
        if (!value) {
            clearFieldError(field);
            return true; 
        }
        
        const mobilePattern = /^09\d{2}-\d{3}-\d{4}$/; 
        
        if (mobilePattern.test(value)) {
            clearFieldError(field);
            return true;
        } else {
            showFieldError(field, 'Phone number must start with 09 and follow format: 09XX-XXX-XXXX');
            return false;
        }
    }

    function showFieldError(field, message) {
        field.classList.add('border-red-300', 'focus:border-red-500', 'focus:ring-red-100');
        field.classList.remove('border-gray-300');
        
        const existingError = field.parentNode.querySelector('.phone-error-message');
        if (existingError) {
            existingError.remove();
        }
        
        const errorDiv = document.createElement('p');
        errorDiv.className = 'phone-error-message mt-2 text-sm text-red-600 flex items-center';
        errorDiv.innerHTML = `
            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            ${message}
        `;
        field.parentNode.appendChild(errorDiv);
    }

    function clearFieldError(field) {
        field.classList.remove('border-red-300', 'focus:border-red-500', 'focus:ring-red-100');
        field.classList.add('border-gray-300');
        
        const errorDiv = field.parentNode.querySelector('.phone-error-message');
        if (errorDiv) {
            errorDiv.remove();
        }
    }
});
</script>
@endsection