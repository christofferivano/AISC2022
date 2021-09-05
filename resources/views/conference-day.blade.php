@extends('layouts.navbar-conf')

@section('content')

    <!-- Deskripsi Conf Day -->
    <div class="py-60 pl-36 flex flex-row items-start">
        <div class="flex flex-row items-start">
            <div class="px-5 border border-white shadow-lg rounded-md sticky top-0 z-10 bg-gray-200 backdrop-filter backdrop-blur-sm bg-opacity-80 h-80 w-97.5 flex flex-col justify-center items-start">
                <h1 class="font-bold text-4xl">
                    Apa itu Conference Day?
                </h1>
                <div class="py-5">
                    <div class="rounded-full py-1 w-48 bg-gradient-to-r from-purple-400 to-red-500"></div>
                </div>
                <p>
                    Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi
                    Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi
                    Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi
                    Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi
                    Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi
                </p>
            </div>
        </div>
    </div>

    <!-- Register Conf Day -->
    <div class="pt-10 pb-20 flex flex-col items-center">
        <h1 class="text-footer text-6xl font-bold">
            Join Conference Day Now!
        </h1>
        <div class="py-6">
            <button class="bg-gradient-to-r from-pink-300 to-red-500 rounded-full py-1 shadow-lg">
                <a href="" class="text-white font-semibold text-xl px-20">Register Here!</a>
            </button>
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