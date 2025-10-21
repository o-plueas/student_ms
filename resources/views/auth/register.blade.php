<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Account - OplueasFlow</title>

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
        
        .auth-bg {
            overflow: hidden; /* Add this line */

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
            pointer-events: none;

        }
        
        .orb-1 {
            width: 250px;
            height: 250px;
            top: 5%;
            left: -3%;
            animation-delay: 2s;
        }
        
        .orb-2 {
            width: 180px;
            height: 180px;
            top: 75%;
            right: -2%;
            animation-delay: 6s;
        }
        
        .orb-3 {
            width: 120px;
            height: 120px;
            top: 35%;
            right: 25%;
            animation-delay: 10s;
        }
        
        @keyframes float {
            0%, 100% { 
                transform: translateY(0px) translateX(0px) scale(1);
                opacity: 0.1;
            }
            33% { 
                transform: translateY(-25px) translateX(15px) scale(1.05);
                opacity: 0.2;
            }
            66% { 
                transform: translateY(15px) translateX(-15px) scale(0.95);
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
            height:500px;
            min-height:84vh;
            width:700px;
            max-width:500px;


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
        .fade-up.delay-600 { animation-delay: 0.6s; }
        .fade-up.delay-700 { animation-delay: 0.7s; }
        .fade-up.delay-800 { animation-delay: 0.8s; }
        
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

        .select-glass {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            color: white;
        }
        .no-scrollbar {
            overflow-x: hidden;
        }
        .select-glass:focus {
            background: rgba(255, 255, 255, 0.08);
            border-color: rgba(14, 165, 233, 0.5);
            box-shadow: 
                0 0 0 3px rgba(14, 165, 233, 0.1),
                0 10px 25px -5px rgba(14, 165, 233, 0.1);
        }

        .select-glass option {
            background: #1e293b;
            color: white;
        }
    </style>
</head>

<body class="auth-bg no-scrollbar">
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
                    <h1 class="text-2xl font-bold text-white">Oplueas Flu</h1>
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
                    <h2 class="text-3xl font-bold text-white mb-2">Create Account</h2>
                    <p class="text-slate-300">Join OplueasFlow and start your journey</p>
                </div>

                <!-- Form -->
                <form method="POST" action="{{ route('register') }}" class="space-y-6">
                    @csrf

                    <!-- Name -->
                    <div class="fade-up delay-200">
                        <label for="name" class="block text-sm font-medium text-slate-300 mb-2">
                            Full Name
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-user text-slate-400"></i>
                            </div>
                            <input id="name" 
                                   type="text" 
                                   name="name" 
                                   value="{{ old('name') }}" 
                                   required 
                                   autofocus 
                                   autocomplete="name"
                                   class="input-glass block w-full pl-10 pr-3 py-3 rounded-xl text-white placeholder-slate-400 focus:outline-none"
                                   placeholder="Enter your full name">
                        </div>
                        @error('name')
                        <div class="error-message rounded-lg p-2 mt-2 text-sm">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

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

                    <!-- Role Selection -->
                    <div class="fade-up delay-400">
                        <label for="role" class="block text-sm font-medium text-slate-300 mb-2">
                            Select Your Role
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-user-tag text-slate-400"></i>
                            </div>
                            <select name="role" 
                                    id="role" 
                                    required
                                    class="select-glass block w-full pl-10 pr-3 py-3 rounded-xl text-white focus:outline-none appearance-none">
                                <option value="">Select Role</option>
                                @foreach(\Spatie\Permission\Models\Role::all() as $role)
                                    <option value="{{ $role->name }}" {{ old('role') == $role->name ? 'selected' : '' }}>
                                        {{ ucfirst($role->name) }}
                                    </option>
                                @endforeach
                            </select>
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                <i class="fas fa-chevron-down text-slate-400"></i>
                            </div>
                        </div>
                        @error('role')
                        <div class="error-message rounded-lg p-2 mt-2 text-sm">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div class="fade-up delay-500">
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
                                   autocomplete="new-password"
                                   class="input-glass block w-full pl-10 pr-3 py-3 rounded-xl text-white placeholder-slate-400 focus:outline-none"
                                   placeholder="Create a password">
                        </div>
                        @error('password')
                        <div class="error-message rounded-lg p-2 mt-2 text-sm">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <!-- Confirm Password -->
                    <div class="fade-up delay-600">
                        <label for="password_confirmation" class="block text-sm font-medium text-slate-300 mb-2">
                            Confirm Password
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-lock text-slate-400"></i>
                            </div>
                            <input id="password_confirmation" 
                                   type="password" 
                                   name="password_confirmation" 
                                   required 
                                   autocomplete="new-password"
                                   class="input-glass block w-full pl-10 pr-3 py-3 rounded-xl text-white placeholder-slate-400 focus:outline-none"
                                   placeholder="Confirm your password">
                        </div>
                        @error('password_confirmation')
                        <div class="error-message rounded-lg p-2 mt-2 text-sm">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" 
                            class="btn-primary w-full py-3 rounded-xl text-white font-semibold relative fade-up delay-700">
                        <span class="relative z-10">Create Account</span>
                    </button>
                </form>

                <!-- Login Link -->
                <div class="mt-8 text-center fade-up delay-800">
                    <p class="text-slate-400">
                        Already have an account? 
                        <a href="{{ route('login') }}" 
                           class="text-primary-400 hover:text-primary-300 font-medium transition-colors">
                            Sign in
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Custom select styling (optional enhancement)
        document.addEventListener('DOMContentLoaded', function() {
            const roleSelect = document.getElementById('role');
            
            // Add custom styling when select is focused
            roleSelect.addEventListener('focus', function() {
                this.parentElement.classList.add('ring-2', 'ring-primary-500', 'ring-opacity-20');
            });
            
            roleSelect.addEventListener('blur', function() {
                this.parentElement.classList.remove('ring-2', 'ring-primary-500', 'ring-opacity-20');
            });
        });
    </script>
</body>
</html>