@extends('layouts.navbar-compe')

@section('content')
    <!-- <div class="absolute right-40 top-0">
        <img src="images/bulet-compe-1.png" alt="" class="h-80"> 
    </div>
    <div class="absolute left-0 top-80">
        <img src="images/bulet-compe-2.png" alt="" class="h-120"> 
    </div> -->

    <!-- Penjelasan Paper Competition -->
    <div class="pt-8 md:pt-12 lg:pt-28 xl:pt-36 pb-20">
        <div class="px-12 relative md:flex">
            <div class="z-10 md:pl-10 lg:pl-20 xl:pl-60 pt-20 flex flex-col items-start" data-aos="fade-right" data-aos-duration="1900">
                <h2 class="text-white text-3xl md:text-4xl lg:text-5xl xl:text-6xl font-bold md:tracking-wide">
                    ChemE Jeopardy
                </h2>
                <h2 class="text-white text-3xl md:text-4xl lg:text-5xl xl:text-6xl font-bold md:tracking-wide">
                    Competition
                </h2>
                <p class="w-64 md:w-96 py-7 md:py-4 lg:py-7 text-white text-sm md:text-base lg:text-xl xl:text-2xl text-center md:text-left">
                    “A platform for undergraduate students in 
                    Southeast Asia with big ideas to discover more 
                    about green innovations.”
                </p>
                <div class="flex flex-row items-start">
                <button class="text-white text-xs lg:text-xl font-semibold shadow-xl rounded-full bg-gradient-to-l from-blue-300 to-indigo-500 px-6 lg:px-14 py-1 lg:py-2">
                    Learn More
                </button>
                <div class="px-5">
                    <button class="text-white text-xs lg:text-xl font-semibold shadow-xl rounded-full bg-transparent border-2 border-white px-6 lg:px-14 py-1 lg:py-2">
                        Guide Book
                    </button>
                </div>
            </div>
            </div>
            <div class="absolute  top-0 pt-14 right-20 lg:right-40 xl:right-60" data-aos="fade-left" data-aos-duration="2400">
                <img src="images/logo-cheme.png" alt="" class="h-40 lg:h-72 xl:h-96 2xl:h-100">
            </div>
        </div>
    </div>

    <!-- About Competition -->
    <div class="pt-20 xl:pt-40 2xl:pt-52 pb-60">
        <div class="relative md:flex">
            <div class="z-10 md:pl-72 lg:pl-96 xl:pl-98 2xl:pl-100 pt-20 xl:pt-40 flex flex-col items-center md:items-start" data-aos="fade-right" data-aos-duration="1900">
                <h2 class="text-footer text-3xl md:text-3xl lg:text-5xl xl:text-6xl font-bold md:tracking-wide">
                    About the Competition?
                </h2>
                <div class="pt-5">
                    <div class="py-1 rounded-full bg-gradient-to-r from-purple-400 to-blue-300 w-40 md:w-48 lg:w-56"></div>
                </div>
                <p class="w-97 md:w-96 lg:w-97 py-7 text-footer text-base md:text-base lg:text-lg xl:text-2xl text-center md:text-left">
                    A platform for undergraduate students in Southeast Asia with big ideas to 
                    discover more about green innovations. A platform for undergraduate 
                    students in Southeast Asia with big ideas to discover more about green 
                    innovations.
                </p>
            </div>
            <div class="absolute flex flex-col items-end bottom-0 left-0 -mb-56 md:-mb-0 lg:-mb-10" data-aos="fade-left" data-aos-duration="2400">
                <img src="images/compe-img.png" alt="" class="h-72 lg:h-96 xl:h-120 2xl:h-145">
            </div>
            <div class="absolute flex flex-col items-end top-0 right-10 2xl:right-40 pt-20" data-aos="fade-left" data-aos-duration="2400">
                <img src="images/bulet-compe-7.png" alt="" class="h-60 md:h-64 xl:h-100 2xl:h-140">
            </div>
        </div>
    </div>

    
    <!-- Timeline -->
    <div class ="flex flex-col px-2 md:px-5 pb-40 md:pb-0 relative justify-center">
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
                                Registration
                            </h2>
                            <span class="text-footer text-xs md:text-xl">
                                Aug 9, 2021                            
                            </span>
                        </div>
                        <div class="swiper-slide slide2 justify-center items-start flex-col items-start py-3 md:py-10">
                            <h2 class="text-center text-base md:text-2xl font-bold py-1 md:py-5">
                                Abstract Submission 
                            </h2>
                            <span class="text-footer text-xs md:text-xl">
                                Aug 20, 2021
                            </span>
                        </div>
                        <div class="swiper-slide slide2 justify-center items-center flex-col items-start py-3 md:py-10">
                            <h2 class="text-center text-base md:text-2xl font-bold py-1 md:py-5">
                                Finalist Announcement
                            </h2>
                            <span class="text-footer text-xs md:text-xl">
                                Aug 27, 2021
                            </span>
                        </div>
                        <div class="swiper-slide slide2 justify-center items-center flex-col items-start py-3 md:py-10">
                            <h2 class="text-center text-base md:text-2xl font-bold py-1 md:py-5">
                                Paper/Poster Submission
                            </h2>
                            <span class="text-footer text-xs md:text-xl">
                                Sept 2, 2021
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

    <!-- Prize -->
    <div class="pt-20 md:pt-36 pb-20">
        <div class="relative md:flex">
            <div class="z-10 pl-14 md:pl-8 lg:pl-16 xl:pl-20 pt-20 flex flex-col items-start" data-aos="fade-right" data-aos-duration="1900">
                <h2 class="text-footer text-3xl md:text-4xl lg:text-5xl xl:text-6xl font-bold md:tracking-wide">
                    Competition Prize
                </h2>
                <div class="pt-5 pb-5">
                    <div class="py-1 rounded-full bg-gradient-to-r from-purple-400 to-blue-300 w-40 md:w-48 lg:w-56"></div>
                </div>
                <img src="images/compe-1st.png" alt="" class="h-14 md:h-20 lg:h-32 xl:h-36 2xl:h-40">
                <img src="images/compe-2nd.png" alt="" class="h-14 md:h-20 lg:h-32 xl:h-36 2xl:h-40">
                <img src="images/compe-3rd.png" alt="" class="h-14 md:h-20 lg:h-32 xl:h-36 2xl:h-40">
                <img src="images/compe-fav.png" alt="" class="h-14 md:h-20 lg:h-32 xl:h-36 2xl:h-40">
            </div>
            <div class="z-10 absolute flex flex-col items-end top-0 right-0" data-aos="fade-left" data-aos-duration="2400">
                <img src="images/compe-img-2.png" alt="" class="h-80 lg:h-110 xl:h-140 2xl:h-150 mt-40">
            </div>
        </div>
    </div>

    <!-- Register Compe -->
    <div class="py-10 flex flex-col items-center bg-white backdrop-filter backdrop-blur-lg bg-opacity-30 shadow-lg">
        <h1 class="text-2xl md:text-3xl lg:text-4xl xl:text-5xl text-footer font-bold" data-aos="zoom-in" data-aos-duration="2000">
            Join Our Competition Now!
        </h1>
        <div class="py-2 md:py-4">
            <button class="py-1 rounded-full bg-gradient-to-r from-purple-400 to-blue-300 shadow-lg z-10" data-aos="zoom-in" data-aos-duration="2000">
                <a class="text-white text-sm md:text-xl font-semibold px-20" href="">Register Here!</a>
            </button>
        </div>
        <div class="absolute right-0 bottom-0 -mb-32">
            <img src="images/bulet-compe-8.png" alt="" class="h-60 md:h-80 lg:h-100 xl:h-120"> 
        </div>
        <div class="absolute left-0 top-30">
            <img src="images/bulet-compe-9.png" alt="" class="h-60 md:h-80 lg:h-100 xl:h-120"> 
        </div>
    </div>

    <!-- Contact Person -->
    <div class="flex flex-col items-center pt-32 pb-40">
        <div class="flex flex-col items-start md:py-1 lg:py-3 px-4 bg-gradient-to-bl from-blue-300 to-pink-500 shadow-lg rounded-lg border border-gray-900 bg-cover h-landing bg-local relative h-32 md:h-40 lg:h-52">
            <!-- <div class="card-event flex flex-col items-start py-3 px-4" id="card-event"> -->
                <h2 class="title-1 text-white text-xl md:text-2xl lg:text-3xl xl:text-4xl font-semibold pt-2 lg:pt-3 z-10">Enter your name here</h2>
                <div class="pt-2 text-white flex flex-col items-start text-xs md:text-base">
                    <p>Project Officer AISC 2022</p>
                    <p>Phone Number : 00</p>
                    <p>Line ID : aa</p>
                    <p>Email : aa</p>
                </div>
            <!-- </div> -->
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