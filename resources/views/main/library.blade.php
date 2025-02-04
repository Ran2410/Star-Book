<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>StarBook - My Library</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="px-4 py-8 bg-[#1B1C2A] min-h-screen">
        <!-- Library Header -->
        <div class="flex items-center justify-center relative mb-6">
            <!-- Back Button di kiri pojok yang redirect ke Home (home.blade.php) -->
            <button class="absolute left-0 text-gray-300" onclick="window.location.href='{{ url('/home') }}';">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
            </button>


            <h1 class="text-2xl font-bold text-white">My Library</h1>

            <button class="absolute right-0 text-gray-300">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
            </button>
        </div>

        <!-- Book List -->
        <div class="space-y-6">
            <!-- Book 1 -->
            <div class="flex items-start bg-[#27293E] rounded-lg p-4 shadow-md">
                <img src="assets/img/psychology-of-money.png" alt="The Psychology Of Money"
                    class="w-24 h-32 object-cover rounded-md">
                <div class="ml-4">
                    <h2 class="text-white font-bold text-lg">The Psychology Of Money</h2>
                    <p class="text-sm text-gray-400">Morgan Housel</p>
                    <div class="flex items-center mt-2">
                        <div class="flex text-yellow-400">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 .587l3.668 7.431 8.209 1.191-5.937 5.785 1.401 8.186L12 18.897l-7.341 3.863L6.06 14.994.123 9.209l8.209-1.191z" />
                            </svg>
                        </div>
                        <span class="ml-2 text-gray-300 text-sm">4.6</span>
                    </div>
                    <p class="text-gray-400 text-xs mt-1">Last Read 3 days ago</p>
                </div>
            </div>

            <!-- Book 2 -->
            <div class="flex items-start bg-[#27293E] rounded-lg p-4 shadow-md">
                <img src="{{ asset('assets/img/fairy-tale.jpg') }}" alt="The Design of Everyday Things"
                    class="w-24 h-32 object-cover rounded-md">
                <div class="ml-4">
                    <h2 class="text-white font-bold text-lg">Fairy Tale</h2>
                    <p class="text-sm text-gray-400">Stephen King</p>
                    <div class="flex items-center mt-2">
                        <div class="flex text-yellow-400">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 .587l3.668 7.431 8.209 1.191-5.937 5.785 1.401 8.186L12 18.897l-7.341 3.863L6.06 14.994.123 9.209l8.209-1.191z" />
                            </svg>
                        </div>
                        <span class="ml-2 text-gray-300 text-sm">4.5</span>
                    </div>
                    <p class="text-gray-400 text-xs mt-1">Last Read 1 day ago</p>
                </div>
            </div>

            <!-- Book 3 -->
            <div class="flex items-start bg-[#27293E] rounded-lg p-4 shadow-md">
                <img src="assets/img/sapiens.jpg" alt="Sapiens: A Brief History of Humankind"
                    class="w-24 h-32 object-cover rounded-md">
                <div class="ml-4">
                    <h2 class="text-white font-bold text-lg">Sapiens: A Brief History of Humankind</h2>
                    <p class="text-sm text-gray-400">Yuval Noah Harari</p>
                    <div class="flex items-center mt-2">
                        <div class="flex text-yellow-400">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 .587l3.668 7.431 8.209 1.191-5.937 5.785 1.401 8.186L12 18.897l-7.341 3.863L6.06 14.994.123 9.209l8.209-1.191z" />
                            </svg>
                        </div>
                        <span class="ml-2 text-gray-300 text-sm">4.7</span>
                    </div>
                    <p class="text-gray-400 text-xs mt-1">Last Read 5 days ago</p>
                </div>
            </div>
        </div>

    </div>


</body>

</html>
