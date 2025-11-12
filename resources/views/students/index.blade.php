@extends('layouts.app')

@section('title', 'Students - Student Record System')
@section('page-title', 'All Students')
@section('page-description', 'Manage and organize student records efficiently')

@section('breadcrumb')
<li class="flex items-center">
    <svg class="w-4 h-4 text-gray-400 mx-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
    </svg>
    <span class="text-gray-900 font-medium">Students</span>
</li>
@endsection

@section('content')
<div class="space-y-6 mb-4">
    <div class="flex flex-col lg:flex-row lg:justify-between lg:items-center space-y-4 lg:space-y-0">
        <div class="space-y-2">
            <div class="flex items-center space-x-4 text-sm text-gray-500">
                <span class="flex items-center" id="total-students-count">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                    <span id="student-count-number">{{ $students->total() }}</span> Total Students
                </span>
                <span class="flex items-center">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    Last updated {{ now()->format('M j, Y') }}
                </span>
            </div>
        </div>
        <div class="flex flex-col sm:flex-row space-y-3 sm:space-y-0 sm:space-x-6">
            <form action="{{ route('students.export') }}" method="GET" class="inline">
                @if(request('search'))
                    <input type="hidden" name="search" value="{{ request('search') }}">
                @endif
                @if(request('year_level'))
                    <input type="hidden" name="year_level" value="{{ request('year_level') }}">
                @endif
                <button type="submit" class="btn-secondary flex items-center justify-center w-full">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                    Export Data
                </button>
            </form>
            <a href="{{ route('students.create') }}" class="btn-primary flex items-center justify-center">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                </svg>
                Add New Student
                <span class="ml-2 text-xs bg-white/20 text-white px-2 py-1 rounded-full font-semibold">Real-time</span>
                </a>
            </div>
        </div>
    </div>
    

    @if($students->count() > 0)
        <div class="card overflow-hidden">
            <div class="card-header">
                <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center space-y-3 sm:space-y-0">
                    <div>
                        <h3 class="text-lg font-bold text-gray-900">Student Directory</h3>
                        @if(request('search') || request('year_level'))
                            <p class="text-sm text-gray-600 mt-1">
                                Showing filtered results
                                @if(request('search'))
                                    for "<span class="font-medium">{{ request('search') }}</span>"
                                @endif
                                @if(request('year_level'))
                                    @if(request('search')) • @endif
                                    Year {{ request('year_level') }} students
                                @endif
                            </p>
                        @endif
                    </div>
                    <form method="GET" action="{{ route('students.index') }}" class="flex items-center space-x-3">
                        <div class="relative">
                            <input type="text" 
                                   name="search" 
                                   value="{{ request('search') }}"
                                   placeholder="Search students..." 
                                   class="pl-10 pr-4 py-2 border-2 border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-100 focus:border-blue-500 transition-all duration-200 text-sm">
                            <svg class="absolute left-3 top-2.5 w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                        <select name="year_level" 
                                onchange="this.form.submit()"
                                class="border-2 border-gray-200 rounded-xl px-3 py-2 text-sm focus:ring-2 focus:ring-blue-100 focus:border-blue-500 transition-all duration-200">
                            <option value="">All Years</option>
                            <option value="1" {{ request('year_level') == '1' ? 'selected' : '' }}>Year 1</option>
                            <option value="2" {{ request('year_level') == '2' ? 'selected' : '' }}>Year 2</option>
                            <option value="3" {{ request('year_level') == '3' ? 'selected' : '' }}>Year 3</option>
                            <option value="4" {{ request('year_level') == '4' ? 'selected' : '' }}>Year 4</option>
                            <option value="5" {{ request('year_level') == '5' ? 'selected' : '' }}>Year 5</option>
                            <option value="6" {{ request('year_level') == '6' ? 'selected' : '' }}>Year 6</option>
                        </select>
                        <button type="submit" class="btn-primary text-sm px-4 py-2">
                            Search
                        </button>
                        @if(request('search') || request('year_level'))
                            <a href="{{ route('students.index') }}" class="btn-secondary text-sm px-4 py-2">
                                Clear
                            </a>
                        @endif
                    </form>
                </div>
            </div>
            
            <div class="overflow-x-auto">
                <table class="min-w-full">
                    <thead class="bg-gradient-to-r from-gray-50 to-gray-100">
                        <tr>
                            <th class="px-8 py-4 text-left text-xs font-bold text-gray-600 uppercase tracking-wider">Student</th>
                            <th class="px-8 py-4 text-left text-xs font-bold text-gray-600 uppercase tracking-wider">Contact Information</th>
                            <th class="px-8 py-4 text-left text-xs font-bold text-gray-600 uppercase tracking-wider">Academic Details</th>
                            <th class="px-8 py-4 text-left text-xs font-bold text-gray-600 uppercase tracking-wider">Status</th>
                            <th class="px-8 py-4 text-center text-xs font-bold text-gray-600 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @foreach($students as $student)
                            <tr class="table-row">
                                <td class="px-8 py-6">
                                    <div class="flex items-center space-x-4">
                                        <div class="avatar hover:scale-110 transition-transform duration-200">
                                            {{ strtoupper(substr($student->full_name, 0, 2)) }}
                                        </div>
                                        <div>
                                            <div class="text-sm font-bold text-gray-900">{{ $student->full_name }}</div>
                                            <div class="text-xs text-gray-500 font-medium flex items-center">
                                <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a1.994 1.994 0 01-1.414.586H7a4 4 0 01-4-4V7a4 4 0 014-4z"></path>
                                </svg>
                                ID: {{ $student->student_id }}
                            </div>
                                            <div class="text-xs text-gray-400">{{ $student->gender }}</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-8 py-6">
                                    <div class="space-y-1">
                                        <div class="text-sm text-gray-900 font-medium">{{ $student->email }}</div>
                                        <div class="text-xs text-gray-500">
                                            @if($student->phone)
                                                {{ $student->phone }}
                                            @else
                                                <span class="text-gray-400 italic">No phone provided</span>
                                            @endif
                                        </div>
                                    </div>
                                </td>
                                <td class="px-8 py-6">
                                    <div class="space-y-2">
                                        <div class="text-sm font-semibold text-gray-900">{{ $student->course_program }}</div>
                                        <div class="flex items-center space-x-2">
                                            <span class="badge badge-primary">Year {{ $student->year_level }}</span>
                                            <span class="text-xs text-gray-500">Age: {{ $student->date_of_birth->age }}</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-8 py-6">
                                    <span class="badge badge-success">Active</span>
                                </td>
                                <td class="px-8 py-6">
                                    <div class="flex items-center justify-center space-x-2">
                                        <a href="{{ route('students.show', $student) }}" 
                                           class="p-2 text-blue-600 hover:bg-blue-50 rounded-lg transition-all duration-200 hover:scale-110"
                                           title="View Details">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                            </svg>
                                        </a>
                                        <a href="{{ route('students.edit', $student) }}" 
                                           class="p-2 text-indigo-600 hover:bg-indigo-50 rounded-lg transition-all duration-200 hover:scale-110"
                                           title="Edit Student">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                            </svg>
                                        </a>
                                        <form action="{{ route('students.destroy', $student) }}" method="POST" class="inline delete-form">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" 
                                                    class="p-2 text-red-600 hover:bg-red-50 rounded-lg transition-all duration-200 hover:scale-110 delete-btn"
                                                    title="Delete Student"
                                                    data-student-name="{{ $student->full_name }}">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="flex justify-center">
            {{ $students->links() }}
        </div>
    @else
        <div class="card">
            <div class="text-center py-16">
                <div class="w-24 h-24 mx-auto mb-6 bg-gradient-to-br from-blue-100 to-purple-100 rounded-full flex items-center justify-center">
                    <svg class="w-12 h-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z" />
                    </svg>
                </div>
                @if(request('search') || request('year_level'))
                    <h3 class="text-xl font-bold text-gray-900 mb-2">No students match your search</h3>
                    <p class="text-gray-500 mb-8 max-w-md mx-auto">Try adjusting your search criteria or clear the filters to see all students.</p>
                    <a href="{{ route('students.index') }}" class="btn-secondary inline-flex items-center mr-4">
                        Clear Filters
                    </a>
                @else
                    <h3 class="text-xl font-bold text-gray-900 mb-2">No students found</h3>
                    <p class="text-gray-500 mb-8 max-w-md mx-auto">Get started by adding your first student to the system. You can manage all student records from here.</p>
                @endif
                <a href="{{ route('students.create') }}" class="btn-primary inline-flex items-center">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                    Add New Student
                </a>
            </div>
        </div>
    @endif
</div>


<style>
@keyframes bounce {
    0%, 20%, 53%, 80%, 100% {
        transform: translate3d(0,0,0);
    }
    40%, 43% {
        transform: translate3d(0,-8px,0);
    }
    70% {
        transform: translate3d(0,-4px,0);
    }
    90% {
        transform: translate3d(0,-2px,0);
    }
}

.count-update-pulse {
    animation: pulse 0.3s ease-in-out;
}

@keyframes pulse {
    0% {
        transform: scale(1);
    }
    50% {
        transform: scale(1.05);
    }
    100% {
        transform: scale(1);
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.querySelector('input[name="search"]');
    const searchForm = searchInput.closest('form');
    let searchTimeout;

    searchInput.addEventListener('input', function() {
        clearTimeout(searchTimeout);
        searchTimeout = setTimeout(function() {
            searchForm.submit();
        }, 500);
    });

    searchInput.addEventListener('keypress', function(e) {
        if (e.key === 'Enter') {
            clearTimeout(searchTimeout);
            searchForm.submit();
        }
    });

    document.querySelectorAll('.delete-btn').forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            
            const studentName = this.getAttribute('data-student-name');
            const form = this.closest('.delete-form');
            const deleteUrl = form.action;
            const studentRow = this.closest('tr');
            
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
                            studentRow.style.transition = 'all 0.3s ease';
                            studentRow.style.opacity = '0';
                            studentRow.style.transform = 'translateX(-100%)';
                            
                            setTimeout(() => {
                                studentRow.remove();
                                
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
                                });
                                
                                updateStudentCount(-1);
                                
                                checkEmptyTable();
                            }, 300);
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
    });

    function updateStudentCount(change) {
        const countNumberElement = document.getElementById('student-count-number');
        const countContainerElement = document.getElementById('total-students-count');
        
        if (countNumberElement) {
            const currentCount = parseInt(countNumberElement.textContent);
            const newCount = Math.max(0, currentCount + change);
            
            countNumberElement.textContent = newCount;
            
            if (countContainerElement) {
                countContainerElement.style.transition = 'all 0.3s ease';
                countContainerElement.style.transform = 'scale(1.05)';
                countContainerElement.style.color = change < 0 ? '#dc2626' : '#059669';
                
                setTimeout(() => {
                    countContainerElement.style.transform = 'scale(1)';
                    countContainerElement.style.color = '';
                }, 300);
            }
            
            showCountUpdateNotification(newCount, change);
        }

        updateSidebarCount(change);
    }

    function updateSidebarCount(change) {
        const sidebarSelectors = [
            '.nav-link span.ml-auto',
            '.nav-link .ml-auto',
            'aside .nav-link span:last-child',
            'aside a[href*="students.index"] span:last-child',
            '#sidebar .nav-link span.px-2'
        ];

        let sidebarCountElement = null;
        
        for (const selector of sidebarSelectors) {
            sidebarCountElement = document.querySelector(selector);
            if (sidebarCountElement && sidebarCountElement.textContent.match(/^\d+$/)) {
                break;
            }
        }

        if (sidebarCountElement) {
            const currentCount = parseInt(sidebarCountElement.textContent);
            const newCount = Math.max(0, currentCount + change);
            sidebarCountElement.textContent = newCount;
            
            sidebarCountElement.style.transition = 'all 0.3s ease';
            sidebarCountElement.style.transform = 'scale(1.15)';
            
            const originalBg = sidebarCountElement.style.backgroundColor;
            sidebarCountElement.style.backgroundColor = change < 0 ? '#fecaca' : '#bbf7d0';
            
            setTimeout(() => {
                sidebarCountElement.style.transform = 'scale(1)';
                sidebarCountElement.style.backgroundColor = originalBg;
            }, 500);
            
            console.log('Sidebar count updated:', currentCount, '->', newCount);
        } else {
            console.log('Sidebar count element not found. Trying alternative approach...');
            const allSpans = document.querySelectorAll('aside span');
            for (const span of allSpans) {
                if (span.textContent.match(/^\d+$/) && parseInt(span.textContent) > 0) {
                    const currentCount = parseInt(span.textContent);
                    const newCount = Math.max(0, currentCount + change);
                    span.textContent = newCount;
                    
                    span.style.transition = 'all 0.3s ease';
                    span.style.transform = 'scale(1.15)';
                    span.style.backgroundColor = change < 0 ? '#fecaca' : '#bbf7d0';
                    
                    setTimeout(() => {
                        span.style.transform = 'scale(1)';
                        span.style.backgroundColor = '';
                    }, 500);
                    
                    console.log('Alternative sidebar count updated:', currentCount, '->', newCount);
                    break;
                }
            }
        }
    }

    function showCountUpdateNotification(newCount, change) {
        const countContainer = document.getElementById('total-students-count');
        if (!countContainer) return;
        
        const badge = document.createElement('div');
        badge.className = `absolute -top-2 -right-2 w-6 h-6 rounded-full text-xs font-bold text-white flex items-center justify-center ${
            change < 0 ? 'bg-red-500' : 'bg-green-500'
        }`;
        badge.textContent = change < 0 ? change : `+${change}`;
        badge.style.animation = 'bounce 0.5s ease-in-out';
        
        countContainer.style.position = 'relative';
        countContainer.appendChild(badge);
        
        setTimeout(() => {
            if (badge.parentNode) {
                badge.remove();
            }
            countContainer.style.position = '';
        }, 1500);
    }

    function checkEmptyTable() {
        const tbody = document.querySelector('tbody');
        const rows = tbody.querySelectorAll('tr');
        
        if (rows.length === 0) {
            setTimeout(() => {
                window.location.reload();
            }, 1000);
        }
    }
});
</script>
@endsection