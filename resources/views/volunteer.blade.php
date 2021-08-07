@extends('layouts.navbar-volunteer')

@section('content')

    <!-- Penjelasan Volunteer -->
    <div class="md:hidden absolute left-0 top-0">
        <img src="images/bulet-respon-volun-1.png" alt="" class="h-96"> 
    </div>
    <div class="pt-20 md:pt-44 pb-20">
        <div class="px-2 md:px-12 relative md:flex">
            <div class="z-10 md:pl-28 pt-20 flex flex-col items-center md:items-start">
                <h2 class="text-footer text-3xl md:text-6xl font-bold md:tracking-wide">
                    What is Volunteer?
                </h2>
                <div class="pt-5">
                    <div class="py-1 rounded-full bg-gradient-to-r from-pink-400 to-red-500 w-56"></div>
                </div>
                <p class="w-64 md:w-96 py-7 text-footer text-lg md:text-2xl text-center md:text-left">
                    People who register to be part of
                    AISC 2022 together we actualize 
                    AISC purposes and plan.
                </p>
            </div>
            <div class="absolute flex flex-col items-end top-0 right-0">
                <img src="images/volunteer-1.png" alt="" class="h-140 hidden md:flex">
            </div>
        </div>
    </div>

    <!-- Positions -->
    <div class="md:pt-52 pb-10">
        <div class="flex flex-col items-center">
            <h1 class="text-center text-footer text-3xl md:text-5xl font-bold">Positions Available</h1>
        </div>
        <div class="flex flex-row justify-between px-5 md:px-32 pt-10">
            <div id="card-event-1" class="relative flex flex-col items-center">
                <button id="card-event" class="rounded-xl bg-cardEvent w-14 h-14 md:w-52 md:h-52 shadow-lg">
                    <div class="flex flex-col items-center">
                        <img src="images/event-logo.png" alt="" class="w-8 h-8 md:w-32 md:h-32">
                        <h2 class="text-footer text-xxs md:text-xl font-semibold pt-2">Event</h2>
                    </div>
                </button>
            </div>
            <div id="card-event-2" class="flex flex-col items-center">
                <button id="card-compe" class="relative rounded-xl bg-cardCompe w-14 h-14 md:w-52 md:h-52 shadow-lg">
                    <div class="flex flex-col items-center">
                        <img src="images/compe-logo.png" alt="" class="w-8 h-8 md:w-32 md:h-32">
                        <h2 class="text-footer text-xxs md:text-xl font-semibold pt-2">Competition</h2>
                    </div>
                </button>
            </div>
            <div id="card-event-3" class="flex flex-col items-center">
                <button id="card-mm" class="relative rounded-xl bg-cardMM w-14 h-14 md:w-52 md:h-52 shadow-lg pt-2">
                    <div class="flex flex-col items-center">
                        <img src="images/mm-logo.png" alt="" class="w-7 h-7 md:w-32 md:h-32">
                        <h2 class="text-footer text-xxs md:text-xl font-semibold md:pt-2">Media</h2>
                        <h2 class="text-footer text-xxs md:text-xl font-semibold -mt-1">Marketing</h2>
                    </div>
                </button>
            </div>
            <div id="card-event-4" class="flex flex-col items-center">
                <button id="card-logistic" class="relative rounded-xl bg-cardLogis w-14 h-14 md:w-52 md:h-52 shadow-lg">
                    <div class="flex flex-col items-center">
                        <img src="images/logistic-logo.png" alt="" class="w-8 h-8 md:w-32 md:h-32">
                        <h2 class="text-footer text-xxs md:text-xl font-semibold pt-2">Logistic</h2>
                    </div>
                </button>
            </div>
            <div id="card-event-5" class="flex flex-col items-center">
                <button id="card-sponsorship" class="relative rounded-xl bg-cardSponsor w-14 h-14 md:w-52 md:h-52 shadow-lg">
                    <div class="flex flex-col items-center pt-1 md:pt-4">
                        <img src="images/sponsorship-logo.png" alt="" class="w-8 h-6 md:w-32 md:h-28">
                        <h2 class="text-footer text-xxs md:text-xl font-semibold pt-2 md:pt-4">Sponsorship</h2>
                    </div>
                </button>
                <div id="focus-line-5" class="hidden pt-1">
                    <div class="rounded-full bg-footer w-32 py-1"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="md:hidden absolute z-0 right-0 bottom-0 -mb-96">
        <img src="images/bulet-respon-volun-2.png" alt="" class="h-96"> 
    </div>

    <div id="event" class="hidden z-10 grid md:grid-cols-3 py-5 md:py-10 px-5 md:px-10">
        <div class="flex flex-col items-center md:flex-row w-full">
            <div class="md:col-span-1">
                <div class="flex flex-row md:flex-col items-center">
                    <div class="pb-5">
                        <button onclick="divVisibility('content-event-1')" id="event-1" class="text-buttonVolunteer text-xs md:text-2xl font-semibold rounded-full shadow-lg border-2 border-buttonVolunteer h-6 md:h-16 w-24 md:w-97 focus:bg-cardEvent focus:text-footer hover:text-footer hover:bg-cardEvent">
                            Pre-Event
                        </button>
                    </div>
                    <div class="pb-5 px-4">
                        <button onclick="divVisibility('content-event-2')" id="event-2" class="text-buttonVolunteer text-xxs md:text-2xl font-semibold rounded-full shadow-lg border-2 border-buttonVolunteer h-6 md:h-16 w-24 md:w-97 focus:bg-cardEvent focus:text-footer hover:text-footer hover:bg-cardEvent">
                            Conference Day
                        </button>
                    </div>
                    <div class="pb-5">
                        <button onclick="divVisibility('content-event-3')" id="event-3" class="text-buttonVolunteer text-xxs md:text-2xl font-semibold rounded-full shadow-lg border-2 border-buttonVolunteer h-6 md:h-16 w-24 md:w-97 focus:bg-cardEvent focus:text-footer hover:text-footer hover:bg-cardEvent">
                            nAISC Night
                        </button>
                    </div>
                </div>
            </div>
            <div class="md:col-span-2 md:col-start-2">
                <div id="content-event-1" class="hidden flex flex-col items-center md:pl-10">
                    <div class="rounded-lg shadow-lg w-full md:w-99 h-36 md:h-60 bg-cardEvent">
                        <div class="px-4 md:px-10 py-2 md:py-5">
                            <div class="flex flex-row items-center">
                                <img src="images/preevent-logo.png" alt="" class="w-4 md:w-14">
                                <h2 class="pl-2 md:pl-3 text-lg md:text-5xl font-semibold text-footer">Pre-Event</h2>
                            </div>
                            <div class="grid grid-cols-2 md:pt-2">
                                <div class="col-span-1">
                                    <h2 class="text-md md:text-2xl font-semibold text-footer">Jobdesc:</h2>
                                    <ul class="list-disc text-footer px-2 md:px-5 text-xxs md:text-base">
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
                                    <h2 class="text-md md:text-2xl font-semibold text-footer">Requirements:</h2>
                                    <ul class="list-disc text-footer px-2 md:px-5 text-xxs md:text-base">
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
                <div id="content-event-2" class="hidden flex flex-col items-center md:pl-10">
                    <div class="rounded-lg shadow-lg w-full md:w-99 h-30 md:h-60 bg-cardEvent">
                        <div class="px-4 md:px-10 py-2 md:py-5">
                            <div class="flex flex-row items-center">
                                <img src="images/conf-day-logo.png" alt="" class="w-4 md:w-14">
                                <h2 class="pl-2 md:pl-3 text-lg md:text-5xl font-semibold text-footer">Conference Day</h2>
                            </div>
                            <div class="md:pt-2">
                                <p class="font-semibold text-footer text-xxs md:text-base">
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
                <div id="content-event-3" class="hidden flex flex-col items-center md:pl-10">
                    <div class="rounded-lg shadow-lg w-full md:w-99 h-24 md:h-60 bg-cardEvent">
                        <div class="px-4 md:px-10 py-2 md:py-5">
                            <div class="flex flex-row items-center">
                                <img src="images/naisc-logo.png" alt="" class="w-4 md:w-14">
                                <h2 class="pl-2 md:pl-3 text-lg md:text-5xl font-semibold text-footer">nAISC Night</h2>
                            </div>
                            <div class="md:pt-2">
                                <p class="font-semibold text-footer text-xxs md:text-base">
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
    </div>

    <div id="competition" class="hidden z-10 grid md:grid-cols-3 py-5 md:py-10 px-5 md:px-10">
        <div class="flex flex-col items-center md:flex-row w-full">
            <div class="md:col-span-1">
                <div class="flex flex-row md:flex-col items-center">
                    <div class="pb-5">
                        <button onclick="divVisibility('content-compe-1')" id="compe-1" class="rounded-full shadow-lg border-2 border-buttonCompe h-8 md:h-16 w-24 md:w-97 text-buttonCompe text-xxs md:text-2xl font-semibold hover:bg-cardCompe focus:bg-cardCompe focus:text-footer">
                            Paper Competition
                        </button>
                    </div>
                    <div class="pb-5 px-4">
                        <button onclick="divVisibility('content-compe-2')" id="compe-2" class="rounded-full shadow-lg border-2 border-buttonCompe h-8 md:h-16 w-24 md:w-97 text-buttonCompe text-xxs md:text-2xl font-semibold hover:bg-cardCompe focus:bg-cardCompe focus:text-footer">
                            Poster Competition
                        </button>
                    </div>
                    <div class="pb-5">
                        <button onclick="divVisibility('content-compe-3')" id="compe-3" class="rounded-full shadow-lg border-2 border-buttonCompe h-8 md:h-16 w-24 md:w-97 text-buttonCompe text-xxs md:text-2xl font-semibold hover:bg-cardCompe focus:bg-cardCompe focus:text-footer">
                            ChemE Jeopardy Competition                
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-span-2 col-start-2">
                <div id="content-compe-1" class="hidden flex flex-col items-center md:pl-10">
                    <div class="rounded-lg shadow-lg w-80 md:w-99 h-24 md:h-60 bg-cardCompe">
                        <div class="px-4 md:px-10 py-2 md:py-5">
                            <div class="flex flex-row items-center">
                                <img src="images/paper-compe-logo.png" alt="" class="w-4 md::w-14">
                                <h2 class="pl-2 md:pl-3 text-lg md:text-5xl font-semibold text-footer">Paper Competition</h2>
                            </div>
                            <div class="md:pt-2">
                                <p class="font-semibold text-footer text-xxs md:text-base">
                                A platform for undergraduate students in Southeast Asia with
                                ideas, innovations, and discoveries that are related to the future
                                of the industry to present and validate their vision in the form of
                                research papers.
                                </p>          
                            </div>
                        </div>
                    </div>
                </div>
                <div id="content-compe-2" class="hidden flex flex-col items-center md:pl-10">
                    <div class="rounded-lg shadow-lg w-80 md:w-99 h-24 md:h-60 bg-cardCompe">
                        <div class="px-4 md:px-10 py-2 md:py-5">
                            <div class="flex flex-row items-center">
                                <img src="images/poster-compe-logo.png" alt="" class="w-3 md:w-10 h-4 md:h-14">
                                <h2 class="pl-2 md:pl-3 text-lg md:text-5xl font-semibold text-footer">Poster Competition</h2>
                            </div>
                            <div class="md:pt-2">
                                <p class="font-semibold text-footer text-xxs md:text-base">
                                A competition targeting undergraduate students in Southeast
                                Asia to show their distinguished innovations in a scientific
                                poster. A scientific poster is a two-dimensional visual
                                representation that consists of a research summary including
                                graphs, tables, and pictures that are simple to follow. 
                                </p>          
                            </div>
                        </div>
                    </div>
                </div>
                <div id="content-compe-3" class="hidden flex flex-col items-center md:pl-10">
                    <div class="rounded-lg shadow-lg w-80 md:w-99 h-24 md:h-60 bg-cardCompe">
                        <div class="px-4 md:px-10 py-2 md:py-5">
                            <div class="flex flex-row items-center">
                                <img src="images/cheme-compe-logo.png" alt="" class="w-4 md:w-14">
                                <h2 class="pl-2 md:pl-3 text-lg md:text-5xl font-semibold text-footer">ChemE Jeopardy Competition</h2>
                            </div>
                            <div class="md:pt-2">
                                <p class="font-semibold text-footer text-xxs md:text-base">
                                The first fast-paced quiz competition in Indonesia for
                                undergraduate students in Southeast Asia in which teams are
                                presented with Chemical Engineering-related questions
                                presented on the game board, and must phrase their responses
                                in the form of answers. 
                                </p>          
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="mm" class="hidden z-10 grid md:grid-cols-3 py-5 md:py-10 px-5 md:px-10">
        <div class="flex flex-col items-center md:flex-row w-full">
            <div class="md:col-span-1">
                <div class="flex flex-row md:flex-col items-center">
                    <div class="pb-5">
                        <button onclick="divVisibility('content-mm-1')" id="mm-1" class="rounded-full shadow-lg border-2 border-buttonMM h-6 md:h-16 w-24 md:w-97 text-buttonMM text-xxs md:text-2xl font-semibold hover:bg-cardMM focus:bg-cardMM focus:text-footer">
                            Social Media Specialist
                        </button>
                    </div>
                    <div class="pb-5 px-4">
                        <button onclick="divVisibility('content-mm-2')" id="mm-2" class="rounded-full shadow-lg border-2 border-buttonMM h-6 md:h-16 w-24 md:w-97 text-buttonMM text-xxs md:text-2xl font-semibold hover:bg-cardMM focus:bg-cardMM focus:text-footer">
                            Media Production
                        </button>
                    </div>
                    <div class="pb-5">
                        <button onclick="divVisibility('content-mm-3')" id="mm-3" class="rounded-full shadow-lg border-2 border-buttonMM h-6 md:h-16 w-24 md:w-97 text-buttonMM text-xxs md:text-2xl font-semibold hover:bg-cardMM focus:bg-cardMM focus:text-footer">
                            Outreach               
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-span-2 col-start-2">
                <div id="content-mm-1" class="hidden flex flex-col items-center md:pl-10">
                    <div class="rounded-lg shadow-lg w-80 md:w-99 h-24 md:h-60 bg-cardMM">
                        <div class="px-4 md:px-10 py-2 md:py-5">
                            <div class="flex flex-row items-center">
                                <img src="images/socmed-mm-logo.png" alt="" class="w-4 md:w-14">
                                <h2 class="pl-2 md:pl-3 text-lg md:text-5xl font-semibold text-footer">Social Media Specialist</h2>
                            </div>
                            <div class="pt-2">
                                <p class="font-semibold text-footer text-xxs md:text-base">
                                Responsible for managing all social media, and synergize with
                                all departments in regards for publication in order to grow
                                audience and maintain audience engagement.
                                </p>          
                            </div>
                        </div>
                    </div>
                </div>
                <div id="content-mm-2" class="hidden flex flex-col items-center md:pl-10">
                    <div class="rounded-lg shadow-lg w-80 md:w-99 h-24 md:h-60 bg-cardMM">
                        <div class="px-4 md:px-10 py-2 md:py-5">
                            <div class="flex flex-row items-center">
                                <img src="images/medpro-mm-logo.png" alt="" class="2-3 md:w-10 h-4 md:h-14">
                                <h2 class="pl-2 md:pl-3 text-lg md:text-5xl font-semibold text-footer">Media Production</h2>
                            </div>
                            <div class="md:pt-2">
                                <p class="font-semibold text-footer text-xxs md:text-base">
                                Responsible for producing all content needed both and
                                externally. Making sure the designs requested are produced
                                with the best quality and punctually.
                                </p>          
                            </div>
                        </div>
                    </div>
                </div>
                <div id="content-mm-3" class="hidden flex flex-col items-center md:pl-10">
                    <div class="rounded-lg shadow-lg w-80 md:w-99 h-24 md:h-60 bg-cardMM">
                        <div class="px-4 md:px-10 py-2 md:py-5">
                            <div class="flex flex-row items-center">
                                <img src="images/outreach-mm-logo.png" alt="" class="w-4 md:w-14">
                                <h2 class="pl-2 md:pl-3 text-lg md:text-5xl font-semibold text-footer">Outreach</h2>
                            </div>
                            <div class="md:pt-2">
                                <p class="font-semibold text-footer text-xxs md:text-base">
                                Responsible for raising our program awareness and build
                                strategic relationship with AISC’s partners and Campus
                                Ambassadors.
                                </p>          
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="logistic" class="hidden grid grid-cols-3 py-10 px-10">
        <div class="flex flex-col items-center md:flex-row w-full">
            <div class="md:col-span-1">
                <div class="flex flex-row md:flex-col items-center">
                    <div class="pb-5">
                        <button onclick="divVisibility('content-logis-1')" id="logis-1" class="rounded-full shadow-lg bg-cardLogis h-6 md:h-16 w-24 md:w-97 text-footer text-xs md:text-2xl font-semibold">
                            Logistic
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-span-2 col-start-2">
                <div id="content-logis-1" class="flex flex-col items-center md:pl-10">
                    <div class="rounded-lg shadow-lg w-80 md:w-99 h-24 md:h-60 bg-cardLogis">
                        <div class="px-4 md:px-10 py-2 md:py-5">
                            <div class="flex flex-row items-center">
                                <img src="images/logistic-logo-2.png" alt="" class="w-4 md:w-14">
                                <h2 class="pl-2 md:pl-3 text-lg md:text-5xl font-semibold text-footer">Department of Logistic</h2>
                            </div>
                            <div class="md:pt-2">
                                <p class="font-semibold text-footer text-xxs md:text-base">
                                Being responsible for synergizing with all the departments in
                                accommodating all the equipment needed for the sake of
                                supporting our events’ success.
                                </p>          
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="sponsorship" class="hidden grid grid-cols-3 py-10 px-10">
        <div class="flex flex-col items-center md:flex-row w-full">
            <div class="md:col-span-1">
                <div class="flex flex-row md:flex-col items-center">
                    <div class="pb-5">
                        <button onclick="divVisibility('content-sponsor-1')" id="sponsor-1" class="rounded-full shadow-lg bg-cardSponsor h-6 md:h-16 w-24 md:w-97 text-footer text-xs md:text-2xl font-semibold">
                            Sponsorship
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-span-2 col-start-2">
                <div id="content-sponsor-1" class="flex flex-col items-center md:pl-10">
                    <div class="rounded-lg shadow-lg w-80 md:w-99 h-24 md:h-60 bg-cardSponsor">
                        <div class="px-4 md:px-10 py-2 md:py-5">
                            <div class="flex flex-row items-center">
                                <img src="images/sponsorship-logo-2.png" alt="" class="w-4 md:w-14">
                                <h2 class="pl-2 md:pl-3 text-lg md:text-5xl font-semibold text-footer">Department of Sponsorship</h2>
                            </div>
                            <div class="md:pt-2">
                                <p class="font-semibold text-footer text-xxs md:text-base">
                                Having the expertise to pitch and negotiate our potential
                                sponsor with reponsibility for making agreement with related
                                companies to provide us financial support.
                                </p>          
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Timeline -->
    <div class="rounded-lg shadow-2xl absolute md:relative z-10">
        <div class="pt-2 md:pt-10">
            <span class="h-16 md:h-70 flex justify-center items-center font-bold text-xl md:text-4xl drop-shadow-lg py-2 md:py-5">
                <font color ="#30264F">TIMELINE</font>
            </span>
        </div>
        <div class="flex flex-row items-end pb-5 md:pb-20">
            <!-- Slider main container -->
            <div class="swiper-container swiper2 my-2 md:my-10 pl-5 md:pl-20 h-20">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper md:my-4 md:px-1 absolute">
                    <!-- Slides -->
                    <div class="swiper-slide slide2 justify-center items-center flex-col items-start py-3 md:py-10">
                        <h2 class="text-center text-base md:text-2xl font-bold py-1 md:py-5">
                            Open Recruitment Volunteer
                        </h2>
                        <span class="text-sm md:text-xl">
                            9th August 2021                            
                        </span>
                    </div>
                    <div class="swiper-slide slide2 justify-center items-center flex-col items-start py-3 md:py-10">
                        <h2 class="text-center text-base md:text-2xl font-bold py-1 md:py-5">
                            AISChat 1 
                        </h2>
                        <span class="text-sm md:text-xl">
                            18th September 2021
                        </span>
                    </div>
                    <div class="swiper-slide slide2 justify-center items-center flex-col items-start py-3 md:py-10">
                        <h2 class="text-center text-base md:text-2xl font-bold py-1 md:py-5">
                            AISChat 2
                        </h2>
                        <span class="text-sm md:text-xl">
                            2nd October 2021
                        </span>
                    </div>
                    <div class="swiper-slide slide2 justify-center items-center flex-col items-start py-3 md:py-10">
                        <h2 class="text-center text-base md:text-2xl font-bold py-1 md:py-5">
                            AISCompetency 1
                        </h2>
                        <span class="text-sm md:text-xl">
                            16th October 2021
                        </span>
                    </div>
                    <div class="swiper-slide slide2 justify-center items-center flex-col items-start py-3 md:py-10">
                        <h2 class="text-center text-base md:text-2xl font-bold py-1 md:py-5">
                            Open Competition Registration
                        </h2>
                        <span class="text-sm md:text-xl">
                            24th October 2021
                        </span>
                    </div>
                    <div class="swiper-slide slide2 justify-center items-center flex-col items-start py-3 md:py-10">
                        <h2 class="text-center text-base md:text-2xl font-bold py-1 md:py-5">
                            AISChat 3
                        </h2>
                        <span class="text-sm md:text-xl">
                            27th November 2021
                        </span>
                    </div>
                    <div class="swiper-slide slide2 justify-center items-center flex-col items-start py-3 md:py-10">
                        <h2 class="text-center text-base md:text-2xl font-bold py-1 md:py-5">
                            Open Competition Registration
                        </h2>
                        <span class="text-sm md:text-xl">
                            24th October 2021
                        </span>
                    </div>
                    <div class="swiper-slide slide2 justify-center items-center flex-col items-start py-3 md:py-10">
                        <h2 class="text-center text-base md:text-2xl font-bold py-1 md:py-5">
                            AISChat 3
                        </h2>
                        <span class="text-sm md:text-xl">
                            27th October 2021
                        </span>
                    </div>
                    <div class="swiper-slide slide2 justify-center items-center flex-col items-start py-3 md:py-10">
                        <h2 class="text-center text-base md:text-2xl font-bold py-1 md:py-5">
                            AISCompetency 2
                        </h2>
                        <span class="text-sm md:text-xl">
                            18th December 2021
                        </span>
                    </div>
                    <div class="swiper-slide slide2 justify-center items-center flex-col items-start py-3 md:py-10">
                        <h2 class="text-center text-base md:text-2xl font-bold py-1 md:py-5">
                            AISChat 4
                        </h2>
                        <span class="text-sm md:text-xl">
                            15th January 2022
                        </span>
                    </div>
                    <div class="swiper-slide slide2 justify-center items-center flex-col items-start py-3 md:py-10">
                        <h2 class="text-center text-base md:text-2xl font-bold py-1 md:py-5">
                            D-Day Competition
                        </h2>
                        <span class="text-sm md:text-xl">
                            12th May 2022
                        </span>
                    </div>
                    <div class="swiper-slide slide2 justify-center items-center flex-col items-start py-3 md:py-10">
                        <h2 class="text-center text-base md:text-2xl font-bold py-1 md:py-5">
                            nAISC Night
                        </h2>
                        <span class="text-sm md:text-xl">
                            19th March 2022
                        </span>
                    </div>
                    <div class="swiper-slide slide2 justify-center items-center flex-col items-start py-3 md:py-10">
                        <h2 class="text-center text-base md:text-2xl font-bold py-1 md:py-5">
                            Conference Day
                        </h2>
                        <span class="text-sm md:text-xl">
                            20th March 2022
                        </span>
                    </div>
                </div>
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev h-1"></div>
                <div class="swiper-button-next h-1"></div>
            </div>
        </div>
    </div>

    <!-- Register Volunteer -->
    <div class="pt-20 flex flex-col items-center pt-80 md:pt-20">
        <h1 class="text-footer text-2xl md:text-5xl font-bold text-center">What Are You Waiting For?</h1>
        <h1 class="text-footer text-2xl md:text-5xl font-bold text-center md:py-2">Join Us Now!</h1>
        <div class="pt-5 pb-10 md:py-16">
            <button class="py-1 rounded-full bg-gradient-to-l from-blue-300 to-purple-400 shadow-lg">
                <a class="text-white text-xl font-semibold px-20" href="">Register Here!</a>
            </button>
        </div>
        <div class="hidden md:block absolute z-0 my-0 flex left-52">
            <img src="images/bultet-regis.png" alt="" class="w-1/2">
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