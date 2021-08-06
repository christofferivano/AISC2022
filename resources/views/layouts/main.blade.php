<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <link href="https://unpkg.com/swiper/swiper-bundle.min.css" rel="stylesheet" />
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
                        <a href="{{ route('dashboard') }}">
                            <img src="images/logo.png" alt="" class="w-24">
                        </a>
                    </div>
                    <div class="text-lg flex space-x-20 text-gray-900">
                        <a href="{{ route('volunteer') }}" class="text-footer text-lg font-semibold hover:shadow-xl hover:bg-opacity-80 hover:bg-white px-4 py-1 rounded">Volunteer</a>
                        <div class="event-btn inline-block relative">
                            <button class="inline-flex items-center hover:shadow-xl hover:bg-opacity-80 hover:bg-white px-4 py-1 rounded">
                                <span class="text-footer text-lg font-semibold">Event</span>
                                <img src="images/drop.png" alt="" class="w-3 ml-2">
                            </button>
                            <ul class="drop-event absolute hidden text-gray-700 pt-3 w-60 shadow-xl text-footer font-medium hover:text-xl">
                                <li class=""><a class="rounded-t bg-white backdrop-filter backdrop-blur-lg bg-opacity-80 hover:bg-gray-200 py-2 px-4 block duration-500" href="{{ route('webinar') }}">Webinar</a></li>
                                <li class=""><a class="bg-white backdrop-filter backdrop-blur-lg bg-opacity-80 hover:bg-gray-200 py-2 px-4 block" href="{{ route('sosnight') }}">Social Night</a></li>
                                <li class=""><a class="rounded-b bg-white backdrop-filter backdrop-blur-lg bg-opacity-80 hover:bg-gray-200 py-2 px-4 block" href="{{ route('conference') }}">Conference Day</a></li>
                            </ul>
                        </div>
                        <div class="compe-btn inline-block relative">
                            <button class="inline-flex items-center hover:shadow-xl hover:bg-opacity-80 hover:bg-white px-4 py-1 rounded">
                                <span class="text-footer text-lg font-semibold">Competition</span>
                                <img src="images/drop.png" alt="" class="w-3 ml-2">
                            </button>
                            <ul class="drop-compe text-gray-700 pt-3 w-60 shadow-xl text-footer font-medium">
                                <li class=""><a class="rounded-t bg-white backdrop-filter backdrop-blur-lg bg-opacity-80 hover:bg-gray-200 focus:bg-gray-400 py-2 px-4 block" href="{{ route('competition') }}">Competition 1</a></li>
                                <li class=""><a class="bg-white backdrop-filter backdrop-blur-lg bg-opacity-80 hover:bg-gray-200 focus:bg-gray-400 py-2 px-4 block" href="#">Competition 2</a></li>
                                <li class=""><a class="rounded-b bg-white backdrop-filter backdrop-blur-lg bg-opacity-80 hover:bg-gray-200 focus:bg-gray-400 py-2 px-4 block" href="#">Competition 3</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        @yield('content')
    </div>
    <script>
            const targetDiv1 = document.getElementById("department-1");
            const btn1 = document.getElementById("member-1");
            btn1.onclick = function ()
            {
                if(targetDiv1.style.display !== "none")
                {
                    targetDiv1.style.display = "none";
                }
                if(targetDiv1.style.display === "flex")
                {
                    targetDiv1.style.display = "flex";
                }
                else
                {
                    targetDiv1.style.display = "flex";
                }
                if(targetDiv2.style.display === "flex")
                {
                    targetDiv2.style.display = "none";
                }
                if(targetDiv3.style.display === "flex")
                {
                    targetDiv3.style.display = "none";
                }
                if(targetDiv4.style.display === "flex")
                {
                    targetDiv4.style.display = "none";
                }
                if(targetDiv5.style.display === "flex")
                {
                    targetDiv5.style.display = "none";
                }
                if(targetDiv6.style.display === "flex")
                {
                    targetDiv6.style.display = "none";
                }
                if(targetDiv7.style.display === "flex")
                {
                    targetDiv7.style.display = "none";
                }
                if(targetDiv8.style.display === "flex")
                {
                    targetDiv8.style.display = "none";
                }
                if(targetDiv9.style.display === "flex")
                {
                    targetDiv9.style.display = "none";
                }
            }

            const targetDiv2 = document.getElementById("department-2");
            const btn2 = document.getElementById("member-2");
            btn2.onclick = function ()
            {
                if(targetDiv2.style.display !== "none")
                {
                    targetDiv2.style.display = "none";
                }
                if(targetDiv2.style.display === "flex")
                {
                    targetDiv2.style.display = "flex";
                }
                else
                {
                    targetDiv2.style.display = "flex";
                }
                if(targetDiv1.style.display !== "none")
                {
                    targetDiv1.style.display = "none";
                }
                if(targetDiv3.style.display === "flex")
                {
                    targetDiv3.style.display = "none";
                }
                if(targetDiv4.style.display === "flex")
                {
                    targetDiv4.style.display = "none";
                }
                if(targetDiv5.style.display === "flex")
                {
                    targetDiv5.style.display = "none";
                }
                if(targetDiv6.style.display === "flex")
                {
                    targetDiv6.style.display = "none";
                }
                if(targetDiv7.style.display === "flex")
                {
                    targetDiv7.style.display = "none";
                }
                if(targetDiv8.style.display === "flex")
                {
                    targetDiv8.style.display = "none";
                }
                if(targetDiv9.style.display === "flex")
                {
                    targetDiv9.style.display = "none";
                }
            }

            const targetDiv3 = document.getElementById("department-3");
            const btn3 = document.getElementById("member-3");
            btn3.onclick = function ()
            {
                if(targetDiv3.style.display !== "none")
                {
                    targetDiv3.style.display = "none";
                }
                if(targetDiv3.style.display === "flex")
                {
                    targetDiv3.style.display = "flex";
                }
                else
                {
                    targetDiv3.style.display = "flex";
                }
                if(targetDiv1.style.display === "flex")
                {
                    targetDiv1.style.display = "none";
                }
                if(targetDiv2.style.display === "flex")
                {
                    targetDiv2.style.display = "none";
                }
                if(targetDiv4.style.display === "flex")
                {
                    targetDiv4.style.display = "none";
                }
                if(targetDiv5.style.display === "flex")
                {
                    targetDiv5.style.display = "none";
                }
                if(targetDiv6.style.display === "flex")
                {
                    targetDiv6.style.display = "none";
                }
                if(targetDiv7.style.display === "flex")
                {
                    targetDiv7.style.display = "none";
                }
                if(targetDiv8.style.display === "flex")
                {
                    targetDiv8.style.display = "none";
                }
                if(targetDiv9.style.display === "flex")
                {
                    targetDiv9.style.display = "none";
                }
            }

            const targetDiv4 = document.getElementById("department-4");
            const btn4 = document.getElementById("member-4");
            btn4.onclick = function ()
            {
                if(targetDiv4.style.display !== "none")
                {
                    targetDiv4.style.display = "none";
                }
                if(targetDiv4.style.display === "flex")
                {
                    targetDiv4.style.display = "flex";
                }
                else
                {
                    targetDiv4.style.display = "flex";
                }
                if(targetDiv1.style.display === "flex")
                {
                    targetDiv1.style.display = "none";
                }
                if(targetDiv2.style.display === "flex")
                {
                    targetDiv2.style.display = "none";
                }
                if(targetDiv3.style.display === "flex")
                {
                    targetDiv3.style.display = "none";
                }
                if(targetDiv5.style.display === "flex")
                {
                    targetDiv5.style.display = "none";
                }
                if(targetDiv6.style.display === "flex")
                {
                    targetDiv6.style.display = "none";
                }
                if(targetDiv7.style.display === "flex")
                {
                    targetDiv7.style.display = "none";
                }
                if(targetDiv8.style.display === "flex")
                {
                    targetDiv8.style.display = "none";
                }
                if(targetDiv9.style.display === "flex")
                {
                    targetDiv9.style.display = "none";
                }
            }

            const targetDiv5 = document.getElementById("department-5");
            const btn5 = document.getElementById("member-5");
            btn5.onclick = function ()
            {
                if(targetDiv5.style.display !== "none")
                {
                    targetDiv5.style.display = "none";
                }
                if(targetDiv5.style.display === "flex")
                {
                    targetDiv5.style.display = "flex";
                }
                else
                {
                    targetDiv5.style.display = "flex";
                }
                if(targetDiv1.style.display === "flex")
                {
                    targetDiv1.style.display = "none";
                }
                if(targetDiv2.style.display === "flex")
                {
                    targetDiv2.style.display = "none";
                }
                if(targetDiv3.style.display === "flex")
                {
                    targetDiv3.style.display = "none";
                }
                if(targetDiv4.style.display === "flex")
                {
                    targetDiv4.style.display = "none";
                }
                if(targetDiv6.style.display === "flex")
                {
                    targetDiv6.style.display = "none";
                }
                if(targetDiv7.style.display === "flex")
                {
                    targetDiv7.style.display = "none";
                }
                if(targetDiv8.style.display === "flex")
                {
                    targetDiv8.style.display = "none";
                }
                if(targetDiv9.style.display === "flex")
                {
                    targetDiv9.style.display = "none";
                }
            }

            const targetDiv6 = document.getElementById("department-6");
            const btn6 = document.getElementById("member-6");
            btn6.onclick = function ()
            {
                if(targetDiv6.style.display !== "none")
                {
                    targetDiv6.style.display = "none";
                }
                if(targetDiv6.style.display === "flex")
                {
                    targetDiv6.style.display = "flex";
                }
                else
                {
                    targetDiv6.style.display = "flex";
                }
                if(targetDiv1.style.display === "flex")
                {
                    targetDiv1.style.display = "none";
                }
                if(targetDiv2.style.display === "flex")
                {
                    targetDiv2.style.display = "none";
                }
                if(targetDiv3.style.display === "flex")
                {
                    targetDiv3.style.display = "none";
                }
                if(targetDiv4.style.display === "flex")
                {
                    targetDiv4.style.display = "none";
                }
                if(targetDiv5.style.display === "flex")
                {
                    targetDiv5.style.display = "none";
                }
                if(targetDiv7.style.display === "flex")
                {
                    targetDiv7.style.display = "none";
                }
                if(targetDiv8.style.display === "flex")
                {
                    targetDiv8.style.display = "none";
                }
                if(targetDiv9.style.display === "flex")
                {
                    targetDiv9.style.display = "none";
                }
            }

            const targetDiv7 = document.getElementById("department-7");
            const btn7 = document.getElementById("member-7");
            btn7.onclick = function ()
            {
                if(targetDiv7.style.display !== "none")
                {
                    targetDiv7.style.display = "none";
                }
                if(targetDiv7.style.display === "flex")
                {
                    targetDiv7.style.display = "flex";
                }
                else
                {
                    targetDiv7.style.display = "flex";
                }
                if(targetDiv1.style.display === "flex")
                {
                    targetDiv1.style.display = "none";
                }
                if(targetDiv2.style.display === "flex")
                {
                    targetDiv2.style.display = "none";
                }
                if(targetDiv3.style.display === "flex")
                {
                    targetDiv3.style.display = "none";
                }
                if(targetDiv4.style.display === "flex")
                {
                    targetDiv4.style.display = "none";
                }
                if(targetDiv5.style.display === "flex")
                {
                    targetDiv5.style.display = "none";
                }
                if(targetDiv6.style.display === "flex")
                {
                    targetDiv6.style.display = "none";
                }
                if(targetDiv8.style.display === "flex")
                {
                    targetDiv8.style.display = "none";
                }
                if(targetDiv9.style.display === "flex")
                {
                    targetDiv9.style.display = "none";
                }
            }

            const targetDiv8 = document.getElementById("department-8");
            const btn8 = document.getElementById("member-8");
            btn8.onclick = function ()
            {
                if(targetDiv8.style.display !== "none")
                {
                    targetDiv8.style.display = "none";
                }
                if(targetDiv8.style.display === "flex")
                {
                    targetDiv8.style.display = "flex";
                }
                else
                {
                    targetDiv8.style.display = "flex";
                }
                if(targetDiv1.style.display === "flex")
                {
                    targetDiv1.style.display = "none";
                }
                if(targetDiv2.style.display === "flex")
                {
                    targetDiv2.style.display = "none";
                }
                if(targetDiv3.style.display === "flex")
                {
                    targetDiv3.style.display = "none";
                }
                if(targetDiv4.style.display === "flex")
                {
                    targetDiv4.style.display = "none";
                }
                if(targetDiv5.style.display === "flex")
                {
                    targetDiv5.style.display = "none";
                }
                if(targetDiv6.style.display === "flex")
                {
                    targetDiv6.style.display = "none";
                }
                if(targetDiv7.style.display === "flex")
                {
                    targetDiv7.style.display = "none";
                }
                if(targetDiv9.style.display === "flex")
                {
                    targetDiv9.style.display = "none";
                }
            }

            const targetDiv9 = document.getElementById("department-9");
            const btn9 = document.getElementById("member-9");
            btn9.onclick = function ()
            {
                if(targetDiv9.style.display !== "none")
                {
                    targetDiv9.style.display = "none";
                }
                if(targetDiv9.style.display === "flex")
                {
                    targetDiv9.style.display = "flex";
                }
                else
                {
                    targetDiv9.style.display = "flex";
                }
                if(targetDiv1.style.display === "flex")
                {
                    targetDiv1.style.display = "none";
                }
                if(targetDiv2.style.display === "flex")
                {
                    targetDiv2.style.display = "none";
                }
                if(targetDiv3.style.display === "flex")
                {
                    targetDiv3.style.display = "none";
                }
                if(targetDiv4.style.display === "flex")
                {
                    targetDiv4.style.display = "none";
                }
                if(targetDiv5.style.display === "flex")
                {
                    targetDiv5.style.display = "none";
                }
                if(targetDiv6.style.display === "flex")
                {
                    targetDiv6.style.display = "none";
                }
                if(targetDiv7.style.display === "flex")
                {
                    targetDiv7.style.display = "none";
                }
                if(targetDiv8.style.display === "flex")
                {
                    targetDiv8.style.display = "none";
                }
            }
        </script>
</body>
</html>