<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <link href="https://unpkg.com/swiper/swiper-bundle.min.css" rel="stylesheet" />
    <link href="{{ asset('css/forswiper.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body class="relative">
    <div style="background-image: url('images/bg-landing-2.png')" class="bg-cover h-landing bg-local relative h-full">
        <div class="absolute pt-12">
            <img src="images/bulet-landing-1.png" alt="" class="w-1/2"> 
        </div>
        <div class="absolute right-0 top-0">
            <img src="images/bulet-landing-2.png" alt="" class="h-120"> 
        </div>
        <div class="absolute bottom-0 pl-100 -mb-10">
            <img src="images/bulet-landing-3.png" alt="" class="w-1/2"> 
        </div>
        <nav class="fixed w-full top-0 z-20 shadow-lg bg-white font-montserrat backdrop-filter backdrop-blur-lg bg-opacity-30">
            <div class="mx-auto px-24 py-2">
                <div class="flex items-center justify-between h-20">
                    <!-- <span class="text-2xl text-gray-900 font-semibold">
                        LOGO AISC
                    </span> -->
                    <div>
                        <a href="">
                            <img src="images/logo.png" alt="" class="w-24">
                        </a>
                    </div>
                    <div class="text-lg flex space-x-20 text-gray-900">
                        <a href="" class="text-footer text-lg font-semibold hover:shadow-xl hover:bg-opacity-80 hover:bg-white px-4 py-1 rounded">Volunteer</a>
                        <div class="event-btn inline-block relative">
                            <button class="inline-flex items-center hover:shadow-xl hover:bg-opacity-80 hover:bg-white px-4 py-1 rounded">
                                <span class="text-footer text-lg font-semibold">Event</span>
                                <img src="images/drop.png" alt="" class="w-3 ml-2">
                            </button>
                            <ul class="drop-event text-gray-700 pt-3 w-60 shadow-xl text-footer font-medium hover:text-xl">
                                <li class=""><a class="rounded-t bg-white backdrop-filter backdrop-blur-lg bg-opacity-80 hover:bg-gray-200 focus:bg-gray-400 py-2 px-4 block" href="#">Pre-Event</a></li>
                                <li class=""><a class="bg-white backdrop-filter backdrop-blur-lg bg-opacity-80 hover:bg-gray-200 focus:bg-gray-400 py-2 px-4 block" href="#">Social Night</a></li>
                                <li class=""><a class="rounded-b bg-white backdrop-filter backdrop-blur-lg bg-opacity-80 hover:bg-gray-200 focus:bg-gray-400 py-2 px-4 block" href="#">Conference Day</a></li>
                            </ul>
                        </div>
                        <div class="compe-btn inline-block relative">
                            <button class="inline-flex items-center hover:shadow-xl hover:bg-opacity-80 hover:bg-white px-4 py-1 rounded">
                                <span class="text-footer text-lg font-semibold">Competition</span>
                                <img src="images/drop.png" alt="" class="w-3 ml-2">
                            </button>
                            <ul class="drop-compe text-gray-700 pt-3 w-60 shadow-xl text-footer font-medium">
                                <li class=""><a class="rounded-t bg-white backdrop-filter backdrop-blur-lg bg-opacity-80 hover:bg-gray-200 focus:bg-gray-400 py-2 px-4 block" href="#">Paper Competition</a></li>
                                <li class=""><a class="bg-white backdrop-filter backdrop-blur-lg bg-opacity-80 hover:bg-gray-200 focus:bg-gray-400 py-2 px-4 block" href="#">Poster Competition</a></li>
                                <li class=""><a class="rounded-b bg-white backdrop-filter backdrop-blur-lg bg-opacity-80 hover:bg-gray-200 focus:bg-gray-400 py-2 px-4 block" href="#">ChemE Jeopardy Competition</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        @yield('content')
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" ></script>
    <script>
        var divs = [
            "department-1", "department-2", "department-3" ,"department-4", "department-5",
            "department-6", "department-7", "department-8", "department-9"
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
</body>
</html>