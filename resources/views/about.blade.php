<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About Us - EduFlow</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
    <style>
        body { font-family: 'Inter', sans-serif; }
        
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
            background: radial-gradient(circle at 20% 50%, rgba(14, 165, 233, 0.1) 0%, transparent 50%),
                        radial-gradient(circle at 80% 20%, rgba(6, 182, 212, 0.1) 0%, transparent 50%),
                        radial-gradient(circle at 40% 80%, rgba(59, 130, 246, 0.1) 0%, transparent 50%);
            pointer-events: none;
        }
        
        .floating-shape {
            position: absolute;
            border-radius: 50%;
            background: linear-gradient(135deg, rgba(14, 165, 233, 0.15), rgba(6, 182, 212, 0.1));
            filter: blur(40px);
            animation: float 15s ease-in-out infinite;
        }
        
        .floating-shape:nth-child(1) { 
            width: 300px; 
            height: 300px; 
            top: 10%; 
            left: -10%; 
            animation-delay: 0s; 
        }
        .floating-shape:nth-child(2) { 
            width: 200px; 
            height: 200px; 
            top: 70%; 
            right: -5%; 
            animation-delay: 5s; 
        }
        .floating-shape:nth-child(3) { 
            width: 150px; 
            height: 150px; 
            top: 40%; 
            right: 30%; 
            animation-delay: 10s; 
        }
        
        @keyframes float {
            0%, 100% { 
                transform: translateY(0px) translateX(0px) scale(1);
                opacity: 0.3;
            }
            33% { 
                transform: translateY(-30px) translateX(30px) scale(1.1);
                opacity: 0.5;
            }
            66% { 
                transform: translateY(20px) translateX(-20px) scale(0.9);
                opacity: 0.4;
            }
        }
        
        .gradient-text {
            background: linear-gradient(135deg, #0ea5e9, #06b6d4, #3b82f6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .btn-primary {
            background: linear-gradient(135deg, #0ea5e9 0%, #0284c7 50%, #0369a1 100%);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }
        
        .btn-primary::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.6s;
        }
        
        .btn-primary:hover::before {
            left: 100%;
        }
        
        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 25px 50px -12px rgba(14, 165, 233, 0.5);
        }
        
        .fade-up {
            opacity: 0;
            transform: translateY(60px);
            animation: fadeUp 1s ease-out forwards;
        }
        
        @keyframes fadeUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .delay-100 { animation-delay: 0.1s; }
        .delay-200 { animation-delay: 0.2s; }
        .delay-300 { animation-delay: 0.3s; }
        .delay-400 { animation-delay: 0.4s; }
        .delay-500 { animation-delay: 0.5s; }
        .delay-600 { animation-delay: 0.6s; }
        .delay-700 { animation-delay: 0.7s; }
        
        .stats-card {
            background: linear-gradient(135deg, rgba(14, 165, 233, 0.1), rgba(6, 182, 212, 0.05));
            backdrop-filter: blur(20px);
            border: 1px solid rgba(14, 165, 233, 0.2);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .stats-card:hover {
            background: linear-gradient(135deg, rgba(14, 165, 233, 0.15), rgba(6, 182, 212, 0.1));
            border-color: rgba(14, 165, 233, 0.3);
            transform: translateY(-6px) scale(1.02);
            box-shadow: 0 20px 40px -12px rgba(14, 165, 233, 0.3);
        }
        
        .team-card {
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0.05));
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .team-card:hover {
            transform: translateY(-12px) scale(1.03);
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0.08));
            border-color: rgba(14, 165, 233, 0.4);
            box-shadow: 0 30px 60px -12px rgba(14, 165, 233, 0.3);
        }
        
        .value-card {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .value-card:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.15);
        }
    </style>
</head>

<body class="bg-slate-50 text-slate-900">
    <!-- Navigation -->
    <nav class="fixed top-0 w-full z-50 bg-white/90 backdrop-blur-lg border-b border-slate-200/60">
        <div class="max-w-7xl mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-primary-500 rounded-lg flex items-center justify-center">
                        <i class="fas fa-graduation-cap text-white text-lg"></i>
                    </div>
                    <div>
                        <h1 class="text-xl font-bold text-slate-900">EduFlow</h1>
                        <p class="text-xs text-slate-500">Student Management</p>
                    </div>
                </div>

                <div class="flex items-center space-x-6">
                    <a href="{{ url('/') }}" class="text-slate-600 hover:text-primary-600 transition-colors font-medium">Home</a>
                    <a href="{{ url('/about') }}" class="text-primary-600 font-medium">About</a>
                    <a href="{{ url('/contact') }}" class="text-slate-600 hover:text-primary-600 transition-colors font-medium">Contact</a>
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}" class="px-5 py-2 btn-primary text-white rounded-lg font-medium">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="px-5 py-2 btn-primary text-white rounded-lg font-medium">Sign In</a>
                        @endauth
                    @endif
                </div>
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
                    About <span class="gradient-text">EduFlow</span>
                </h1>
                <p class="text-xl text-slate-300 mb-12 max-w-2xl mx-auto leading-relaxed fade-up delay-200">
                    Empowering educational institutions worldwide with innovative technology and comprehensive student management solutions.
                </p>
            </div>
        </div>
    </section>

    <!-- Mission Section -->
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div class="fade-up">
                    <h2 class="text-4xl font-bold text-slate-900 mb-6">Our Mission</h2>
                    <p class="text-lg text-slate-600 mb-6 leading-relaxed">
                        At EduFlow, we believe that education is the cornerstone of progress. Our mission is to revolutionize how educational institutions manage their students, courses, and academic data through cutting-edge technology and intuitive design.
                    </p>
                    <p class="text-lg text-slate-600 leading-relaxed">
                        We strive to eliminate administrative burdens, streamline academic processes, and provide educators with the tools they need to focus on what matters most: teaching and inspiring the next generation.
                    </p>
                </div>
                
                <div class="grid grid-cols-2 gap-6 fade-up delay-200">
                    <div class="stats-card rounded-2xl p-6 text-center">
                        <div class="text-3xl font-bold text-primary-600 mb-2">25,000+</div>
                        <div class="text-slate-700 font-medium">Students Managed</div>
                    </div>
                    <div class="stats-card rounded-2xl p-6 text-center">
                        <div class="text-3xl font-bold text-primary-600 mb-2">150+</div>
                        <div class="text-slate-700 font-medium">Institutions</div>
                    </div>
                    <div class="stats-card rounded-2xl p-6 text-center">
                        <div class="text-3xl font-bold text-primary-600 mb-2">99.9%</div>
                        <div class="text-slate-700 font-medium">Uptime</div>
                    </div>
                    <div class="stats-card rounded-2xl p-6 text-center">
                        <div class="text-3xl font-bold text-primary-600 mb-2">24/7</div>
                        <div class="text-slate-700 font-medium">Support</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="py-24 bg-slate-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-20">
                <h2 class="text-4xl font-bold text-slate-900 mb-4 fade-up">Our Core Values</h2>
                <p class="text-xl text-slate-600 max-w-2xl mx-auto fade-up delay-100">
                    The principles that guide everything we do
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Value 1 -->
                <div class="value-card bg-white rounded-2xl p-8 text-center shadow-lg fade-up delay-200">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-lightbulb text-primary-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-slate-900 mb-4">Innovation</h3>
                    <p class="text-slate-600 leading-relaxed">
                        We constantly push boundaries and embrace new technologies to deliver cutting-edge solutions for modern education.
                    </p>
                </div>

                <!-- Value 2 -->
                <div class="value-card bg-white rounded-2xl p-8 text-center shadow-lg fade-up delay-300">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-users text-green-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-slate-900 mb-4">Collaboration</h3>
                    <p class="text-slate-600 leading-relaxed">
                        We work closely with educators and institutions to understand their needs and build solutions that truly serve them.
                    </p>
                </div>

                <!-- Value 3 -->
                <div class="value-card bg-white rounded-2xl p-8 text-center shadow-lg fade-up delay-400">
                    <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-shield-alt text-purple-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-slate-900 mb-4">Security</h3>
                    <p class="text-slate-600 leading-relaxed">
                        We prioritize data security and privacy, ensuring that sensitive educational information remains protected at all times.
                    </p>
                </div>

                <!-- Value 4 -->
                <div class="value-card bg-white rounded-2xl p-8 text-center shadow-lg fade-up delay-500">
                    <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-heart text-orange-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-slate-900 mb-4">Excellence</h3>
                    <p class="text-slate-600 leading-relaxed">
                        We strive for excellence in every aspect of our product, from user experience to customer support.
                    </p>
                </div>

                <!-- Value 5 -->
                <div class="value-card bg-white rounded-2xl p-8 text-center shadow-lg fade-up delay-600">
                    <div class="w-16 h-16 bg-teal-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-globe text-teal-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-slate-900 mb-4">Accessibility</h3>
                    <p class="text-slate-600 leading-relaxed">
                        We believe quality education management should be accessible to institutions of all sizes and budgets.
                    </p>
                </div>

                <!-- Value 6 -->
                <div class="value-card bg-white rounded-2xl p-8 text-center shadow-lg fade-up delay-700">
                    <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-rocket text-indigo-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-slate-900 mb-4">Growth</h3>
                    <p class="text-slate-600 leading-relaxed">
                        We're committed to continuous learning and improvement, both for ourselves and the institutions we serve.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="hero-bg py-24 relative overflow-hidden">
        <div class="floating-shape"></div>
        <div class="floating-shape"></div>
        
        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <div class="text-center mb-20">
                <h2 class="text-4xl font-bold text-white mb-4 fade-up">Meet Our Team</h2>
                <p class="text-xl text-slate-300 max-w-2xl mx-auto fade-up delay-100">
                    The passionate individuals behind EduFlow's success
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Team Member 1 -->
                <div class="team-card rounded-2xl p-8 text-center fade-up delay-200">
                    <div class="w-24 h-24 bg-gradient-to-br from-primary-500 to-cyan-500 rounded-full mx-auto mb-6 flex items-center justify-center">
                        <i class="fas fa-user text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-2">Sarah Johnson</h3>
                    <p class="text-primary-400 mb-4 font-medium">CEO & Founder</p>
                    <p class="text-slate-300 text-sm leading-relaxed">
                        Former educator with 15+ years of experience in educational technology and institutional management.
                    </p>
                </div>

                <!-- Team Member 2 -->
                <div class="team-card rounded-2xl p-8 text-center fade-up delay-300">
                    <div class="w-24 h-24 bg-gradient-to-br from-green-500 to-emerald-500 rounded-full mx-auto mb-6 flex items-center justify-center">
                        <i class="fas fa-code text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-2">Michael Chen</h3>
                    <p class="text-primary-400 mb-4 font-medium">CTO</p>
                    <p class="text-slate-300 text-sm leading-relaxed">
                        Software architect and full-stack developer specializing in scalable educational platforms and data security.
                    </p>
                </div>

                <!-- Team Member 3 -->
                <div class="team-card rounded-2xl p-8 text-center fade-up delay-400">
                    <div class="w-24 h-24 bg-gradient-to-br from-purple-500 to-pink-500 rounded-full mx-auto mb-6 flex items-center justify-center">
                        <i class="fas fa-palette text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-2">Emma Rodriguez</h3>
                    <p class="text-primary-400 mb-4 font-medium">Head of Design</p>
                    <p class="text-slate-300 text-sm leading-relaxed">
                        UX/UI designer passionate about creating intuitive interfaces that make complex systems simple to use.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-24 bg-slate-900">
        <div class="max-w-4xl mx-auto text-center px-6">
            <h2 class="text-4xl font-bold text-white mb-6 fade-up">Ready to Join Our Journey?</h2>
            <p class="text-xl text-slate-300 mb-12 fade-up delay-100">
                Experience the future of educational management with EduFlow.
            </p>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center fade-up delay-200">
                @guest
                <a href="{{ route('register') }}" class="px-8 py-4 btn-primary text-white rounded-xl font-semibold text-lg inline-flex items-center justify-center">
                    Get Started Today
                    <i class="fas fa-arrow-right ml-2"></i>
                </a>
                @endguest
                
                @auth
                <a href="{{ url('/dashboard') }}" class="px-8 py-4 btn-primary text-white rounded-xl font-semibold text-lg inline-flex items-center justify-center">
                    Access Dashboard
                    <i class="fas fa-tachometer-alt ml-2"></i>
                </a>
                @endauth
                
                <a href="{{ url('/contact') }}" class="px-8 py-4 border border-slate-600 text-slate-300 rounded-xl hover:bg-white/10 transition-all font-semibold text-lg">
                    Contact Us
                </a>
            </div>
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