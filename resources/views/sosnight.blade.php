@extends('layouts.navbar-sosn')


@section('content')

    <div class="relative pt-60 flex flex-col items-center z-10">
        <div class="w-98 h-96 rounded-xl bg-white bg-opacity-30 flex flex-col items-center px-8 py-16">
            <h1 class="text-white text-5xl font-bold pb-5">
                What is nAISC Night?
            </h1>
            <div class="w-72 h-2 bg-gradient-to-l from-blue-300 to-purple-400 rounded-full"></div>
            <p class="text-white text-xl pt-8 text-center">
                nAISC night is a spectacular event
                which is dedicated for the competition finalists,
                AIChE’s representatives
                from the various universities in Southeast Asia,
                and AISC’s own committee. The event’s purpose is
                to turn strangers to friends and beyond!
            </p>
        </div>
    </div>

    <div class="relative pt-98 pb-101 flex flex-col items-center z-10">
        <h1 class="text-white font-black text-6xl pb-8">
            Are You Ready?
        </h1>
        <button class="px-10 py-1 rounded-full bg-gradient-to-l from-blue-300 to-purple-400 text-white text-2xl font-semibold">
            <a href="">Check Your Email!</a>
        </button>
    </div>

    <!-- Footer -->
    <footer class="bg-footer absolute w-full z-10">
        <div class="h-full flex flex-col items-start">
            <div class="px-10 md:px-12 lg:px-16 xl:px-20 py-8 md:py-10">
                <h2 class="font-bold text-2xl md:text-3xl lg:text-4xl xl:text-5xl text-white">
                    Contact Us
                </h2>
                <div class="flex pt-2 md:pt-4 lg:pt-6 xl:pt-8 items-center">
                    <img src="../images/tiktok.png" alt="" class="w-6 md:w-8 lg:w-10 xl:w-12 mr-2 md:mr-4">
                    <img src="../images/instagram.png" alt="" class="w-6 md:w-8 lg:w-10 xl:w-12">
                    <p class="pl-2 md:pl-5 text-white font-semibold text-sm md:text-base lg:text-lg xl:text-2xl">@aisc2022</p>
                </div>
                <div class="flex pl-8 md:pl-12 lg:pl-14 xl:pl-16 pt-2 md:pt-4 lg:pt-6 xl:pt-8 items-center">
                    <img src="../images/line-app.png" alt="" class="w-6 md:w-8 lg:w-10 xl:w-12">
                    <p class="pl-2 xl:pl-5 text-white font-semibold text-sm md:text-base lg:text-lg xl:text-2xl">@961ckski</p>
                </div>
                <div class="flex pl-8 md:pl-12 lg:pl-14 xl:pl-16 pt-2 md:pt-4 lg:pt-6 xl:pt-8 items-center">
                    <img src="../images/linkedin.png" alt="" class="w-6 md:w-8 lg:w-10 xl:w-12">
                    <p class="pl-2 xl:pl-5 text-white font-semibold text-sm md:text-base lg:text-lg xl:text-2xl">AIChE Indonesia Student Conference 2022</p>
                </div>
            </div>
        </div>
    </footer>
@endsection

