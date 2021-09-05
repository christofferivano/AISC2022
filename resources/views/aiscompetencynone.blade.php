@extends('layouts.navbar')

@section('content')

    <!-- Penjelasan Volunteer -->
    <div class="md:hidden absolute left-0 top-0">
        <img src="images/bulet-respon-volun-1.png" alt="" class="h-96"> 
    </div>
    <div class="z-0 absolute right-0 top-0 h-full">
        <img src="images/buletcompetenbig.png" alt="" class="h-4/6">
    </div>
    <div class="pt-10 md:pt-2 pb-60">
        <div class="px-2 md:px-12 relative md:flex">
            <div class="z-10 md:px-28 pt-20 flex flex-col items-center md:items-start" data-aos="fade-right" data-aos-duration="1900">
                <h2 class="text-footer text-3xl md:text-5xl font-bold md:tracking-wide">
                    What is AISCompetency?
                </h2>
                <div class="pt-5">
                    <div class="py-1 rounded-full bg-gradient-to-r from-pink-400 to-red-500 w-56"></div>
                </div>
                <p class="w-64 md:w-1/2 py-7 text-footer text-lg md:text-xl text-center md:text-left">
                    AISCompetency is series of workshop held by
                    AISC 2022 that will discuss competencies
                    needed when entering the work-life and studying
                    in university. This event will invite experts in their 
                    respective fields to speak and share their 
                    knowledge at this event. AISCompetency will be 
                    held twice, from October 16, 2021 to December 
                    18, 2022. So join us and we'll see you, on the inside!
                </p>
            </div>
            <div class="absolute pl-20 flex items-end top-0 right-0 z-10" data-aos="fade-left" data-aos-duration="2400">
                <img src="images/bgcompeawal.png" alt="" class="h-140 hidden md:flex">
            </div>
        </div>
    </div>

    <div class="absolute left-0 z-0 top-1/2 h-1/2">
        <img src="images/buletcompeten.png" alt="" class="h-full">
    </div>

    <div class="flex justify-center items-center pt-20 pb-20 z-10">
        <h1 class="font-extrabold text-7xl">
            <font color="#D3D3D3">No Schedule Yet</font>
        </h1>
    </div>
    
    <div class="absolute right-0 top-3/4 h-1/2"> 
        <img src="images/buletwarna.png" alt="" class="h-96">
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