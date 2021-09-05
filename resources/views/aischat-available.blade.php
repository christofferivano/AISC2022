@extends('layouts.navbar-regis-volunteer')


@section('content')
    <div class="absolute right-0 z-10 pt-72 md:pt-20">
        <img src="images/webinar.png" alt="" class="h-72 md:h-80 lg:h-100 xl:h-140">
    </div>
    <div class="absolute right-0 z-0">
        <img src="images/bulet-aischat-1.png" alt="" class="h-60 md:h-80 lg:h-100 xl:h-140">
    </div>
    <div class="absolute left-0 bottom-0 z-0 -mb-32 md:-mb-32 lg:-mb-16 xl:-mb-10 md:-ml-10 lg:-ml-20 xl:-ml-28">
        <img src="images/bulet-aischat-3.png" alt="" class="h-28 md:h-40 lg:h-52 xl:h-80">
    </div>
    <div class ="flex flex-col items-center md:items-start md:pl-20 lg:pl-28 xl:pl-36 pt-32 md:pt-32 lg:pt-36 xl:pt-40">
        <div class="justify-left items-left md:w-96">
            <h1 class="text-3xl md:text-2xl lg:text-3xl xl:text-4xl 2xl:text-4.5xl font-bold text-footer">
                What is AISChat?
            </h1>
        </div>
        <div class="w-40 md:w-40 lg:w-48 xl:w-56 2xl:w-60 pt-2">
            <div class="rounded-full py-0.5 md:py-1 bg-gradient-to-l from-blue-300 to-purple-400"></div>
        </div>
        <div class="w-97 md:w-72 xl:w-96 pt-8 text-sm md:text-xs lg:text-sm xl:text-lg text-justify">
            <p class="text-footer">
            AISChat is series of webinars held by AISC 2022
            that will discuss innovations in various industrial 
            sectors and many more. This event will invite 
            experts in their respective fields to speak and 
            share their knowledge at this event. AISChat will 
            be held 4 times in the period from 18 September 
            2021 to 15 January 2022. So what are you 
            waiting for!
            </p>
        </div>
    </div>

    <!-- Detail AISChat -->
    <div class="flex flex-col items-center pt-72 md:pt-40 lg:pt-60 xl:pt-80">
        <h1 class="text-xl md:text-2xl lg:text-3xl xl:text-5xl font-bold">
            Solving SDGs through Green Engineering innovations
        </h1>
        <div class="grid grid-cols-3 px-20 md:px-20 lg:px-32 xl:px-48 flex flex-row items-center">
            <div class="col-span-1 col-start-1">
                <div class="">
                    <img src="images/pahmad.png" alt="" class="shadow-lg h-40 md:h-60 lg:h-80 xl:h-100 w-32 md:w-42 md:w-72 xl:w-96">
                </div>
            </div>
            <div class="col-span-2 col-start-2 md:pl-20 py-14 md:py-20 lg:py-28 xl:py-40">
                <p class="text-xxs md:text-sm lg:text-base xl:text-xl font-semibold text-justify">
                Mr. Ahmad Agus Setiawan is an assistant professor in 
                renewable energy systems and planning at Gadjah Mada 
                University. He is an Energy expert staff in the Executive Office 
                of the President of the Republic of Indonesia. He will explain 
                the topic of "Diving Into ASEAN SDGs," where the discussion is 
                about the importance of SDGs for countries in ASEAN. So what 
                are you waiting for!
                </p>
                <p class="text-xs md:text-sm lg:text-base xl:text-xl font-semibold pt-4 md:pt-4 lg:pt-6 xl:pt-10">
                    Speaker : Ahmad Agus Setiawan, ST., M.Sc., Ph.D.
                </p>
                <p class="text-xs md:text-sm lg:text-base xl:text-xl font-semibold">
                    Time : Saturday, September 18th, 2021
                </p>
                <p class="text-xs md:text-base lg:text-lg xl:text-2xl font-semibold pl-7 md:pl-8 lg:pl-10 xl:pl-14 ml-2">
                    19.20 WIB - 21.45 WIB (UTC + 7)
                </p>
            </div>
        </div>
        <div class="grid grid-cols-3 px-20 md:px-20 lg:px-32 xl:px-48 pb-20 flex flex-row items-center">
            <div class="col-span-1 col-start-1">
                <div class="">
                    <img src="images/suherman.png" alt="" class="shadow-lg h-40 md:h-60 lg:h-80 xl:h-100 w-32 md:w-42 md:w-72 xl:w-96">
                </div>
            </div>
            <div class="col-span-2 col-start-2 md:pl-20 py-20 py-14 md:py-20 lg:py-28 xl:py-40">
                <p class="text-xxs md:text-xs lg:text-sm xl:text-lg font-semibold text-justify">
                Prof. Dr.Ing. Suherman, ST., M.T. is the chairman of the 
                chemical engineering department of the University of 
                Diponegoro and the chairman of the Indonesian Chemical 
                Engineering Education Association (APTEKIM). He has a 
                research interest in energy-efficient drying technology. He 
                obtained a Dr-ing in chemical engineering from the 
                Universität Magdeburg, Germany; M.Eng in chemical 
                engineering from the Bandung Institute of Technology, 
                Indonesia; B.Eng in chemical engineering from Diponegoro 
                University.
                </p>
                <p class="text-xs md:text-sm lg:text-base xl:text-xl font-semibold pt-4 md:pt-4 lg:pt-6 xl:pt-10">
                    Speaker : Prof. Dr.Ing. Suherman, ST., M.T.
                </p>
                <p class="text-xs md:text-sm lg:text-base xl:text-xl font-semibold">
                    Time : Saturday, September 18th, 2021
                </p>
                <p class="text-xs md:text-base lg:text-lg xl:text-2xl font-semibold pl-7 md:pl-8 lg:pl-10 xl:pl-14 ml-2">
                    19.20 WIB - 21.45 WIB (UTC + 7)
                </p>
            </div>
        </div>
    </div>

    <!-- Register AISChat -->
    <div class="flex flex-col items-center md:pt-32 pb-20 md:py-32">
        <h1 class="z-10 text-footer text-2xl md:text-4xl lg:text-4.5xl xl:text-6xl font-bold md:pb-4">Join Our AISChat Now!</h1>
        <div class="py-2 md:py-4">
            <button class="py-0.5 md:py-1 lg:py-1.5 xl:py-2 rounded-full bg-gradient-to-r from-purple-400 to-blue-300 shadow-lg z-10">
                <a class="text-white text-sm md:text-base lg:text-lg xl:text-xl font-semibold px-14 md:px-20 lg:w-24 xl:px-32" href="{{ route('aischat-regis') }}">Register Here!</a>
            </button>
        </div>
        <div class="absolute right-0 md:block right-0 -mt-40 md:-mt-52 z-0">
            <img src="images/bulet-aischat-5.png" alt="" class="h-20 md:h-32 lg:40 xl:h-52">
        </div>
        <div class="absolute left-0 -mt-32 z-0">
            <img src="images/bulet-aischat-4.png" alt="" class="h-96 md:h-120">
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-footer absolute w-full z-10">
        <div class="h-full flex flex-col items-start">
            <div class="px-10 md:px-12 lg:px-16 xl:px-20 py-8 md:py-10">
                <h2 class="font-bold text-2xl md:text-3xl lg:text-4xl xl:text-5xl text-white">
                    Contact Us
                </h2>
                <div class="flex pt-2 md:pt-4 lg:pt-6 xl:pt-8 items-center">
                    <img src="images/tiktok.png" alt="" class="w-6 md:w-8 lg:w-10 xl:w-12 mr-2 md:mr-4">
                    <img src="images/instagram.png" alt="" class="w-6 md:w-8 lg:w-10 xl:w-12">
                    <p class="pl-2 md:pl-5 text-white font-semibold text-sm md:text-base lg:text-lg xl:text-2xl">@aisc2022</p>
                </div>
                <div class="flex pl-8 md:pl-12 lg:pl-14 xl:pl-16 pt-2 md:pt-4 lg:pt-6 xl:pt-8 items-center">
                    <img src="images/line-app.png" alt="" class="w-6 md:w-8 lg:w-10 xl:w-12">
                    <p class="pl-2 xl:pl-5 text-white font-semibold text-sm md:text-base lg:text-lg xl:text-2xl">@961ckski</p>
                </div>
                <div class="flex pl-8 md:pl-12 lg:pl-14 xl:pl-16 pt-2 md:pt-4 lg:pt-6 xl:pt-8 items-center">
                    <img src="images/linkedin.png" alt="" class="w-6 md:w-8 lg:w-10 xl:w-12">
                    <p class="pl-2 xl:pl-5 text-white font-semibold text-sm md:text-base lg:text-lg xl:text-2xl">AIChE Indonesia Student Conference 2022</p>
                </div>
            </div>
        </div>
    </footer>
@endsection
