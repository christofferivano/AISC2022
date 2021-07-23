<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body class="relative">
    <div style="background-image: url('images/bg-landing.png')" class="bg-cover h-landing bg-local relative h-full">
        <nav class="sticky top-0 z-20 bg-white font-montserrat backdrop-filter backdrop-blur-lg bg-opacity-30">
            <div class="mx-auto px-24 py-2">
                <div class="flex items-center justify-between h-16">
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