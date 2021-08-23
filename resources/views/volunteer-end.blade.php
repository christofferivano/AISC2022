@extends('layouts.navbar-regis-volunteer')

@section('content')

    <div class="pt-16 pl-6 md:ml-80 md:pl-44" data-aos="fade-left" data-aos-duration="1500">
        <img src="images/end-volunteer.png" alt="" class="h-96 md:h-140">
    </div>
    <div class="pt-5 md:py-20 text-montserrat flex flex-col items-center pb-60" data-aos="fade-right" data-aos-duration="2000"> 
        <h1 class="text-base md:text-4xl font-bold">Thank You for Being The Volunteer of AISC 2022</h1>
        <h1 class="text-base md:text-4xl font-bold pt-1 jusify-center">We Will Reach Out to You Soon!</h1>
    </div>

    <!-- Footer -->
    <footer class="bg-footer absolute w-full z-10 -mt-40 md:-mt-0">
        <div class="h-full flex flex-col items-start">
            <div class="px-8 md:px-20 py-6 md:py-10">
                <h2 class="font-bold text-2xl md:text-5xl text-white">
                    Contact Us
                </h2>
                <div class="flex pt-2 md:pt-8 items-center">
                    <img src="images/instagram.png" alt="" class="w-6 md:w-12">
                    <p class="pl-2 md:pl-5 text-white font-semibold text-sm md:text-2xl">@aisc2022</p>
                </div>
                <div class="flex pt-2 md:pt-8 items-center">
                    <img src="images/line-app.png" alt="" class="w-6 md:w-12">
                    <p class="pl-2 md:pl-5 text-white font-semibold text-sm md:text-2xl">@961ckski</p>
                </div>
                <div class="flex pt-2 md:pt-8 items-center">
                    <img src="images/linkedin.png" alt="" class="w-6 md:w-12">
                    <p class="pl-2 md:pl-5 text-white font-semibold text-sm md:text-2xl">AIChE Indonesia Student Conference 2022</p>
                </div>
            </div>
        </div>
    </footer>
@endsection