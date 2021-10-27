<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <link href="{{ asset('css/forswiper.css') }}" rel="stylesheet">
    <title>AISC 2022</title>
    <link rel="shortcut icon" href="/images/logogram.ico" />
</head>
<body class="relative h-full">
    <div class="hidden md:block absolute right-0 top-0 pr-16">
        <img src="images/bulet-volunteer-1.png" alt="" class="h-96"> 
    </div>
    <nav class="hidden md:block fixed w-screen top-0 z-20 shadow-lg bg-white font-montserrat backdrop-filter backdrop-blur-lg bg-opacity-30">
        <div class="mx-auto px-5 md:px-10 lg:px-16 xl:px-24 py-2">
            <div class="flex items-center justify-between md:h-12 lg:h-16 xl:h-20">
                <div>
                    <a href="{{ route('dashboard') }}">
                        <img src="images/logo.png" alt="" class="md:w-16 lg:w-20 xl:w-24">
                    </a>
                </div>
                <div class="text-lg flex md:flex-row md:space-x-10 lg:space-x-14 xl:space-x-20 text-gray-900">
                    <a href="{{ route('volunteer') }}" class="hidden text-footer text-lg font-semibold hover:shadow-xl hover:bg-opacity-80 hover:bg-white px-4 py-1 rounded">Volunteer</a>
                    <div class="hidden event-btn inline-block relative">
                    <a href="">
                        <img src="/images/logo.png" alt="" class="w-16 md:w-24">
                    </a>
                </div>
                <div class="text-lg flex space-x-20 text-gray-900">
                    <a href="" class="hidden md:block text-footer md:text-xs lg:text-sm xl:text-lg font-semibold hover:shadow-xl hover:bg-opacity-80 hover:bg-white px-4 py-1 rounded">Volunteer</a>
                    @auth
                        <a class="hidden md:block text-footer md:text-xs lg:text-sm xl:text-lg font-semibold hover:shadow-xl hover:bg-opacity-80 hover:bg-white px-4 py-1 rounded" href="{{ route('admin') }}">Admin Page</a>
                    @endauth
                    <div class="hidden md:block event-btn inline-block relative">
                        <button class="inline-flex items-center hover:shadow-xl hover:bg-opacity-80 hover:bg-white px-4 py-1 rounded">
                            <span class="text-footer md:text-xs lg:text-sm xl:text-lg font-semibold">Event</span>
                            <img src="/images/drop.png" alt="" class="md:w-2 lg:w-3 ml-2">
                        </button>
                        <ul class="drop-event text-gray-700 pt-3 w-60 shadow-xl text-footer font-medium hover:text-xl">
                            <li class=""><a class="rounded-t bg-white backdrop-filter backdrop-blur-lg bg-opacity-80 hover:bg-gray-200 focus:bg-gray-400 py-2 px-4 block" href="{{ route('aischat') }}">AISChat</a></li>
                            <li class=""><a class="bg-white backdrop-filter backdrop-blur-lg bg-opacity-80 hover:bg-gray-200 focus:bg-gray-400 py-2 px-4 block" href="">Social Night</a></li>
                            <li class=""><a class="bg-white backdrop-filter backdrop-blur-lg bg-opacity-80 hover:bg-gray-200 focus:bg-gray-400 py-2 px-4 block" href="">Aiscompetency</a></li>
                            <li class=""><a class="rounded-b bg-white backdrop-filter backdrop-blur-lg bg-opacity-80 hover:bg-gray-200 focus:bg-gray-400 py-2 px-4 block" href="">Conference Day</a></li>
                        </ul>
                    </div>
                    <div class="hidden md:block compe-btn inline-block relative">
                        <button class="inline-flex items-center hover:shadow-xl hover:bg-opacity-80 hover:bg-white px-4 py-1 rounded">
                            <span class="text-footer md:text-xs lg:text-sm xl:text-lg font-semibold">Competition</span>
                            <img src="images/drop.png" alt="" class="md:w-2 lg:w-3 ml-2">
                        </button>
                        <ul class="drop-compe text-gray-700 pt-3 w-60 shadow-xl text-footer font-medium">
                            <li class=""><a class="rounded-t bg-white backdrop-filter backdrop-blur-lg bg-opacity-80 hover:bg-gray-200 focus:bg-gray-400 py-2 px-4 block" href="{{ route('paper-competition') }}">Paper Competition</a></li>
                            <li class=""><a class="bg-white backdrop-filter backdrop-blur-lg bg-opacity-80 hover:bg-gray-200 focus:bg-gray-400 py-2 px-4 block" href="{{ route('poster-competition') }}">Poster Competition</a></li>
                            <li class=""><a class="rounded-b bg-white backdrop-filter backdrop-blur-lg bg-opacity-80 hover:bg-gray-200 focus:bg-gray-400 py-2 px-4 block" href="{{ route('cheme-competition') }}">ChemE Jeopardy Competition</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- navbar mobile -->
    <div class="md:hidden w-full fixed top-0 z-20 shadow-lg bg-white font-montserrat backdrop-filter backdrop-blur-lg bg-opacity-30">
        <div x-data="{ open: false }" class="md:hidden flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
            <div class="h-20 flex flex-row items-center justify-between">
                <a href="{{ route('dashboard') }}">
                    <img src="images/logo.png" alt="" class="w-16 md:w-24">
                </a>
                <button class="md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
                    <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                    <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                    <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <nav :class="{'flex': open, 'hidden': !open}" class="flex-col flex-grow pb-4 md:pb-0 hidden md:flex md:justify-end md:flex-row">
                <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="{{ route('volunteer') }}">Volunteer</a>
                <div @click.away="open = false" class="relative" x-data="{ open: false }">
                    <button @click="open = !open" class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:w-auto md:inline md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                    <span>Event</span>
                    <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                    <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute z-10 right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48">
                        <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-800">
                            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">AISChat</a>
                            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Social Night</a>
                            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Conference Day</a>
                        </div>
                    </div>
                </div>
                <div @click.away="open = false" class="relative" x-data="{ open: false }">
                    <button @click="open = !open" class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:w-auto md:inline md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                    <span>Competition</span>
                    <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                    <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute z-10 right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48">
                        <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-800">
                            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Paper Competition</a>
                            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Poster Competition</a>
                            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">ChemE Jeopardy Competition</a>
                        </div>
                    </div>
                </div>        
            </nav>
        </div>
    </div>
    @yield('content')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" ></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var divs = [
            "content-event-1", "content-event-2", "content-event-3",
            "content-compe-1", "content-compe-2", "content-compe-3",
            "content-mm-1", "content-mm-2", "content-mm-3",
        ];
        var visibleDivId = null;
        function divVisibility(divId) 
        {
            if(visibleDivId === divId) {
                visibleDivId = divId;
            } 
            else 
            {
                visibleDivId = divId;
            }
            hideNonVisibleDivs();
        }
        function hideNonVisibleDivs() 
        {
            var i, divId, div;
            for(i = 0; i < divs.length; i++) {
                divId = divs[i];
                div = document.getElementById(divId);
                if(visibleDivId === divId) {
                    div.style.display = "flex";
                } else {
                    div.style.display = "none";
                }
            }
        }
        const targetContent1 = document.getElementById("event");
        const btn1 = document.getElementById("card-event");
        btn1.onclick = function () {
            if(targetContent1.style.display !== "none")
            {
                targetContent1.style.display = "none";
            }
            if(targetContent1.style.display === "flex")
            {
                targetContent1.style.display = "flex";
            }
            else
            {
                targetContent1.style.display = "flex";
            }
            if(targetContent2.style.display === "flex")
            {
                targetContent2.style.display = "none";
            }
            if(targetContent3.style.display === "flex")
            {
                targetContent3.style.display = "none";
            }
            if(targetContent4.style.display === "flex")
            {
                targetContent4.style.display = "none";
            }
            if(targetContent5.style.display === "flex")
            {
                targetContent5.style.display = "none";
            }
        }
        const targetContent2 = document.getElementById("competition");
        const btn2 = document.getElementById("card-compe");
        btn2.onclick = function () {
            if(targetContent2.style.display !== "none")
            {
                targetContent2.style.display = "none";
            }
            if(targetContent2.style.display === "flex")
            {
                targetContent2.style.display = "flex";
            }
            else
            {
                targetContent2.style.display = "flex";
            }
            if(targetContent1.style.display === "flex")
            {
                targetContent1.style.display = "none";
            }
            if(targetContent3.style.display === "flex")
            {
                targetContent3.style.display = "none";
            }
            if(targetContent4.style.display === "flex")
            {
                targetContent4.style.display = "none";
            }
            if(targetContent5.style.display === "flex")
            {
                targetContent5.style.display = "none";
            }
        }
        const targetContent3 = document.getElementById("mm");
        const btn3 = document.getElementById("card-mm");
        btn3.onclick = function () {
            if(targetContent3.style.display !== "none")
            {
                targetContent3.style.display = "none";
            }
            if(targetContent3.style.display === "flex")
            {
                targetContent3.style.display = "flex";
            }
            else
            {
                targetContent3.style.display = "flex";
            }
            if(targetContent1.style.display === "flex")
            {
                targetContent1.style.display = "none";
            }
            if(targetContent2.style.display === "flex")
            {
                targetContent2.style.display = "none";
            }
            if(targetContent4.style.display === "flex")
            {
                targetContent4.style.display = "none";
            }
            if(targetContent5.style.display === "flex")
            {
                targetContent5.style.display = "none";
            }
        }
        const targetContent4 = document.getElementById("logistic");
        const btn4 = document.getElementById("card-logistic");
        btn4.onclick = function () {
            if(targetContent4.style.display !== "none")
            {
                targetContent4.style.display = "none";
            }
            if(targetContent4.style.display === "flex")
            {
                targetContent4.style.display = "flex";
            }
            else
            {
                targetContent4.style.display = "flex";
            }
            if(targetContent1.style.display === "flex")
            {
                targetContent1.style.display = "none";
            }
            if(targetContent2.style.display === "flex")
            {
                targetContent2.style.display = "none";
            }
            if(targetContent3.style.display === "flex")
            {
                targetContent3.style.display = "none";
            }
            if(targetContent5.style.display === "flex")
            {
                targetContent5.style.display = "none";
            }
        }
        const targetContent5 = document.getElementById("sponsorship");
        const btn5 = document.getElementById("card-sponsorship");
        btn5.onclick = function () {
            if(targetContent5.style.display !== "none")
            {
                targetContent5.style.display = "none";
            }
            if(targetContent5.style.display === "flex")
            {
                targetContent5.style.display = "flex";
            }
            else
            {
                targetContent5.style.display = "flex";
            }
            if(targetContent1.style.display === "flex")
            {
                targetContent1.style.display = "none";
            }
            if(targetContent2.style.display === "flex")
            {
                targetContent2.style.display = "none";
            }
            if(targetContent3.style.display === "flex")
            {
                targetContent3.style.display = "none";
            }
            if(targetContent4.style.display === "flex")
            {
                targetContent4.style.display = "none";
            }
        }
        $(document).ready(function() {
        var $swiper = $(".swiper-container");
        var $bottomSlide = null; 
        var $bottomSlideContent = null; 

        var mySwiper = new Swiper(".swiper-container", {
            spaceBetween: 1,
            slidesPerView: 3,
            centeredSlides: true,
            roundLengths: true,
            loop: true,
            loopAdditionalSlides: 30,
            navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev"
            }
        });
    });
    </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>