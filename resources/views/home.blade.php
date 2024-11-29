<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>James Xi</title>
    <link rel="icon" href="https://framerusercontent.com/images/TBeoEsLrjDxK4cQDQGsqPxI7sY.png">
    <script src="https://cdn.tailwindcss.com"></script>

    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>
    <script>
        window.addEventListener('scroll', () => {
            const newartText = document.getElementById('newartText');
            const aboutSection = document.getElementById('about');
            const sectionTop = aboutSection.getBoundingClientRect().top;
            const windowHeight = window.innerHeight;

            if (sectionTop < windowHeight && sectionTop > 0) {
                // Menghitung persentase keterlihatan section kedua
                const percentageVisible = (windowHeight - sectionTop) / windowHeight;

                // Jika teks terlihat, ubah warnanya langsung menjadi lime
                if (percentageVisible >= 0) {
                    newartText.style.color = 'rgb(208, 240, 52)'; // Lime
                }
            } else {
                newartText.style.color = 'rgb(41,37,36)'; // Kembali ke abu-abu
            }
        });
    </script>

    <style>
        html {
            scroll-behavior: smooth;
        }

        @keyframes scroll {
            0% {
                transform: translateX();
            }

            100% {
                transform: translateX(-50%);
            }
        }

        .animate-scroll {
            animation: scroll 40s linear infinite;
        }
        .animate-scroll:hover{
            animation-duration: 43s
        }
        .scroll-container {
            position: relative;
            overflow-x: scroll;
            /* Jika container scrollable secara horizontal */
        }

        .scroll-container::before,
        .scroll-container::after {
            content: '';
            position: absolute;
            top: 0;
            bottom: 0;
            width: 100px;
            /* Sesuaikan lebar sesuai intensitas gradasi */
            pointer-events: none;
            z-index: 1;
            /* Pastikan di atas elemen lain */
        }

        .scroll-container::before {
            left: 0;
            background: linear-gradient(to right, rgba(0, 0, 0, 0.7), transparent);
        }

        .scroll-container::after {
            right: 0;
            background: linear-gradient(to left, rgba(0, 0, 0, 0.7), transparent);
        }
    </style>
</head>

{{-- 1 --}}

<body class="bg-black text-white flex flex-col justify-between min-h-screen">
    <section id="home">
        <div class="relative w-full h-full min-h-screen bg-black bg-opacity-50 backdrop-blur-lg p-6 ">
            <div class="relative w-full h-[570px] bg-zinc-950 p-6  rounded-3xl border border-white/0 overflow-hidden">
                <div>
                    <div class="absolute top-10 left-14 text-s font-bold text-gray-400">
                        <p>Always about</p>
                        <p class="text-left text-white">Future</p>
                    </div>
                    <div class="absolute text-right top-10 right-14 text-s font-bold text-white">
                        <p>Contact</p>
                        <p class="text-right text-gray-400">Jameswest8823@gmail.com</p>
                    </div>
                </div>
                <div class="absolute inset-0 flex justify-center items-center">
                    <h1 id="newartText" class="text-[19.5rem] font-bold text-stone-800">
                        NEWART</h1>
                </div>
                <div class="flex justify-center mt-10">
                    <img src="{{ asset('image/zZJumC0sw4A4mVjf7EhJ8rnNUkA.png') }}" width="450"
                        class="rounded-lg relative z-10">
                </div>
            </div>
        </div>
    </section>

    {{-- 2 --}}
    <section id="about">
        <div>
            <blockquote class="text-6xl text-start text-gray-400 pl-10 mt-6">
                I'm a
                <span
                    class="before:block before:absolute before:-inset-3 before:rounded-full before:bg-lime-500 -skew-y-6 hover:skew-y-0 relative inline-block">
                    <span class="relative font-semibold text-black">Life-time</span>
                </span>
                Experience Designer, Design
                <hr class="border-t-1 border-gray-400 mt-8">
                <blockquote class="mt-2">
                    Lead & Entrepreneur who makes clean
                </blockquote>
                <hr class="border-t-1 border-gray-400 mt-8">
                designs.
            </blockquote>
        </div>

        {{-- 3 --}}
        <div
            class="relative w-full h-full min-h-screen bg-black bg-opacity-50 backdrop-blur-lg p-6 mt-10 section-content skew-start">
            <div class="relative w-full h-full bg-white bg-opacity-10 p-6  rounded-3xl border border-white/0">
                <div class="flex justify-center mt-10">
                    <img src="{{ asset('image/e1SU47GraM3SOoDtwusGXaD8jA.png') }}"
                        class="rounded-lg image-rendering:auto w-[531px] h-[630px] object-cover object-center">
                </div>
                <p class="text-6xl font-bold bg-gradient-to-l from-black via-black to-gray-200 bg-clip-text text-transparent blur-sm mt-10 pl-10
                     transform transition-transform duration-300 hover:translate-x-3">
                    JAMES XI
                </p>
                <p
                    class="text-lg text-gray-400 pl-10 mt-3 transform transition-transform duration-300 hover:translate-x-3">
                    “I treated design as all meanings of my life”
                </p>
                <p
                    class="text-3xl text-gray-400 pl-10 mt-3 transform transition-transform duration-300 hover:translate-x-3">
                    I have personally designed and led more than 100+ projects, and I have extensive experience
                    and strong execution capabilities in experience design.
                </p>
                <div class="flex items-center space-x-4 pl-10 mt-5">
                    <div
                        class="group flex items-center px-6 py-3 bg-black/20 rounded-full text-lg border border-white-2 font-medium text-white transition-all duration-500 hover:bg-lime-500">
                        <div
                            class="bg-lime-500 rounded-full p-2 mr-3 transition-transform duration-500 ease-in-out group-hover:translate-x-24 group-hover:rotate-90 group-hover:bg-white">
                            <svg class="w-5 h-5 text-black" stroke="currentColor" fill="none" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 18l6-6-6-6" />
                            </svg>
                        </div>
                        <p
                            class="bg-gradient-to-r from-gray-700 via-gray-500 to-white bg-clip-text text-transparent transition-transform duration-500 ease-in-out group-hover:-translate-x-10">
                            More Info
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <style>
            .section-content {
                transform: skewY(10deg);
                /* Ini memberi efek miring pada elemen */
                opacity: 0;
                /* Buat elemen tidak terlihat saat belum di-scroll */
                transition: transform 7s ease, opacity 7s ease;
            }

            .section-content.in-view {
                transform: skewY(0deg);
                /* Hapus efek miring saat elemen terlihat */
                opacity: 1;
                /* Munculkan elemen */
            }
        </style>

        <script>
            // Pilih elemen yang ingin dipantau
            const sectionContent = document.querySelector('.section-content');

            // Buat observer untuk mendeteksi ketika elemen masuk viewport
            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('in-view'); // Tambahkan class 'in-view' saat elemen terlihat
                    } else {
                        entry.target.classList.remove(
                            'in-view'); // Hapus class 'in-view' jika keluar dari viewport (opsional)
                    }
                });
            }, {
                threshold: 0.2
            }); // threshold 0.1 artinya elemen terlihat 10% sebelum aksi terjadi

            // Pantau elemen
            observer.observe(sectionContent);
        </script>

        {{-- 4 --}}
        <div class="grid grid-cols-3 grid-flow-row gap-2 mt-20">
            <div class="flex justify-center opacity-50 hover:opacity-100">
                <img src="image/0NEVUwyMUMnbYFrpvezHUhsVwww.png">
            </div>

            <div class="flex justify-center opacity-50 hover:opacity-100">
                <img src="image/ozmIYYbGZDL2zyg4nbkCknIbk.png">
            </div>

            <div class="flex justify-center opacity-50 hover:opacity-100">
                <img src=" image/WfAMIT8gZ7qVbcHY5AqnM0QRc.png">
            </div>

            <div class="flex justify-center opacity-50 hover:opacity-100">
                <img src="image/Ar457mkwzAzWO7Q87Iv1JcVWw.png">
            </div>

            <div class="flex justify-center opacity-50 hover:opacity-100">
                <img src="image/ZA88VvNUwmlUcuSuNYuhq5VLg1c.png">
            </div>

            <div class="flex justify-center opacity-50 hover:opacity-100">
                <img src="image/hNBSFIwUJgJ5pU71I7JERduscgM.png">
            </div>
        </div>
        <div class="grid grid-cols-2">

            <div class="flex justify-center opacity-50 hover:opacity-100">
                <img src="image/XvlpGNihJDDN3YFgf7tVloi9DQ.png">
            </div>

            <div class="flex justify-center opacity-50 hover:opacity-100">
                <img src="image/1ywzwGQExD9JgAUSyJ75GmKC8o.png">
            </div>
        </div>
        </div>

        {{-- 5 --}}
        <div class="text-6xl font-bold text-lime-500 mt-10 pl-20">
            FROM IDEAS
            <p>TO MILLION USERS</p>
        </div>
        <p class="text-lg text-gray-400 pl-20 mt-3">
            I helped 100+ projects reach their goals. </p>
        <div class="bg-black text-white p-6">
            <div
                class="bg-gradient-to-b from-transparent overflow-hidden via-transparent to-lime-500/20 p-6 rounded-lg">
                <div class="flex justify-between items-center py-4 border-b border-gray-800">
                    <div class="group flex justify-between items-center w-full">
                        <div
                            class="flex items-center space-x-4 transform transition-transform duration-300 group-hover:translate-x-12">
                            <p class="text-6xl font-bold group-hover:text-lime-500 ">APP Design</p>
                            <p
                                class="bg-gradient-to-l from-stone-900 to-stone-700 text-white py-2 px-6 text-lg rounded-full">
                                72+</p>
                            <div>
                                <img src="image/uI4ui27mbDHa4aRUCFrJXCG7tGc.jpg"
                                    class="absolute -bottom-44 left-[800px] transform -translate-x-1/2 opacity-0 group-hover:opacity-70 transition-opacity duration-500 ease-in-out w-96 h-96">
                            </div>
                        </div>
                        <span class="text-4xl group-hover:rotate-45">+</span>
                    </div>
                </div>
                <div class="flex justify-between items-center py-4 border-b border-gray-800">
                    <div class="group flex justify-between items-center w-full">
                        <div
                            class="flex items-center space-x-4 transform transition-transform duration-300 group-hover:translate-x-12">
                            <p class="text-6xl font-bold group-hover:text-lime-500 ">Web Design</p>
                            <p
                                class="bg-gradient-to-l from-stone-900 to-stone-700 text-white py-2 px-6 text-lg rounded-full">
                                43+</p>
                            <div>
                                <img src="image/YjjeqnDnPLWBiutH0NbAJNpVy24.jpg"
                                    class="absolute -bottom-28 left-[800px] transform -translate-x-1/2 opacity-0 group-hover:opacity-70 transition-opacity duration-500 ease-in-out w-96 h-96">
                            </div>
                        </div>
                        <span class="text-4xl group-hover:rotate-45">+</span>
                    </div>
                </div>
                <div class="flex justify-between items-center py-4 border-b border-gray-800">
                    <div class="group flex justify-between items-center w-full">
                        <div
                            class="flex items-center space-x-4 transform transition-transform duration-300 group-hover:translate-x-12">
                            <p class="text-6xl font-bold group-hover:text-lime-500 ">FUI Design</p>
                            <p
                                class="bg-gradient-to-l from-stone-900 to-stone-700 text-white py-2 px-6 text-lg rounded-full">
                                16+</p>
                            <div>
                                <img src="image/hR8E5AiY0HpEP9lX62yoLO7Of4.jpg"
                                    class="absolute -bottom-28 left-[800px] transform -translate-x-1/2 opacity-0 group-hover:opacity-70 transition-opacity duration-500 ease-in-out w-96 h-96">
                            </div>
                        </div>
                        <span class="text-4xl group-hover:rotate-45">+</span>
                    </div>
                </div>
                <div class="flex justify-between items-center py-4 border-b border-gray-800">
                    <div class="group flex justify-between items-center w-full">
                        <div
                            class="flex items-center space-x-4 transform transition-transform duration-300 group-hover:translate-x-12">
                            <p class="text-6xl font-bold group-hover:text-lime-500 ">Dashboard</p>
                            <p
                                class="bg-gradient-to-l from-stone-900 to-stone-700 text-white py-2 px-6 text-lg rounded-full">
                                32+</p>
                            <div>
                                <img src="image/VpTAsrhP2jWVlpgXsPopCa6dFw.jpg"
                                    class="absolute -bottom-28 left-[800px] transform -translate-x-1/2 opacity-0 group-hover:opacity-70 transition-opacity duration-500 ease-in-out w-96 h-96">
                            </div>
                        </div>
                        <span class="text-4xl group-hover:rotate-45">+</span>
                    </div>
                </div>
            </div>
        </div>

        {{-- 6 --}}
        <div class="content text-start mt-5">
            <div class="absolute top-auto left-14 text-s font-bold text-gray-400">
                Project:
                <p class="text-left text-white">DailyArts</p>
            </div>
        </div>
        <div>
            <video class="w-full" autoplay muted loop>
                <source src="/image/mOSNn2wsGvCjqOsERX3QCMoXQs.mp4" type="video/mp4">
            </video>
        </div>

        {{-- 7 --}}
        <section id="works">
            <div class="bg-black text-white p-6">
                <div class="bg-gradient-to-t from-transparent via-transparent to-lime-500/20 p-6 rounded-lg">
                    <div class="transform transition-transform duration-500 hover:-translate-y-6">
                        <p class="text-8xl font-bold text-center text-lime-500 mt-10 pl-20">
                            PROJECTS
                        </p>
                        <p class="text-lg text-center text-gray-400 pl-20 mt-3">
                            Experimental projects </p>
                    </div>
                </div>
            </div>
            <div class="flex justify-center">
                <img src="{{ asset('image/c0Y2WNqlPUuOxSlWMFTLFMHAkE.jpg') }}" width="600"
                    class="rounded-lg transform transition-transform duration-500 hover:-translate-y-12">
            </div>
            <div class="flex justify-center mt-2">
                <img src="{{ asset('image/VpTAsrhP2jWVlpgXsPopCa6dFw.jpg') }}" width="600"
                    class="rounded-lg transform transition-transform duration-500 hover:-translate-y-12">
            </div>
            <div class="flex justify-center mt-2">
                <img src="{{ asset('image/rD5PO5dSlR50spgPOU3qT9TIzs.jpg') }}" width="600"
                    class="rounded-lg transform transition-transform duration-500 hover:-translate-y-12">
            </div>
            <div class="flex justify-center items-center space-x-4 pl-10 mt-5">
                <div
                    class="group flex items-center px-6 py-3 bg-black/20 rounded-full text-lg border border-white-2 font-medium text-white transition-all duration-500 hover:bg-lime-500">
                    <div
                        class="bg-lime-500 rounded-full p-2 mr-3 transition-transform duration-500 ease-in-out group-hover:translate-x-24 group-hover:rotate-90 group-hover:bg-white">
                        <svg class="w-5 h-5 text-black" stroke="currentColor" fill="none" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 18l6-6-6-6" />
                        </svg>
                    </div>
                    <p
                        class="bg-gradient-to-r from-gray-700 via-gray-500 to-white bg-clip-text text-transparent transition-transform duration-500 ease-in-out group-hover:-translate-x-10">
                        More Info
                    </p>
                </div>
            </div>
        </section>
        {{-- 8 --}}
        <section id="blogs">
            <h1
                class="text-8xl font-bold bg-gradient-to-l from-black via-gray-600 to-gray-300 bg-clip-text text-transparent">
                DAILY
                <p>LIFE & AWARDS</p>
            </h1>
            <p class="text-lg text-gray-400 mt-3">
                Life & other stuffs </p>
            <div
                class="scroll-container relative w-full overflow-hidden bg-gradient-to-r from-black via-transparent to-black p-5 rounded-lg">
                <div class="w-full">
                    <div class="scroll-content flex space-x-6 animate-scroll w-max">
                        <div
                            class="w-[300px] h-fit bg-neutral-800 p-4 rounded-3xl shadow-lg text-white transform transition-transform duration-500 hover:-translate-y-3">
                            <img class="w-[300px] h-[196px] rounded-3xl object-cover"
                                src="image/GQG69VHtN64eNJ9plaU7yehxD4.png">
                            <p class="mt-2 font-bold">ICVA Awards 2019 - Nominations</p>
                            <p class="text-gray-400">Sep 30, 2019</p>
                        </div>
                        <div
                            class="w-[300px] h-fit bg-neutral-800 p-4 rounded-3xl shadow-lg text-white transform transition-transform duration-500 hover:-translate-y-3">
                            <img class="w-[300px] h-[196px] rounded-3xl object-cover"
                                src="image/D3qCLti0CoCrHvXbAEz17DKkofY.png">
                            <p class="mt-2 font-bold">ICVA Awards 2021 - Nominations</p>
                            <p class="text-gray-400">Feb 3, 2021</p>
                        </div>
                        <div
                            class="w-[300px] h-fit bg-neutral-800 p-4 rounded-3xl shadow-lg text-white transform transition-transform duration-500 hover:-translate-y-3">
                            <img class="w-[300px] h-[196px] rounded-3xl object-cover"
                                src="image/HQxgnMrah0xkkQEkP2ccUGM4.png">
                            <p class="mt-2 font-bold">ICVA Awards 2021 - Merit Award</p>
                            <p class="text-gray-400">Apr 21, 2021</p>
                        </div>
                        <div
                            class="w-[300px] h-fit bg-neutral-800 p-4 rounded-3xl shadow-lg text-white transform transition-transform duration-500 hover:-translate-y-3">
                            <img class="w-[300px] h-[196px] rounded-3xl object-cover"
                                src="image/SnAgmyBSq3VfisDgVbnGInT8ZIg.png">
                            <p class="mt-2 font-bold">ICVA Awards 2024 - Nominations</p>
                            <p class="text-gray-400">Mar 12, 2023</p>
                        </div>
                        <div
                            class="w-[300px] h-fit bg-neutral-800 p-4 rounded-3xl shadow-lg text-white transform transition-transform duration-500 hover:-translate-y-3">
                            <img class="w-[300px] h-[196px] rounded-3xl object-cover"
                                src="image/ERpCiHPmzjT0O4uuxzQMnBm6w.png">
                            <p class="mt-2 font-bold">ICVA Awards 2024 - Merit Award</p>
                            <p class="text-gray-400">Mar 21, 2024</p>
                        </div>
                        <div
                            class="w-[300px] h-fit bg-neutral-800 p-4 rounded-3xl shadow-lg text-white transform transition-transform duration-500 hover:-translate-y-3">
                            <img class="w-[300px] h-[196px] rounded-3xl object-cover"
                                src="image/JHq42c2TLTYRzZlR9Z88SKpsU.png">
                            <p class="mt-2 font-bold">ICVA Awards 2024 - Bronze Award</p>
                            <p class="text-gray-400">Mar 2, 2024</p>
                        </div>
                        <div
                            class="w-[300px] h-fit bg-neutral-800 p-4 rounded-3xl shadow-lg text-white transform transition-transform duration-500 hover:-translate-y-3">
                            <img class="w-[300px] h-[196px] rounded-3xl object-cover"
                                src="image/z6hjoXkYyaX3s3gKTqgQoZXXrY.png">
                            <p class="mt-2 font-bold">Unicef's Gift</p>
                            <p class="text-gray-400">Feb 3, 2021</p>
                        </div>
                        <div
                            class="w-[300px] h-fit bg-neutral-800 p-4 rounded-3xl shadow-lg text-white transform transition-transform duration-500 hover:-translate-y-3">
                            <img class="w-[300px] h-[196px] rounded-3xl object-cover"
                                src="image/EWyktMp86I4aPzA2yVgEMM3LQ4.jpg">
                            <p class="mt-2 font-bold">Red Dot Awards</p>
                            <p class="text-gray-400">Feb 1, 2023</p>
                        </div>
                        <div
                            class="w-[300px] h-fit bg-neutral-800 p-4 rounded-3xl shadow-lg text-white transform transition-transform duration-500 hover:-translate-y-3">
                            <img class="w-[300px] h-[196px] rounded-3xl object-cover"
                                src="image/GQG69VHtN64eNJ9plaU7yehxD4.png">
                            <p class="mt-2 font-bold">ICVA Awards 2019 - Nominations</p>
                            <p class="text-gray-400">Sep 30, 2019</p>
                        </div>
                        <div
                            class="w-[300px] h-fit bg-neutral-800 p-4 rounded-3xl shadow-lg text-white transform transition-transform duration-500 hover:-translate-y-3">
                            <img class="w-[300px] h-[196px] rounded-3xl object-cover"
                                src="image/D3qCLti0CoCrHvXbAEz17DKkofY.png">
                            <p class="mt-2 font-bold">ICVA Awards 2021 - Nominations</p>
                            <p class="text-gray-400">Feb 3, 2021</p>
                        </div>
                        <div
                            class="w-[300px] h-fit bg-neutral-800 p-4 rounded-3xl shadow-lg text-white transform transition-transform duration-500 hover:-translate-y-3">
                            <img class="w-[300px] h-[196px] rounded-3xl object-cover"
                                src="image/HQxgnMrah0xkkQEkP2ccUGM4.png">
                            <p class="mt-2 font-bold">ICVA Awards 2021 - Merit Award</p>
                            <p class="text-gray-400">Apr 21, 2021</p>
                        </div>
                        <div
                            class="w-[300px] h-fit bg-neutral-800 p-4 rounded-3xl shadow-lg text-white transform transition-transform duration-500 hover:-translate-y-3">
                            <img class="w-[300px] h-[196px] rounded-3xl object-cover"
                                src="image/SnAgmyBSq3VfisDgVbnGInT8ZIg.png">
                            <p class="mt-2 font-bold">ICVA Awards 2024 - Nominations</p>
                            <p class="text-gray-400">Mar 12, 2023</p>
                        </div>
                        <div
                            class="w-[300px] h-fit bg-neutral-800 p-4 rounded-3xl shadow-lg text-white transform transition-transform duration-500 hover:-translate-y-3">
                            <img class="w-[300px] h-[196px] rounded-3xl object-cover"
                                src="image/ERpCiHPmzjT0O4uuxzQMnBm6w.png">
                            <p class="mt-2 font-bold">ICVA Awards 2024 - Merit Award</p>
                            <p class="text-gray-400">Mar 21, 2024</p>
                        </div>
                        <div
                            class="w-[300px] h-fit bg-neutral-800 p-4 rounded-3xl shadow-lg text-white transform transition-transform duration-500 hover:-translate-y-3">
                            <img class="w-[300px] h-[196px] rounded-3xl object-cover"
                                src="image/JHq42c2TLTYRzZlR9Z88SKpsU.png">
                            <p class="mt-2 font-bold">ICVA Awards 2024 - Bronze Award</p>
                            <p class="text-gray-400">Mar 2, 2024</p>
                        </div>
                        <div
                            class="w-[300px] h-fit bg-neutral-800 p-4 rounded-3xl shadow-lg text-white transform transition-transform duration-500 hover:-translate-y-3">
                            <img class="w-[300px] h-[196px] rounded-3xl object-cover"
                                src="image/z6hjoXkYyaX3s3gKTqgQoZXXrY.png">
                            <p class="mt-2 font-bold">Unicef's Gift</p>
                            <p class="text-gray-400">Feb 3, 2021</p>
                        </div>
                        <div
                            class="w-[300px] h-fit bg-neutral-800 p-4 rounded-3xl shadow-lg text-white transform transition-transform duration-500 hover:-translate-y-3">
                            <img class="w-[300px] h-[196px] rounded-3xl object-cover"
                                src="image/EWyktMp86I4aPzA2yVgEMM3LQ4.jpg">
                            <p class="mt-2 font-bold">Red Dot Awards</p>
                            <p class="text-gray-400">Feb 1, 2023</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex justify-center items-center space-x-4 pl-10 mt-5">
                <div
                    class="group flex items-center px-6 py-3 bg-black/20 rounded-full text-lg border border-white-2 font-medium text-white transition-all duration-500 hover:bg-lime-500">
                    <div
                        class="bg-lime-500 rounded-full p-2 mr-3 transition-transform duration-500 ease-in-out group-hover:translate-x-24 group-hover:rotate-90 group-hover:bg-white">
                        <svg class="w-5 h-5 text-black" stroke="currentColor" fill="none" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 18l6-6-6-6" />
                        </svg>
                    </div>
                    <p
                        class="bg-gradient-to-r from-gray-700 via-gray-500 to-white bg-clip-text text-transparent transition-transform duration-500 ease-in-out group-hover:-translate-x-10">
                        More Info
                    </p>
                </div>
            </div>
        </section>

        <div class="relative w-full h-full bg-white bg-opacity-10 p-6 mt-10 rounded-3xl border border-white/0">
            <div class="flex justify-between items-center text-5xl font-bold text-gray-400">
                <div>
                    <span>LET'S COLLABORATE</span>
                    <p class="mt-1">JAMESWEST8823@GMAIL.COM</p>
                </div>
                <div class="bg-lime-500 rounded-full w-28 min-h-[4rem] ml-4 flex items-center justify-center">
                    <svg class="w-8 h-12 text-black" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M14 5l7 7m0 0l-7 7m7-7H3">
                        </path>
                    </svg>
                </div>
            </div>
            <div class="relative w-full min-h-screen bg-cover bg-center bg-no-repeat mt-8 rounded-3xl overflow-hidden"
                style="background-image: url('image/E4IIgWqVhaXBkxyKdP31RiLiYI.jpg');">
                <div class="absolute left-10 top-1/3 text-white">
                    <h1 class="text-5xl font-bold leading-snug">
                        Tell me<span class="text-lime-500">.</span>
                        <p>work with me</p>
                    </h1>
                </div>
                <div
                    class="absolute right-10 top-7 bg-zinc-800 bg-opacity-50 backdrop-blur-lg p-6 rounded-2xl flex items-center justify-center w-[432px] h-[540px]">
                    <form class="space-y-6 p-6 w-full flex flex-col items-center justify-center">
                        <input type="text" placeholder="Jane Smith"
                            class="w-[350px] p-3 bg-neutral-600 bg-opacity-25 text-white placeholder-gray-400 rounded-xl backdrop-blur-lg border-none">
                        <input type="email" placeholder="jane@framer.com"
                            class="w-[350px] p-3 bg-neutral-600 bg-opacity-25 text-white placeholder-gray-400 rounded-xl backdrop-blur-lg border-none">
                        <textarea placeholder="New Design.."
                            class="w-[350px] p-5 bg-neutral-600 bg-opacity-25 text-white placeholder-gray-400 rounded-xl backdrop-blur-lg border-none"></textarea>
                        <button type="submit"
                            class="w-[350px] p-3 bg-neutral-600 bg-opacity-25 text-white font-semibold rounded-xl backdrop-blur-lg">Submit</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="fixed bottom-[45px] z-50 w-full flex justify-center">
            <div class="bg-white bg-opacity-25 backdrop-blur-2xl py-6 px-8 rounded-full inline-flex">
                <ul class="flex justify-center space-x-4">
                    <li><a href="#home"
                            class="px-4 py-2 text-white font-semibold rounded-full hover:bg-lime-500 transition">Home</a>
                    </li>   
                    <li><a href="#about"
                            class="px-4 py-2 text-white font-semibold rounded-full hover:bg-lime-500 transition">About</a>
                    </li>
                    <li><a href="#works"
                            class="px-4 py-2 text-white font-semibold rounded-full hover:bg-lime-500 transition">Works</a>
                    </li>
                    <li><a href="#blogs"
                            class="px-4 py-2 text-white font-semibold rounded-full hover:bg-lime-500 transition">Blogs</a>
                    </li>
                    <li><a href="#home"
                            class="px-4 py-2 text-white font-semibold rounded-full hover:bg-lime-500 transition">Contact</a>
                    </li>
                </ul>
            </div>
        </div>

</body>

</html>
