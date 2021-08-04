@extends('layouts.navbar-volunteer')

@section('content')

    <!-- Penjelasan Volunteer -->
    <div class="pt-44 pb-44">
        <div class="px-12 flex">
            <div class="z-10 pl-28 pt-20">
                <h2 class="text-footer text-6xl font-bold tracking-wide">
                    What is Volunteer?
                </h2>
                <div class="pt-5">
                    <div class="py-1 rounded-full bg-gradient-to-r from-pink-400 to-red-500 w-56"></div>
                </div>
                <p class="w-96 py-7 text-footer text-2xl">
                    People who register to be part of
                    AISC 2022 together we actualize 
                    AISC purposes and plan.
                </p>
            </div>
            <div class="absolute flex flex-col items-end right-0">
                <img src="images/volunteer-1.png" alt="" class="h-140">
            </div>
        </div>
    </div>

    <!-- Positions -->
    <div class="pt-52 pb-10">
        <div class="flex flex-col items-center">
            <h1 class="text-footer text-5xl font-bold">Positions Available</h1>
        </div>
        <div class="flex flex-row justify-between px-32 pt-10">
            <div id="card-event" class="flex flex-col items-center">
                <button class="rounded-xl bg-cardEvent w-52 h-52 shadow-lg">
                    <div class="flex flex-col items-center">
                        <img src="images/event-logo.png" alt="" class="w-32 h-32">
                        <h2 class="text-footer text-xl font-semibold pt-2">Event</h2>
                    </div>
                </button>
                <div id="focus-line-1" class="pt-1">
                    <div id="focus-line-1" class="hidden rounded-full bg-footer w-32 py-1"></div>
                </div>
            </div>
            <div class="flex flex-col items-center">
                <button id="card-compe" class="rounded-xl bg-cardCompe w-52 h-52 shadow-lg">
                    <div class="flex flex-col items-center">
                        <img src="images/compe-logo.png" alt="" class="w-32 h-32">
                        <h2 class="text-footer text-xl font-semibold pt-2">Competition</h2>
                    </div>
                </button>
                <div id="focus-line-2" class="hidden pt-1">
                    <div class="rounded-full bg-footer w-32 py-1"></div>
                </div>
            </div>
            <div class="flex flex-col items-center">
                <button id="card-mm" class="rounded-xl bg-cardMM w-52 h-52 shadow-lg pt-2">
                    <div class="flex flex-col items-center">
                        <img src="images/mm-logo.png" alt="" class="w-28 h-28">
                        <h2 class="text-footer text-xl font-semibold pt-2">Media</h2>
                        <h2 class="text-footer text-xl font-semibold">Marketing</h2>
                    </div>
                </button>
                <div id="focus-line-3" class="hidden pt-1">
                    <div class="rounded-full bg-footer w-32 py-1"></div>
                </div>
            </div>
            <div class="flex flex-col items-center">
                <button id="card-logistic" class="rounded-xl bg-cardLogis w-52 h-52 shadow-lg">
                    <div class="flex flex-col items-center">
                        <img src="images/logistic-logo.png" alt="" class="w-32 h-32">
                        <h2 class="text-footer text-xl font-semibold pt-2">Logistic</h2>
                    </div>
                </button>
                <div id="focus-line-4" class="hidden pt-1">
                    <div class="rounded-full bg-footer w-32 py-1"></div>
                </div>
            </div>
            <div class="flex flex-col items-center">
                <button id="card-sponsorship" class="rounded-xl bg-cardSponsor w-52 h-52 shadow-lg">
                    <div class="flex flex-col items-center pt-4">
                        <img src="images/sponsorship-logo.png" alt="" class="w-32 h-28">
                        <h2 class="text-footer text-xl font-semibold pt-4">Sponsorship</h2>
                    </div>
                </button>
                <div id="focus-line-5" class="hidden pt-1">
                    <div class="rounded-full bg-footer w-32 py-1"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-3 py-10 px-10">
        <div class="col-span-1">
            <div class="flex flex-col items-center">
                <div class="pb-5">
                    <button id="event-1" class="rounded-full bg-cardEvent h-16 w-97">
                        <h2 class="text-footer text-2xl font-semibold">
                            Pre-Event
                        </h2>
                    </button>
                </div>
                <div class="pb-5">
                    <button id="event-2" class="rounded-full border-2 border-buttonVolunteer h-16 w-97">
                        <h2 class="text-buttonVolunteer text-2xl font-semibold">
                            Conference Day
                        </h2>
                    </button>
                </div>
                <div class="pb-5">
                    <button id="event-3" class="rounded-full border-2 border-buttonVolunteer h-16 w-97">
                        <h2 class="text-buttonVolunteer text-2xl font-semibold">
                            nAISC Night
                        </h2>
                    </button>
                </div>
            </div>
        </div>
        <div class="col-span-2 col-start-2">
            <div id="content-event-1" class="flex flex-col items-center pl-10">
                <div class="rounded-lg shadow-lg w-99 h-60 bg-cardEvent">
                    <div class="px-10 py-5">
                        <div class="flex flex-row items-center">
                            <img src="images/preevent-logo.png" alt="" class="w-14">
                            <h2 class="pl-3 text-5xl font-semibold text-footer">Pre-Event</h2>
                        </div>
                        <div class="grid grid-cols-2 pt-2">
                            <div class="col-span-1">
                                <h2 class="text-2xl font-semibold text-footer">Jobdesc:</h2>
                                <ul class="list-disc text-footer px-5">
                                    <li>
                                        Prepare and arrange any technical
                                        requirements on webinar and
                                        workshop    
                                    </li>
                                    <li>
                                        Developing events concept  
                                    </li>
                                    <li>
                                        Find the valuable speakers
                                    </li>
                                    <li>
                                        Preparing after event
                                    </li>
                                </ul>
                            </div>
                            <div class="col-span-1 col-start-2">
                                <h2 class="text-2xl font-semibold text-footer">Requirements:</h2>
                                <ul class="list-disc text-footer px-5">
                                    <li>
                                        Creative and open minded 
                                    </li>
                                    <li>
                                        Innovative  
                                    </li>
                                    <li>
                                        Proactive
                                    </li>
                                    <li>
                                        Decent in English (written and speaking)
                                    </li>
                                    <li>
                                        Can work as a team
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="content-event-2" class="hidden flex flex-col items-center pl-10">
                <div class="rounded-lg shadow-lg w-99 h-60 bg-cardEvent">
                    <div class="px-10 py-5">
                        <div class="flex flex-row items-center">
                            <img src="images/conf-day-logo.png" alt="" class="w-14">
                            <h2 class="pl-3 text-5xl font-semibold text-footer">Conference Day</h2>
                        </div>
                        <div class="pt-2">
                            <p class="font-semibold text-footer">
                            Conference Day is the only Southeast Asian scale conference, organized by 
                            AISC that will discuss around the latest innovations. This event will bring in 
                            speakers who are experts in their fields and they will share fruitful insights and 
                            their knowledge for the sake of our better future. The chosen delegates will 
                            have an opportunity to ask and discuss a variety of topics with the speakers.
                            </p>          
                        </div>
                    </div>
                </div>
            </div>
            <div id="content-event-3" class="hidden flex flex-col items-center pl-10">
                <div class="rounded-lg shadow-lg w-99 h-60 bg-cardEvent">
                    <div class="px-10 py-5">
                        <div class="flex flex-row items-center">
                            <img src="images/naisc-logo.png" alt="" class="w-14">
                            <h2 class="pl-3 text-5xl font-semibold text-footer">nAISC Night</h2>
                        </div>
                        <div class="pt-2">
                            <p class="font-semibold text-footer">
                            Awarding day between committee, finalists and 
                            representatives of AIChE Student Chapters throughout 
                            Southeast Asia before the conference day.
                            </p>          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimoni -->
    <div class="flex flex-col py-10 bg-footer">
        <div class="flex flex-row items-center justify-center pb-2">
            <h1 class="text-white text-4xl font-semibold justify-center">
                Testimonials
            </h1>
        </div>
        <div class="flex flex-row items-center py-5 pl-52">
            <div class="flex overflow-hidden px-8">
                <div class="filter">
                    <button id="foto-testi1" onclick="showTesti1()">
                        <div id="bg-testi-1" class="bg-testi bg-opacity-60 z-10 w-52 h-52 rounded-lg absolute">
                            <div id="bg-mix-1" class="mix-blend-hard-light bg-testi2 bg-opacity-10 w-52 h-52 rounded-lg"></div>
                        </div>
                        <div class="relative rounded-lg w-52 bg-red-300 bg-opacity-30 z-0">
                            <img id="foto-testi-1" src="images/vinsen-full.png" alt="" class="rounded-lg bg-red-200 w-52 h-52 z-0">
                        </div>
                    </button>
                </div>
                <div id="testi1" class="text-gray-900 text-5xl font-bold bg-white rounded-r-lg hidden duration-500">
                    <div class="px-10 py-4 font-roboto w-72">
                        <div class="flex flex-col items-end text-6xl font-bold text-testi italic">
                            <span>"</span>
                        </div>
                        <div class="flex flex-col items-start text-footer -mt-4">
                            <h1 class="text-2xl font-bold">Vinsen</h1>
                            <h2 class="text-lg font-semibold -mt-1">Project Manager</h2>
                            <p class="text-sm font-light pt-1">
                                Family Family Family Family
                                Family Family Family Family
                                Family Family Family Family
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex overflow-hidden px-8">
                <div class="filter">
                    <button id="foto-testi2" onclick="showTesti2()">
                        <div id="bg-testi-2" class="bg-testi bg-opacity-60 z-10 w-52 h-52 rounded-lg absolute">
                            <div class="mix-blend-hard-light bg-testi2 bg-opacity-10 w-52 h-52 rounded-lg"></div>
                        </div>
                        <div class="relative rounded-lg w-52 bg-red-300 bg-opacity-30 z-0">
                            <img id="foto-testi-2" src="images/vinsen-full.png" alt="" class="rounded-lg bg-red-200 w-52 h-52 z-0">
                        </div>
                    </button>
                </div>
                <div id="testi2" class="text-gray-900 text-5xl font-bold bg-white rounded-r-lg hidden">
                    <div class="px-10 py-4 font-roboto w-72">
                        <div class="flex flex-col items-end text-6xl font-bold text-testi italic">
                            <span>"</span>
                        </div>
                        <div class="flex flex-col items-start text-footer -mt-4">
                            <h1 class="text-2xl font-bold">Vinsen</h1>
                            <h2 class="text-lg font-semibold -mt-1">Project Manager</h2>
                            <p class="text-sm font-light pt-1">
                                Family Family Family Family
                                Family Family Family Family
                                Family Family Family Family
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex overflow-hidden px-8">
                <div class="filter">
                    <button id="foto-testi3" onclick="showTesti3()">
                        <div id="bg-testi-3" class="bg-testi bg-opacity-60 z-10 w-52 h-52 rounded-lg absolute">
                            <div class="mix-blend-hard-light bg-testi2 bg-opacity-10 w-52 h-52 rounded-lg"></div>
                        </div>
                        <div class="relative rounded-lg w-52 bg-red-300 bg-opacity-30 z-0">
                            <img id="foto-testi-3" src="images/vinsen-full.png" alt="" class="rounded-lg bg-red-200 w-52 h-52 z-0">
                        </div>
                    </button>
                </div>
                <div id="testi3" class="text-gray-900 text-5xl font-bold bg-white rounded-r-lg hidden">
                    <div class="px-10 py-4 font-roboto w-72">
                        <div class="flex flex-col items-end text-6xl font-bold text-testi italic">
                            <span>"</span>
                        </div>
                        <div class="flex flex-col items-start text-footer -mt-4">
                            <h1 class="text-2xl font-bold">Vinsen</h1>
                            <h2 class="text-lg font-semibold -mt-1">Project Manager</h2>
                            <p class="text-sm font-light pt-1">
                                Family Family Family Family
                                Family Family Family Family
                                Family Family Family Family
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex overflow-hidden px-8">
                <div class="filter">
                    <button id="foto-testi4" onclick="showTesti4()">
                        <div id="bg-testi-4" class="bg-testi bg-opacity-60 z-10 w-52 h-52 rounded-lg absolute">
                            <div class="mix-blend-hard-light bg-testi2 bg-opacity-10 w-52 h-52 rounded-lg"></div>
                        </div>
                        <div class="relative rounded-lg w-52 bg-red-300 bg-opacity-30 z-0">
                            <img id="foto-testi-4" src="images/vinsen-full.png" alt="" class="rounded-lg bg-red-200 w-52 h-52 z-0">
                        </div>
                    </button>
                </div>
                <div id="testi4" class="text-gray-900 text-5xl font-bold bg-white rounded-r-lg hidden">
                    <div class="px-10 py-4 font-roboto w-72">
                        <div class="flex flex-col items-end text-6xl font-bold text-testi italic">
                            <span>"</span>
                        </div>
                        <div class="flex flex-col items-start text-footer -mt-4">
                            <h1 class="text-2xl font-bold">Vinsen</h1>
                            <h2 class="text-lg font-semibold -mt-1">Project Manager</h2>
                            <p class="text-sm font-light pt-1">
                                Family Family Family Family
                                Family Family Family Family
                                Family Family Family Family
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Register Volunteer -->
    <div style="background-image: url('images/regis-volunteer.png');" class="pt-20 pb-20 bg-cover bg-local relative">
        <div class="flex flex-col items-center">
            <h1 class="text-footer text-5xl font-bold">What Are You Waiting For?</h1>
            <h1 class="text-footer text-5xl font-bold py-2">Join Us Now!</h1>
            <div class="py-4">
                <button class="py-1 rounded-full bg-gradient-to-r from-pink-400 to-red-500 shadow-lg">
                    <a class="text-white text-xl font-semibold px-20" href="">Register Here!</a>
                </button>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer style="background-image: url('images/bg-footer.png');" class="bg-cover bg-local relative">
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