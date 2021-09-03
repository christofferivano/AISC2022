@extends('layouts.navbar')

@section('content')

    <!-- Penjelasan Volunteer -->
    <div class="md:hidden absolute left-0 top-0">
        <img src="images/bulet-respon-volun-1.png" alt="" class="h-96"> 
    </div>
    <div class="z-0 absolute right-0 top-0 h-full">
        <img src="images/buletcompetenbig.png" alt="" class="h-3/6">
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
        <h1 class="font-bold text-4xl">
            <font color="#00000">Judul AISCompetency</font>
        </h1>
    </div>

    <!-- <div class="pt-10 md:pt-2 pb-60">
        <div class="px-2 md:px-12 relative md:flex">
            <div class="absolute pl-2 flex items-end top-0 left-0 z-10" data-aos="fade-left" data-aos-duration="2400">
                <img src="images/bgcompeawal.png" alt="" class="h-140 hidden md:flex">
            </div>
        </div>
    </div> -->
    <div class ="flex flex-row justify-center items-center px-40 py-32 pb-96">
        <div class="absolute right-60 w-96">
            <p class="text-footer py-5">
                Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi 
            </p>
            <p class="text-footer py-2">
                Speaker 
            </p>
            <p class="text-footer py-2">
                Date
            </p>
        </div>
        <div class="absolute left-0 rounded-lg overflow-hidden w-96 ml-64">
            <img src="images/bg-landing.png" alt="ko">
        </div>
    </div>
    
    <!-- Register Volunteer -->
    <div class="pt-20 flex flex-col items-center pt-80 md:pt-20">
        <h1 class="text-footer text-2xl md:text-5xl font-bold text-center md:py-2">Join Our AISCompetency Now!</h1>
        <div class="pt-5 pb-10 md:py-16">
            <button class="py-1 rounded-full bg-gradient-to-l from-blue-300 to-purple-400 shadow-lg">
                <a class="text-white text-xl font-semibold px-20" href="{{ route('competency-regis-1') }}">Register Here!</a>
            </button>
        </div>  
    </div>

    <div class="absolute right-0 top-3/4 h-1/3 mt-52"> 
        <img src="images/buletwarna.png" alt="" class="h-80">
    </div>

    <!-- Footer -->
    <footer class="bg-footer absolute w-full z-10">
        <div class="h-full flex flex-col items-start">
            <div class="px-10 md:px-20 py-8 md:py-10">
                <h2 class="font-bold text-2xl md:text-5xl text-white">
                    Contact Us
                </h2>
                <div class="flex pt-2 md:pt-8 items-center">
                    <img src="images/tiktok.png" alt="" class="w-6 md:w-12 mx-4">
                    <img src="images/instagram.png" alt="" class="w-6 md:w-12">
                    <p class="pl-2 md:pl-5 text-white font-semibold text-sm md:text-2xl">@aisc2022</p>
                </div>
                <div class="flex pl-20 pt-2 md:pt-8 items-center">
                    <img src="images/line-app.png" alt="" class="w-6 md:w-12">
                    <p class="pl-2 md:pl-5 text-white font-semibold text-sm md:text-2xl">@961ckski</p>
                </div>
                <div class="flex pl-20 pt-2 md:pt-8 items-center">
                    <img src="images/linkedin.png" alt="" class="w-6 md:w-12">
                    <p class="pl-2 md:pl-5 text-white font-semibold text-sm md:text-2xl">AIChE Indonesia Student Conference 2022</p>
                </div>
            </div>
        </div>
    </footer>
@endsection