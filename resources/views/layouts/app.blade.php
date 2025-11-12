<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Student Record System')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-gray-50">
    <div id="mobile-menu-overlay" class="fixed inset-0 bg-black bg-opacity-50 z-40 lg:hidden hidden transition-opacity duration-300"></div>
    
    <div class="main-layout">

    <aside id="sidebar" class="w-64 bg-white shadow-lg border-r border-gray-200 flex-shrink-0 flex flex-col">
         
    <div class="p-6 border-b border-gray-200 bg-gradient-to-r from-white to-gray-50">
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-3">
                        <div class="w-12 h-12 bg-gradient-to-br from-blue-600 via-purple-600 to-indigo-700 rounded-2xl flex items-center justify-center shadow-xl transform hover:scale-105 transition-transform duration-300">
                            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                            </svg>
                        </div>
                        <div>
                            <h1 class="text-lg font-bold bg-gradient-to-r from-gray-900 via-blue-800 to-purple-700 bg-clip-text text-transparent">Student Records</h1>
                            <p class="text-xs text-gray-500 font-medium flex items-center">
                                <span class="w-2 h-2 bg-green-400 rounded-full mr-2 animate-pulse"></span>
                                SRS
                            </p>
                        </div>
                    </div>

                    <button id="close-sidebar" class="lg:hidden p-2 rounded-xl hover:bg-red-50 hover:text-red-600 transition-all duration-200 hover:scale-105 active:scale-95 text-gray-500">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Navigation -->
            <nav class="flex-1 p-4 overflow-y-auto">
                <ul class="space-y-1">
                    <!-- Main Navigation -->
                    <li>
                        <a href="{{ route('students.index') }}" class="nav-link {{ request()->routeIs('students.*') && !request()->routeIs('students.create') ? 'active' : '' }}">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                            <span class="font-medium">All Students</span>
                            <span class="ml-auto text-xs {{ request()->routeIs('students.*') && !request()->routeIs('students.create') ? 'bg-white/20 text-white' : 'bg-blue-100 text-blue-600' }} px-2 py-1 rounded-full font-semibold">{{ \App\Models\Student::count() ?? 0 }}</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('students.create') }}" class="nav-link {{ request()->routeIs('students.create') ? 'active-create' : '' }}">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                            <span class="font-medium">Add Student</span>
                        </a>
                    </li>
            
                    
                    <!-- System Section -->
                    <li>
                        <div class="sidebar-divider"></div>
                        <p class="sidebar-section-header">System</p>
                    </li>
                    
                    <li>
                        <a href="{{ route('documentation') }}" class="nav-link {{ request()->routeIs('documentation') ? 'active' : '' }}">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                            </svg>
                            <span class="font-medium">Documentation</span>
                        </a>
                    </li>
                        

                </ul>
            </nav>

            <!-- Footer -->
            <div class="p-4 border-t border-gray-200 bg-gradient-to-br from-gray-50 via-blue-50 to-purple-50">
                <div class="text-xs text-gray-500 text-center space-y-3">
                    <div class="flex items-center justify-center space-x-2 p-2 bg-white/50 rounded-lg backdrop-blur-sm">
                        <div class="w-2 h-2 bg-green-400 rounded-full animate-pulse shadow-sm"></div>
                        <span class="text-xs text-green-600 font-semibold">System Online</span>
                    </div>
                    <div class="space-y-1">
                        <p class="font-semibold text-gray-700">&copy; 2025 Student Records</p>
                        <p class="text-gray-400 flex items-center justify-center space-x-1">
                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a1.994 1.994 0 01-1.414.586H7a4 4 0 01-4-4V7a4 4 0 014-4z"></path>
                            </svg>
                            <span>Demo Version 1.0.0</span>
                        </p>
                    </div>
                </div>
            </div>
        </aside>

        <!-- Main Content -->
        <div class="main-content-wrapper">

        <header class="bg-white shadow-sm border-b border-gray-200 px-4 lg:px-6 py-4 flex-shrink-0">
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-4">

                    <button id="mobile-menu-button" class="lg:hidden p-3 text-gray-500 hover:text-blue-600 hover:bg-blue-50 rounded-xl transition-all duration-300 hover:scale-105 active:scale-95 border border-transparent hover:border-blue-200">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                        </button>
                        
                        <div>
                            <h2 class="text-xl font-semibold text-gray-800">@yield('page-title', 'Dashboard')</h2>
                            <p class="text-sm text-gray-600 hidden sm:block">@yield('page-description', 'Manage your student records efficiently')</p>
                        </div>
                    </div>
                    
                    <div class="flex items-center space-x-2 lg:space-x-4">
                        
                        <!-- User Menu -->
                        <div class="relative">
                            <button class="flex items-center space-x-2 p-2 text-gray-700 hover:bg-gray-100 rounded-lg transition-colors">
                                <div class="w-8 h-8 bg-gradient-to-br from-blue-500 to-purple-600 rounded-full flex items-center justify-center">
                                    <span class="text-white text-sm font-semibold">AD</span>
                                </div>
                                <span class="hidden lg:block text-sm font-medium">Admin</span>
                                <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Breadcrumb -->
            @hasSection('breadcrumb')
            <div class="bg-white border-b border-gray-200 px-4 lg:px-6 py-3">
                <nav class="flex" aria-label="Breadcrumb">
                    <ol class="flex items-center space-x-2 text-sm">
                        <li>
                            <a href="{{ route('students.index') }}" class="text-gray-500 hover:text-gray-700 transition-colors">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5v4"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v4"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 5v4"></path>
                                </svg>
                            </a>
                        </li>
                        @yield('breadcrumb')
                    </ol>
                </nav>
            </div>
            @endif

            <!-- Main Content Area -->
            <main class="flex-1 overflow-auto bg-gray-50 p-4 lg:p-6">
                @if(session('success'))
                    <div class="mb-6 animate__animated animate__fadeInDown">
                        <div class="bg-gradient-to-r from-green-500 to-emerald-500 text-white px-6 py-4 rounded-xl shadow-lg flex items-center space-x-3">
                            <svg class="w-6 h-6 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span class="font-semibold">{{ session('success') }}</span>
                        </div>
                    </div>
                    
                    <script>
                        Swal.fire({
                            icon: 'success',
                            title: 'Success!',
                            text: '{{ session('success') }}',
                            confirmButtonText: 'Great!',
                            confirmButtonColor: '#10B981',
                            timer: 4000,
                            timerProgressBar: true,
                            customClass: {
                                popup: 'rounded-xl',
                                title: 'text-gray-800',
                                confirmButton: 'rounded-lg px-6 py-2'
                            }
                        });
                    </script>
                @endif

                @if($errors->any())
                    <div class="mb-6 animate__animated animate__fadeInDown">
                        <div class="bg-gradient-to-r from-red-500 to-pink-500 text-white px-6 py-4 rounded-xl shadow-lg">
                            <div class="flex items-start space-x-3">
                                <svg class="w-6 h-6 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <div>
                                    <h4 class="font-semibold mb-2">Please fix the following errors:</h4>
                                    <ul class="list-disc list-inside space-y-1">
                                        @foreach($errors->all() as $error)
                                            <li class="text-sm">{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <script>
                        Swal.fire({
                            icon: 'error',
                            title: 'Validation Errors',
                            html: `
                                <div class="text-left">
                                    <p class="mb-3 text-gray-600">Please fix the following errors:</p>
                                    <ul class="list-disc list-inside space-y-1 text-red-600">
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            `,
                            confirmButtonText: 'OK, I\'ll fix that',
                            confirmButtonColor: '#EF4444',
                            customClass: {
                                popup: 'rounded-xl',
                                title: 'text-gray-800',
                                confirmButton: 'rounded-lg px-6 py-2'
                            }
                        });
                    </script>
                @endif

                <div class="animate__animated animate__fadeInUp">
                    @yield('content')
                </div>
            </main>
        </div>
        
        <!-- Floating Action Button (Mobile) -->
        @if(request()->routeIs('students.index'))
        <a href="{{ route('students.create') }}" class="floating-action lg:hidden">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
            </svg>
        </a>
        @endif
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const successAlert = document.querySelector('.animate__fadeInDown');
            if (successAlert) {
                setTimeout(() => {
                    successAlert.classList.add('animate__fadeOutUp');
                    setTimeout(() => successAlert.remove(), 1000);
                }, 5000);
            }

            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const sidebar = document.getElementById('sidebar');
            const overlay = document.getElementById('mobile-menu-overlay');
            const closeSidebar = document.getElementById('close-sidebar');

            function openSidebar() {
                sidebar.classList.add('sidebar-open');
                overlay.classList.remove('hidden');
                document.body.classList.add('overflow-hidden');
            }

            function closeSidebarMenu() {
                sidebar.classList.remove('sidebar-open');
                overlay.classList.add('hidden');
                document.body.classList.remove('overflow-hidden');
            }

            if (mobileMenuButton) {
                mobileMenuButton.addEventListener('click', openSidebar);
            }

            if (closeSidebar) {
                closeSidebar.addEventListener('click', closeSidebarMenu);
            }

            if (overlay) {
                overlay.addEventListener('click', closeSidebarMenu);
            }

            const navLinks = sidebar.querySelectorAll('a');
            navLinks.forEach(link => {
                link.addEventListener('click', () => {
                    if (window.innerWidth < 1024) {
                        closeSidebarMenu();
                    }
                });
            });

            window.addEventListener('resize', () => {
                if (window.innerWidth >= 1024) {
                    overlay.classList.add('hidden');
                    document.body.classList.remove('overflow-hidden');
                }
            });

            if (window.innerWidth < 1024) {
                sidebar.classList.remove('sidebar-open');
                overlay.classList.add('hidden');
            }
        });
    </script>
</body>
</html>