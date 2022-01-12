@extends('layouts.navbar-conf')

@section('content')

    <div class="pt-60 pl-24">
        <div class="w-98 h-96 bg-white bg-opacity-50 rounded-xl border-2 border-white px-5 py-5">
            <h1 class="font-bold text-5xl pb-5">
                Conference Day?
            </h1>
            <div class="rounded-full bg-gradient-to-l from-blue-300 to-pink-400 w-60 h-2"></div>
            <p class="text-xl pt-5 text-justify">
            Conference Day is the only Southeast Asian scale 
            conference, organized by AISC that will discuss around the 
            latest innovations. This event will bring in speakers who are 
            experts in their fields and they will share fruitful insights and 
            their knowledge for the sake of our better future. The chosen 
            delegates will have an opportunity to ask and discuss a variety of 
            topics with the speakers. The Conference Day will be held on 20 March 2022. 
            </p>
        </div>
    </div>

    <!-- Timeline -->
    <div class ="flex flex-col pt-40 md:px-5 pb-40 md:pb-60 relative justify-center">
        <img src="../images/bulet6.png" alt="", class="absolute w-96 md:w-1/2 right-0 bottom-0 -mb-52">
        <img src="../images/bagianveye.png" alt="", class="absolute w-1/4 left-0 mb-52">
        <div class="border rounded-lg shadow-2xl py-5" data-aos="fade-right">
            <!-- Timeline -->
            <div class="pt-5">
                <span class="h-70 flex justify-center items-center font-bold text-3xl py-5" data-aos="fade-up-right">
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
                                Open Registration
                            </h2>
                            <span class="text-footer text-xs md:text-xl">
                                Aug 9, 2021                            
                            </span>
                        </div>
                        <div class="swiper-slide slide2 justify-center items-start flex-col items-start py-3 md:py-10">
                            <h2 class="text-center text-base md:text-2xl font-bold py-1 md:py-5">
                                Closed Registration
                            </h2>
                            <span class="text-footer text-xs md:text-xl">
                                Sept 18, 2021
                            </span>
                        </div>
                        <div class="swiper-slide slide2 justify-center items-center flex-col items-start py-3 md:py-10">
                            <h2 class="text-center text-base md:text-2xl font-bold py-1 md:py-5">
                                Delegates Announcement
                            </h2>
                            <span class="text-footer text-xs md:text-xl">
                                Oct 2, 2021
                            </span>
                        </div>
                        <div class="swiper-slide slide2 justify-center items-center flex-col items-start py-3 md:py-10">
                            <h2 class="text-center text-xs md:text-2xl font-bold py-1 md:py-5">
                                Technical Meeting
                            </h2>
                            <span class="text-footer text-xs md:text-xl">
                                Oct 16, 2021
                            </span>
                        </div>
                        <div class="swiper-slide slide2 justify-center items-center flex-col items-start py-3 md:py-10">
                            <h2 class="text-center text-base md:text-2xl font-bold py-1 md:py-5">
                                Conference Day
                            </h2>
                            <span class="text-footer text-xs md:text-xl">
                                Oct 24, 2021
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

    <!-- Session -->
    <div class="flex flex-row px-20">
        <div class="flex flex-col items-start w-97.5">
            <h2 class="text-3xl font-semibold">
                Session 1
            </h2>
            <h1 class="text-5xl font-bold py-3">
                Conference Day
            </h1>
            <div class="rounded-full bg-gradient-to-l from-blue-300 to-pink-400 w-60 h-2"></div>
            <p class="text-xl pt-2 ">
                Conference Day is the only Southeast Asian scale 
                conference, organized by AISC that will discuss 
                around the latest innovations.
            </p>
        </div>
        <img src="../images/speaker-conf.png" alt="" class="h-80 -mt-14 pl-80 z-10">
        <img src="../images/speaker-conf.png" alt="" class="h-80 -mt-14 pl-10 z-10">
    </div>
    <div class="flex flex-row px-20 py-32">
        <img src="../images/speaker-conf.png" alt="" class="h-80 -mt-14 -ml-10 z-10">
        <img src="../images/speaker-conf.png" alt="" class="h-80 -mt-14 pl-10 z-10">
        <img src="../images/bulet-conf-2.png" alt="" class="absolute left-0 -mt-20 h-150">
        <div class="flex flex-col items-start pl-80">
            <h2 class="text-3xl font-semibold">
                Session 2
            </h2>
            <h1 class="text-5xl font-bold py-3">
                Conference Day
            </h1>
            <div class="rounded-full bg-gradient-to-l from-blue-300 to-pink-400 w-60 h-2"></div>
            <p class="text-xl pt-2 ">
                Conference Day is the only Southeast Asian scale 
                conference, organized by AISC that will discuss 
                around the latest innovations.
            </p>
        </div>
    </div>
    <div class="flex flex-row px-20">
        <div class="flex flex-col items-start w-97.5 z-10">
            <h2 class="text-3xl font-semibold">
                Session 3
            </h2>
            <h1 class="text-5xl font-bold py-3">
                Conference Day
            </h1>
            <div class="rounded-full bg-gradient-to-l from-blue-300 to-pink-400 w-60 h-2"></div>
            <p class="text-xl pt-2 ">
                Conference Day is the only Southeast Asian scale 
                conference, organized by AISC that will discuss 
                around the latest innovations.
            </p>
        </div>
        <img src="../images/speaker-conf.png" alt="" class="h-80 -mt-14 pl-80 z-10">
        <img src="../images/speaker-conf.png" alt="" class="h-80 -mt-14 pl-10 z-10">
        <img src="../images/bulet-conf-1.png" alt="" class="absolute right-0 -mt-20 h-150">
    </div>

    <!-- Testi -->
    <div class="pt-40 flex flex-col items-center z-10">
        <h1 class="text-6xl text-footer font-bold">
            Testimonial from Last Year
        </h1>
        <div class ="flex flex-col pt-10 md:px-5 pb-40 md:pb-40 relative justify-center">
            <div class="border rounded-lg shadow-2xl" data-aos="fade-right">
                <div class="flex flex-row items-end" data-aos="fade-right" data-aos-duration="3000">
                    <!-- Slider main container -->
                    <div class="swiper-container swiper3 px-20 bg-gradient-to-l from-blue-300 to-pink-400">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper md:px-1">
                            <!-- Slides -->
                            <div class="swiper-slide slide3 justify-center items-start flex-col items-start py-3 md:py-10">
                                <div class="bg-white bg-opacity-50 rounded-xl w-full h-full flex flex-row items-center px-14">
                                    <img src="../images/testi-conf.png" alt="" class="h-60">
                                    <div class="pl-20 py-10">
                                        <h1 class="font-bold text-4xl">
                                            Testimonial Name
                                        </h1>
                                        <h2 class="font-semibold text-2xl pt-2 pb-5">
                                            Testimonial Position
                                        </h2>
                                        <p class="text-xl">
                                        Conference Day is the only Southeast Asian scale conference, 
                                        organized by AISC that will discuss around the latest innovations.
                                        This event will bring in speakers who are experts in their fields 
                                        and they will share fruitful insights and their knowledge for the 
                                        sake of our better future.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide slide3 justify-center items-start flex-col items-start py-3 md:py-10">
                            <div class="bg-white bg-opacity-50 rounded-xl w-full h-full flex flex-row items-center px-14">
                                    <img src="../images/testi-conf.png" alt="" class="h-60">
                                    <div class="pl-20 py-10">
                                        <h1 class="font-bold text-4xl">
                                            Testimonial Name
                                        </h1>
                                        <h2 class="font-semibold text-2xl pt-2 pb-5">
                                            Testimonial Position
                                        </h2>
                                        <p class="text-xl">
                                        Conference Day is the only Southeast Asian scale conference, 
                                        organized by AISC that will discuss around the latest innovations.
                                        This event will bring in speakers who are experts in their fields 
                                        and they will share fruitful insights and their knowledge for the 
                                        sake of our better future.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide slide3 justify-center items-center flex-col items-start py-3 md:py-10">
                            <div class="bg-white bg-opacity-50 rounded-xl w-full h-full flex flex-row items-center px-14">
                                    <img src="../images/testi-conf.png" alt="" class="h-60">
                                    <div class="pl-20 py-10">
                                        <h1 class="font-bold text-4xl">
                                            Testimonial Name
                                        </h1>
                                        <h2 class="font-semibold text-2xl pt-2 pb-5">
                                            Testimonial Position
                                        </h2>
                                        <p class="text-xl">
                                        Conference Day is the only Southeast Asian scale conference, 
                                        organized by AISC that will discuss around the latest innovations.
                                        This event will bring in speakers who are experts in their fields 
                                        and they will share fruitful insights and their knowledge for the 
                                        sake of our better future.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Registration -->
    <img src="../images/bulet-conf-3.png" alt="" class="absolute left-20 -mt-80 h-120">
    <div class="py-20 flex flex-col items-center bg-white bg-opacity-30 shadow-lg rounded-xl">
        <h1 class="font-bold text-footer text-5xl pb-5">
            Check It Out For More Information
        </h1>
        <button class="w-96 py-1 bg-gradient-to-l from-blue-300 to-purple-400 shadow-lg text-white text-2xl font-semibold rounded-full">
            <a href="">Conference Day Guidebook</a>
        </button>
    </div>

    <img src="../images/bulet-conf-4.png" alt="" class="absolute right-0 -mt-20 h-120">
    <div class="py-20 flex flex-col items-center bg-white bg-opacity-30 shadow-lg rounded-xl">
        <h1 class="font-bold text-footer text-5xl pb-5">
            Join Conference Day Now!
        </h1>
        <button class="w-96 py-1 bg-gradient-to-l from-blue-300 to-purple-400 shadow-lg text-white text-2xl font-semibold rounded-full">
            <a href="">Register Here!</a>
        </button>
    </div>

    <img src="../images/bulet-conf-5.png" alt="" class="absolute left-0 -mt-20 h-120">
    <div class="py-20 flex flex-col items-center bg-white bg-opacity-30 shadow-lg rounded-xl">
        <h1 class="font-bold text-footer text-5xl pb-5">
            Exhibition is Here
        </h1>
        <button class="w-96 py-1 bg-gradient-to-l from-blue-300 to-purple-400 shadow-lg text-white text-2xl font-semibold rounded-full">
            <a href="">Join Here!</a>
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