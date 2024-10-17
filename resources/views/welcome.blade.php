<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Star Book</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#1B1B33] h-screen flex flex-col items-center justify-center">
    <div class="w-11/12 max-w-md bg-[#1B1B33] p-6 rounded-lg text-center">
        <div class="overflow-hidden rounded-full h-48 w-48 mx-auto mb-6">
            <img src="assets/img/logo.jpg" alt="Bookshelf" class="object-cover h-full w-full">
        </div>

        <h1 class="text-white text-2xl font-semibold">Welcome To <span class="text-sky-400">StarBook</span></h1>
        <p class="text-gray-300 mt-2">The Number One Best Ebook & Reader Application In This Century</p>

        <a href="{{ url('/register') }}"
            class="mt-4 w-full bg-blue-400 text-white py-3 rounded-lg inline-block text-center">Get Started</a>

        <a href="{{url ('/login')}}" class="mt-4 w-full bg-gray-700 text-white py-3 rounded-lg flex items-center justify-center space-x-2">I
            Already Have On Account</a>
    </div>
</body>

</html>
