@extends('layouts.navbar-regis-volunteer');

@section('content')
    <div class="md:hidden absolute left-0 top-0">
        <img src="images/bulet-respon-volun-1.png" alt="" class="h-96"> 
    </div>
    <div class="hidden md:block absolute pt-40 pl-103">
        <img src="images/bulet-regis-volun-3.png" alt="" class="w-2/5">
    </div>
    <div class="absolute bottom-0 right-0">
        <img src="images/bulet-regis-volun-2.png" alt="" class="h-52 -mt-80 md:hidden">
    </div>
    <div class="absolute left-0 mt-24 pt-100">
        <img src="images/kiri.png" alt="" class="h-96 md:h-96 mt-72">
    </div>
    <div class="top-0 absolute z-10 flex flex-col">
        <img src="images/bg.png" alt="">
        <a href="" class="absolute flex ml-99 pt-96 z-30">
            <button type="submit" class="w-full md:w-96 bg-gradient-to-l from-blue-300 to-purple-400 py-1 rounded-full text-white text-lg font-semibold shadow-lg">
                Read Here!
            </button>
        </a>
    </div>
    <div class="absolute z-0">
        <img src="images/atas.png" alt="" class="w-1/2">
    </div>
   
    <div class="pt-101 grid md:grid-cols-5 pb-96 md:pb-0">
        <div class="md:col-span-2 md:col-start-1 pl-5 md:pl-24 flex flex-col items-start w-full">
            <div class="absolute top-3/4 pt-20">
                <h1 class="absolute md:relative text-xs md:text-2xl font-bold">Conference Day</h1>
            </div>       
            <h1 class="pt-2 absolute md:relative text-xl md:text-5xl font-bold">
                Registration
            </h1>
            <div class="w-full pt-10 md:pt-0 pr-5 z-10">
                <form action class="flex flex-col pt-10 md:pt-12">
                    @csrf
                    <label for="name" class="pb-2 pl-4 text-base md:text-xl font-medium">Name</label>
                    <input name="name" type="text" class="outline-none rounded-full border border-form py-1 px-4 w-72 md:w-96 text-sm focus:ring-2 focus:ring-form">
                    <label for="place" class="pt-4 pb-2 pl-4 text-base md:text-xl font-medium">Institution / University</label>
                    <input name="place" type="text" class="outline-none rounded-full border border-form py-1 px-4 w-72 md:w-96 text-sm focus:ring-2 focus:ring-form" >
                    <label for="major" class="pt-4 pb-2 pl-4 text-base md:text-xl font-medium">Major</label>
                    <input name="major" type="text" class="outline-none rounded-full border border-form py-1 px-4 w-72 md:w-96 text-sm focus:ring-2 focus:ring-form">
                    <label for="email" class="pt-4 pb-2 pl-4 text-base md:text-xl font-medium">Email</label>
                    <input name="email" type="email" class="outline-none rounded-full border border-form py-1 px-4 w-72 md:w-96 text-sm focus:ring-2 focus:ring-form">
                    <label for="info" class="pt-4 pb-2 pl-4 text-base md:text-xl font-medium">Register As</label>
                    <select class="outline-none rounded-full border border-form py-1 px-4 w-72 md:w-96 text-sm focus:ring-2 focus:ring-form"
                    name="info" for="info">
                        <option class="py-1 font-sans" disabled selected hidden>Choose an Option</option>
                        <option class="py-1 font-sans">Delegates</option>
                        <option class="py-1 font-sans">Participants</option>
                    </select>
                    <label for="expect" class="pt-8 pb-2 pl-4 text-base md:text-base font-medium">Registration File Link</label>
                    <input name="expect" type="file" class="outline-none rounded-full py-1 px-4 w-72 md:w-96 text-sm">  
                    <div class="pt-20">
                        <div class="flex flex-row pl-4">
                            <p class="text-sm md:text-lg font-medium">You can see the requirements.</p>
                            <a href="" class="underline text-blue-700 text-sm md:text-lg pl-1">Here</a>
                        </div>
                    </div>
                    <a href="" class="pt-2 pb-40 ">
                        <button type="submit" class="w-full md:w-150 bg-gradient-to-l from-blue-300 to-purple-400 py-1 rounded-full text-white text-lg font-semibold shadow-lg">
                            Next
                        </button>
                    </a>
                </form>
            </div>
            <img src="images/comperegis2.png" alt="" class="h-1/3 md:hidden absolute right-0 bottom-0 h-96 -mb-80">
        </div>
        <div class="hidden col-span-3 col-start-3 md:flex flex-col items-end">
            <!-- <div style="background-image: url('images/bg-register-volunteer.png')" class="bg-cover h-landing bg-local relative h-full"></div> -->
            <img src="images/iluskompe.png" alt="" class="w-4/6 pt-2 py-20 z-10">
            <img src="images/belakang.png" alt="" class="absolute w-97 z-0">
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