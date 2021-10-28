@extends('layouts.navbar')

@section('content')
    <div class="absolute right-0 lg:right-40 top-0">
        <img src="images/bulet-compe-1.png" alt="" class="h-48 lg:h-60 xl:h-80"> 
    </div>
    <div class="z-0 absolute left-0 top-80">
        <img src="images/bulet-compe-2.png" alt="" class="h-80 lg:h-96 xl:h-120"> 
    </div>

    <!-- Penjelasan Competition -->
    <div class="pt-10 md:pt-14 lg:pt-20 pb-20">
        <div class="px-2 md:px-12 relative md:flex">
            <div class="z-10 md:pl-5 lg:pl-12 xl:pl-20 pt-20 flex flex-col items-center md:items-start" data-aos="fade-right" data-aos-duration="1900">
                <h2 class="text-footer text-3xl md:text-4xl lg:text-5xl xl:text-6xl font-bold md:tracking-wide">
                    What is Competition?
                </h2>
                <div class="pt-5">
                    <div class="py-1 rounded-full bg-gradient-to-r from-purple-400 to-blue-300 w-40 md:w-48 lg:w-56"></div>
                </div>
                <p class="w-64 md:w-96 py-7 text-footer text-lg md:text-xl xl:text-2xl text-center md:text-left">
                    A platform for undergraduate students in 
                    Southeast Asia with big ideas to discover more 
                    about green innovations.
                </p>
            </div>
            <div class="absolute flex flex-col items-end top-0 right-0 pt-60 md:pt-0 lg:pt-0" data-aos="fade-left" data-aos-duration="2400">
                <img src="images/compe-1.png" alt="" class="h-80 lg:h-110 xl:h-145">
            </div>
        </div>
    </div>

    <!-- List Competition -->
    <div class="pt-40 md:pt-16 lg:pt-20 xl:pt-28 2xl:pt-40">
        <span class="h-70 flex justify-center items-center font-bold text-2xl md:text-3xl lg:text-4xl xl:text-5xl 2xl:text-6xl pb-5">
            <font color ="#30264F">List of Competitions</font>
        </span>
        <div class="absolute left-3/4 bottom-30 z-0 pr-20">
            <img src="images/bulet6.png" alt="" class="w-full">
        </div>
    </div>

    <div class="container my-20 mx-auto px-16 md:px-28 lg:px-36 xl:px-52">
        <div class="flex flex-wrap -mx-1">
        <div class="my-4 px-2 w-40 md:w-44 lg:w-60 xl:w-1/3">
            <div class="card flex flex-col  py-3 px-4 bg-gradient-to-bl transition duration-500 ease-in-out hover:from-blue-300 hover:to-pink-500 transform hover:-translate-y-2 hover:scale-105 overflow-hidden shadow-lg rounded-lg border border-gray-900 bg-cover h-landing bg-local relative h-32 md:h-40 lg:h-52">
                <!-- <div class="card-event flex flex-col items-start py-3 px-4" id="card-event"> -->
                    <h2 class="absolute title-1 text-footer text-lg md:text-xl lg:text-3xl xl:text-4xl font-semibold pt-4 md:pt-8 z-10">Paper Competition</h2>
                    <div class="flex flex-col items-center">
                        <img id="logo-paper" src="images/compe-paper.png" alt="" class="relative h-16 md:h-18 lg:h-28 xl:h-40 z-0">
                        <img id="logo-paper-hover" src="images/compe-paper-hover.png" alt="" class="absolute h-16 md:h-24 lg:h-32 xl:h-40 z-0">
                    </div>
                    <div class="absolute z-10 pt-20 md:pt-24 lg:pt-36 xl:pt-36">
                        <button class="py-1 lg:py-1.5 rounded-full bg-gradient-to-r from-purple-400 to-blue-300">
                            <a href="{{ route('paper-competition') }}" class="px-8 px-10 lg:px-16 text-xs md:text-sm text-white">CHECK</a>
                        </button>
                    </div>
                <!-- </div> -->
            </div>
        </div>
        <div class="my-4 px-2 w-40 md:w-44 lg:w-60 xl:w-1/3">
        <div class="card flex flex-col  py-3 px-4 bg-gradient-to-bl transition duration-500 ease-in-out hover:from-blue-300 hover:to-pink-500 transform hover:-translate-y-2 hover:scale-105 overflow-hidden shadow-lg rounded-lg border border-gray-900 bg-cover h-landing bg-local relative h-32 md:h-40 lg:h-52">
                <!-- <div class="card-event flex flex-col items-start py-3 px-4" id="card-event"> -->
                    <h2 class="absolute title-1 text-footer text-lg md:text-xl lg:text-3xl xl:text-4xl font-semibold pt-4 md:pt-8 z-10">Poster Competition</h2>
                    <div class="flex flex-col items-center">
                        <img id="logo-paper" src="images/compe-poster.png" alt="" class="relative h-16 md:h-18 lg:h-28 xl:h-40 z-0">
                        <img id="logo-paper-hover" src="images/compe-poster-hover.png" alt="" class="absolute h-16 md:h-24 lg:h-32 xl:h-40 z-0">
                    </div>
                    <div class="absolute z-10 pt-20 md:pt-24 lg:pt-36 xl:pt-36">
                        <button class="py-1 lg:py-1.5 rounded-full bg-gradient-to-r from-purple-400 to-blue-300">
                            <a href="{{ route('poster-competition') }}" class="px-8 px-10 lg:px-16 text-xs md:text-sm text-white">CHECK</a>
                        </button>
                    </div>
                <!-- </div> -->
            </div>
        </div>
        <div class="my-4 px-2 w-40 md:w-44 lg:w-60 xl:w-1/3">
            <div class="card flex flex-col  py-3 px-4 bg-gradient-to-bl transition duration-500 ease-in-out hover:from-blue-300 hover:to-pink-500 transform hover:-translate-y-2 hover:scale-105 overflow-hidden shadow-lg rounded-lg border border-gray-900 bg-cover h-landing bg-local relative h-32 md:h-40 lg:h-52">
                <!-- <div class="card-event flex flex-col items-start py-3 px-4" id="card-event"> -->
                    <h2 class="absolute title-1 text-footer text-base md:text-lg lg:text-2xl xl:text-4xl font-semibold pt-4 md:pt-8 z-10">ChemE Jeopardy Competition</h2>
                    <div class="flex flex-col items-center">
                        <img id="logo-paper" src="images/compe-cheme.png" alt="" class="relative h-16 md:h-18 lg:h-28 xl:h-40 z-0">
                        <img id="logo-paper-hover" src="images/compe-cheme-hover.png" alt="" class="absolute h-16 md:h-24 lg:h-32 xl:h-40 z-0">
                    </div>
                    <div class="absolute z-10 pt-20 md:pt-24 lg:pt-36 xl:pt-36">
                        <button class="py-1 lg:py-1.5 rounded-full bg-gradient-to-r from-purple-400 to-blue-300">
                            <a href="{{ route('cheme-competition') }}" class="px-8 px-10 lg:px-16 text-xs md:text-sm text-white">CHECK</a>
                        </button>
                    </div>
                <!-- </div> -->
            </div>
        </div>
        </div>
    </div>

    
    <!-- Timeline -->
    <div class ="flex flex-col px-2 md:px-5 pb-40 md:pb-80 relative justify-center">
        <img src="images/bulet6.png" alt="", class="absolute w-96 md:w-1/2 right-0 bottom-0 -mb-52">
        <div class="border rounded-lg shadow-2xl py-5" data-aos="fade-right">
            <!-- Timeline -->
            <div class="pt-5">
                <span class="h-70 flex justify-center items-center font-bold text-5xl py-5" data-aos="fade-up-right">
                    <font color ="#30264F">Timeline</font>
                </span>
            </div>
            <div class="flex flex-row items-end" data-aos="fade-right" data-aos-duration="3000">
                <!-- Slider main container -->
                <div class="swiper-container swiper2 my-5 md:my-10 pl-20">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper my-4 md:px-1">
                        <!-- Slides -->
                        <div class="swiper-slide slide2 justify-center items-start flex-col items-start py-3 md:py-10">
                            <h2 class="text-center text-base md:text-2xl font-bold py-1 md:py-5">
                                Paper Competition
                            </h2>
                            <span class="text-footer text-xs md:text-xl">
                                Sep 18, 2021                            
                            </span>
                        </div>
                        <div class="swiper-slide slide2 justify-center items-start flex-col items-start py-3 md:py-10">
                            <h2 class="text-center text-base md:text-2xl font-bold py-1 md:py-5">
                                Poster Competition 
                            </h2>
                            <span class="text-footer text-xs md:text-xl">
                                Oct 2, 2021
                            </span>
                        </div>
                        <div class="swiper-slide slide2 justify-center items-center flex-col items-start py-3 md:py-10">
                            <h2 class="text-center text-base md:text-2xl font-bold py-1 md:py-5">
                                ChemE Jeopardy Competition
                            </h2>
                            <span class="text-footer text-xs md:text-xl">
                                Aug 9, 2021
                            </span>
                        </div>
                    </div>
                    <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="absolute left-0 bottom-0 -mb-40">
        <img src="images/bulet-compe-3.png" alt="" class="h-120"> 
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