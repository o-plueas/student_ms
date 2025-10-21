<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign In - OplueasFlow</title>

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
                        },
                        backdropBlur: {
                            xs: '2px'
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
        
        .auth-bg {
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 30%, #334155 70%, #475569 100%);
            position: relative;
            min-height: 100vh;
        }
        
        .auth-bg::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="0.5" fill="%23ffffff" opacity="0.03"/><circle cx="75" cy="75" r="0.5" fill="%23ffffff" opacity="0.03"/><circle cx="50" cy="10" r="0.3" fill="%23ffffff" opacity="0.02"/><circle cx="20" cy="80" r="0.3" fill="%23ffffff" opacity="0.02"/></pattern></defs><rect width="100%" height="100%" fill="url(%23grain)"/></svg>');
        }
        
        .floating-orb {
            position: absolute;
            border-radius: 50%;
            background: linear-gradient(135deg, rgba(14, 165, 233, 0.15), rgba(6, 182, 212, 0.1));
            filter: blur(1px);
            animation: float 12s ease-in-out infinite;
        }
        
        .orb-1 {
            width: 300px;
            height: 300px;
            top: 10%;
            left: -5%;
            animation-delay: 0s;
        }
        
        .orb-2 {
            width: 200px;
            height: 200px;
            top: 70%;
            right: -3%;
            animation-delay: 4s;
        }
        
        .orb-3 {
            width: 150px;
            height: 150px;
            top: 40%;
            right: 20%;
            animation-delay: 8s;
        }
        
        @keyframes float {
            0%, 100% { 
                transform: translateY(0px) translateX(0px) scale(1);
                opacity: 0.1;
            }
            33% { 
                transform: translateY(-30px) translateX(20px) scale(1.05);
                opacity: 0.2;
            }
            66% { 
                transform: translateY(20px) translateX(-20px) scale(0.95);
                opacity: 0.15;
            }
        }
        
        .glass-card {
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 
                0 25px 50px -12px rgba(0, 0, 0, 0.25),
                inset 0 1px 0 rgba(255, 255, 255, 0.1);
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
        
        .btn-google {
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .btn-google:hover {
            background: rgba(255, 255, 255, 0.12);
            transform: translateY(-1px);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.2);
        }
        
        .fade-up {
            opacity: 0;
            transform: translateY(30px);
            animation: fadeUp 0.8s cubic-bezier(0.4, 0, 0.2, 1) forwards;
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
        
        .slide-in {
            opacity: 0;
            transform: translateX(-30px);
            animation: slideIn 0.8s cubic-bezier(0.4, 0, 0.2, 1) forwards;
        }
        
        @keyframes slideIn {
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .error-message {
            background: rgba(239, 68, 68, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(239, 68, 68, 0.2);
            color: #fca5a5;
        }

        .success-message {
            background: rgba(34, 197, 94, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(34, 197, 94, 0.2);
            color: #86efac;
        }
    </style>
</head>

<body class="auth-bg">
    <!-- Floating Orbs -->
    <div class="floating-orb orb-1"></div>
    <div class="floating-orb orb-2"></div>
    <div class="floating-orb orb-3"></div>

    <!-- Header -->
    <div class="relative z-10 pt-8 pb-4">
        <div class="max-w-md mx-auto px-6">
            <a href="{{ url('/') }}" class="flex items-center space-x-3 slide-in">
                <div class="w-12 h-12 bg-primary-500 rounded-xl flex items-center justify-center">
                    <i class="fas fa-graduation-cap text-white text-lg"></i>
                </div>
                <div>
                    <h1 class="text-2xl font-bold text-white">OplueasFlow</h1>
                    <p class="text-sm text-slate-300">Student Management</p>
                </div>
            </a>
        </div>
    </div>

    <!-- Main Content -->
    <div class="relative z-10 flex items-center justify-center px-6 py-12">
        <div class="w-full max-w-md">
            <!-- Card -->
            <div class="glass-card rounded-2xl p-8 fade-up">
                <!-- Header -->
                <div class="text-center mb-8 fade-up delay-100">
                    <h2 class="text-3xl font-bold text-white mb-2">Welcome Back</h2>
                    <p class="text-slate-300">Sign in to your OplueasFlow account</p>
                </div>

                <!-- Session Status -->
                @if (session('status'))
                <div class="success-message rounded-lg p-4 mb-6 fade-up delay-200">
                    {{ session('status') }}
                </div>
                @endif

                <!-- Form -->
                <form method="POST" action="{{ route('login') }}" class="space-y-6">
                    @csrf

                    <!-- Email -->
                    <div class="fade-up delay-300">
                        <label for="email" class="block text-sm font-medium text-slate-300 mb-2">
                            Email Address
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-envelope text-slate-400"></i>
                            </div>
                            <input id="email" 
                                   type="email" 
                                   name="email" 
                                   value="{{ old('email') }}" 
                                   required 
                                   autofocus 
                                   autocomplete="username"
                                   class="input-glass block w-full pl-10 pr-3 py-3 rounded-xl text-white placeholder-slate-400 focus:outline-none"
                                   placeholder="Enter your email">
                        </div>
                        @error('email')
                        <div class="error-message rounded-lg p-2 mt-2 text-sm">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div class="fade-up delay-400">
                        <label for="password" class="block text-sm font-medium text-slate-300 mb-2">
                            Password
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-lock text-slate-400"></i>
                            </div>
                            <input id="password" 
                                   type="password" 
                                   name="password" 
                                   required 
                                   autocomplete="current-password"
                                   class="input-glass block w-full pl-10 pr-3 py-3 rounded-xl text-white placeholder-slate-400 focus:outline-none"
                                   placeholder="Enter your password">
                        </div>
                        @error('password')
                        <div class="error-message rounded-lg p-2 mt-2 text-sm">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <!-- Remember Me & Forgot Password -->
                    <div class="flex items-center justify-between fade-up delay-500">
                        <label class="flex items-center">
                            <input type="checkbox" 
                                   name="remember" 
                                   id="remember_me"
                                   class="rounded border-slate-600 bg-slate-700 text-primary-500 focus:ring-primary-500 focus:ring-offset-slate-800">
                            <span class="ml-2 text-sm text-slate-300">Remember me</span>
                        </label>
                        
                        @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" 
                           class="text-sm text-primary-400 hover:text-primary-300 transition-colors">
                            Forgot password?
                        </a>
                        @endif
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" 
                            class="btn-primary w-full py-3 rounded-xl text-white font-semibold relative fade-up delay-500">
                        <span class="relative z-10">Sign In</span>
                    </button>
                </form>

                <!-- Google Sign In -->
                <div class="mt-6 fade-up delay-500">
                    <div class="relative">
                        <div class="absolute inset-0 flex items-center">
                            <div class="w-full border-t border-slate-600"></div>
                        </div>
                        <div class="relative flex justify-center text-sm">
                            <span class="px-2 bg-transparent text-slate-400">Or continue with</span>
                        </div>
                    </div>

                    <div class="mt-6">
                        <a href="{{ route('google.login') }}" 
                           class="btn-google w-full flex items-center justify-center px-4 py-3 rounded-xl text-white font-medium">
                            <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M12.48 10.92v3.28h7.84c-.24 1.84-.853 3.187-1.787 4.133-1.147 1.147-2.933 2.4-6.053 2.4-4.827 0-8.6-3.893-8.6-8.72s3.773-8.72 8.6-8.72c2.6 0 4.507 1.027 5.907 2.347l2.307-2.307C18.747 1.44 16.133 0 12.48 0 5.867 0 .307 5.387.307 12s5.56 12 12.173 12c3.573 0 6.267-1.173 8.373-3.36 2.16-2.16 2.84-5.213 2.84-7.667 0-.76-.053-1.467-.173-2.053H12.48z" />
                            </svg>
                            Continue with Google
                        </a>
                    </div>
                </div>

                <!-- Register Link -->
                <div class="mt-8 text-center fade-up delay-500">
                    <p class="text-slate-400">
                        Don't have an account? 
                        <a href="{{ route('register') }}" 
                           class="text-primary-400 hover:text-primary-300 font-medium transition-colors">
                            Create account
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>