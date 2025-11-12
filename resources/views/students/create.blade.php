@extends('layouts.app')

@section('title', 'Add Student - Student Record System')

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
    <span class="text-gray-900 font-medium">Add Student</span>
</li>
@endsection

@section('page-title', 'Add New Student')
@section('page-description', 'Create a new student record with real-time validation')

@section('content')
<div class="space-y-6" id="studentFormContainer">
    <div class="flex items-center space-x-4">
        <a href="{{ route('students.index') }}" class="p-2 text-gray-600 hover:text-gray-900 hover:bg-gray-100 rounded-lg transition-all duration-200">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
        </a>
    </div>
    
    <div class="space-y-6">
        <!-- Progress Bar -->
        <div>
            <div class="flex items-center justify-between mb-2">
                <span class="text-sm font-medium text-gray-700">Progress</span>
                <span class="text-sm text-gray-500" id="progressText">1/3</span>
            </div>
            <div class="w-full bg-gray-200 rounded-full h-2">
                <div id="progressBar" class="bg-blue-600 h-2 rounded-full transition-all duration-500" style="width: 33.33%"></div>
            </div>
        </div>

        <!-- Step Indicators -->
        <div class="flex items-center justify-center">
            <div class="flex items-center space-x-4">
                <!-- Step 1 -->
                <div class="flex items-center">
                    <div id="step1Indicator" class="flex items-center justify-center w-8 h-8 rounded-full bg-blue-600 text-white transition-all duration-300">
                        1
                    </div>
                    <span id="step1Label" class="ml-2 text-sm font-medium text-blue-600">Personal</span>
                </div>
                
                <div id="connector1" class="w-8 h-0.5 bg-gray-300 transition-all duration-300"></div>
                
                <!-- Step 2 -->
                <div class="flex items-center">
                    <div id="step2Indicator" class="flex items-center justify-center w-8 h-8 rounded-full bg-gray-300 text-gray-600 transition-all duration-300">
                        2
                    </div>
                    <span id="step2Label" class="ml-2 text-sm font-medium text-gray-500">Contact</span>
                </div>
                
                <div id="connector2" class="w-8 h-0.5 bg-gray-300 transition-all duration-300"></div>
                
                <!-- Step 3 -->
                <div class="flex items-center">
                    <div id="step3Indicator" class="flex items-center justify-center w-8 h-8 rounded-full bg-gray-300 text-gray-600 transition-all duration-300">
                        3
                    </div>
                    <span id="step3Label" class="ml-2 text-sm font-medium text-gray-500">Academic</span>
                </div>
            </div>
        </div>
        
        <div class="flex items-center space-x-2 text-sm text-gray-500">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            <span>Fields marked with * are required</span>
        </div>
    </div>

    <div class="card">
        <form id="studentForm" class="p-8 space-y-8">
            @csrf
            
            <!-- Step 1: Personal Information -->
            <div id="step1Content" class="step-content space-y-6">
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
                        <input type="text" name="student_id" id="student_id" value="{{ $nextStudentId }}" 
                               class="form-input" placeholder="e.g., 20250001" readonly>
                        <p class="mt-1 text-xs text-gray-500 flex items-center">
                            <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Auto-generated sequentially. Updates automatically when other students are added.
                        </p>
                        <div class="error-message hidden mt-2 text-sm text-red-600"></div>
                    </div>

                    <div>
                        <label for="full_name" class="form-label">Full Name *</label>
                        <input type="text" name="full_name" id="full_name" class="form-input" placeholder="Enter student's full name">
                        <div class="error-message hidden mt-2 text-sm text-red-600"></div>
                    </div>

                    <div>
                        <label for="date_of_birth" class="form-label">Date of Birth *</label>
                        <input type="date" name="date_of_birth" id="date_of_birth" class="form-input">
                        <div class="error-message hidden mt-2 text-sm text-red-600"></div>
                    </div>

                    <div>
                        <label for="gender" class="form-label">Gender *</label>
                        <select name="gender" id="gender" class="form-input">
                            <option value="">Select Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select>
                        <div class="error-message hidden mt-2 text-sm text-red-600"></div>
                    </div>
                </div>
            </div>

            <!-- Step 2: Contact Information -->
            <div id="step2Content" class="step-content space-y-6 hidden">
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
                        <input type="email" name="email" id="email" class="form-input" placeholder="student@example.com">
                        <div class="error-message hidden mt-2 text-sm text-red-600"></div>
                    </div>

                    <div>
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="text" name="phone" id="phone" class="form-input" placeholder="09XX-XXX-XXXX" maxlength="13" pattern="^09\d{2}-\d{3}-\d{4}$">
                        <p class="mt-1 text-xs text-gray-500">
                            Philippine format: 09XX-XXX-XXXX (numbers only will be auto-formatted)
                        </p>
                        <div class="error-message hidden mt-2 text-sm text-red-600"></div>
                    </div>

                    <div class="md:col-span-2">
                        <label for="address" class="form-label">Address</label>
                        <textarea name="address" id="address" rows="3" class="form-input" placeholder="Enter complete address"></textarea>
                        <div class="error-message hidden mt-2 text-sm text-red-600"></div>
                    </div>
                </div>
            </div>

            <!-- Step 3: Academic Information -->
            <div id="step3Content" class="step-content space-y-6 hidden">
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
                        <input type="text" name="course_program" id="course_program" class="form-input" placeholder="e.g., Computer Science">
                        <div class="error-message hidden mt-2 text-sm text-red-600"></div>
                    </div>

                    <div>
                        <label for="year_level" class="form-label">Year Level *</label>
                        <select name="year_level" id="year_level" class="form-input">
                            <option value="">Select Year Level</option>
                            @for($i = 1; $i <= 6; $i++)
                                <option value="{{ $i }}">Year {{ $i }}</option>
                            @endfor
                        </select>
                        <div class="error-message hidden mt-2 text-sm text-red-600"></div>
                    </div>
                </div>

                <!-- Summary of previous steps -->
                <div class="mt-8 p-6 bg-gray-50 rounded-lg">
                    <h4 class="text-md font-semibold text-gray-900 mb-4">Review Information</h4>
                    <div id="reviewSummary" class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
                        <!-- Summary will be populated by JavaScript -->
                    </div>
                </div>
            </div>

            <!-- Navigation Buttons -->
            <div class="flex flex-col sm:flex-row justify-between space-y-3 sm:space-y-0 sm:space-x-4 pt-8 border-t border-gray-200">
                <div class="flex space-x-4">
                    <a href="{{ route('students.index') }}" class="btn-secondary flex items-center justify-center">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                        Cancel
                    </a>
                    
                    <button type="button" id="prevBtn" class="btn-secondary flex items-center justify-center hidden">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                        </svg>
                        Previous
                    </button>
                </div>
                
                <button type="button" id="nextBtn" class="btn-primary flex items-center justify-center">
                    <span id="nextBtnText">Next</span>
                    <svg id="nextIcon" class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                    <svg id="submitIcon" class="w-4 h-4 mr-2 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                </button>
            </div>
        </form>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    let currentStep = 1;
    const totalSteps = 3;
    let formData = {};
    let studentIdUpdateInterval = null;

    initializeForm();
    startStudentIdUpdates();

    function initializeForm() {
        restoreFormData();
        updateUI();
        attachEventListeners();
        setupRealTimeValidation();
    }

    function restoreFormData() {

        const savedData = localStorage.getItem('studentFormData');
        if (savedData) {
            try {
                const parsedData = JSON.parse(savedData);
                formData = parsedData;
                
                Object.keys(formData).forEach(key => {
                    const field = document.getElementById(key);
                    if (field && formData[key]) {
                        field.value = formData[key];
                    }
                });
            } catch (error) {
                console.log('Error restoring form data:', error);
                localStorage.removeItem('studentFormData');
            }
        }
    }

    function attachEventListeners() {
        document.getElementById('nextBtn').addEventListener('click', handleNext);
        document.getElementById('prevBtn').addEventListener('click', handlePrevious);
        
        const inputs = document.querySelectorAll('input, select, textarea');
        inputs.forEach(input => {
            input.addEventListener('input', function() {
                formData[this.name] = this.value;
                clearFieldError(this);
            });
        });
    }

    function setupRealTimeValidation() {
        const requiredFields = {
            1: ['full_name', 'date_of_birth', 'gender'],
            2: ['email'],
            3: ['course_program', 'year_level']
        };

        Object.keys(requiredFields).forEach(step => {
            requiredFields[step].forEach(fieldName => {
                const field = document.getElementById(fieldName);
                if (field) {
                    field.addEventListener('blur', function() {
                        validateField(this);
                    });
                    
                    field.addEventListener('input', function() {
                        if (this.value.trim()) {
                            clearFieldError(this);
                        }
                    });
                }
            });
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
    }

    function validateField(field) {
        const value = field.value.trim();
        const fieldName = field.name;
        
        if (!value && isRequiredField(fieldName)) {
            showFieldError(field, `${getFieldLabel(fieldName)} is required`);
            return false;
        }
        
        if (fieldName === 'email' && value) {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(value)) {
                showFieldError(field, 'Please enter a valid email address');
                return false;
            }
        }
        
        if (fieldName === 'phone' && value) {
            return validatePhoneNumber(field);
        }
        
        clearFieldError(field);
        return true;
    }

    function isRequiredField(fieldName) {
        const requiredFields = ['full_name', 'date_of_birth', 'gender', 'email', 'course_program', 'year_level'];
        return requiredFields.includes(fieldName);
    }

    function getFieldLabel(fieldName) {
        const labels = {
            'full_name': 'Full Name',
            'date_of_birth': 'Date of Birth',
            'gender': 'Gender',
            'email': 'Email Address',
            'phone': 'Phone Number',
            'address': 'Address',
            'course_program': 'Course/Program',
            'year_level': 'Year Level'
        };
        return labels[fieldName] || fieldName;
    }

    function showFieldError(field, message) {
        field.classList.add('border-red-300', 'focus:border-red-500', 'focus:ring-red-100');
        field.classList.remove('border-gray-300');
        
        const errorDiv = field.parentNode.querySelector('.error-message');
        if (errorDiv) {
            errorDiv.textContent = message;
            errorDiv.classList.remove('hidden');
        }
    }

    function clearFieldError(field) {
        field.classList.remove('border-red-300', 'focus:border-red-500', 'focus:ring-red-100');
        field.classList.add('border-gray-300');
        
        const errorDiv = field.parentNode.querySelector('.error-message');
        if (errorDiv) {
            errorDiv.classList.add('hidden');
        }
    }

    function validateCurrentStep() {
        const requiredFields = {
            1: ['full_name', 'date_of_birth', 'gender'],
            2: ['email'],
            3: ['course_program', 'year_level']
        };

        const allFields = {
            1: ['full_name', 'date_of_birth', 'gender'],
            2: ['email', 'phone', 'address'],
            3: ['course_program', 'year_level']
        };

        const requiredFieldsToValidate = requiredFields[currentStep] || [];
        const allFieldsToValidate = allFields[currentStep] || [];
        let isValid = true;
        const missingFields = [];

        requiredFieldsToValidate.forEach(fieldName => {
            const field = document.getElementById(fieldName);
            if (field && !field.value.trim()) {
                isValid = false;
                missingFields.push(getFieldLabel(fieldName));
                showFieldError(field, `${getFieldLabel(fieldName)} is required`);
            } else if (field) {
                if (!validateField(field)) {
                    isValid = false;
                }
            }
        });

        allFieldsToValidate.forEach(fieldName => {
            const field = document.getElementById(fieldName);
            if (field && field.value.trim()) {
                if (!validateField(field)) {
                    isValid = false;
                }
            }
        });

        if (!isValid && missingFields.length > 0) {
            showValidationAlert(missingFields);
        }

        return isValid;
    }

    function showValidationAlert(missingFields) {
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
        });
    }

    async function handleNext() {
        if (currentStep < totalSteps) {
            if (validateCurrentStep()) {

                const success = await saveStepData();
                if (success) {
                    currentStep++;
                    updateUI();
                    if (currentStep === 3) {
                        updateReviewSummary();
                    }
                }
            }
        } else {
            if (validateCurrentStep()) {
                await submitForm();
            }
        }
    }

    function handlePrevious() {
        if (currentStep > 1) {
            currentStep--;
            updateUI();
        }
    }

    async function saveStepData() {
        const stepData = new FormData();
        stepData.append('_token', document.querySelector('input[name="_token"]').value);
        stepData.append('step', currentStep);

        const currentStepElement = document.getElementById(`step${currentStep}Content`);
        const inputs = currentStepElement.querySelectorAll('input, select, textarea');
        
        inputs.forEach(input => {
            if (input.name) {
                stepData.append(input.name, input.value);
                formData[input.name] = input.value;
            }
        });

        try {
            const response = await fetch('{{ route("students.store-step") }}', {
                method: 'POST',
                body: stepData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            });

            const result = await response.json();
            
            if (response.ok && result.success) {
                return true;
            } else {
                if (result.errors) {
                    displayValidationErrors(result.errors);
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: result.message || 'An error occurred while saving data',
                        confirmButtonColor: '#EF4444'
                    });
                }
                return false;
            }
        } catch (error) {
            console.error('Error saving step data:', error);
            Swal.fire({
                icon: 'error',
                title: 'Network Error',
                text: 'Failed to save data. Please check your connection and try again.',
                confirmButtonColor: '#EF4444'
            });
            return false;
        }
    }


    async function submitForm() {
        const nextBtn = document.getElementById('nextBtn');
        const originalText = nextBtn.innerHTML;
        nextBtn.innerHTML = `
            <svg class="animate-spin -ml-1 mr-3 h-4 w-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
            </svg>
            Creating Student...
        `;
        nextBtn.disabled = true;

        const success = await saveStepData();
        
        if (!success) {
            nextBtn.innerHTML = originalText;
            nextBtn.disabled = false;
            return;
        }

        const submitData = new FormData();
        submitData.append('_token', document.querySelector('input[name="_token"]').value);
        
        Object.keys(formData).forEach(key => {
            if (formData[key]) {
                submitData.append(key, formData[key]);
            }
        });

        try {
            const response = await fetch('{{ route("students.store") }}', {
                method: 'POST',
                body: submitData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            });

            const result = await response.json();
            
            if (response.ok && result.success) {
                localStorage.removeItem('studentFormData');
                
                Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: result.message || 'Student created successfully!',
                    confirmButtonText: 'View Students',
                    confirmButtonColor: '#10B981',
                    showClass: {
                        popup: 'animate__animated animate__fadeInDown animate__faster'
                    }
                }).then(() => {
                    window.location.href = '{{ route("students.index") }}';
                });
            } else {
                if (result.errors) {
                    displayValidationErrors(result.errors);
                } else {
                    throw new Error(result.message || 'Failed to create student');
                }
            }
        } catch (error) {
            console.error('Error submitting form:', error);
            Swal.fire({
                icon: 'error',
                title: 'Submission Failed',
                text: error.message || 'Failed to create student. Please try again.',
                confirmButtonColor: '#EF4444'
            });
        }

        nextBtn.innerHTML = originalText;
        nextBtn.disabled = false;
    }

    function displayValidationErrors(errors) {
        Object.keys(errors).forEach(fieldName => {
            const field = document.getElementById(fieldName);
            if (field) {
                showFieldError(field, errors[fieldName][0]);
            }
        });
    }

    function displayValidationErrors(errors) {
        Object.keys(errors).forEach(fieldName => {
            const field = document.getElementById(fieldName);
            if (field) {
                showFieldError(field, errors[fieldName][0]);
            }
        });
    }

    function updateUI() {
        document.querySelectorAll('.step-content').forEach(content => {
            content.classList.add('hidden');
        });
        
        const currentContent = document.getElementById(`step${currentStep}Content`);
        currentContent.classList.remove('hidden');
        currentContent.classList.add('animate__animated', 'animate__fadeInUp', 'animate__faster');
        
        const progressPercentage = (currentStep / totalSteps) * 100;
        document.getElementById('progressBar').style.width = `${progressPercentage}%`;
        document.getElementById('progressText').textContent = `${currentStep}/${totalSteps}`;
        
        for (let i = 1; i <= totalSteps; i++) {
            const indicator = document.getElementById(`step${i}Indicator`);
            const label = document.getElementById(`step${i}Label`);
            const connector = document.getElementById(`connector${i}`);
            
            if (i < currentStep) {
                indicator.className = 'flex items-center justify-center w-8 h-8 rounded-full bg-green-600 text-white transition-all duration-300';
                indicator.innerHTML = `
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                `;
                label.className = 'ml-2 text-sm font-medium text-green-600';
                if (connector) connector.className = 'w-8 h-0.5 bg-green-600 transition-all duration-300';
            } else if (i === currentStep) {
                indicator.className = 'flex items-center justify-center w-8 h-8 rounded-full bg-blue-600 text-white transition-all duration-300';
                indicator.textContent = i;
                label.className = 'ml-2 text-sm font-medium text-blue-600';
            } else {
                indicator.className = 'flex items-center justify-center w-8 h-8 rounded-full bg-gray-300 text-gray-600 transition-all duration-300';
                indicator.textContent = i;
                label.className = 'ml-2 text-sm font-medium text-gray-500';
                if (connector) connector.className = 'w-8 h-0.5 bg-gray-300 transition-all duration-300';
            }
        }
        
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');
        const nextBtnText = document.getElementById('nextBtnText');
        const nextIcon = document.getElementById('nextIcon');
        const submitIcon = document.getElementById('submitIcon');
        
        if (currentStep > 1) {
            prevBtn.classList.remove('hidden');
        } else {
            prevBtn.classList.add('hidden');
        }
        
        if (currentStep === totalSteps) {
            nextBtnText.textContent = 'Create Student';
            nextIcon.classList.add('hidden');
            submitIcon.classList.remove('hidden');
        } else {
            nextBtnText.textContent = 'Next';
            nextIcon.classList.remove('hidden');
            submitIcon.classList.add('hidden');
        }
    }

    function updateReviewSummary() {
        const summary = document.getElementById('reviewSummary');
        const data = {
            'Name': document.getElementById('full_name').value || 'Not provided',
            'Email': document.getElementById('email').value || 'Not provided',
            'Date of Birth': document.getElementById('date_of_birth').value || 'Not provided',
            'Gender': document.getElementById('gender').value || 'Not provided',
            'Phone': document.getElementById('phone').value || 'Not provided',
            'Address': document.getElementById('address').value || 'Not provided'
        };

        summary.innerHTML = Object.keys(data).map(key => `
            <div>
                <span class="font-medium text-gray-700">${key}:</span>
                <span class="text-gray-600">${data[key]}</span>
            </div>
        `).join('');
    }

    function startStudentIdUpdates() {
        updateStudentId();
        studentIdUpdateInterval = setInterval(updateStudentId, 3000);
        
        document.addEventListener('visibilitychange', function() {
            if (document.hidden) {
                if (studentIdUpdateInterval) {
                    clearInterval(studentIdUpdateInterval);
                }
            } else {
                updateStudentId();
                studentIdUpdateInterval = setInterval(updateStudentId, 3000);
            }
        });
    }

    async function updateStudentId() {
        try {
            const response = await fetch('{{ route("students.generate-id") }}', {
                headers: {
                    'Accept': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest'
                }
            });
            
            const data = await response.json();
            const studentIdInput = document.getElementById('student_id');
            
            if (data.student_id !== studentIdInput.value) {
                const oldId = studentIdInput.value;
                studentIdInput.value = data.student_id;
                
                studentIdInput.classList.add('ring-2', 'ring-blue-200', 'border-blue-300', 'transition-all', 'duration-300');
                
                setTimeout(() => {
                    studentIdInput.classList.remove('ring-2', 'ring-blue-200', 'border-blue-300');
                }, 1000);
                
                showIdUpdateNotification(`ID updated: ${oldId} → ${data.student_id}`);
            }
        } catch (error) {
            console.error('Error updating student ID:', error);
        }
    }

    function showIdUpdateNotification(message) {
        const existing = document.querySelector('.id-update-notification');
        if (existing) existing.remove();
        
        const notification = document.createElement('div');
        notification.className = 'id-update-notification fixed top-4 right-4 bg-blue-500 text-white px-4 py-2 rounded-lg shadow-lg z-50 transform transition-all duration-300';
        notification.innerHTML = `
            <div class="flex items-center space-x-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                </svg>
                <span class="text-sm font-medium">${message}</span>
            </div>
        `;
        
        document.body.appendChild(notification);
        
        setTimeout(() => {
            notification.classList.add('translate-x-full', 'opacity-0');
            setTimeout(() => notification.remove(), 300);
        }, 3000);
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

    window.addEventListener('beforeunload', function() {
        if (studentIdUpdateInterval) {
            clearInterval(studentIdUpdateInterval);
        }
    });
});
</script>
@endsection