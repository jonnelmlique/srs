@extends('layouts.app')

@section('title', 'Documentation - Student Record System')
@section('page-title', 'Documentation')
@section('page-description', 'Complete guide to setup, usage, and technical details')

@section('breadcrumb')
    <li>
        <div class="flex items-center">
            <svg class="w-4 h-4 text-gray-400 mx-2" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
            </svg>
            <span class="text-gray-700 font-medium">Documentation</span>
        </div>
    </li>
@endsection

@section('content')
<div class="max-w-6xl mx-auto space-y-8">

<div class="bg-gradient-to-r from-blue-600 via-purple-600 to-indigo-700 rounded-xl p-4 text-white shadow-lg">
  <div class="flex flex-col md:flex-row items-center justify-between gap-4">

  <div class="flex items-center space-x-3">
      <div class="w-10 h-10 bg-white/20 rounded-xl flex items-center justify-center backdrop-blur-sm">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
            d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
        </svg>
      </div>
      <div>
        <h1 class="text-xl font-semibold">Student Record System</h1>
        <p class="text-blue-100 text-sm">Setup & Documentation</p>
      </div>
    </div>

    <div class="flex flex-wrap items-center gap-2">
      <span class="px-3 py-1 text-sm bg-white/10 rounded-lg backdrop-blur-sm">Laravel 12</span>
      <span class="px-3 py-1 text-sm bg-white/10 rounded-lg backdrop-blur-sm">Tailwind CSS 4.0</span>
      <span class="px-3 py-1 text-sm bg-white/10 rounded-lg backdrop-blur-sm">MySQL</span>
    </div>
  </div>
</div>


    <div class="bg-white rounded-2xl shadow-lg border border-gray-200 p-6">
        <h2 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
            <svg class="w-6 h-6 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            Quick Navigation
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            <a href="#overview" class="doc-nav-card">
                <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center mb-3">
                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                </div>
                <h3 class="font-semibold text-gray-800">Overview</h3>
                <p class="text-sm text-gray-600">Project introduction</p>
            </a>
            <a href="#setup" class="doc-nav-card">
                <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center mb-3">
                    <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                </div>
                <h3 class="font-semibold text-gray-800">Setup Guide</h3>
                <p class="text-sm text-gray-600">Installation steps</p>
            </a>
            <a href="#features" class="doc-nav-card">
                <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center mb-3">
                    <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3"></path>
                    </svg>
                </div>
                <h3 class="font-semibold text-gray-800">Features</h3>
                <p class="text-sm text-gray-600">System capabilities</p>
            </a>
            <a href="#tech-stack" class="doc-nav-card">
                <div class="w-10 h-10 bg-orange-100 rounded-lg flex items-center justify-center mb-3">
                    <svg class="w-5 h-5 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                    </svg>
                </div>
                <h3 class="font-semibold text-gray-800">Tech Stack</h3>
                <p class="text-sm text-gray-600">Technologies used</p>
            </a>
        </div>
    </div>

    <div id="overview" class="bg-white rounded-2xl shadow-lg border border-gray-200 p-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
            <svg class="w-7 h-7 mr-3 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
            </svg>
            Project Overview
        </h2>
        
        <div class="prose max-w-none">
            <p class="text-lg text-gray-700 mb-6">
                The <strong>Student Record System (SRS)</strong> is a modern, full-featured web application designed for educational institutions to efficiently manage student data. Built with cutting-edge technologies and following 2025 design principles, it provides a seamless experience for administrators to handle student records.
            </p>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-xl p-6 border border-blue-200">
                    <h3 class="text-lg font-semibold text-blue-800 mb-3">🎯 Purpose</h3>
                    <p class="text-blue-700">Streamline student data management with a modern, intuitive interface that makes record keeping efficient and error-free.</p>
                </div>
                <div class="bg-gradient-to-br from-green-50 to-emerald-50 rounded-xl p-6 border border-green-200">
                    <h3 class="text-lg font-semibold text-green-800 mb-3">👥 Target Users</h3>
                    <p class="text-green-700">School administrators, registrars, and educational staff who need to manage student information effectively.</p>
                </div>
            </div>

            <h3 class="text-xl font-semibold text-gray-800 mb-4">Key Highlights</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="feature-highlight">
                    <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h4 class="font-semibold text-gray-800 mb-2">Lightning Fast</h4>
                    <p class="text-gray-600 text-sm">Optimized performance with Vite build system and efficient Laravel backend.</p>
                </div>
                <div class="feature-highlight">
                    <div class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h4 class="font-semibold text-gray-800 mb-2">Mobile Ready</h4>
                    <p class="text-gray-600 text-sm">Fully responsive design that works perfectly on all devices and screen sizes.</p>
                </div>
                <div class="feature-highlight">
                    <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <h4 class="font-semibold text-gray-800 mb-2">Secure & Reliable</h4>
                    <p class="text-gray-600 text-sm">Built with Laravel's robust security features and best practices.</p>
                </div>
            </div>
        </div>
    </div>   

    <div id="setup" class="bg-white rounded-2xl shadow-lg border border-gray-200 p-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
            <svg class="w-7 h-7 mr-3 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
            </svg>
            Installation & Setup Guide
        </h2>

        <div class="mb-8">
            <h3 class="text-xl font-semibold text-gray-800 mb-4">📋 Prerequisites</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="requirement-card">
                    <div class="flex items-center mb-3">
                        <div class="w-8 h-8 bg-red-100 rounded-lg flex items-center justify-center mr-3">
                            <svg class="w-4 h-4 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                            </svg>
                        </div>
                        <h4 class="font-semibold text-gray-800">PHP 8.2+</h4>
                    </div>
                    <p class="text-gray-600 text-sm">Modern PHP version with latest features and security updates.</p>
                </div>
                <div class="requirement-card">
                    <div class="flex items-center mb-3">
                        <div class="w-8 h-8 bg-orange-100 rounded-lg flex items-center justify-center mr-3">
                            <svg class="w-4 h-4 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                            </svg>
                        </div>
                        <h4 class="font-semibold text-gray-800">Composer</h4>
                    </div>
                    <p class="text-gray-600 text-sm">PHP dependency manager for Laravel packages.</p>
                </div>
                <div class="requirement-card">
                    <div class="flex items-center mb-3">
                        <div class="w-8 h-8 bg-green-100 rounded-lg flex items-center justify-center mr-3">
                            <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path>
                            </svg>
                        </div>
                        <h4 class="font-semibold text-gray-800">Node.js & npm</h4>
                    </div>
                    <p class="text-gray-600 text-sm">JavaScript runtime for building frontend assets.</p>
                </div>
                <div class="requirement-card">
                    <div class="flex items-center mb-3">
                        <div class="w-8 h-8 bg-blue-100 rounded-lg flex items-center justify-center mr-3">
                            <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4"></path>
                            </svg>
                        </div>
                        <h4 class="font-semibold text-gray-800">MySQL Database</h4>
                    </div>
                    <p class="text-gray-600 text-sm">Relational database for storing student records.</p>
                </div>
            </div>
        </div>

        <div class="mb-8">
            <h3 class="text-xl font-semibold text-gray-800 mb-4">🚀 Installation Steps</h3>
            
            <div class="space-y-6">
                <!-- Step 1 -->
                <div class="setup-step">
                    <div class="flex items-center mb-4">
                        <div class="w-8 h-8 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold mr-4">1</div>
                        <h4 class="text-lg font-semibold text-gray-800">Clone & Install Dependencies</h4>
                    </div>
                    <div class="code-block">
                        <div class="code-header">
                            <span class="text-sm font-medium text-gray-600">Terminal</span>
                            <button class="copy-btn" onclick="copyCode(this)" data-code="git clone &lt;repository-url&gt;&#10;cd student-record-system&#10;composer install&#10;npm install">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                </svg>
                            </button>
                        </div>
                        <pre><code>git clone https://github.com/jonnelmlique/srs.git;
cd student-record-system
composer install
npm install</code></pre>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="setup-step">
                    <div class="flex items-center mb-4">
                        <div class="w-8 h-8 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold mr-4">2</div>
                        <h4 class="text-lg font-semibold text-gray-800">Environment Configuration</h4>
                    </div>
                    <div class="code-block">
                        <div class="code-header">
                            <span class="text-sm font-medium text-gray-600">Terminal</span>
                            <button class="copy-btn" onclick="copyCode(this)" data-code="cp .env.example .env&#10;php artisan key:generate">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                </svg>
                            </button>
                        </div>
                        <pre><code>cp .env.example .env
php artisan key:generate</code></pre>
                    </div>
                    <div class="mt-4 p-4 bg-yellow-50 border border-yellow-200 rounded-lg">
                        <p class="text-sm text-yellow-800">
                            <strong>Note:</strong> Update your <code>.env</code> file with your database credentials before proceeding.
                        </p>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="setup-step">
                    <div class="flex items-center mb-4">
                        <div class="w-8 h-8 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold mr-4">3</div>
                        <h4 class="text-lg font-semibold text-gray-800">Database Setup</h4>
                    </div>
                    <div class="code-block">
                        <div class="code-header">
                            <span class="text-sm font-medium text-gray-600">Terminal</span>
                            <button class="copy-btn" onclick="copyCode(this)" data-code="php artisan migrate&#10;php artisan db:seed">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                </svg>
                            </button>
                        </div>
                        <pre><code>php artisan migrate
php artisan db:seed</code></pre>
                    </div>
                </div>

                <!-- Step 4 -->
                <div class="setup-step">
                    <div class="flex items-center mb-4">
                        <div class="w-8 h-8 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold mr-4">4</div>
                        <h4 class="text-lg font-semibold text-gray-800">Build Assets & Start Server</h4>
                    </div>
                    <div class="code-block">
                        <div class="code-header">
                            <span class="text-sm font-medium text-gray-600">Terminal</span>
                            <button class="copy-btn" onclick="copyCode(this)" data-code="npm run build&#10;php artisan serve">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                </svg>
                            </button>
                        </div>
                        <pre><code>npm run build
php artisan serve</code></pre>
                    </div>
                    <div class="mt-4 p-4 bg-green-50 border border-green-200 rounded-lg">
                        <p class="text-sm text-green-800">
                            <strong>Success!</strong> Your application should now be running at <code>http://localhost:8000</code>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-gradient-to-r from-blue-50 to-indigo-50 rounded-xl p-6 border border-blue-200">
            <h3 class="text-lg font-semibold text-blue-800 mb-3">⚡ Quick Setup (One Command)</h3>
            <p class="text-blue-700 mb-4">Use the built-in setup script for automatic installation:</p>
            <div class="code-block">
                <div class="code-header">
                    <span class="text-sm font-medium text-gray-600">Terminal</span>
                    <button class="copy-btn" onclick="copyCode(this)" data-code="composer run setup">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                        </svg>
                    </button>
                </div>
                <pre><code>composer run setup</code></pre>
            </div>
        </div>
    </div>

    <div id="features" class="bg-white rounded-2xl shadow-lg border border-gray-200 p-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
            <svg class="w-7 h-7 mr-3 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3"></path>
            </svg>
            System Features
        </h2>

        <div class="mb-8">
            <h3 class="text-xl font-semibold text-gray-800 mb-4">📝 Complete CRUD Operations</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                <div class="crud-feature">
                    <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                    </div>
                    <h4 class="font-semibold text-gray-800 mb-2">Create Student</h4>
                    <p class="text-gray-600 text-sm">Add new student records with comprehensive validation and unique ID generation.</p>
                </div>
                <div class="crud-feature">
                    <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                        </svg>
                    </div>
                    <h4 class="font-semibold text-gray-800 mb-2">View Students</h4>
                    <p class="text-gray-600 text-sm">Browse all student records with pagination, search, and detailed profile views.</p>
                </div>
                <div class="crud-feature">
                    <div class="w-12 h-12 bg-orange-100 rounded-xl flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                        </svg>
                    </div>
                    <h4 class="font-semibold text-gray-800 mb-2">Update Student</h4>
                    <p class="text-gray-600 text-sm">Edit existing student information with data integrity and validation checks.</p>
                </div>
                <div class="crud-feature">
                    <div class="w-12 h-12 bg-red-100 rounded-xl flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                        </svg>
                    </div>
                    <h4 class="font-semibold text-gray-800 mb-2">Delete Student</h4>
                    <p class="text-gray-600 text-sm">Remove student records safely with confirmation dialogs and soft delete options.</p>
                </div>
            </div>
        </div>

        <div class="mb-8">
            <h3 class="text-xl font-semibold text-gray-800 mb-4">📊 Student Data Management</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="data-fields-card">
                    <h4 class="font-semibold text-gray-800 mb-3">Required Fields</h4>
                    <ul class="space-y-2">
                        <li class="flex items-center text-sm text-gray-700">
                            <svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Student ID (Auto-generated & Unique)
                        </li>
                        <li class="flex items-center text-sm text-gray-700">
                            <svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Full Name (First & Last)
                        </li>
                        <li class="flex items-center text-sm text-gray-700">
                            <svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Date of Birth (with Age Calculation)
                        </li>
                        <li class="flex items-center text-sm text-gray-700">
                            <svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Email Address (Unique)
                        </li>
                        <li class="flex items-center text-sm text-gray-700">
                            <svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Course/Program
                        </li>
                        <li class="flex items-center text-sm text-gray-700">
                            <svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Year Level (1-6)
                        </li>
                    </ul>
                </div>
                <div class="data-fields-card">
                    <h4 class="font-semibold text-gray-800 mb-3">Optional Fields</h4>
                    <ul class="space-y-2">
                        <li class="flex items-center text-sm text-gray-700">
                            <svg class="w-4 h-4 text-blue-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Gender Selection
                        </li>
                        <li class="flex items-center text-sm text-gray-700">
                            <svg class="w-4 h-4 text-blue-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Phone Number
                        </li>
                        <li class="flex items-center text-sm text-gray-700">
                            <svg class="w-4 h-4 text-blue-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Home Address
                        </li>
                        <li class="flex items-center text-sm text-gray-700">
                            <svg class="w-4 h-4 text-blue-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Emergency Contact
                        </li>
                        <li class="flex items-center text-sm text-gray-700">
                            <svg class="w-4 h-4 text-blue-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Profile Photo Upload
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div>
            <h3 class="text-xl font-semibold text-gray-800 mb-4">✨ Modern Features</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="modern-feature">
                    <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center mb-3">
                        <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h4 class="font-semibold text-gray-800 mb-2">Responsive Design</h4>
                    <p class="text-gray-600 text-sm">Works perfectly on desktop, tablet, and mobile devices with adaptive layouts.</p>
                </div>
                <div class="modern-feature">
                    <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center mb-3">
                        <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                    <h4 class="font-semibold text-gray-800 mb-2">Advanced Search</h4>
                    <p class="text-gray-600 text-sm">Real-time search functionality with filters and sorting options.</p>
                </div>
                <div class="modern-feature">
                    <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center mb-3">
                        <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                    </div>
                    <h4 class="font-semibold text-gray-800 mb-2">Export & Print</h4>
                    <p class="text-gray-600 text-sm">Generate PDF reports and export data in multiple formats.</p>
                </div>
            </div>
        </div>
    </div>   
    <div id="tech-stack" class="bg-white rounded-2xl shadow-lg border border-gray-200 p-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
            <svg class="w-7 h-7 mr-3 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
            </svg>
            Technology Stack
        </h2>


        <div class="mb-8">
            <h3 class="text-xl font-semibold text-gray-800 mb-4">🔧 Backend Technologies</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="tech-card">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-red-100 rounded-xl flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-lg font-semibold text-gray-800">Laravel 12</h4>
                            <p class="text-sm text-gray-600">PHP Framework</p>
                        </div>
                    </div>
                    <ul class="space-y-2 text-sm text-gray-700">
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Eloquent ORM for database operations
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Blade templating engine
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Built-in validation & security
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Artisan CLI commands
                        </li>
                    </ul>
                </div>
                <div class="tech-card">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-lg font-semibold text-gray-800">MySQL Database</h4>
                            <p class="text-sm text-gray-600">Relational Database</p>
                        </div>
                    </div>
                    <ul class="space-y-2 text-sm text-gray-700">
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            ACID compliance for data integrity
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Optimized queries and indexing
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Migration system for schema management
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Seeders for sample data
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="mb-8">
            <h3 class="text-xl font-semibold text-gray-800 mb-4">🎨 Frontend Technologies</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="tech-card">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-cyan-100 rounded-xl flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-cyan-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM21 5a2 2 0 00-2-2h-4a2 2 0 00-2 2v12a4 4 0 004 4h4a2 2 0 002-2V5z"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-lg font-semibold text-gray-800">Tailwind CSS 4.0</h4>
                            <p class="text-sm text-gray-600">Utility-First CSS Framework</p>
                        </div>
                    </div>
                    <ul class="space-y-2 text-sm text-gray-700">
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Modern 2025 design system
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Responsive grid system
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Custom animations & transitions
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Dark mode ready components
                        </li>
                    </ul>
                </div>
                <div class="tech-card">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-lg font-semibold text-gray-800">Vite Build System</h4>
                            <p class="text-sm text-gray-600">Next Generation Frontend Tooling</p>
                        </div>
                    </div>
                    <ul class="space-y-2 text-sm text-gray-700">
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Lightning fast hot module replacement
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Optimized production builds
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Asset optimization & minification
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Modern JavaScript support
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="mb-8">
            <h3 class="text-xl font-semibold text-gray-800 mb-4">🛠 Development Tools</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="tool-card">
                    <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center mb-3">
                        <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h4 class="font-semibold text-gray-800 mb-2">Pest Testing</h4>
                    <p class="text-gray-600 text-sm">Modern PHP testing framework with elegant syntax.</p>
                </div>
                <div class="tool-card">
                    <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center mb-3">
                        <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <h4 class="font-semibold text-gray-800 mb-2">Laravel Pint</h4>
                    <p class="text-gray-600 text-sm">Code style fixer for consistent formatting.</p>
                </div>
                <div class="tool-card">
                    <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center mb-3">
                        <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path>
                        </svg>
                    </div>
                    <h4 class="font-semibold text-gray-800 mb-2">Laravel Sail</h4>
                    <p class="text-gray-600 text-sm">Docker development environment for Laravel.</p>
                </div>
            </div>
        </div>

        <div>
            <h3 class="text-xl font-semibold text-gray-800 mb-4">🏗 Architecture Overview</h3>
            <div class="bg-gradient-to-br from-gray-50 to-blue-50 rounded-xl p-6 border border-gray-200">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-blue-100 rounded-2xl flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9v-9m0-9v9"></path>
                            </svg>
                        </div>
                        <h4 class="font-semibold text-gray-800 mb-2">MVC Pattern</h4>
                        <p class="text-gray-600 text-sm">Clean separation of concerns with Model-View-Controller architecture.</p>
                    </div>
                    <div class="text-center">
                        <div class="w-16 h-16 bg-green-100 rounded-2xl flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                            </svg>
                        </div>
                        <h4 class="font-semibold text-gray-800 mb-2">RESTful API</h4>
                        <p class="text-gray-600 text-sm">Standard HTTP methods for CRUD operations with resource controllers.</p>
                    </div>
                    <div class="text-center">
                        <div class="w-16 h-16 bg-purple-100 rounded-2xl flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                            </svg>
                        </div>
                        <h4 class="font-semibold text-gray-800 mb-2">Security First</h4>
                        <p class="text-gray-600 text-sm">CSRF protection, input validation, and secure authentication built-in.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-2xl shadow-lg border border-gray-200 p-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
            <svg class="w-7 h-7 mr-3 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
            </svg>
            Development Commands
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <h3 class="text-lg font-semibold text-gray-800 mb-4">🔧 Common Commands</h3>
                <div class="space-y-4">
                    <div class="command-item">
                        <div class="flex items-center justify-between mb-2">
                            <h4 class="font-medium text-gray-800">Development Server</h4>
                            <button class="copy-btn-small" onclick="copyCode(this)" data-code="composer run dev">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                </svg>
                            </button>
                        </div>
                        <code class="text-sm bg-gray-100 px-3 py-2 rounded-lg block">composer run dev</code>
                        <p class="text-xs text-gray-600 mt-1">Starts all development services (server, queue, logs, vite)</p>
                    </div>
                    
                    <div class="command-item">
                        <div class="flex items-center justify-between mb-2">
                            <h4 class="font-medium text-gray-800">Run Tests</h4>
                            <button class="copy-btn-small" onclick="copyCode(this)" data-code="composer run test">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                </svg>
                            </button>
                        </div>
                        <code class="text-sm bg-gray-100 px-3 py-2 rounded-lg block">composer run test</code>
                        <p class="text-xs text-gray-600 mt-1">Runs the complete test suite with Pest</p>
                    </div>
                    
                    <div class="command-item">
                        <div class="flex items-center justify-between mb-2">
                            <h4 class="font-medium text-gray-800">Fresh Migration</h4>
                            <button class="copy-btn-small" onclick="copyCode(this)" data-code="php artisan migrate:fresh --seed">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                </svg>
                            </button>
                        </div>
                        <code class="text-sm bg-gray-100 px-3 py-2 rounded-lg block">php artisan migrate:fresh --seed</code>
                        <p class="text-xs text-gray-600 mt-1">Rebuilds database with sample data</p>
                    </div>
                </div>
            </div>

            <div>
                <h3 class="text-lg font-semibold text-gray-800 mb-4">🎨 Asset Commands</h3>
                <div class="space-y-4">
                    <div class="command-item">
                        <div class="flex items-center justify-between mb-2">
                            <h4 class="font-medium text-gray-800">Development Build</h4>
                            <button class="copy-btn-small" onclick="copyCode(this)" data-code="npm run dev">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                </svg>
                            </button>
                        </div>
                        <code class="text-sm bg-gray-100 px-3 py-2 rounded-lg block">npm run dev</code>
                        <p class="text-xs text-gray-600 mt-1">Starts Vite development server with hot reload</p>
                    </div>
                    
                    <div class="command-item">
                        <div class="flex items-center justify-between mb-2">
                            <h4 class="font-medium text-gray-800">Production Build</h4>
                            <button class="copy-btn-small" onclick="copyCode(this)" data-code="npm run build">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                </svg>
                            </button>
                        </div>
                        <code class="text-sm bg-gray-100 px-3 py-2 rounded-lg block">npm run build</code>
                        <p class="text-xs text-gray-600 mt-1">Builds optimized assets for production</p>
                    </div>
                    
                    <div class="command-item">
                        <div class="flex items-center justify-between mb-2">
                            <h4 class="font-medium text-gray-800">Code Formatting</h4>
                            <button class="copy-btn-small" onclick="copyCode(this)" data-code="./vendor/bin/pint">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                </svg>
                            </button>
                        </div>
                        <code class="text-sm bg-gray-100 px-3 py-2 rounded-lg block">./vendor/bin/pint</code>
                        <p class="text-xs text-gray-600 mt-1">Formats code according to Laravel standards</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-2xl shadow-lg border border-gray-200 p-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
            <svg class="w-7 h-7 mr-3 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z"></path>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5v4"></path>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v4"></path>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 5v4"></path>
            </svg>
            Project Structure
        </h2>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

        <div>
                <h3 class="text-lg font-semibold text-gray-800 mb-4">📁 Key Directories</h3>
                <div class="bg-gray-50 rounded-xl p-4 font-mono text-sm">
                    <div class="space-y-1">
                        <div class="flex items-center text-blue-600">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z"></path>
                            </svg>
                            app/
                        </div>
                        <div class="ml-6 space-y-1 text-gray-600">
                            <div>├── Http/Controllers/StudentController.php</div>
                            <div>└── Models/Student.php</div>
                        </div>
                        
                        <div class="flex items-center text-blue-600 mt-3">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z"></path>
                            </svg>
                            resources/
                        </div>
                        <div class="ml-6 space-y-1 text-gray-600">
                            <div>├── views/</div>
                            <div>│   ├── layouts/app.blade.php</div>
                            <div>│   └── students/</div>
                            <div>├── css/app.css</div>
                            <div>└── js/app.js</div>
                        </div>
                        
                        <div class="flex items-center text-blue-600 mt-3">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z"></path>
                            </svg>
                            database/
                        </div>
                        <div class="ml-6 space-y-1 text-gray-600">
                            <div>├── migrations/</div>
                            <div>├── factories/StudentFactory.php</div>
                            <div>└── seeders/StudentSeeder.php</div>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <h3 class="text-lg font-semibold text-gray-800 mb-4">⚙️ Configuration Files</h3>
                <div class="space-y-3">
                    <div class="config-file">
                        <div class="flex items-center mb-2">
                            <svg class="w-4 h-4 text-green-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                            <code class="font-semibold">composer.json</code>
                        </div>
                        <p class="text-sm text-gray-600">PHP dependencies and custom scripts</p>
                    </div>
                    
                    <div class="config-file">
                        <div class="flex items-center mb-2">
                            <svg class="w-4 h-4 text-yellow-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                            <code class="font-semibold">package.json</code>
                        </div>
                        <p class="text-sm text-gray-600">Node.js dependencies and build scripts</p>
                    </div>
                    
                    <div class="config-file">
                        <div class="flex items-center mb-2">
                            <svg class="w-4 h-4 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                            <code class="font-semibold">vite.config.js</code>
                        </div>
                        <p class="text-sm text-gray-600">Vite build configuration</p>
                    </div>
                    
                    <div class="config-file">
                        <div class="flex items-center mb-2">
                            <svg class="w-4 h-4 text-purple-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                            <code class="font-semibold">.env</code>
                        </div>
                        <p class="text-sm text-gray-600">Environment variables and database config</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="bg-gradient-to-r from-blue-600 via-purple-600 to-indigo-700 rounded-xl p-4 text-white shadow-lg">
  <div class="flex items-center mb-4">
    <svg class="w-6 h-6 mr-2 text-white/90" fill="none" stroke="currentColor" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
        d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
    </svg>
    <h2 class="text-lg font-semibold tracking-wide">Support & Resources</h2>
  </div>

  <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

  <div class="flex items-start space-x-3 bg-white/10 p-3 rounded-lg hover:bg-white/15 transition">
      <div class="w-10 h-10 flex items-center justify-center bg-white/20 rounded-lg flex-shrink-0">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
        </svg>
      </div>
      <div>
        <h3 class="font-medium text-sm">Laravel Docs</h3>
        <p class="text-xs text-white/80">Official Laravel documentation and guides.</p>
      </div>
    </div>

    <div class="flex items-start space-x-3 bg-white/10 p-3 rounded-lg hover:bg-white/15 transition">
      <div class="w-10 h-10 flex items-center justify-center bg-white/20 rounded-lg flex-shrink-0">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM21 5a2 2 0 00-2-2h-4a2 2 0 00-2 2v12a4 4 0 004 4h4a2 2 0 002-2V5z" />
        </svg>
      </div>
      <div>
        <h3 class="font-medium text-sm">Tailwind CSS</h3>
        <p class="text-xs text-white/80">Utility-first CSS framework documentation.</p>
      </div>
    </div>

    <div class="flex items-start space-x-3 bg-white/10 p-3 rounded-lg hover:bg-white/15 transition">
      <div class="w-10 h-10 flex items-center justify-center bg-white/20 rounded-lg flex-shrink-0">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
      </div>
      <div>
        <h3 class="font-medium text-sm">Pest Testing</h3>
        <p class="text-xs text-white/80">Modern PHP testing framework resources.</p>
      </div>
    </div>

    <div class="flex items-start space-x-3 bg-white/10 p-3 rounded-lg hover:bg-white/15 transition">
      <div class="w-10 h-10 flex items-center justify-center bg-white/20 rounded-lg flex-shrink-0">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M13 10V3L4 14h7v7l9-11h-7z" />
        </svg>
      </div>
      <div>
        <h3 class="font-medium text-sm">Vite</h3>
        <p class="text-xs text-white/80">Next-gen frontend tooling documentation.</p>
      </div>
    </div>
  </div>

  <div class="mt-5 text-center">
    <p class="font-medium text-sm">Need Help?</p>
    <p class="text-xs text-white/80">Check the <span class="font-semibold">README.md</span> or contact the dev team.</p>
  </div>
</div>

<script>
function copyCode(button) {
    const code = button.getAttribute('data-code');
    const decodedCode = code.replace(/&lt;/g, '<').replace(/&gt;/g, '>').replace(/&#10;/g, '\n');
    
    navigator.clipboard.writeText(decodedCode).then(function() {
        const originalContent = button.innerHTML;
        button.innerHTML = `
            <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
        `;
        
        setTimeout(() => {
            button.innerHTML = originalContent;
        }, 2000);
        
        Swal.fire({
            icon: 'success',
            title: 'Copied!',
            text: 'Code copied to clipboard',
            timer: 1500,
            showConfirmButton: false,
            toast: true,
            position: 'top-end'
        });
    }).catch(function(err) {
        console.error('Could not copy text: ', err);
        Swal.fire({
            icon: 'error',
            title: 'Copy Failed',
            text: 'Could not copy to clipboard',
            timer: 2000,
            showConfirmButton: false,
            toast: true,
            position: 'top-end'
        });
    });
}

document.addEventListener('DOMContentLoaded', function() {
    const navLinks = document.querySelectorAll('a[href^="#"]');
    
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            const targetElement = document.querySelector(targetId);
            
            if (targetElement) {
                targetElement.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
});
</script>

<style>
.doc-nav-card {
    @apply block p-4 bg-gray-50 hover:bg-blue-50 rounded-xl border border-gray-200 hover:border-blue-200 transition-all duration-200 hover:shadow-md;
}

.feature-highlight {
    @apply bg-gray-50 rounded-xl p-6 border border-gray-200 hover:shadow-md transition-all duration-200;
}

.requirement-card {
    @apply bg-white rounded-lg p-4 border border-gray-200 hover:shadow-md transition-all duration-200;
}

.setup-step {
    @apply bg-gray-50 rounded-xl p-6 border border-gray-200;
}

.code-block {
    @apply bg-gray-900 rounded-lg overflow-hidden;
}

.code-header {
    @apply flex items-center justify-between px-4 py-2 bg-gray-800 border-b border-gray-700;
}

.copy-btn {
    @apply p-1 text-gray-400 hover:text-white transition-colors cursor-pointer;
}

.copy-btn-small {
    @apply p-1 text-gray-400 hover:text-gray-600 transition-colors cursor-pointer;
}

.code-block pre {
    @apply p-4 text-green-400 text-sm overflow-x-auto;
}

.crud-feature {
    @apply bg-gray-50 rounded-xl p-6 border border-gray-200 hover:shadow-md transition-all duration-200;
}

.data-fields-card {
    @apply bg-gray-50 rounded-xl p-6 border border-gray-200;
}

.modern-feature {
    @apply bg-gray-50 rounded-xl p-6 border border-gray-200 hover:shadow-md transition-all duration-200;
}

.tech-card {
    @apply bg-gray-50 rounded-xl p-6 border border-gray-200 hover:shadow-md transition-all duration-200;
}

.tool-card {
    @apply bg-gray-50 rounded-xl p-6 border border-gray-200 hover:shadow-md transition-all duration-200;
}

.command-item {
    @apply bg-gray-50 rounded-lg p-4 border border-gray-200;
}

.config-file {
    @apply bg-gray-50 rounded-lg p-4 border border-gray-200;
}
</style>
@endsection