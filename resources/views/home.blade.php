<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EduFlow - Student Management System</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Styles -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.wcss', 'resources/js/app.js'])
    @else
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            'primary': {
                                50: '#f0f9ff',
                                500: '#0ea5e9',
                                600: '#0284c7',
                                700: '#0369a1',
                                900: '#0c4a6e'
                            }
                        }
                    }
                }
            }
        </script>
    @endif

    <style>
        body {
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
        }
        
        .hero-bg {
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 50%, #334155 100%);
            position: relative;
        }
        
        .hero-bg::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="0.5" fill="%23ffffff" opacity="0.05"/><circle cx="75" cy="75" r="0.5" fill="%23ffffff" opacity="0.05"/><circle cx="50" cy="10" r="0.3" fill="%23ffffff" opacity="0.03"/><circle cx="20" cy="80" r="0.3" fill="%23ffffff" opacity="0.03"/></pattern></defs><rect width="100%" height="100%" fill="url(%23grain)"/></svg>');
            pointer-events: none;
        }
        
        .floating-shape {
            position: absolute;
            border-radius: 50%;
            background: rgba(14, 165, 233, 0.1);
            animation: float 8s ease-in-out infinite;
        }
        
        .floating-shape:nth-child(1) {
            width: 120px;
            height: 120px;
            top: 20%;
            left: 10%;
            animation-delay: 0s;
        }
        
        .floating-shape:nth-child(2) {
            width: 80px;
            height: 80px;
            top: 60%;
            right: 15%;
            animation-delay: 3s;
        }
        
        .floating-shape:nth-child(3) {
            width: 60px;
            height: 60px;
            top: 40%;
            right: 40%;
            animation-delay: 6s;
        }
        
        @keyframes float {
            0%, 100% { 
                transform: translateY(0px) translateX(0px);
                opacity: 0.1;
            }
            33% { 
                transform: translateY(-20px) translateX(10px);
                opacity: 0.2;
            }
            66% { 
                transform: translateY(10px) translateX(-10px);
                opacity: 0.15;
            }
        }
        
        .fade-up {
            opacity: 0;
            transform: translateY(40px);
            animation: fadeUp 0.8s ease-out forwards;
        }
        
        .fade-up.delay-100 { animation-delay: 0.1s; }
        .fade-up.delay-200 { animation-delay: 0.2s; }
        .fade-up.delay-300 { animation-delay: 0.3s; }
        .fade-up.delay-400 { animation-delay: 0.4s; }
        .fade-up.delay-500 { animation-delay: 0.5s; }
        
        @keyframes fadeUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .btn-primary {
            background: linear-gradient(135deg, #0ea5e9 0%, #0284c7 100%);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 20px 25px -5px rgba(14, 165, 233, 0.4);
        }
        
        .feature-card {
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .feature-card:hover {
            transform: translateY(-8px);
            border-color: rgba(14, 165, 233, 0.3);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.4);
        }
        
        .gradient-text {
            background: linear-gradient(135deg, #0ea5e9, #06b6d4);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
    </style>
</head>

<body class="bg-slate-50 text-slate-900">
    <!-- Navigation -->
    <nav class="fixed top-0 w-full z-50 bg-white/80 backdrop-blur-md border-b border-slate-200/50">
        <div class="max-w-7xl mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-3 fade-up">
                    <div class="w-10 h-10 bg-primary-500 rounded-lg flex items-center justify-center">
                        <i class="fas fa-graduation-cap text-white text-lg"></i>
                    </div>
                    <div>
                        <h1 class="text-xl font-bold text-slate-900">EduFlow</h1>
                        <p class="text-xs text-slate-500">Student Management</p>
                    </div>
                </div>

                <a href="{{ url('/') }}" class="text-slate-600 hover:text-primary-600 transition-colors font-medium">Home</a>
                    <a href="{{ url('/about') }}" class="text-primary-600 font-medium">About</a>
                    <a href="{{ url('/contact') }}" class="text-slate-600 hover:text-primary-600 transition-colors font-medium">Contact</a>

                @if (Route::has('login'))
                <div class="flex items-center space-x-4 fade-up delay-100">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="px-5 py-2 bg-slate-100 text-slate-700 rounded-lg hover:bg-slate-200 transition-colors font-medium">
                            Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="px-5 py-2 text-slate-600 hover:text-slate-900 transition-colors font-medium">
                            Sign In
                        </a>
                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="px-5 py-2 btn-primary text-white rounded-lg font-medium">
                            Get Started
                        </a>
                        @endif
                    @endauth
                </div>
                @endif
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-bg pt-24 pb-20 relative overflow-hidden">
        <div class="floating-shape"></div>
        <div class="floating-shape"></div>
        <div class="floating-shape"></div>
        
        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <div class="text-center max-w-4xl mx-auto">
                <h1 class="text-5xl md:text-7xl font-bold text-white mb-6 fade-up">
                    Modern Student
                    <span class="gradient-text">Management</span>
                </h1>
                
                <p class="text-xl text-slate-300 mb-12 max-w-2xl mx-auto leading-relaxed fade-up delay-200">
                    Streamline your educational institution with our comprehensive platform. 
                    Manage students, courses, and grades with ease and precision.
                </p>

                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center mb-20 fade-up delay-300">
                    @guest
                    <a href="{{ route('register') }}" class="px-8 py-4 btn-primary text-white rounded-xl font-semibold text-lg inline-flex items-center">
                        Start Free Trial
                        <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                    <a href="#features" class="px-8 py-4 border border-slate-400 text-slate-300 rounded-xl hover:bg-white/10 transition-all font-semibold text-lg">
                        Learn More
                    </a>
                    @endguest
                    
                    @auth
                    <a href="{{ url('/dashboard') }}" class="px-8 py-4 btn-primary text-white rounded-xl font-semibold text-lg inline-flex items-center">
                        Go to Dashboard
                        <i class="fas fa-tachometer-alt ml-2"></i>
                    </a>
                    @endauth
                </div>

                <!-- Stats -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 fade-up delay-400">
                    <div class="text-center">
                        <div class="text-4xl font-bold text-white mb-2">25,000+</div>
                        <div class="text-slate-400">Students Managed</div>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl font-bold text-white mb-2">150+</div>
                        <div class="text-slate-400">Educational Institutions</div>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl font-bold text-white mb-2">99.9%</div>
                        <div class="text-slate-400">System Uptime</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-20">
                <h2 class="text-4xl font-bold text-slate-900 mb-4">Everything You Need</h2>
                <p class="text-xl text-slate-600 max-w-2xl mx-auto">
                    Powerful tools designed specifically for modern educational institutions
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="feature-card bg-white/50 rounded-2xl p-8">
                    <div class="w-14 h-14 bg-blue-100 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-users text-primary-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-slate-900 mb-3">Student Profiles</h3>
                    <p class="text-slate-600 leading-relaxed">
                        Complete student information management with enrollment tracking, academic history, and progress monitoring.
                    </p>
                </div>

                <!-- Feature 2 -->
                <div class="feature-card bg-white/50 rounded-2xl p-8">
                    <div class="w-14 h-14 bg-emerald-100 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-book-open text-emerald-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-slate-900 mb-3">Course Management</h3>
                    <p class="text-slate-600 leading-relaxed">
                        Organize curricula, manage schedules, and track course completion with detailed analytics and reporting.
                    </p>
                </div>

                <!-- Feature 3 -->
                <div class="feature-card bg-white/50 rounded-2xl p-8">
                    <div class="w-14 h-14 bg-purple-100 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-chart-line text-purple-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-slate-900 mb-3">Grade Analytics</h3>
                    <p class="text-slate-600 leading-relaxed">
                        Advanced gradebook with performance insights, trend analysis, and automated progress reports.
                    </p>
                </div>

                <!-- Feature 4 -->
                <div class="feature-card bg-white/50 rounded-2xl p-8">
                    <div class="w-14 h-14 bg-orange-100 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-shield-alt text-orange-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-slate-900 mb-3">Data Security</h3>
                    <p class="text-slate-600 leading-relaxed">
                        Enterprise-grade security with encrypted storage, role-based access, and compliance standards.
                    </p>
                </div>

                <!-- Feature 5 -->
                <div class="feature-card bg-white/50 rounded-2xl p-8">
                    <div class="w-14 h-14 bg-teal-100 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-mobile-alt text-teal-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-slate-900 mb-3">Mobile Access</h3>
                    <p class="text-slate-600 leading-relaxed">
                        Full mobile responsiveness ensuring access to all features from any device, anywhere.
                    </p>
                </div>

                <!-- Feature 6 -->
                <div class="feature-card bg-white/50 rounded-2xl p-8">
                    <div class="w-14 h-14 bg-indigo-100 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-cog text-indigo-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-slate-900 mb-3">Easy Integration</h3>
                    <p class="text-slate-600 leading-relaxed">
                        Seamless integration with existing systems and third-party educational tools and platforms.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-24 bg-slate-900">
        <div class="max-w-4xl mx-auto text-center px-6">
            <h2 class="text-4xl font-bold text-white mb-6">Ready to Transform Your Institution?</h2>
            <p class="text-xl text-slate-300 mb-12">
                Join educational leaders who trust EduFlow to manage their student data effectively.
            </p>
            
            @guest
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('register') }}" class="px-8 py-4 btn-primary text-white rounded-xl font-semibold text-lg inline-flex items-center justify-center">
                    Start Your Free Trial
                    <i class="fas fa-arrow-right ml-2"></i>
                </a>
                <a href="{{ route('login') }}" class="px-8 py-4 border border-slate-600 text-slate-300 rounded-xl hover:bg-white/10 transition-all font-semibold text-lg">
                    Sign In
                </a>
            </div>
            @endguest
            
            @auth
            <a href="{{ url('/dashboard') }}" class="px-8 py-4 btn-primary text-white rounded-xl font-semibold text-lg inline-flex items-center justify-center">
                Access Your Dashboard
                <i class="fas fa-tachometer-alt ml-2"></i>
            </a>
            @endauth
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-slate-50 border-t border-slate-200 py-12">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <div class="flex items-center justify-center space-x-3 mb-4">
                <div class="w-8 h-8 bg-primary-500 rounded-lg flex items-center justify-center">
                    <i class="fas fa-graduation-cap text-white"></i>
                </div>
                <span class="text-xl font-bold text-slate-900">EduFlow</span>
            </div>
            <p class="text-slate-600 mb-4">Professional student management for modern institutions</p>
            <p class="text-slate-500 text-sm">
                &copy; {{ date('Y') }} EduFlow. Built with Laravel v{{ Illuminate\Foundation\Application::VERSION }}.
            </p>
        </div>
    </footer>
</body>
</html>