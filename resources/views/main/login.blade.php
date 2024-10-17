<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - StarBook</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#1B1B33] h-screen flex flex-col items-center justify-center">
    <div class="w-11/12 max-w-md bg-[#27293E] p-6 rounded-lg text-center">
        <div class="overflow-hidden rounded-full h-48 w-48 mx-auto mb-6">
            <img src="{{ asset('assets/img/logo.jpg') }}" alt="Bookshelf" class="object-cover h-full w-full">
        </div>  

        <h1 class="text-white text-2xl font-semibold mb-6">Login to <span class="text-sky-400">StarBook</span></h1>

        <!-- Tampilkan Pesan Error -->
        @if ($errors->any())
            <div class="bg-red-500 text-white p-3 rounded-lg mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ url('/login') }}">
            @csrf
            <div class="mb-4">
                <input type="email" name="email" value="{{ old('email') }}" placeholder="Email" required
                    class="w-full bg-gray-700 text-white py-3 px-4 rounded-lg focus:outline-none">
            </div>
            <div class="mb-4">
                <input type="password" name="password" placeholder="Password" required
                    class="w-full bg-gray-700 text-white py-3 px-4 rounded-lg focus:outline-none">
            </div>
            <button type="submit" class="w-full bg-blue-400 text-white py-3 rounded-lg hover:bg-blue-600 transition-colors">Login</button>
        </form>

        <p class="text-gray-300 mt-4">Don't have an account? <a href="{{ url('/register') }}" class="text-sky-400">Register</a></p>
    </div>
</body>
</html>
