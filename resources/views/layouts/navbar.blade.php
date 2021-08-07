<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link href="{{ asset('css/forswiper.css') }}" rel="stylesheet">
    <title>AISC 2022 -  Competition</title>
</head>
<body class="bg-landing relative">
        <nav class="sticky top-0 z-20 bg-white font-montserrat backdrop-filter backdrop-blur-lg bg-opacity-30">
            <div class="mx-auto px-24 py-2">
                <div class="flex items-center justify-between h-20">
                    <span class="text-2xl text-gray-900 font-semibold">
                        LOGO AISC
                    </span>
                    <div class="text-lg flex space-x-20 text-gray-900">
                        <a href="{{ route('volunteer') }}">Volunteer</a>
                        <a href="{{ route('sosnight') }}">Event</a>
                        <a href="{{ route('competition') }}">Competition</a>
                    </div>
                </div>
            </div>
        </nav>
        @yield('content')
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" ></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script>
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