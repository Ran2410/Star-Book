<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StarBook - Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <style>
        .image-slider-container {
            position: relative;
            overflow: hidden; 
            width: 100%;
            height: auto;
        }

        .slider {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }

        .image-slide {
            min-width: 100%;
            display: flex;
            justify-content: center;
        }

        .label-populer {
            position: absolute;
            top: 10px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 10;
        }

        .image-slide img {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        .relative {
            position: relative;
        }

        .flex {
            display: flex;
        }

        .justify-center {
            justify-content: center;
        }


        .bubble {
            position: absolute;
            width: 20px;
            height: 20px;
            background-color: rgba(255, 255, 255, 0.6);
            border-radius: 50%;
            pointer-events: none;
            opacity: 0;
            transform: scale(0);
            transition: transform 0.5s ease-out, opacity 0.5s ease-out;
        }

        .bubble-btn {
            position: relative;
            overflow: hidden;
        }

        .bubble.show {
            opacity: 1;
            transform: scale(4);
        }

        <style>.scrollbar-hidden {
            scrollbar-width: none;
        }

        .scrollbar-hidden::-webkit-scrollbar {
            display: none;
        }
    </style>
    </style>
</head>

<body class="bg-[#1B1B33] text-white font-sans">
    <!-- Navbar -->
    <nav class="fixed top-0 left-0 right-0 bg-[#27293E] p-4 z-50 flex justify-between text-center text-gray-400">
        <a href="{{ url('/home') }}" class="flex-1">
            <i class="fas fa-home h-6 mx-auto mb-1"></i>
            <span class="text-xs">Home</span>
        </a>
        <a href="#" class="flex-1">
            <i class="fas fa-search h-6 mx-auto mb-1"></i>
            <span class="text-xs">Search</span>
        </a>
        <a href="{{ url('/library') }}" class="flex-1">
            <i class="fas fa-book h-6 mx-auto mb-1"></i>
            <span class="text-xs">Library</span>
        </a>
        <a href="#" class="flex-1">
            <i class="fas fa-user h-6 mx-auto mb-1"></i>
            <span class="text-xs">Account</span>
        </a>
    </nav>

    <div class="px-4 py-32 ">
        <!-- Slider Section -->
        <div class="slider-container relative max-w-lg mx-auto mb-6">
            <div class="image-slider-container flex overflow-hidden relative justify-center">
                <!-- Slide Images -->
                <div class="slider flex">
                    <!-- Image 1 -->
                    <div class="image-slide w-full flex-shrink-0 flex justify-center">
                        <div class="relative">
                            <span
                                class="label-populer text-yellow-400 bg-black px-2 py-1 rounded-full text-sm absolute top-2 left-1/2 transform -translate-x-1/2 z-10">🔥
                                Populer</span>
                            <img src="{{ asset('assets/img/psychology-of-money.png') }}" alt="The Psychology of Money"
                                class="w-64 h-auto rounded-lg object-cover mx-auto">
                        </div>
                    </div>
                    <!-- Image 2 -->
                    <div class="image-slide w-full flex-shrink-0 flex justify-center">
                        <div class="relative">
                            <span
                                class="label-populer text-yellow-400 bg-black px-2 py-1 rounded-full text-sm absolute top-2 left-1/2 transform -translate-x-1/2 z-10">🔥
                                Populer</span>
                            <img src="{{ asset('assets/img/sapiens.jpg') }}" alt="Sapiens"
                                class="w-64 h-auto rounded-lg object-cover mx-auto">
                        </div>
                    </div>
                    <!-- Image 3 -->
                    <div class="image-slide w-full flex-shrink-0 flex justify-center">
                        <div class="relative">
                            <span
                                class="label-populer text-yellow-400 bg-black px-2 py-1 rounded-full text-sm absolute top-2 left-1/2 transform -translate-x-1/2 z-10">🔥
                                Populer</span>
                            <img src="{{ asset('assets/img/fairy-tale.jpg') }}" alt="Fairy Tale"
                                class="w-64 h-auto rounded-lg object-cover mx-auto">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Text Content Section -->
            <div class="bg-[#1B1B33] p-4 rounded-lg mb-6 flex flex-col items-center text-center">
                <h2 class="title text-lg font-bold mt-4">The Psychology Of Money</h2>
                <p class="author text-sm text-gray-400">Morgan Housel</p>
                <p class="text-yellow-500 mt-1 cursor-pointer">Read More</p>
            </div>

            <!-- Dots Navigation -->
            <div class="flex justify-center space-x-2 mb-6 dots-container">
                <div class="h-2 w-2 bg-sky-400 rounded-full cursor-pointer" onclick="moveSlide(0)"></div>
                <div class="h-2 w-2 bg-gray-400 rounded-full cursor-pointer" onclick="moveSlide(1)"></div>
                <div class="h-2 w-2 bg-gray-400 rounded-full cursor-pointer" onclick="moveSlide(2)"></div>
            </div>

            <!-- Navigation Buttons -->
            <button id="prev"
                class="bubble-btn absolute top-52 left-2 transform -translate-y-1/2 bg-gray-800 text-white px-2 py-1 rounded">
                ❮
                <span class="bubble"></span>
            </button>
            <button id="next"
                class="bubble-btn absolute top-52 right-2 transform -translate-y-1/2 bg-gray-800 text-white px-2 py-1 rounded">
                ❯
                <span class="bubble"></span>
            </button>

        </div>



        <!-- Genre Navigation -->
        <div class="flex space-x-4 overflow-x-auto text-gray-300 mb-6 items-center justify-center">
            <a href="#">All Genre</a>
            <a href="#">Comedy</a>
            <a href="#">Action</a>
            <a href="#">Adventure</a>
            <a href="#">Art & Photo</a>
        </div>


        <!-- Book List -->
        <h3 class="text-lg font-semibold mt-6 mb-4">All Genre</h3>
        <div class="overflow-x-auto scrollbar-hidden">
            <div class="flex space-x-4 gap-4">
                <!-- Book 1 -->
                <div class="text-center flex-none">
                    <img src="{{ asset('assets/img/psychology-of-money.png') }}" alt="The Psychology of Money"
                        class="h-72 w-48 object-cover rounded-lg mb-2 mx-auto">
                    <p class="text-sm">The Psychology of Money</p>
                    <p class="text-xs text-gray-400">Morgan Housel</p>
                    <div class="flex items-center justify-center mt-1">
                        <span class="text-yellow-500 text-sm">★ 4.6</span>
                    </div>
                </div>

                <!-- Book 2 -->
                <div class="text-center flex-none">
                    <img src="{{ asset('assets/img/sapiens.jpg') }}" alt="Sapiens"
                        class="h-72 w-48 object-cover rounded-lg mb-2 mx-auto">
                    <p class="text-sm font-semibold">Sapiens: A Brief History of Humankind</p>
                    <p class="text-xs text-gray-400">Yuval Noah Harari</p>
                    <div class="flex items-center justify-center mt-1">
                        <span class="text-yellow-500 text-sm">★ 4.7</span>
                    </div>
                </div>

                <!-- Book 3 -->
                <div class="text-center flex-none">
                    <img src="{{ asset('assets/img/fairy-tale.jpg') }}" alt="Fairy Tale"
                        class="h-72 w-48 object-cover rounded-lg mb-2 mx-auto">
                    <p class="text-sm">Fairy Tale</p>
                    <p class="text-xs text-gray-400">Stephen King</p>
                    <div class="flex items-center justify-center mt-1">
                        <span class="text-yellow-500 text-sm">★ 4.2</span>
                    </div>
                </div>

                <!-- Book 4 -->
                <div class="text-center flex-none">
                    <img src="{{ asset('assets/img/jejak-langkah.jpg') }}" alt="Book 4"
                        class="h-72 w-48 object-cover rounded-lg mb-2 mx-auto">
                    <p class="text-sm">Jejak Langkah</p>
                    <p class="text-xs text-gray-400">Pramoedya Ananta Toer</p>
                    <div class="flex items-center justify-center mt-1">
                        <span class="text-yellow-500 text-sm">★ 4.3</span>
                    </div>
                </div>

                <!-- Book 5 -->
                <div class="text-center flex-none">
                    <img src="{{ asset('assets/img/laskar-pelangi.jpg') }}" alt="Book 5"
                        class="h-72 w-48 object-cover rounded-lg mb-2 mx-auto">
                    <p class="text-sm">Laskar Pelangi</p>
                    <p class="text-xs text-gray-400">Andrea Hirata</p>
                    <div class="flex items-center justify-center mt-1">
                        <span class="text-yellow-500 text-sm">★ 4.1</span>
                    </div>
                </div>

                <!-- Book 6 -->
                <div class="text-center flex-none">
                    <img src="{{ asset('assets/img/ronggeng.jpg') }}" alt="Book 6"
                        class="h-72 w-48 object-cover rounded-lg mb-2 mx-auto">
                    <p class="text-sm">Ronggeng Duruh Paruk</p>
                    <p class="text-xs text-gray-400">Ahmad Tohari</p>
                    <div class="flex items-center justify-center mt-1">
                        <span class="text-yellow-500 text-sm">★ 4.9</span>
                    </div>
                </div>

                <!-- Book 7 -->
                <div class="text-center flex-none">
                    <img src="{{ asset('assets/img/pemimpi.jpeg') }}" alt="Book 7"
                        class="h-72 w-48 object-cover rounded-lg mb-2 mx-auto">
                    <p class="text-sm">Sang Pemimpi</p>
                    <p class="text-xs text-gray-400">Adrea hirata</p>
                    <div class="flex items-center justify-center mt-1">
                        <span class="text-yellow-500 text-sm">★ 4.3</span>
                    </div>
                </div>

                <!-- Book 8 -->
                <div class="text-center flex-none">
                    <img src="{{ asset('assets/img/menara.jpg') }}" alt="Book 8"
                        class="h-72 w-48 object-cover rounded-lg mb-2 mx-auto">
                    <p class="text-sm">Negeri 5 Menara</p>
                    <p class="text-xs text-gray-400">Ahmad Fuadi</p>
                    <div class="flex items-center justify-center mt-1">
                        <span class="text-yellow-500 text-sm">★ 4.0</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Comedy Genre Section -->
        <h3 class="text-lg font-semibold mt-6 mb-4">Comedy Genre</h3>
        <div class="overflow-x-auto scrollbar-hidden">
            <div class="flex space-x-4 gap-4">
                <!-- Comedy Book 1 -->
                <div class="text-center flex-none">
                    <img src="{{ asset('assets/img/ubur.jpg') }}" alt="Comedy Book 1"
                        class="h-72 w-48 object-cover rounded-lg mb-2 mx-auto">
                    <p class="text-sm">Ubur-ubur Lembur</p>
                    <p class="text-xs text-gray-400">Raditya Dika</p>
                    <div class="flex items-center justify-center mt-1">
                        <span class="text-yellow-500 text-sm">★ 4.5</span>
                    </div>
                </div>

                <!-- Comedy Book 2 -->
                <div class="text-center flex-none">
                    <img src="{{ asset('assets/img/setengah-jalan.jpg') }}" alt="Comedy Book 2"
                        class="h-72 w-48 object-cover rounded-lg mb-2 mx-auto">
                    <p class="text-sm">Setengah Jalan</p>
                    <p class="text-xs text-gray-400">Ernest Prakasa </p>
                    <div class="flex items-center justify-center mt-1">
                        <span class="text-yellow-500 text-sm">★ 4.8</span>
                    </div>
                </div>

                <!-- Comedy Book 3 -->
                <div class="text-center flex-none">
                    <img src="{{ asset('assets/img/bajak laut.jpg') }}" alt="Comedy Book 3"
                        class="h-72 w-48 object-cover rounded-lg mb-2 mx-auto">
                    <p class="text-sm">Bajak Laut & Purnama Terakhir</p>
                    <p class="text-xs text-gray-400">Adhitya Mulya</p>
                    <div class="flex items-center justify-center mt-1">
                        <span class="text-yellow-500 text-sm">★ 4.7</span>
                    </div>
                </div>

                <!-- Comedy Book 4 -->
                <div class="text-center flex-none">
                    <img src="{{ asset('assets/img/boss.jpg') }}" alt="Comedy Book 3"
                        class="h-72 w-48 object-cover rounded-lg mb-2 mx-auto">
                    <p class="text-sm">My Stupid Boss 6: Be Like Bob</p>
                    <p class="text-xs text-gray-400">Kenari</p>
                    <div class="flex items-center justify-center mt-1">
                        <span class="text-yellow-500 text-sm">★ 4.4</span>
                    </div>
                </div>

                <!-- Comedy Book 5 -->
                <div class="text-center flex-none">
                    <img src="{{ asset('assets/img/exp.jpg') }}" alt="Comedy Book 3"
                        class="h-72 w-48 object-cover rounded-lg mb-2 mx-auto">
                    <p class="text-sm">(EX)PERIENCE</p>
                    <p class="text-xs text-gray-400">Reza Palevi</p>
                    <div class="flex items-center justify-center mt-1">
                        <span class="text-yellow-500 text-sm">★ 4.2</span>
                    </div>
                </div>

                <!-- Comedy Book 6 -->
                <div class="text-center flex-none">
                    <img src="{{ asset('assets/img/ice.jpg') }}" alt="Comedy Book 3"
                        class="h-72 w-48 object-cover rounded-lg mb-2 mx-auto">
                    <p class="text-sm">My Ice Girl</p>
                    <p class="text-xs text-gray-400">Sansi</p>
                    <div class="flex items-center justify-center mt-1">
                        <span class="text-yellow-500 text-sm">★ 4.1</span>
                    </div>
                </div>
                <!-- Comedy Book 7 -->
                <div class="text-center flex-none">
                    <img src="{{ asset('assets/img/teman.jpg') }}" alt="Comedy Book 3"
                        class="h-72 w-48 object-cover rounded-lg mb-2 mx-auto">
                    <p class="text-sm">Teman Tapi Menikah</p>
                    <p class="text-xs text-gray-400">Ayudia dan Ditto</p>
                    <div class="flex items-center justify-center mt-1">
                        <span class="text-yellow-500 text-sm">★ 3.9</span>
                    </div>
                </div>

                <!-- Comedy Book 8 -->
                <div class="text-center flex-none">
                    <img src="{{ asset('assets/img/skeptic.png') }}" alt="Comedy Book 3"
                        class="h-72 w-48 object-cover rounded-lg mb-2 mx-auto">
                    <p class="text-sm"> Skeptic Tank: Curahan Hati Pemuda Skeptis</p>
                    <p class="text-xs text-gray-400">Jacob Julian</p>
                    <div class="flex items-center justify-center mt-1">
                        <span class="text-yellow-500 text-sm">★ 4.0</span>
                    </div>
                </div>
            </div>
        </div>
        

        <!-- Action Genre Section -->
        <h3 class="text-lg font-semibold mt-6 mb-4">Action Genre</h3>
        <div class="overflow-x-auto scrollbar-hidden">
            <div class="flex space-x-4 gap-4">
                <!-- Action Book 1 -->
                <div class="text-center flex-none">
                    <img src="{{ asset('assets/img/park.jpg') }}" alt="Comedy Book 1"
                        class="h-72 w-48 object-cover rounded-lg mb-2 mx-auto">
                    <p class="text-sm">Jurassic Park</p>
                    <p class="text-xs text-gray-400">Michael Cricthon</p>
                    <div class="flex items-center justify-center mt-1">
                        <span class="text-yellow-500 text-sm">★ 4.1</span>
                    </div>
                </div>

                <!-- Action Book 2 -->
                <div class="text-center flex-none">
                    <img src="{{ asset('assets/img/hobbit.jpeg') }}" alt="Comedy Book 2"
                        class="h-72 w-48 object-cover rounded-lg mb-2 mx-auto">
                    <p class="text-sm">The Hobbit</p>
                    <p class="text-xs text-gray-400">J.R.R Tolkien</p>
                    <div class="flex items-center justify-center mt-1">
                        <span class="text-yellow-500 text-sm">★ 4.9</span>
                    </div>
                </div>

                <!-- Action Book 3 -->
                <div class="text-center flex-none">
                    <img src="{{ asset('assets/img/bajak laut.jpg') }}" alt="Comedy Book 3"
                        class="h-72 w-48 object-cover rounded-lg mb-2 mx-auto">
                    <p class="text-sm">Bajak Laut & Purnama Terakhir</p>
                    <p class="text-xs text-gray-400">Adhitya Mulya</p>
                    <div class="flex items-center justify-center mt-1">
                        <span class="text-yellow-500 text-sm">★ 4.7</span>
                    </div>
                </div>

                <!-- Action Book 4 -->
                <div class="text-center flex-none">
                    <img src="{{ asset('assets/img/boss.jpg') }}" alt="Comedy Book 3"
                        class="h-72 w-48 object-cover rounded-lg mb-2 mx-auto">
                    <p class="text-sm">My Stupid Boss 6: Be Like Bob</p>
                    <p class="text-xs text-gray-400">Kenari</p>
                    <div class="flex items-center justify-center mt-1">
                        <span class="text-yellow-500 text-sm">★ 4.4</span>
                    </div>
                </div>

                <!-- Action Book 5 -->
                <div class="text-center flex-none">
                    <img src="{{ asset('assets/img/exp.jpg') }}" alt="Comedy Book 3"
                        class="h-72 w-48 object-cover rounded-lg mb-2 mx-auto">
                    <p class="text-sm">(EX)PERIENCE</p>
                    <p class="text-xs text-gray-400">Reza Palevi</p>
                    <div class="flex items-center justify-center mt-1">
                        <span class="text-yellow-500 text-sm">★ 4.2</span>
                    </div>
                </div>
            </div>
        </div>


        <!-- Continue Reading Section -->
        <h3 class="text-lg font-semibold mt-6 mb-4">Continue Reading</h3>
        <div class="flex space-x-4">
            <!-- Book 1 (Continue Reading) -->
            <div class="text-center flex-none">
                <img src="{{ asset('assets/img/psychology-of-money.png') }}" alt="The Psychology of Money"
                    class="h-72 w-48 object-cover rounded-lg mb-2 mx-auto">
                <p class="text-sm">The Psychology of Money</p>
                <p class="text-xs text-gray-400">Morgan Housel</p>
                <div class="flex items-center justify-center mt-1">
                    <span class="text-yellow-500 text-sm">★ 4.6</span>
                </div>
            </div>

            <!-- Book 2 (Continue Reading) -->
            <div class="text-center flex-none">
                <img src="{{ asset('assets/img/design-things.jpg') }}" alt="The Design of Everyday Things"
                    class="h-72 w-48 object-cover rounded-lg mb-2 mx-auto">
                <p class="text-sm">The Design of Everyday Things</p>
                <p class="text-xs text-gray-400">Don Norman</p>
                <div class="flex items-center justify-center mt-1">
                    <span class="text-yellow-500 text-sm">★ 4.4</span>
                </div>
            </div>
        </div>


        <script>
            let currentSlide = 0;
            const slides = document.querySelectorAll('.image-slide'); // Mengambil slide gambar
            const totalSlides = slides.length;
            const slider = document.querySelector('.slider');
            const titles = [
                "The Psychology Of Money",
                "Sapiens: A Brief History of Humankind",
                "Fairy Tale"
            ];
            const authors = [
                "Morgan Housel",
                "Yuval Noah Harari",
                "Stephen King"
            ];
            const titleElement = document.querySelector('.title');
            const authorElement = document.querySelector('.author');

            // Fungsi untuk memindahkan gambar saja
            function moveSlide(index) {
                currentSlide = index;
                const offset = -currentSlide * 100; // Menggeser slider berdasarkan index
                slider.style.transform = `translateX(${offset}%)`; // Menggeser hanya gambar
                updateDots(); // Memperbarui titik navigasi
                updateContent(); // Memperbarui judul dan pengarang
            }

            // Fungsi untuk memperbarui judul dan pengarang
            function updateContent() {
                titleElement.textContent = titles[currentSlide];
                authorElement.textContent = authors[currentSlide];
            }

            // Fungsi untuk menampilkan slide berikutnya
            function nextSlide() {
                currentSlide = (currentSlide + 1) % totalSlides;
                moveSlide(currentSlide);
            }

            // Fungsi untuk memperbarui tampilan titik navigasi
            function updateDots() {
                const dots = document.querySelectorAll('.dots-container div');
                dots.forEach((dot, index) => {
                    dot.classList.toggle('bg-sky-400', index === currentSlide);
                    dot.classList.toggle('bg-gray-400', index !== currentSlide);
                });
            }

            // Menangani event click untuk tombol prev
            document.getElementById('prev').addEventListener('click', () => {
                currentSlide = (currentSlide === 0) ? totalSlides - 1 : currentSlide - 1;
                moveSlide(currentSlide);
            });

            // Menangani event click untuk tombol next
            document.getElementById('next').addEventListener('click', () => {
                currentSlide = (currentSlide === totalSlides - 1) ? 0 : currentSlide + 1;
                moveSlide(currentSlide);
            });

            // Menampilkan slide pertama saat halaman dimuat
            moveSlide(currentSlide);

            // Mengatur interval untuk mengganti slide setiap 10 detik
            setInterval(nextSlide, 10000);

            document.querySelectorAll('.bubble-btn').forEach(button => {
                button.addEventListener('click', function(e) {
                    const bubble = this.querySelector('.bubble');
                    const rect = this.getBoundingClientRect();
                    const size = Math.max(rect.width, rect.height);

                    bubble.style.width = bubble.style.height = `${size}px`;
                    bubble.style.left = `${e.clientX - rect.left - size / 2}px`;
                    bubble.style.top = `${e.clientY - rect.top - size / 2}px`;

                    bubble.classList.add('show');

                    setTimeout(() => {
                        bubble.classList.remove('show');
                    }, 500);
                });
            });
        </script>
</body>

</html>
