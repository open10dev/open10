<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Setup · OPEN10</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: { accent: '#e11d48' },
                    fontFamily: { sans: ['Geist Sans', 'system-ui', 'sans-serif'] }
                }
            }
        }
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Geist+Sans:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body class="font-sans antialiased bg-gradient-to-br from-gray-900 via-gray-800 to-black min-h-screen flex items-center justify-center px-4">

    <!-- Background blobs -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-accent/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-purple-500/10 rounded-full blur-3xl"></div>
    </div>

    <div class="relative w-full max-w-md">

        <!-- Card -->
        <div class="bg-white rounded-3xl p-10 shadow-2xl">

            <!-- Logo -->
            <div class="text-center mb-8">
                <div class="inline-flex items-center justify-center w-14 h-14 rounded-2xl bg-gradient-to-br from-accent to-pink-600 shadow-lg mb-5">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h1 class="text-3xl font-bold text-gray-900">Create Admin Account</h1>
                <p class="text-gray-500 mt-2 text-sm">Only <span class="font-semibold text-gray-700">admin@open10.dev</span> can register</p>
            </div>

            <!-- Errors -->
            @if($errors->any())
                <div class="mb-6 bg-red-50 border border-red-200 rounded-xl px-4 py-3">
                    <ul class="text-red-700 text-sm space-y-1 list-disc list-inside">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Form -->
            <form method="POST" action="{{ route('admin.register.post') }}">
                @csrf

                <div class="mb-5">
                    <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">Full Name</label>
                    <input
                        type="text"
                        id="name"
                        name="name"
                        value="{{ old('name') }}"
                        autocomplete="name"
                        autofocus
                        required
                        placeholder="Your name"
                        class="w-full px-4 py-3.5 border-2 border-gray-200 rounded-xl text-gray-900 placeholder-gray-400 focus:border-accent focus:outline-none transition-colors @error('name') border-red-300 @enderror">
                </div>

                <div class="mb-5">
                    <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">Admin Email</label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        value="admin@open10.dev"
                        readonly
                        class="w-full px-4 py-3.5 border-2 border-gray-100 rounded-xl text-gray-500 bg-gray-50 cursor-not-allowed focus:outline-none @error('email') border-red-300 @enderror">
                    <p class="text-xs text-gray-400 mt-1">This email is fixed and cannot be changed.</p>
                </div>

                <div class="mb-5">
                    <label for="password" class="block text-sm font-semibold text-gray-700 mb-2">Password</label>
                    <input
                        type="password"
                        id="password"
                        name="password"
                        autocomplete="new-password"
                        required
                        minlength="8"
                        placeholder="Min. 8 characters"
                        class="w-full px-4 py-3.5 border-2 border-gray-200 rounded-xl text-gray-900 placeholder-gray-400 focus:border-accent focus:outline-none transition-colors @error('password') border-red-300 @enderror">
                </div>

                <div class="mb-8">
                    <label for="password_confirmation" class="block text-sm font-semibold text-gray-700 mb-2">Confirm Password</label>
                    <input
                        type="password"
                        id="password_confirmation"
                        name="password_confirmation"
                        autocomplete="new-password"
                        required
                        placeholder="Repeat password"
                        class="w-full px-4 py-3.5 border-2 border-gray-200 rounded-xl text-gray-900 placeholder-gray-400 focus:border-accent focus:outline-none transition-colors">
                </div>

                <button type="submit"
                    class="w-full bg-gradient-to-r from-accent to-pink-600 text-white py-4 rounded-xl font-bold text-base shadow-lg hover:shadow-accent/30 hover:-translate-y-0.5 transition-all duration-200">
                    Create Account →
                </button>
            </form>

            <p class="text-center mt-6 text-sm text-gray-400">
                Already have an account?
                <a href="{{ route('admin.login') }}" class="text-accent hover:underline font-medium">Sign in</a>
            </p>

        </div>

        <!-- Back to site -->
        <p class="text-center mt-6">
            <a href="{{ url('/') }}" class="text-gray-400 hover:text-white text-sm transition-colors">
                ← Back to website
            </a>
        </p>

    </div>

</body>
</html>
