<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Driver Login - BruFuel</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="max-w-md w-full bg-white rounded-lg shadow-md p-6">
        <!-- Header -->
        <div class="text-center mb-8">
            <h1 class="text-2xl font-bold text-gray-800">Driver Login</h1>
            <p class="text-gray-600">Access your driver account</p>
        </div>

        <!-- Login Form -->
        <form method="POST" action="{{ route('driver.login.submit') }}">
            @csrf  <!-- ← CRITICAL: CSRF TOKEN -->
            
            @if($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                    {{ $errors->first() }}
                </div>
            @endif

            <!-- Email -->
            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-medium mb-2">
                    Email Address
                </label>
                <input type="email" id="email" name="email" 
                       class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                       value="{{ old('email') }}" required autofocus>
            </div>

            <!-- Password -->
            <div class="mb-6">
                <label for="password" class="block text-gray-700 text-sm font-medium mb-2">
                    Password
                </label>
                <input type="password" id="password" name="password" 
                       class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                       required>
            </div>

            <!-- Login Button -->
            <button type="submit" 
                    class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-200">
                Login as Driver
            </button>
        </form>

        <!-- Demo Note -->
        <div class="mt-6 p-4 bg-yellow-50 border border-yellow-200 rounded-md text-sm text-yellow-800">
            <strong>Demo:</strong> Use driver@brufuel.com / password
        </div>
    </div>
</body>
</html>