@extends('layouts.navbar-regis-volunteer')


@section('content')
    <div class="absolute right-0 z-10 pt-20">
        <img src="images/webinar.png" alt="" class="h-140">
    </div>
    <div class="absolute right-0 z-0">
        <img src="images/bulet-aischat-1.png" alt="" class="h-140">
    </div>
    <div class="absolute left-0 bottom-0 z-0 -mb-10 -ml-28">
        <img src="images/bulet-aischat-3.png" alt="" class="h-80">
    </div>
    <div class ="flex flex-col pl-36 pt-40">
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

    <!-- Detail AISChat -->
    <div class="flex flex-col items-center pt-80">
        <h1 class="text-5xl font-bold">
            Judul AISChat
        </h1>
        <div class="grid grid-cols-3 px-32 pt-16 pb-20 flex flex-row items-center">
            <div class="col-span-1 col-start-1">
                <div class="rounded-lg bg-black h-140 w-97">
                    <h1 class="text-3xl text-white font-semibold flex flex-row justify-center">POSTER</h1>
                </div>
            </div>
            <div class="col-span-2 col-start-2 pl-40 py-40">
                <p class="text-2xl font-semibold">
                    deskripsi deskripsi deskripsi deskripsi deskripsi
                    deskripsi deskripsi deskripsi deskripsi deskripsi
                </p>
                <p class="text-2xl font-semibold pt-10">
                    Speaker : Mr
                </p>
                <p class="text-2xl font-semibold">
                    Waktu : Selasa
                </p>
            </div>
        </div>
    </div>

    <!-- Register AISChat -->
    <div class="flex flex-col items-center pt-72 pb-1 md:py-32">
        <h1 class="text-footer text-xl md:text-6xl font-bold pb-4">Join Our AISChat Now!</h1>
        <div class="py-2 md:py-4">
            <button class="py-2 rounded-full bg-gradient-to-r from-purple-400 to-blue-300 shadow-lg z-10">
                <a class="text-white text-sm md:text-xl font-semibold px-32" href="">Register Here!</a>
            </button>
        </div>
        <div class="absolute right-0 -mt-52 z-0">
            <img src="images/bulet-aischat-5.png" alt="" class="w-1/2">
        </div>
        <div class="absolute left-0 -mt-32 z-0">
            <img src="images/bulet-aischat-4.png" alt="" class="h-120">
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-footer absolute w-full z-10">
        <div class="h-full flex flex-col items-start">
            <div class="px-8 md:px-20 py-6 md:py-10">
                <h2 class="font-bold text-2xl md:text-5xl text-white">
                    Contact Us
                </h2>
                <div class="flex pt-2 md:pt-8 items-center">
                    <img src="/images/instagram.png" alt="" class="w-6 md:w-12">
                    <p class="pl-2 md:pl-5 text-white font-semibold text-sm md:text-2xl">@aisc2022</p>
                </div>
                <div class="flex pt-2 md:pt-8 items-center">
                    <img src="/images/line-app.png" alt="" class="w-6 md:w-12">
                    <p class="pl-2 md:pl-5 text-white font-semibold text-sm md:text-2xl">@961ckski</p>
                </div>
                <div class="flex pt-2 md:pt-8 items-center">
                    <img src="/images/linkedin.png" alt="" class="w-6 md:w-12">
                    <p class="pl-2 md:pl-5 text-white font-semibold text-sm md:text-2xl">AIChE Indonesia Student Conference 2022</p>
                </div>
            </div>
        </div>
    </footer>
@endsection
