<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body class="relative h-full">
    <nav class="fixed w-full top-0 z-20 shadow-lg bg-white font-montserrat backdrop-filter backdrop-blur-lg bg-opacity-30">
        <div class="mx-auto px-24 py-2">
            <div class="flex items-center justify-between h-20">
                <span class="text-2xl text-gray-900 font-semibold">
                    LOGO AISC
                </span>
                <div class="text-lg flex space-x-20 text-gray-900">
                    <a href="" class="text-footer text-lg font-semibold hover:shadow-xl hover:bg-opacity-80 hover:bg-white px-4 py-1 rounded">Volunteer</a>
                    <div class="event-btn inline-block relative">
                        <button class="inline-flex items-center hover:shadow-xl hover:bg-opacity-80 hover:bg-white px-4 py-1 rounded">
                            <span class="text-footer text-lg font-semibold">Event</span>
                            <img src="images/drop.png" alt="" class="w-3 ml-2">
                        </button>
                        <ul class="drop-event absolute hidden text-gray-700 pt-3 w-60 shadow-xl text-footer font-medium hover:text-xl">
                            <li class=""><a class="rounded-t bg-white backdrop-filter backdrop-blur-lg bg-opacity-80 hover:bg-gray-200 py-2 px-4 block duration-500" href="#">Webinar</a></li>
                            <li class=""><a class="bg-white backdrop-filter backdrop-blur-lg bg-opacity-80 hover:bg-gray-200 py-2 px-4 block" href="#">Social Night</a></li>
                            <li class=""><a class="rounded-b bg-white backdrop-filter backdrop-blur-lg bg-opacity-80 hover:bg-gray-200 py-2 px-4 block" href="#">Conference Day</a></li>
                        </ul>
                    </div>
                    <div class="compe-btn inline-block relative">
                        <button class="inline-flex items-center hover:shadow-xl hover:bg-opacity-80 hover:bg-white px-4 py-1 rounded">
                            <span class="text-footer text-lg font-semibold">Competition</span>
                            <img src="images/drop.png" alt="" class="w-3 ml-2">
                        </button>
                        <ul class="drop-compe absolute hidden text-gray-700 pt-3 w-60 shadow-xl text-footer font-medium">
                            <li class=""><a class="rounded-t bg-white backdrop-filter backdrop-blur-lg bg-opacity-80 hover:bg-gray-200 py-2 px-4 block" href="#">Competition 1</a></li>
                            <li class=""><a class="bg-white backdrop-filter backdrop-blur-lg bg-opacity-80 hover:bg-gray-200 py-2 px-4 block" href="#">Competition 2</a></li>
                            <li class=""><a class="rounded-b bg-white backdrop-filter backdrop-blur-lg bg-opacity-80 hover:bg-gray-200 py-2 px-4 block" href="#">Competition 3</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    @yield('content')
    <script>
        function showTesti1()
        {
            let hidden = document.getElementById('testi1');
            let hidden2 = document.getElementById('testi2');
            let hidden3 = document.getElementById('testi3');
            let hidden4 = document.getElementById('testi4');
            let bghidden = document.getElementById('bg-testi-1');
            let foto = document.getElementById('foto-testi-1');
            hidden.style.display = "block";
            hidden2.style.display = "none";
            hidden3.style.display = "none";
            hidden4.style.display = "none";
            bghidden.style.display = "none";
            foto.style.borderTopRightRadius = 0;
            foto.style.borderBottomRightRadius = 0; 
        }
        function showTesti2()
        {
            let hidden = document.getElementById('testi1');
            let hidden2 = document.getElementById('testi2');
            let hidden3 = document.getElementById('testi3');
            let hidden4 = document.getElementById('testi4');
            let bghidden = document.getElementById('bg-testi-2');
            let foto = document.getElementById('foto-testi-2');
            hidden.style.display = "none";
            hidden2.style.display = "block";
            hidden3.style.display = "none";
            hidden4.style.display = "none";
            bghidden.style.display = "none";
            foto.style.borderTopRightRadius = 0;
            foto.style.borderBottomRightRadius = 0; 
        }
        function showTesti3()
        {
            let hidden = document.getElementById('testi1');
            let hidden2 = document.getElementById('testi2');
            let hidden3 = document.getElementById('testi3');
            let hidden4 = document.getElementById('testi4');
            let bghidden = document.getElementById('bg-testi-3');
            let foto = document.getElementById('foto-testi-3');
            hidden.style.display = "none";
            hidden2.style.display = "none";
            hidden3.style.display = "block";
            hidden4.style.display = "none";
            bghidden.style.display = "none";
            foto.style.borderTopRightRadius = 0;
            foto.style.borderBottomRightRadius = 0; 
        }
        function showTesti4()
        {
            let hidden = document.getElementById('testi1');
            let hidden2 = document.getElementById('testi2');
            let hidden3 = document.getElementById('testi3');
            let hidden4 = document.getElementById('testi4');
            let bghidden = document.getElementById('bg-testi-4');
            let foto = document.getElementById('foto-testi-4');
            hidden.style.display = "non";
            hidden2.style.display = "none";
            hidden3.style.display = "none";
            hidden4.style.display = "block";
            bghidden.style.display = "none";
            foto.style.borderTopRightRadius = 0;
            foto.style.borderBottomRightRadius = 0; 
        }
    </script>
</body>
</html>