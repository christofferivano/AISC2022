<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>AISC 2022 -  Social Night</title>
</head>
<body class="bg-landing relative">
    <div style="background-image: url('images/bg-sos.png')" class="bg-cover h-landing bg-local relative h-full z-10">
        <nav class="sticky top-0 z-20 bg-white font-montserrat backdrop-filter backdrop-blur-lg bg-opacity-30">
            <div class="mx-auto px-24 py-2">
                <div class="flex items-center justify-between h-20">
                    <span class="text-2xl text-gray-900 font-semibold">
                        LOGO AISC
                    </span>
                    <div class="text-lg flex space-x-20 text-gray-900">
                        <a href="{{ route('volunteer') }}">Volunteer</a>
                        <a href="">Event</a>
                        <a href="{{ route('competition') }}">Competition</a>
                    </div>
                </div>
            </div>
        </nav>
        @yield('content')
    </div>
    <div class="absolute z-0">
        <img src="images/bg-soskiri.png" alt="" class="w-1/2">
    </div>

    <div class="flex justify-end z-0">
        <img src="images/bg-soskanan.png" alt="" class="w-1/2 pt-52 pl-10">
    </div>
</body>
</html>