<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body class="relative">
    <div style="background-image: url('images/bg-landing.png')" class="bg-cover h-landing bg-local relative h-full">
        <div class="absolute pt-12 pl-5">
            <img src="images/bulet1.png" alt="" class="w-1/2"> 
        </div>
        <div class="absolute right-0 bottom-0 pb-16 pr-96">
            <img src="images/bulet1.png" alt="" class="w-1/2"> 
        </div>
        <div class="absolute right-0 pt-32 pr-10">
            <img src="images/bulet2.png" alt="" class="w-3/4 -mr-36"> 
        </div>
        <div class="absolute pt-28 pl-80">
            <img src="images/bulet3.png" alt="" class="w-1/2"> 
        </div>
        <div class="absolute right-0 bottom-0 pr-10">
            <img src="images/bulet2.png" alt="" class=""> 
        </div>
        <div class="absolute pt-72">
            <img src="images/bulet5.png" alt="" class="w-1/2"> 
        </div>
        <nav class="fixed w-full top-0 z-50 bg-white font-montserrat backdrop-filter backdrop-blur-lg bg-opacity-30">
            <div class="mx-auto px-24 py-2">
                <div class="flex items-center justify-between h-20">
                    <span class="text-2xl text-gray-900 font-semibold">
                        LOGO AISC
                    </span>
                    <div class="text-lg flex space-x-20 text-gray-900">
                        <a href="">Volunteer</a>
                        <a href="">Event</a>
                        <a href="">Competition</a>
                    </div>
                </div>
            </div>
        </nav>
        @yield('content')
    </div>
</body>
</html>