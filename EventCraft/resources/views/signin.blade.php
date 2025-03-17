<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/globals.css" />
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>
<body class="min-h-screen bg-gradient-to-br from-gray-900 via-black to-gray-900 text-gray-100">
    <!-- Navigation -->
    <nav class="sticky top-0 z-50 backdrop-blur-lg bg-black/20 border-b border-gray-800">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex items-center justify-between h-16">
                <a href="/" class="text-2xl font-bold bg-gradient-to-r from-purple-400 to-pink-600 bg-clip-text text-transparent">
                    Eventler
                </a>
                <div class="hidden md:flex items-center gap-8">
                    <a href="/" class="text-sm text-gray-300 hover:text-white transition-colors">Home</a>
                    <a href="/events" class="text-sm text-gray-300 hover:text-white transition-colors">Events</a>
                    <div class="flex items-center gap-4">
                        <a href="/signin" class="text-sm px-4 py-2 rounded-lg border border-gray-700 hover:border-gray-600 transition-colors">
                            Sign In
                        </a>
                        <a href="/signup" class="text-sm px-4 py-2 rounded-lg bg-gradient-to-r from-purple-500 to-pink-500 hover:from-purple-600 hover:to-pink-600 text-white transition-colors">
                            Sign Up
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-grow py-16">
        <div class="max-w-md mx-auto px-6">
            <div class="bg-gray-900/50 backdrop-blur-xl p-8 rounded-2xl border border-gray-800 shadow-xl">
                <div class="text-center mb-8">
                    <h1 class="text-3xl font-bold bg-gradient-to-r from-purple-400 to-pink-600 bg-clip-text text-transparent mb-2">
                        Welcome back
                    </h1>
                    <p class="text-gray-400 text-sm">Enter your email to sign in to your account</p>
                </div>

                <form id="loginForm" method="POST" class="space-y-6" action="{{ route('signin') }}">
                    @csrf
                    <div class="space-y-4">
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-300 mb-1">Email</label>
                            <input type="email" name="email" id="email" placeholder="m@example.com" required
                                class="w-full px-4 py-2 bg-gray-800/50 border border-gray-700 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-colors placeholder-gray-500" />
                        </div>

                        <div>
                            <label for="password" class="block text-sm font-medium text-gray-300 mb-1">Password</label>
                            <input type="password" name="password" id="password" required
                                class="w-full px-4 py-2 bg-gray-800/50 border border-gray-700 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-colors" />
                        </div>

                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <input type="checkbox" id="remember"
                                    class="rounded border-gray-700 bg-gray-800/50 text-purple-500 focus:ring-purple-500" />
                                <label for="remember" class="ml-2 text-sm text-gray-300">
                                    Remember me
                                </label>
                            </div>
                            <a href="/forgot-password" class="text-sm text-purple-400 hover:text-purple-300 transition-colors cursor-pointer">
                                Forgot password?
                            </a>
                        </div>
                    </div>

                    <button type="submit" class="w-full py-2 px-4 bg-gradient-to-r from-purple-500 to-pink-500 hover:from-purple-600 hover:to-pink-600 rounded-lg font-medium transition-colors cursor-pointer">
                        Sign In
                    </button>

                    <div class="relative my-8">
                        <div class="absolute inset-0 flex items-center">
                            <div class="w-full border-t border-gray-800"></div>
                        </div>
                        <div class="relative flex justify-center text-xs uppercase">
                            <span class="bg-gray-900 px-4 text-gray-400"></span>
                        </div>
                    </div>

                    <p class="text-center text-sm text-gray-400">
                        Don't have an account?
                        <a href="/signup" class="text-purple-400 hover:text-purple-300 transition-colors ml-1 cursor-pointer">
                            Sign up
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-black/20 backdrop-blur-lg border-t border-gray-800">
        <div class="max-w-7xl mx-auto px-6 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-bold bg-gradient-to-r from-purple-400 to-pink-600 bg-clip-text text-transparent mb-4">
                        Eventler
                    </h3>
                    <p class="text-gray-400 text-sm">Discover, organize, and attend amazing events.</p>
                </div>

                <div>
                    <h4 class="font-medium mb-4">Quick Links</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="/" class="text-gray-400 hover:text-purple-400 transition-colors">Home</a></li>
                        <li><a href="/events" class="text-gray-400 hover:text-purple-400 transition-colors">Events</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-purple-400 transition-colors">About Us</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-medium mb-4">Legal</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="text-gray-400 hover:text-purple-400 transition-colors">Privacy Policy</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-purple-400 transition-colors">Terms of Service</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-medium mb-4">Follow Us</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-purple-400 transition-colors">
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-purple-400 transition-colors">
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <div class="mt-8 pt-8 border-t border-gray-800 text-center text-sm text-gray-400">
                © 2025 EventCraft. All rights reserved.
            </div>
        </div>
    </footer>

</body>

</html>
