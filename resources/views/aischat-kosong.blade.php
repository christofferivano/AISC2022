@extends('layouts.navbar-regis-volunteer')


@section('content')  
    <div class="absolute right-0 z-10 pt-98 md:pt-20">
        <img src="images/webinar.png" alt="" class="h-80 md:h-140">
    </div>
    <div class="absolute right-0 z-0">
        <img src="images/bulet-aischat-1.png" alt="" class="h-96 md:h-140">
    </div>
    <div class="absolute left-0 bottom-0 z-0 -mb-60">
        <img src="images/bulet-aischat-2.png" alt="" class="h-140">
    </div>
    <div class ="flex flex-col pl-36 pt-40 z-20">
        <div class="justify-left items-left w-96">
            <h1 class="text-4.5xl font-bold">
                What is AISChat?
            </h1>
        </div>
        <div class="w-60">
            <div class="rounded-full py-0.5 md:py-1 bg-gradient-to-l from-blue-300 to-purple-400"></div>
        </div>
        <div class="w-96 pt-8 text-lg">
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

    <div class="flex justify-center items-center pt-64 pb-40">
        <h1 class="font-extrabold text-7xl">
            <font color="#D3D3D3">No Schedule Yet</font>
        </h1>
        <div class="absolute right-0 bottom-0 z-0 -mb-10">
            <img src="images/bulet-aischat-3.png" alt="" class="h-96 -mb-96">
        </div>
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
