<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ClinGuard') }}</title>

    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .bg-gradient-primary {
            background: linear-gradient(135deg, #4F46E5 0%, #7C3AED 100%);
        }
        .btn-primary {
            @apply bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-2.5 px-6 rounded-lg transition-all duration-200 transform hover:-translate-y-0.5;
        }
        .feature-card {
            @apply bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow duration-200;
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-900 font-sans antialiased">
    <div id="app">
        <!-- Navigation -->
        <nav class="bg-white shadow-sm">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 flex items-center">
                            <svg class="h-8 w-auto text-indigo-600" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5" />
                            </svg>
                            <span class="ml-2 text-xl font-bold text-gray-900">ClinGuard</span>
                        </div>
                    </div>
                    <div class="hidden sm:ml-6 sm:flex sm:items-center space-x-4">
                        <a href="#" class="text-gray-900 px-3 py-2 rounded-md text-sm font-medium">Features</a>
                        <a href="#" class="text-gray-500 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium">Pricing</a>
                        <a href="#" class="text-gray-500 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium">Documentation</a>
                        <a href="{{ route('login') }}" class="text-indigo-600 hover:text-indigo-800 px-3 py-2 rounded-md text-sm font-medium">Log in</a>
                        <a href="{{ route('register') }}" class="btn-primary text-sm">
                            Get Started
                        </a>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Hero Section -->
        <div class="relative overflow-hidden">
            <div class="max-w-7xl mx-auto">
                <div class="relative z-10 pb-8 sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
                    <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                        <div class="text-center">
                            <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                                <span class="block">Protect Sensitive Health</span>
                                <span class="block text-indigo-600">Information with AI</span>
                            </h1>
                            <p class="mt-3 max-w-md mx-auto text-base text-gray-500 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                                ClinGuard helps healthcare providers detect and protect PHI in AI-generated content, ensuring compliance with HIPAA and data protection regulations.
                            </p>
                            <div class="mt-5 max-w-md mx-auto sm:flex sm:justify-center md:mt-8">
                                <div class="rounded-md shadow">
                                    <a href="{{ route('register') }}" class="btn-primary inline-flex items-center justify-center px-8 py-3 text-base font-medium md:py-4 md:text-lg md:px-10">
                                        Get Started
                                    </a>
                                </div>
                                <div class="mt-3 rounded-md shadow sm:mt-0 sm:ml-3">
                                    <a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-indigo-600 bg-white hover:bg-gray-50 md:py-4 md:text-lg md:px-10">
                                        Learn More
                                    </a>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
            </div>
            <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
                <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2850&q=80" alt="Healthcare professionals working">
            </div>
        </div>

        <!-- Features Section -->
        <div class="py-12 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center">
                    <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">
                        Protect Your Data
                    </h2>
                    <p class="mt-4 max-w-2xl text-xl text-gray-500 mx-auto">
                        Comprehensive PHI detection and protection for healthcare organizations
                    </p>
                </div>

                <div class="mt-10">
                    <div class="grid grid-cols-1 gap-10 sm:grid-cols-2 lg:grid-cols-3">
                        <!-- Feature 1 -->
                        <div class="feature-card">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                            </div>
                            <h3 class="mt-4 text-lg font-medium text-gray-900">PHI Detection</h3>
                            <p class="mt-2 text-base text-gray-500">
                                Automatically identify and classify protected health information in text.
                            </p>
                        </div>

                        <!-- Feature 2 -->
                        <div class="feature-card">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                </svg>
                            </div>
                            <h3 class="mt-4 text-lg font-medium text-gray-900">Secure Processing</h3>
                            <p class="mt-2 text-base text-gray-500">
                                Process sensitive data with enterprise-grade security and encryption.
                            </p>
                        </div>

                        <!-- Feature 3 -->
                        <div class="feature-card">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                                </svg>
                            </div>
                            <h3 class="mt-4 text-lg font-medium text-gray-900">Compliance Ready</h3>
                            <p class="mt-2 text-base text-gray-500">
                                Stay compliant with HIPAA, GDPR, and other healthcare regulations.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- CTA Section -->
        <div class="bg-indigo-700">
            <div class="max-w-2xl mx-auto text-center py-16 px-4 sm:py-20 sm:px-6 lg:px-8">
                <h2 class="text-3xl font-extrabold text-white sm:text-4xl">
                    <span class="block">Ready to secure your healthcare data?</span>
                    <span class="block">Start using ClinGuard today.</span>
                </h2>
                <p class="mt-4 text-lg leading-6 text-indigo-200">
                    Join leading healthcare providers who trust us with their data protection needs.
                </p>
                <a href="{{ route('register') }}" class="mt-8 w-full inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-indigo-600 bg-white hover:bg-indigo-50 sm:w-auto">
                    Get started for free
                </a>
            </div>
        </div>

        <!-- Footer -->
        <footer class="bg-white">
            <div class="max-w-7xl mx-auto py-12 px-4 overflow-hidden sm:px-6 lg:px-8">
                <nav class="-mx-5 -my-2 flex flex-wrap justify-center" aria-label="Footer">
                    <div class="px-5 py-2">
                        <a href="#" class="text-base text-gray-500 hover:text-gray-900">About</a>
                    </div>
                    <div class="px-5 py-2">
                        <a href="#" class="text-base text-gray-500 hover:text-gray-900">Features</a>
                    </div>
                    <div class="px-5 py-2">
                        <a href="#" class="text-base text-gray-500 hover:text-gray-900">Pricing</a>
                    </div>
                    <div class="px-5 py-2">
                        <a href="#" class="text-base text-gray-500 hover:text-gray-900">Documentation</a>
                    </div>
                    <div class="px-5 py-2">
                        <a href="#" class="text-base text-gray-500 hover:text-gray-900">Contact</a>
                    </div>
                </nav>
                <p class="mt-8 text-center text-base text-gray-400">
                    &copy; {{ date('Y') }} ClinGuard. All rights reserved.
                </p>
            </div>
        </footer>
    </div>
</body>
</html>