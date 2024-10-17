<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StarBook - Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        nav {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
        }
        body {
            padding-top: 70px; /* Avoid overlap with navbar */
        }
    </style>
</head>

<body class="bg-[#1B1B33] text-white font-sans">

    <!-- Navbar -->
    <nav class="bg-[#27293E] text-gray-300 p-4">
        <div class="container mx-auto flex justify-between">
            <a href="#" class="font-bold text-blue-500">StarBook</a>
        </div>
    </nav>

    <!-- Register Section -->
    <div class="min-h-screen flex justify-center items-center">
        <div class="bg-[#27293E] p-8 rounded-lg shadow-lg w-full max-w-md">
            <h2 class="text-2xl font-bold mb-6 text-center">Create Account</h2>

            <!-- Form -->
            <form action="{{ url('/register') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-sm text-gray-300 mb-2">Full Name</label>
                    <input type="text" id="name" name="name" required
                        class="w-full p-3 bg-[#1B1B33] rounded-lg border border-gray-600 text-white">
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-sm text-gray-300 mb-2">Email</label>
                    <input type="email" id="email" name="email" required
                        class="w-full p-3 bg-[#1B1B33] rounded-lg border border-gray-600 text-white">
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-sm text-gray-300 mb-2">Password</label>
                    <input type="password" id="password" name="password" required
                        class="w-full p-3 bg-[#1B1B33] rounded-lg border border-gray-600 text-white">
                </div>
                <div class="mb-6">
                    <label for="confirm_password" class="block text-sm text-gray-300 mb-2">Confirm Password</label>
                    <input type="password" id="confirm_password" name="password_confirmation" required
                        class="w-full p-3 bg-[#1B1B33] rounded-lg border border-gray-600 text-white">
                </div>
                <button type="submit"
                    class="w-full bg-blue-400 text-white p-3 rounded-lg font-bold hover:bg-blue-600 transition-colors">
                    Register
                </button>
            </form>
                

            <!-- Already have an account? -->
            <p class="text-sm text-gray-300 text-center mt-6">Already have an account? 
                <a href="/login" class="text-blue-500 hover:underline">Login</a>
            </p>
        </div>
    </div>
</body>

</html>
