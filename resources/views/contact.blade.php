<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us - EduFlow</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Styles -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
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
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s;
        }
        
        .btn-primary:hover::before {
            left: 100%;
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 20px 25px -5px rgba(14, 165, 233, 0.4);
        }
        
        .glass-card {
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 
                0 25px 50px -12px rgba(0, 0, 0, 0.25),
                inset 0 1px 0 rgba(255, 255, 255, 0.1);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .glass-card:hover {
            transform: translateY(-4px);
            box-shadow: 
                0 35px 60px -12px rgba(0, 0, 0, 0.3),
                inset 0 1px 0 rgba(255, 255, 255, 0.15);
        }
        
        .input-glass {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .input-glass:focus {
            background: rgba(255, 255, 255, 0.08);
            border-color: rgba(14, 165, 233, 0.5);
            box-shadow: 
                0 0 0 3px rgba(14, 165, 233, 0.1),
                0 10px 25px -5px rgba(14, 165, 233, 0.1);
        }
        
        .gradient-text {
            background: linear-gradient(135deg, #0ea5e9, #06b6d4);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .contact-info-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
        }

        .contact-info-card:hover {
            background: rgba(255, 255, 255, 0.08);
            transform: translateY(-4px);
            border-color: rgba(14, 165, 233, 0.3);
            box-shadow: 0 20px 40px -12px rgba(14, 165, 233, 0.2);
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

                <div class="flex items-center space-x-6 fade-up delay-100">
                    <a href="{{ url('/') }}" class="text-slate-600 hover:text-slate-900 transition-colors font-medium">
                        Home
                    </a>
                    <a href="{{ url('/about') }}" class="text-slate-600 hover:text-slate-900 transition-colors font-medium">
                        About
                    </a>
                    <a href="{{ url('/contact') }}" class="text-primary-600 font-medium">
                        Contact
                    </a>
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}" class="px-5 py-2 btn-primary text-white rounded-lg font-medium">
                                Dashboard
                            </a>
                        @else
                            <a href="{{ route('login') }}" class="px-5 py-2 btn-primary text-white rounded-lg font-medium">
                                Sign In
                            </a>
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
                    Get In
                    <span class="gradient-text">Touch</span>
                </h1>
                
                <p class="text-xl text-slate-300 mb-12 max-w-2xl mx-auto leading-relaxed fade-up delay-200">
                    Have questions about EduFlow? We're here to help. Reach out to our team and let's discuss how we can transform your institution.
                </p>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
                <!-- Contact Form -->
                <div class="fade-up">
                    <div class="bg-white rounded-2xl p-8 shadow-xl border border-slate-200">
                        <h2 class="text-3xl font-bold text-slate-900 mb-2">Send us a message</h2>
                        <p class="text-slate-600 mb-8">We'll get back to you within 24 hours</p>
                        
                        <form class="space-y-6" method="POST" action="{{ url('/contact') }}">
                            @csrf
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="first_name" class="block text-sm font-medium text-slate-700 mb-2">
                                        First Name
                                    </label>
                                    <input type="text" 
                                           id="first_name" 
                                           name="first_name" 
                                           required
                                           class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent transition-all"
                                           placeholder="John">
                                </div>
                                
                                <div>
                                    <label for="last_name" class="block text-sm font-medium text-slate-700 mb-2">
                                        Last Name
                                    </label>
                                    <input type="text" 
                                           id="last_name" 
                                           name="last_name" 
                                           required
                                           class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent transition-all"
                                           placeholder="Doe">
                                </div>
                            </div>
                            
                            <div>
                                <label for="email" class="block text-sm font-medium text-slate-700 mb-2">
                                    Email Address
                                </label>
                                <input type="email" 
                                       id="email" 
                                       name="email" 
                                       required
                                       class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent transition-all"
                                       placeholder="john@example.com">
                            </div>
                            
                            <div>
                                <label for="institution" class="block text-sm font-medium text-slate-700 mb-2">
                                    Institution Name
                                </label>
                                <input type="text" 
                                       id="institution" 
                                       name="institution"
                                       class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent transition-all"
                                       placeholder="Your Institution">
                            </div>
                            
                            <div>
                                <label for="subject" class="block text-sm font-medium text-slate-700 mb-2">
                                    Subject
                                </label>
                                <select id="subject" 
                                        name="subject" 
                                        required
                                        class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent transition-all">
                                    <option value="">Select a subject</option>
                                    <option value="general">General Inquiry</option>
                                    <option value="demo">Request Demo</option>
                                    <option value="pricing">Pricing Information</option>
                                    <option value="support">Technical Support</option>
                                    <option value="partnership">Partnership</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            
                            <div>
                                <label for="message" class="block text-sm font-medium text-slate-700 mb-2">
                                    Message
                                </label>
                                <textarea id="message" 
                                          name="message" 
                                          rows="5" 
                                          required
                                          class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent transition-all resize-none"
                                          placeholder="Tell us more about your needs..."></textarea>
                            </div>
                            
                            <button type="submit" 
                                    class="btn-primary w-full py-3 rounded-lg text-white font-semibold relative">
                                <span class="relative z-10">Send Message</span>
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Contact Information -->
                <div class="space-y-8 fade-up delay-200">
                    <div>
                        <h2 class="text-3xl font-bold text-slate-900 mb-6">Contact Information</h2>
                        <p class="text-lg text-slate-600 mb-8">
                            Ready to revolutionize your educational institution? Let's talk about how EduFlow can help you achieve your goals.
                        </p>
                    </div>

                    <!-- Contact Cards -->
                    <div class="space-y-6">
                        <!-- Email -->
                        <div class="bg-white rounded-xl p-6 shadow-lg border border-slate-200 hover:shadow-xl transition-shadow">
                            <div class="flex items-start space-x-4">
                                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-envelope text-blue-600"></i>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-slate-900 mb-1">Email Us</h3>
                                    <p class="text-slate-600 text-sm mb-2">Send us an email anytime</p>
                                    <a href="mailto:contact@eduflow.com" class="text-primary-600 hover:text-primary-700 font-medium">
                                        contact@eduflow.com
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="bg-white rounded-xl p-6 shadow-lg border border-slate-200 hover:shadow-xl transition-shadow">
                            <div class="flex items-start space-x-4">
                                <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-phone text-green-600"></i>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-slate-900 mb-1">Call Us</h3>
                                    <p class="text-slate-600 text-sm mb-2">Mon-Fri from 9am to 6pm</p>
                                    <a href="tel:+1234567890" class="text-primary-600 hover:text-primary-700 font-medium">
                                        +1 (234) 567-8900
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Address -->
                        <div class="bg-white rounded-xl p-6 shadow-lg border border-slate-200 hover:shadow-xl transition-shadow">
                            <div class="flex items-start space-x-4">
                                <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-map-marker-alt text-purple-600"></i>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-slate-900 mb-1">Visit Us</h3>
                                    <p class="text-slate-600 text-sm mb-2">Come say hello at our office</p>
                                    <address class="text-primary-600 not-italic">
                                        123 Education Street<br>
                                        Tech District, NY 10001<br>
                                        United States
                                    </address>
                                </div>
                            </div>
                        </div>

                        <!-- Live Chat -->
                        <div class="bg-white rounded-xl p-6 shadow-lg border border-slate-200 hover:shadow-xl transition-shadow">
                            <div class="flex items-start space-x-4">
                                <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-comments text-orange-600"></i>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-slate-900 mb-1">Live Chat</h3>
                                    <p class="text-slate-600 text-sm mb-2">Chat with our support team</p>
                                    <button class="text-primary-600 hover:text-primary-700 font-medium">
                                        Start Live Chat
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Social Links -->
                    <div class="pt-8">
                        <h3 class="font-semibold text-slate-900 mb-4">Follow Us</h3>
                        <div class="flex space-x-4">
                            <a href="#" class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center text-white hover:bg-blue-700 transition-colors">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="w-10 h-10 bg-sky-500 rounded-lg flex items-center justify-center text-white hover:bg-sky-600 transition-colors">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="w-10 h-10 bg-blue-700 rounded-lg flex items-center justify-center text-white hover:bg-blue-800 transition-colors">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#" class="w-10 h-10 bg-pink-500 rounded-lg flex items-center justify-center text-white hover:bg-pink-600 transition-colors">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-24 bg-slate-50">
        <div class="max-w-4xl mx-auto px-6">
            <div class="text-center mb-16 fade-up">
                <h2 class="text-4xl font-bold text-slate-900 mb-4">Frequently Asked Questions</h2>
                <p class="text-xl text-slate-600">
                    Quick answers to common questions about EduFlow
                </p>
            </div>

            <div class="space-y-6">
                <!-- FAQ Item 1 -->
                <div class="bg-white rounded-xl p-6 shadow-lg border border-slate-200 fade-up delay-100">
                    <h3 class="font-semibold text-slate-900 mb-3">How secure is my data with EduFlow?</h3>
                    <p class="text-slate-600">
                        We prioritize data security with enterprise-grade encryption, regular security audits, and compliance with educational data protection standards including FERPA and GDPR.
                    </p>
                </div>

                <!-- FAQ Item 2 -->
                <div class="bg-white rounded-xl p-6 shadow-lg border border-slate-200 fade-up delay-200">
                    <h3 class="font-semibold text-slate-900 mb-3">Can I import existing student data?</h3>
                    <p class="text-slate-600">
                        Yes! EduFlow supports data import from various formats including CSV, Excel, and direct integration with most existing student information systems.
                    </p>
                </div>

                <!-- FAQ Item 3 -->
                <div class="bg-white rounded-xl p-6 shadow-lg border border-slate-200 fade-up delay-300">
                    <h3 class="font-semibold text-slate-900 mb-3">Is there a mobile app available?</h3>
                    <p class="text-slate-600">
                        EduFlow is fully responsive and works seamlessly on mobile devices. We're also developing dedicated mobile apps for iOS and Android, coming soon.
                    </p>
                </div>

                <!-- FAQ Item 4 -->
                <div class="bg-white rounded-xl p-6 shadow-lg border border-slate-200 fade-up delay-400">
                    <h3 class="font-semibold text-slate-900 mb-3">What kind of support do you offer?</h3>
                    <p class="text-slate-600">
                        We provide 24/7 technical support, comprehensive documentation, video tutorials, and dedicated account managers for enterprise customers.
                    </p>
                </div>

                <!-- FAQ Item 5 -->
                <div class="bg-white rounded-xl p-6 shadow-lg border border-slate-200 fade-up delay-500">
                    <h3 class="font-semibold text-slate-900 mb-3">Can I try EduFlow before purchasing?</h3>
                    <p class="text-slate-600">
                        Absolutely! We offer a 30-day free trial with full access to all features. No credit card required to get started.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-24 bg-slate-900">
        <div class="max-w-4xl mx-auto text-center px-6">
            <h2 class="text-4xl font-bold text-white mb-6 fade-up">Still Have Questions?</h2>
            <p class="text-xl text-slate-300 mb-12 fade-up delay-100">
                Our team is here to help you find the perfect solution for your institution.
            </p>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center fade-up delay-200">
                <a href="mailto:contact@eduflow.com" class="px-8 py-4 btn-primary text-white rounded-xl font-semibold text-lg inline-flex items-center justify-center">
                    Email Us Directly
                    <i class="fas fa-envelope ml-2"></i>
                </a>
                <a href="tel:+1234567890" class="px-8 py-4 border border-slate-600 text-slate-300 rounded-xl hover:bg-white/10 transition-all font-semibold text-lg">
                    Call Now
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