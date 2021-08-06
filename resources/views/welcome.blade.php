@extends('layouts.main')

@section('content')

    <!-- Penjelasan AISC -->
    <div class="py-52 px-72">
        <div class="rounded-md sticky top-0 z-10 bg-white backdrop-filter backdrop-blur-lg bg-opacity-40 h-110 flex flex-col items-center justify-center">
            <h1 class="text-footer font-bold text-4xl">
                AIChE Indonesia Student Conference (AISC) 2022
            </h1>
            <h2 class="text-footer font-black text-4.5xl pt-10">
                “The Green Revival Era: Optimizing
            </h2>
            <h2 class="text-footer font-black text-4.5xl -mt-4">
                Resiliency Through Viable Innovations”
            </h2>
        </div>
    </div>

    <!-- Reminder -->
    <div class="relative pb-20 py-16">
        <div class="flex flex-col items-center">
            <h1 class="text-footer text-5xl font-bold tracking-wide">
                Coming Very Soon!
            </h1>
            <img src="images/reminder.png" alt="" class="w-3/5 pt-16 z-10">
        </div>
        <div class="absolute left-0 top-0 z-0 pl-20 pt-10">
            <img src="images/bulet6.png" alt="" class="w-1/2">
        </div>
    </div>

    <!-- List Event -->
    <div class="relative">
        <div class="absolute bottom-0 right-0 z-0 -mb-32 pr-44">
            <img src="images/bulet7.png" alt="" class="w-96">
        </div>
        <div class="container my-20 mx-auto px-52 z-10">
            <div class="flex flex-wrap -mx-1">
                <div class="my-4 px-2 w-1/3">
                    <div class="card flex flex-col items-start py-3 px-4 bg-gradient-to-bl transition duration-500 ease-in-out hover:from-blue-300 hover:to-pink-500 transform hover:-translate-y-2 hover:scale-105 overflow-hidden shadow-lg rounded-lg border border-gray-900 bg-cover h-landing bg-local relative h-52">
                        <!-- <div class="card-event flex flex-col items-start py-3 px-4" id="card-event"> -->
                            <h2 class="title-1 underline text-footer text-xl font-semibold">Volunteer</h2>
                            <span class="desc-1 text-footer pt-2 pb-4">
                            People who register to be part of AISC
                            2022 together to actualize AISC
                            purposes and plans.
                            </span>
                            <div class="pt-6">
                                <button class="py-1.5 rounded-full bg-gradient-to-r from-purple-400 to-blue-300">
                                    <a href="" class="px-16 text-sm text-white">CHECK</a>
                                </button>
                            </div>
                        <!-- </div> -->
                    </div>
                </div>
                <div class="my-4 px-2 w-1/3">
                    <div class="card bg-gradient-to-bl transition duration-500 ease-in-out hover:from-blue-300 hover:to-pink-500 transform hover:-translate-y-2 hover:scale-105 overflow-hidden shadow-lg rounded-lg border border-gray-900 bg-cover h-landing bg-local relative h-52">
                        <div class="card-event flex flex-col items-start py-3 px-4" id="card-event">
                            <h2 class="underline text-footer text-xl font-semibold">Pre-Event</h2>
                            <span class="text-footer pt-2 pb-4">
                            A series of events that invite experts to
                            share their knowledge to enliven the
                            main event of AISC.
                            </span>
                            <div class="pt-6">
                                <button class="py-1.5 rounded-full bg-gradient-to-r from-purple-400 to-blue-300">
                                    <a href="" class="px-16 text-sm text-white">CHECK</a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="my-4 px-2 w-1/3">
                    <div class="card bg-gradient-to-bl transition duration-500 ease-in-out hover:from-blue-300 hover:to-pink-500 transform hover:-translate-y-2 hover:scale-105 overflow-hidden shadow-lg rounded-lg border border-gray-900 bg-cover h-landing bg-local relative h-52">
                        <div class="card-event flex flex-col items-start py-3 px-4" id="card-event">
                            <h2 class="underline text-footer text-xl font-semibold">Competition</h2>
                            <span class="text-footer pt-2 pb-4">
                            A platform for undergraduate students
                            in Southeast Asia with big ideas to
                            discover more about green innovations.
                            </span>
                            <div class="pt-6">
                                <button class="py-1.5 rounded-full bg-gradient-to-r from-purple-400 to-blue-300">
                                    <a href="" class="px-16 text-sm text-white">CHECK</a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="my-4 px-2 w-1/3">
                    <div class="card bg-gradient-to-bl transition duration-500 ease-in-out hover:from-blue-300 hover:to-pink-500 transform hover:-translate-y-2 hover:scale-105 overflow-hidden shadow-lg rounded-lg border border-gray-900 bg-cover h-landing bg-local relative h-52">
                        <div class="card-event flex flex-col items-start py-3 px-4" id="card-event">
                            <h2 class="underline text-footer text-xl font-semibold">nAISC Night</h2>
                            <span class="text-footer pt-2 pb-4">
                            A spectacular event dedicated for finalists, AIChE’s representatives 
                            from the various universities in Southeast Asia, and AISC’s own committee.  
                            </span>
                            <button class="py-1.5 rounded-full bg-gradient-to-r from-purple-400 to-blue-300">
                                <a href="" class="px-16 text-sm text-white">CHECK</a>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="my-4 px-2 w-1/3">
                    <div class="card bg-gradient-to-bl transition duration-500 ease-in-out hover:from-blue-300 hover:to-pink-500 transform hover:-translate-y-2 hover:scale-105 overflow-hidden shadow-lg rounded-lg border border-gray-900 bg-cover h-landing bg-local relative h-52">
                        <div class="card-event flex flex-col items-start py-3 px-4" id="card-event">
                            <h2 class="underline text-footer text-xl font-semibold">Conference Day</h2>
                            <span class="text-footer pt-2 pb-4">
                            The only Southeast Asian scale
                            conference organized by AISC,
                            delegates will discuss the latest
                            innovations with experts in their fields.
                            </span>
                            <div class="pt-6">
                                <button class="py-1.5 rounded-full bg-gradient-to-r from-purple-400 to-blue-300">
                                    <a href="" class="px-16 text-sm text-white">CHECK</a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Timeline -->
    <div class ="flex flex-col px-5 pb-96 relative justify-center">
        <img src="images/bulet6.png" alt="", class="absolute w-1/2 right-0 bottom-0 -mb-52">
        <img src="images/bagianveye.png" alt="", class="absolute w-1/4 left-0 mb-52">
        <div class="border rounded-lg shadow-2xl py-5">
            <!-- Timeline -->
            <div class="pt-5">
                <span class="h-70 flex justify-center items-center font-bold text-3xl py-5">
                    <font color ="#30264F">Timeline</font>
                </span>
            </div>
            <div class="flex flex-row items-end">
                <!-- Slider main container -->
                <div class="swiper-container my-10 pl-20">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper my-4 px-1">
                        <!-- Slides -->
                        <div class="swiper-slide justify-center items-center flex-col items-start py-10">
                            <h2 class="text-center text-2xl font-bold py-5">
                                Open Registration 
                            </h2>
                            <span class="text-footer text-xl">
                                2 Agustus 2021                            
                            </span>
                        </div>
                        <div class="swiper-slide justify-center items-center flex-col items-start py-10">
                            <h2 class="text-center text-2xl font-bold py-5">
                                Open                    BO
                                </font> 
                            </h2>
                            <span class="text-footer text-xl">
                                10 Agustus 2021
                            </span>
                        </div>
                        <div class="swiper-slide justify-center items-center flex-col items-start py-10">
                            <h2 class="text-center text-2xl font-bold py-5">
                                Open                    Registration
                            </h2>
                            <span class="text-footer text-xl">
                                14 Agustus 2021
                            </span>
                        </div>
                        <div class="swiper-slide justify-center items-center flex-col items-start py-10">
                            <h2 class="text-center text-2xl font-bold py-5">
                                Open                    Custom
                            </h2>
                            <span class="text-footer text-xl">
                                13 Agustus 2021
                            </span>
                        </div>
                        <div class="swiper-slide justify-center items-center flex-col items-start py-10">
                            <h2 class="text-center text-2xl font-bold py-5">
                                Open                    Rapa
                            </h2>
                            <span class="text-footer text-xl">
                                12 Agustus 2021
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

    <!-- Meet the Team -->
    <div class="flex flex-col items-center py-14 bg-footer relative">
        <h1 class="text-white font-bold text-5xl tracking-wide">
            Meet The Team!
        </h1>
            <div x-data="{swiper: null}"
            x-init="swiper = new Swiper($refs.container, {
                loop: true,
                slidesPerView: 1,
                spaceBetween: 0,
            
                breakpoints: {
                    640: {
                    slidesPerView: 1,
                    spaceBetween: 0,
                    },
                    768: {
                    slidesPerView: 2,
                    spaceBetween: 0,
                    },
                    1024: {
                    slidesPerView: 3,
                    spaceBetween: 0,
                    },
                    1440: {
                    slidesPerView: 4,
                    spaceBetween: 0,
                    }, 
                },
                })"
            class="relative w-9/12 mx-auto flex flex-row items-center pt-5">
            <div class="absolute inset-y-0 left-0 z-20 flex items-center pt-5">
                <button @click="swiper.slidePrev()" 
                        class="w-5">
                <img src="images/left-team.png" alt="">
                </button>
            </div>

            <div class="swiper-container" x-ref="container">
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide p-4">
                        <div class="flex flex-col overflow-hidden">
                            <div class="flex-shrink-0">
                                <div class="px-5">
                                    <button onclick="divVisibility('department-1')" id="member-1" class="member transition duration-200 px-8 py-1 rounded-full text-xl font-semibold text-gray-600 focus:text-white hover:bg-yellow-400 focus:bg-yellow-600 focus:shadow-2xl">
                                        Project Officer
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                        
                    <div class="swiper-slide p-4">
                        <div class="flex flex-col overflow-hidden">
                            <div class="flex-shrink-0">
                                <div class="px-5">
                                    <button onclick="divVisibility('department-2')" id="member-2" class="member transition duration-200 px-8 py-1 rounded-full text-xl font-semibold text-gray-600 focus:text-white hover:bg-yellow-400 focus:bg-yellow-600 focus:shadow-2xl">
                                        Secretary
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <div class="swiper-slide p-4">
                        <div class="flex flex-col overflow-hidden">
                            <div class="flex-shrink-0">
                                <div class="px-5">
                                    <button onclick="divVisibility('department-3')" id="member-3" class="member transition duration-200 px-8 py-1 rounded-full text-xl font-semibold text-gray-600 focus:text-white hover:bg-yellow-400 focus:bg-yellow-600 focus:shadow-2xl">
                                        Treasurer
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide p-4">
                        <div class="flex flex-col overflow-hidden">
                            <div class="flex-shrink-0">
                                <div class="px-5">
                                    <button onclick="divVisibility('department-4')" id="member-4" class="member transition duration-200 px-8 py-1 rounded-full text-xl font-semibold text-gray-600 focus:text-white hover:bg-yellow-400 focus:bg-yellow-600 focus:shadow-2xl">
                                        Event
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide p-4">
                        <div class="flex flex-col overflow-hidden">
                            <div class="flex-shrink-0">
                                <div class="px-5">
                                    <button onclick="divVisibility('department-5')" id="member-5" class="member transition duration-200 px-8 py-1 rounded-full text-xl font-semibold text-gray-600 focus:text-white hover:bg-yellow-400 focus:bg-yellow-600 focus:shadow-2xl">
                                        Competition
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide p-4">
                        <div class="flex flex-col overflow-hidden">
                            <div class="flex-shrink-0">
                                <div class="px-5">
                                    <button onclick="divVisibility('department-6')" id="member-6" class="member transition duration-200 px-8 py-2 rounded-full text-md font-semibold text-gray-600 focus:text-white hover:bg-yellow-400 focus:bg-yellow-600 focus:shadow-2xl">
                                        Media & Marketing
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide p-4">
                        <div class="flex flex-col overflow-hidden">
                            <div class="flex-shrink-0">
                                <div class="px-5">
                                    <button onclick="divVisibility('department-7')" id="member-7" class="member transition duration-200 px-8 py-1 rounded-full text-xl font-semibold text-gray-600 focus:text-white hover:bg-yellow-400 focus:bg-yellow-600 focus:shadow-2xl">
                                        Sponsorship
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide p-4">
                        <div class="flex flex-col overflow-hidden">
                            <div class="flex-shrink-0">
                                <div class="px-5">
                                    <button onclick="divVisibility('department-8')" id="member-8" class="member transition duration-200 px-8 py-1 rounded-full text-xl font-semibold text-gray-600 focus:text-white hover:bg-yellow-400 focus:bg-yellow-600 focus:shadow-2xl">
                                        Logistic
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide p-4">
                        <div class="flex flex-col overflow-hidden">
                            <div class="flex-shrink-0">
                                <div class="px-5">
                                    <button onclick="divVisibility('department-9')" id="member-9" class="member transition duration-200 px-8 py-1 rounded-full text-xl font-semibold text-gray-600 focus:text-white hover:bg-yellow-400 focus:bg-yellow-600 focus:shadow-2xl">
                                        Technology
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            

            <div class="absolute inset-y-0 right-0 z-10 flex items-center pt-5">
                <button @click="swiper.slideNext()" 
                        class="w-5">
                <img src="images/right-team.png" alt="">
                </button>
            </div>        
        </div>
        
        <div id="department-1" class="flex items-center py-10">
            <div class="flex flex-col items-center px-6">
                <div class="relative">
                    <img src="images/border-team.png" alt="" class="w-64"> 
                </div>
                <div class="absolute py-8">
                    <img src="images/levina.png" alt="" class="w-48 mr-3">
                    <div class="flex flex-col items-center pt-4">
                        <h2 class="text-white text-2xl font-semibold">
                            Levina
                        </h2>
                        <h3 class="text-white text-md">
                            Project Officer
                        </h3>
                    </div>
                </div>
            </div>
        </div>

        <div id="department-2" class="hidden flex items-center py-10">
            <div class="flex flex-col items-center px-6">
                <div class="relative">
                    <img src="images/border-team.png" alt="" class="w-64"> 
                </div>
                <div class="absolute py-8">
                    <img src="images/bunga.png" alt="" class="w-48 mr-3">
                    <div class="flex flex-col items-center pt-4">
                        <h2 class="text-white text-2xl font-semibold">
                            Bunga
                        </h2>
                        <h3 class="text-white text-md">
                            General Secretary
                        </h3>
                    </div>
                </div>
            </div>
            <div class="flex flex-col items-center px-6">
                <div class="relative">
                    <img src="images/border-team.png" alt="" class="w-64"> 
                </div>
                <div class="absolute py-8">
                    <img src="images/nindya.png" alt="" class="w-48 mr-3">
                    <div class="flex flex-col items-center pt-4">
                        <h2 class="text-white text-2xl font-semibold">
                            Nindya
                        </h2>
                        <h3 class="text-white text-md">
                            Secretary
                        </h3>
                    </div>
                </div>
            </div>
        </div>

        <div id="department-3" class="hidden flex items-center py-10">
            <div class="flex flex-col items-center px-6">
                <div class="relative">
                    <img src="images/border-team.png" alt="" class="w-64"> 
                </div>
                <div class="absolute py-8">
                    <img src="images/salwa.png" alt="" class="w-48 mr-3">
                    <div class="flex flex-col items-center pt-4">
                        <h2 class="text-white text-2xl font-semibold">
                            Salwa
                        </h2>
                        <h3 class="text-white text-md">
                            Treasurer
                        </h3>
                    </div>
                </div>
            </div>
        </div>

        <div id="department-4" class="hidden flex items-center py-10">
            <div class="flex flex-col items-center px-6">
                <div class="relative">
                    <img src="images/border-team.png" alt="" class="w-64"> 
                </div>
                <div class="absolute py-8">
                    <img src="images/kevin.png" alt="" class="w-48 mr-3">
                    <div class="flex flex-col items-center pt-4">
                        <h2 class="text-white text-2xl font-semibold">
                            Kevin
                        </h2>
                        <h3 class="text-white text-md">
                            Head of Event
                        </h3>
                    </div>
                </div>
            </div>
            <div class="flex flex-col items-center px-6">
                <div class="relative">
                    <img src="images/border-team.png" alt="" class="w-64"> 
                </div>
                <div class="absolute py-8">
                    <img src="images/gregorius.png" alt="" class="w-48 mr-3">
                    <div class="flex flex-col items-center pt-4 -mt-3">
                        <h2 class="text-white text-2xl font-semibold">
                            Gregorius
                        </h2>
                        <h3 class="text-white text-md">
                            Conference Day Manager
                        </h3>
                    </div>
                </div>
            </div>
            <div class="flex flex-col items-center px-6">
                <div class="relative">
                    <img src="images/border-team.png" alt="" class="w-64"> 
                </div>
                <div class="absolute py-8">
                    <img src="images/ari.png" alt="" class="w-48 mr-3">
                    <div class="flex flex-col items-center pt-4">
                        <h2 class="text-white text-2xl font-semibold">
                            Ari
                        </h2>
                        <h3 class="text-white text-md">
                            Pre-Event Manager
                        </h3>
                    </div>
                </div>
            </div>
            <div class="flex flex-col items-center px-6">
                <div class="relative">
                    <img src="images/border-team.png" alt="" class="w-64"> 
                </div>
                <div class="absolute py-8">
                    <img src="images/vincentius.png" alt="" class="w-48 mr-3">
                    <div class="flex flex-col items-center pt-4">
                        <h2 class="text-white text-2xl font-semibold">
                            Vincentius
                        </h2>
                        <h3 class="text-white text-md">
                            nAISC Night Manager
                        </h3>
                    </div>
                </div>
            </div>
        </div>

        <div id="department-5" class="hidden flex items-center py-10">
            <div class="flex flex-col items-center px-6">
                <div class="relative">
                    <img src="images/border-team.png" alt="" class="w-64"> 
                </div>
                <div class="absolute py-8">
                    <img src="images/nidya.png" alt="" class="w-48 mr-3">
                    <div class="flex flex-col items-center pt-4">
                        <h2 class="text-white text-2xl font-semibold">
                            Nidya
                        </h2>
                        <h3 class="text-white text-md">
                            Head of Competition
                        </h3>
                    </div>
                </div>
            </div>
            <div class="flex flex-col items-center px-6">
                <div class="relative">
                    <img src="images/border-team.png" alt="" class="w-64"> 
                </div>
                <div class="absolute py-8">
                    <img src="images/mikael.png" alt="" class="w-48 mr-3">
                    <div class="flex flex-col items-center pt-4">
                        <h2 class="text-white text-2xl font-semibold">
                            Mikael
                        </h2>
                        <h3 class="text-white text-md">
                            Paper Competition Manager
                        </h3>
                    </div>
                </div>
            </div>
            <div class="flex flex-col items-center px-6">
                <div class="relative">
                    <img src="images/border-team.png" alt="" class="w-64"> 
                </div>
                <div class="absolute py-8">
                    <img src="images/nadhifa.png" alt="" class="ml-2 w-48 mr-3">
                    <div class="flex flex-col items-center pt-4">
                        <h2 class="text-white text-2xl font-semibold">
                            Nadhifa
                        </h2>
                        <h3 class="text-white text-md">
                            ChemE Jeopardy
                        </h3>
                        <h3 class="text-white text-md">
                            Competition Manager
                        </h3>
                    </div>
                </div>
            </div>
            <div class="flex flex-col items-center px-6">
                <div class="relative">
                    <img src="images/border-team.png" alt="" class="w-64"> 
                </div>
                <div class="absolute py-8">
                    <img src="images/davine.png" alt="" class="w-48 mr-3">
                    <div class="flex flex-col items-center pt-4">
                        <h2 class="text-white text-2xl font-semibold">
                            Davine
                        </h2>
                        <h3 class="text-white text-md">
                            Poster Competition Manager
                        </h3>
                    </div>
                </div>
            </div>
        </div>

        <div id="department-6" class="hidden flex items-center py-10">
            <div class="flex flex-col items-center px-6">
                <div class="relative">
                    <img src="images/border-team.png" alt="" class="w-64"> 
                </div>
                <div class="absolute py-8">
                    <img src="images/josephine.png" alt="" class="w-48 ml-1">
                    <div class="flex flex-col items-center pt-4">
                        <h2 class="text-white text-2xl font-semibold">
                            Josephine
                        </h2>
                        <h3 class="text-white text-md">
                            Head of Media and Marketing
                        </h3>
                    </div>
                </div>
            </div>
            <div class="flex flex-col items-center px-6">
                <div class="relative">
                    <img src="images/border-team.png" alt="" class="w-64"> 
                </div>
                <div class="absolute py-8">
                    <img src="images/daryl.png" alt="" class="w-48 mr-3 ml-2">
                    <div class="flex flex-col items-center pt-4">
                        <h2 class="text-white text-2xl font-semibold">
                            Daryl
                        </h2>
                        <h3 class="text-white text-md">
                            Social Media Specialist Manager
                        </h3>
                    </div>
                </div>
            </div>
            <div class="flex flex-col items-center px-6">
                <div class="relative">
                    <img src="images/border-team.png" alt="" class="w-64"> 
                </div>
                <div class="absolute py-8">
                    <img src="images/ajeng.png" alt="" class="w-48 mr-3 ml-2">
                    <div class="flex flex-col items-center pt-4">
                        <h2 class="text-white text-2xl font-semibold">
                            Ajeng
                        </h2>
                        <h3 class="text-white text-md">
                            Media Production Manager
                        </h3>
                    </div>
                </div>
            </div>
            <div class="flex flex-col items-center px-6">
                <div class="relative">
                    <img src="images/border-team.png" alt="" class="w-64"> 
                </div>
                <div class="absolute py-8">
                    <img src="images/vanessa.png" alt="" class="w-48 mr-3">
                    <div class="flex flex-col items-center pt-4">
                        <h2 class="text-white text-2xl font-semibold">
                            Vanessa
                        </h2>
                        <h3 class="text-white text-md">
                            Outreach Manager
                        </h3>
                    </div>
                </div>
            </div>
        </div>

        <div id="department-7" class="hidden flex items-center py-10">
            <div class="flex flex-col items-center px-6">
                <div class="relative">
                    <img src="images/border-team.png" alt="" class="w-64"> 
                </div>
                <div class="absolute py-8">
                    <img src="images/ahmad.png" alt="" class="w-48 mr-3">
                    <div class="flex flex-col items-center pt-4">
                        <h2 class="text-white text-2xl font-semibold">
                            Ahmad
                        </h2>
                        <h3 class="text-white text-md">
                            Head of Sponsorship
                        </h3>
                    </div>
                </div>
            </div>
        </div>

        <div id="department-8" class="hidden flex items-center py-10">
            <div class="flex flex-col items-center px-6">
                <div class="relative">
                    <img src="images/border-team.png" alt="" class="w-64"> 
                </div>
                <div class="absolute py-8">
                    <img src="images/kevin2.png" alt="" class="w-48 mr-3 ml-1">
                    <div class="flex flex-col items-center pt-4">
                        <h2 class="text-white text-2xl font-semibold">
                            Kevin
                        </h2>
                        <h3 class="text-white text-md">
                            Head of Logistic
                        </h3>
                    </div>
                </div>
            </div>
        </div>

        <div id="department-9" class="hidden flex items-center py-10">
            <div class="flex flex-col items-center px-6">
                <div class="relative">
                    <img src="images/border-team.png" alt="" class="w-64"> 
                </div>
                <div class="absolute py-8">
                    <img src="images/christoffer.png" alt="" class="w-48 mr-3">
                    <div class="flex flex-col items-center pt-4">
                        <h2 class="text-white text-2xl font-semibold">
                            Ivan
                        </h2>
                        <h3 class="text-white text-md">
                            Web Developer
                        </h3>
                    </div>
                </div>
            </div>
            <div class="flex flex-col items-center px-6">
                <div class="relative">
                    <img src="images/border-team.png" alt="" class="w-64"> 
                </div>
                <div class="absolute py-8">
                    <img src="images/frans.png" alt="" class="w-48 mr-3">
                    <div class="flex flex-col items-center pt-4">
                        <h2 class="text-white text-2xl font-semibold">
                            Frans
                        </h2>
                        <h3 class="text-white text-md">
                            Web Developer
                        </h3>
                    </div>
                </div>
            </div>
            <div class="flex flex-col items-center px-6">
                <div class="relative">
                    <img src="images/border-team.png" alt="" class="w-64"> 
                </div>
                <div class="absolute py-8">
                    <img src="images/vincent.png" alt="" class="w-48 mr-3">
                    <div class="flex flex-col items-center pt-4">
                        <h2 class="text-white text-2xl font-semibold">
                            Vincent
                        </h2>
                        <h3 class="text-white text-md">
                            Web Developer
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Sponsor -->
    <div class="flex flex-col items-center py-16">
        <h1 class="text-footer text-4xl font-bold">
            Sponsored By
        </h1>
        <div class="flex flex-row items-center pt-10">
            <div class="px-16">
                <img src="images/gojek.png" alt="" class="w-44">
            </div>
            <div class="px-16">
                <img src="images/gojek.png" alt="" class="w-44">
            </div>
            <div class="px-16">
                <img src="images/gojek.png" alt="" class="w-44">
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-footer absolute w-full">
        <div class="h-96 flex flex-col items-start">
            <div class="px-20 py-10">
                <h2 class="font-bold text-5xl text-white">
                    Contact Us
                </h2>
                <div class="flex pt-8 items-center">
                    <img src="images/instagram.png" alt="" class="w-12">
                    <p class="pl-5 text-white font-semibold text-2xl">@aisc2022</p>
                </div>
                <div class="flex pt-5 items-center">
                    <img src="images/line-app.png" alt="" class="w-12">
                    <p class="pl-5 text-white font-semibold text-2xl">@961ckski</p>
                </div>
                <div class="flex pt-5 items-center">
                    <img src="images/linkedin.png" alt="" class="w-12">
                    <p class="pl-5 text-white font-semibold text-2xl">AIChE Indonesia Student Conference 2022</p>
                </div>
            </div>
        </div>
    </footer>
@endsection