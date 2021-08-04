<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body class="relative h-full">
    <div class="absolute right-0 top-0 pr-16">
        <img src="images/bulet-volunteer-1.png" alt="" class="h-96"> 
    </div>
    <nav class="fixed w-full top-0 z-20 shadow-lg bg-white font-montserrat backdrop-filter backdrop-blur-lg bg-opacity-30">
        <div class="mx-auto px-24 py-2">
            <div class="flex items-center justify-between h-20">
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
                            <li class=""><a class="rounded-t bg-white backdrop-filter backdrop-blur-lg bg-opacity-80 hover:bg-gray-200 focus:bg-gray-400 py-2 px-4 block" href="#">Webinar</a></li>
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
    <script>
        const targetContent1 = document.getElementById("content-event-1");
        const btn1 = document.getElementById("event-1");
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
        }
        const targetContent2 = document.getElementById("content-event-2");
        const btn2 = document.getElementById("event-2");
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
        }
        const targetContent3 = document.getElementById("content-event-3");
        const btn3 = document.getElementById("event-3");
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
            if(targetContent2.style.display === "flex")
            {
                targetContent2.style.display = "none";
            }
            if(targetContent1.style.display === "flex")
            {
                targetContent1.style.display = "none";
            }
        }
        function showTesti1()
        {
            let hidden = document.getElementById('testi1');
            let hidden2 = document.getElementById('testi2');
            let hidden3 = document.getElementById('testi3');
            let hidden4 = document.getElementById('testi4');
            let bghidden1 = document.getElementById('bg-testi-1');
            let bghidden2 = document.getElementById('bg-testi-2');
            let bghidden3 = document.getElementById('bg-testi-3');
            let bghidden4 = document.getElementById('bg-testi-4');
            let foto1 = document.getElementById('foto-testi-1');
            let foto2 = document.getElementById('foto-testi-2');
            let foto3 = document.getElementById('foto-testi-3');
            let foto4 = document.getElementById('foto-testi-4');
            hidden.style.display = "block";
            hidden.style.transition = "opacity 200ms";
            hidden2.style.display = "none";
            hidden3.style.display = "none";
            hidden4.style.display = "none";
            bghidden1.style.display = "none";
            bghidden2.style.display = "block";
            bghidden3.style.display = "block";
            bghidden4.style.display = "block";
            foto1.style.borderTopRightRadius = 0;
            foto1.style.borderBottomRightRadius = 0;
            foto2.style.borderTopRightRadius = "0.5rem";
            foto2.style.borderBottomRightRadius = "0.5rem"; 
            foto3.style.borderTopRightRadius = "0.5rem";
            foto3.style.borderBottomRightRadius = "0.5rem"; 
            foto4.style.borderTopRightRadius = "0.5rem";
            foto4.style.borderBottomRightRadius = "0.5rem";  
        }
        function showTesti2()
        {
            let hidden = document.getElementById('testi1');
            let hidden2 = document.getElementById('testi2');
            let hidden3 = document.getElementById('testi3');
            let hidden4 = document.getElementById('testi4');
            let bghidden1 = document.getElementById('bg-testi-1');
            let bghidden2 = document.getElementById('bg-testi-2');
            let bghidden3 = document.getElementById('bg-testi-3');
            let bghidden4 = document.getElementById('bg-testi-4');
            let foto1 = document.getElementById('foto-testi-1');
            let foto2 = document.getElementById('foto-testi-2');
            let foto3 = document.getElementById('foto-testi-3');
            let foto4 = document.getElementById('foto-testi-4');
            hidden.style.display = "none";
            hidden2.style.display = "block";
            hidden3.style.display = "none";
            hidden4.style.display = "none";
            bghidden1.style.display = "block";
            bghidden2.style.display = "none";
            bghidden3.style.display = "block";
            bghidden4.style.display = "block";
            foto1.style.borderTopRightRadius = "0.5rem";
            foto1.style.borderBottomRightRadius = "0.5rem";
            foto2.style.borderTopRightRadius = 0;
            foto2.style.borderBottomRightRadius = 0; 
            foto3.style.borderTopRightRadius = "0.5rem";
            foto3.style.borderBottomRightRadius = "0.5rem"; 
            foto4.style.borderTopRightRadius = "0.5rem";
            foto4.style.borderBottomRightRadius = "0.5rem"; 
        }
        function showTesti3()
        {
            let hidden = document.getElementById('testi1');
            let hidden2 = document.getElementById('testi2');
            let hidden3 = document.getElementById('testi3');
            let hidden4 = document.getElementById('testi4');
            let bghidden1 = document.getElementById('bg-testi-1');
            let bghidden2 = document.getElementById('bg-testi-2');
            let bghidden3 = document.getElementById('bg-testi-3');
            let bghidden4 = document.getElementById('bg-testi-4');
            let foto1 = document.getElementById('foto-testi-1');
            let foto2 = document.getElementById('foto-testi-2');
            let foto3 = document.getElementById('foto-testi-3');
            let foto4 = document.getElementById('foto-testi-4');
            hidden.style.display = "none";
            hidden2.style.display = "none";
            hidden3.style.display = "block";
            hidden4.style.display = "none";
            bghidden1.style.display = "block";
            bghidden2.style.display = "block";
            bghidden3.style.display = "none";
            bghidden4.style.display = "block";
            foto1.style.borderTopRightRadius = "0.5rem";
            foto1.style.borderBottomRightRadius = "0.5rem";
            foto2.style.borderTopRightRadius = "0.5rem";
            foto2.style.borderBottomRightRadius = "0.5rem"; 
            foto3.style.borderTopRightRadius = 0;
            foto3.style.borderBottomRightRadius = 0; 
            foto4.style.borderTopRightRadius = "0.5rem";
            foto4.style.borderBottomRightRadius = "0.5rem"; 
        }
        function showTesti4()
        {
            let hidden = document.getElementById('testi1');
            let hidden2 = document.getElementById('testi2');
            let hidden3 = document.getElementById('testi3');
            let hidden4 = document.getElementById('testi4');
            let bghidden1 = document.getElementById('bg-testi-1');
            let bghidden2 = document.getElementById('bg-testi-2');
            let bghidden3 = document.getElementById('bg-testi-3');
            let bghidden4 = document.getElementById('bg-testi-4');
            let foto1 = document.getElementById('foto-testi-1');
            let foto2 = document.getElementById('foto-testi-2');
            let foto3 = document.getElementById('foto-testi-3');
            let foto4 = document.getElementById('foto-testi-4');
            hidden.style.display = "non";
            hidden2.style.display = "none";
            hidden3.style.display = "none";
            hidden4.style.display = "block";
            bghidden1.style.display = "block";
            bghidden2.style.display = "block";
            bghidden3.style.display = "block";
            bghidden4.style.display = "none";
            foto1.style.borderTopRightRadius = "0.5rem";
            foto1.style.borderBottomRightRadius = "0.5rem";
            foto2.style.borderTopRightRadius = "0.5rem";
            foto2.style.borderBottomRightRadius = "0.5rem"; 
            foto3.style.borderTopRightRadius = "0.5rem";
            foto3.style.borderBottomRightRadius = "0.5rem"; 
            foto4.style.borderTopRightRadius = 0;
            foto4.style.borderBottomRightRadius = 0; 
        }
    </script>
</body>
</html>