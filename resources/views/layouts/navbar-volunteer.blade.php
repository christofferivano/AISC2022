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
<body class="relative h-full">
    <div class="hidden md:block absolute right-0 top-0 pr-16">
        <img src="images/bulet-volunteer-1.png" alt="" class="h-96"> 
    </div>
    <nav class="fixed w-screen top-0 z-20 shadow-lg bg-white font-montserrat backdrop-filter backdrop-blur-lg bg-opacity-30">
        <div class="mx-auto px-24 py-2">
            <div class="flex items-center justify-between h-20">
                <div>
                    <a href="">
                        <img src="images/logo.png" alt="" class="w-24">
                    </a>
                </div>
                <div class="text-lg flex space-x-20 text-gray-900">
                    <a href="" class="hidden text-footer text-lg font-semibold hover:shadow-xl hover:bg-opacity-80 hover:bg-white px-4 py-1 rounded">Volunteer</a>
                    <div class="hidden event-btn inline-block relative">
                        <button class="inline-flex items-center hover:shadow-xl hover:bg-opacity-80 hover:bg-white px-4 py-1 rounded">
                            <span class="text-footer text-lg font-semibold">Event</span>
                            <img src="images/drop.png" alt="" class="w-3 ml-2">
                        </button>
                        <ul class="drop-event text-gray-700 pt-3 w-60 shadow-xl text-footer font-medium hover:text-xl">
                            <li class=""><a class="rounded-t bg-white backdrop-filter backdrop-blur-lg bg-opacity-80 hover:bg-gray-200 focus:bg-gray-400 py-2 px-4 block" href="#">Webinar</a></li>
                            <li class=""><a class="bg-white backdrop-filter backdrop-blur-lg bg-opacity-80 hover:bg-gray-200 focus:bg-gray-400 py-2 px-4 block" href="#">Social Night</a></li>
                            <li class=""><a class="rounded-b bg-white backdrop-filter backdrop-blur-lg bg-opacity-80 hover:bg-gray-200 focus:bg-gray-400 py-2 px-4 block" href="#">Conference Day</a></li>
                        </ul>
                    </div>
                    <div class="hidden compe-btn inline-block relative">
                        <button class="inline-flex items-center hover:shadow-xl hover:bg-opacity-80 hover:bg-white px-4 py-1 rounded">
                            <span class="text-footer text-lg font-semibold">Competition</span>
                            <img src="images/drop.png" alt="" class="w-3 ml-2">
                        </button>
                        <ul class="drop-compe text-gray-700 pt-3 w-60 shadow-xl text-footer font-medium">
                            <li class=""><a class="rounded-t bg-white backdrop-filter backdrop-blur-lg bg-opacity-80 hover:bg-gray-200 focus:bg-gray-400 py-2 px-4 block" href="#">Competition 1</a></li>
                            <li class=""><a class="bg-white backdrop-filter backdrop-blur-lg bg-opacity-80 hover:bg-gray-200 focus:bg-gray-400 py-2 px-4 block" href="#">Competition 2</a></li>
                            <li class=""><a class="rounded-b bg-white backdrop-filter backdrop-blur-lg bg-opacity-80 hover:bg-gray-200 focus:bg-gray-400 py-2 px-4 block" href="#">Competition 3</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    @yield('content')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" ></script>
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
            var $swiper = $(".swiper2");
            var $bottomSlide = null; 
            var $bottomSlideContent = null; 

            var mySwiper = new Swiper(".swiper2", {
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