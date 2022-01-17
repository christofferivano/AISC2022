@extends('layouts.navbar-exhibition')

@section('content')

    <!-- Penjelasan Volunteer -->
    <div class="z-0">
        <img src="images/exhibition.png" alt="">
        <div class="flex flex-row">
            <img src="images/exhibitionicon.png" alt="" class="w-1/2 pt-20 z-10" data-aos="fade-right" data-aos-duration="1900">
            <div class="pt-20 md:pt-44 pb-20 z-10 relative">
                <div class="px-2 md:px-12 relative md:flex">
                    <div class="z-20 md:pl-10 pt-20 flex flex-col items-center md:items-start" data-aos="fade-right" data-aos-duration="1900">
                        <h2 class="text-footer text-3xl md:text-5xl font-bold md:tracking-wide">
                            How to Join Exhibition?
                        </h2>
                        <div class="pt-5">
                            <div class="py-1 rounded-full bg-gradient-to-r from-purple-400 to-blue-300 w-56"></div>
                        </div>
                        <p class="w-64 md:w-97 py-7 text-footer text-lg md:text-lg text-center md:text-left">
                        Conference Day is the only Southeast Asian scale conference, organized by AISC that will discuss around the latest innovations. This event will bring in speakers who are experts in their fields and they will share fruitful insights and their knowledge for the sake of our better future. The chosen delegates will have an opportunity to ask and discuss a variety of topics with the speakers. The Conference Day will be held on 20 March 2022.
                        </p>
                    </div>
                </div>
            </div>
            <div class="absolute flex left-3/4 pl-24">
                <img src="images/kanan.png" alt="" class="z-0 h-150">
            </div>
        </div>
    </div>

    <!-- Register Volunteer -->
    <!-- <div style="background-image: url('images/regis-volunteer.png');" class="pt-20 pb-20 bg-cover bg-local relative"> -->
        <div class="flex flex-col items-center pt-72 pb-1 md:py-32">
            <h1 class="text-footer text-3xl md:text-6xl font-bold pb-10" data-aos="zoom-in" data-aos-duration="1000" >Join Exhibition Now!</h1>
            <h1 class="text-footer text-xl md:text-5xl font-bold" data-aos="zoom-in" data-aos-duration="1000" >Don't Forget to Vote</h1>
            <h1 class="text-footer text-xl md:text-5xl font-bold py-2" data-aos="zoom-in" data-aos-duration="1500" >The Best Poster</h1>
            <div class="py-2 md:py-4">
                <button class="py-1 rounded-full bg-gradient-to-r from-purple-400 to-blue-300 shadow-lg z-10" data-aos="zoom-in" data-aos-duration="2000">
                    <a class="text-white text-sm md:text-xl font-semibold px-20" href="{{ route('volunteer-end') }}">Vote Now!</a>
                </button>
            </div>
            <div class="absolute left-0 z-0 pb-10">
                <img src="images/kiriex.png" alt="" class="w-44 pl-0 md:w-80">
            </div>
            <div class="absolute right-0 z-0">
                <img src="images/bawah.png" alt="" class="w-44 pl-0 md:w-96">
            </div>
        </div>
    <!-- </div> -->
    
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