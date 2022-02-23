@extends('layouts.navbar-conf')

@section('content')

    <div class="pt-24 md:pt-28 lg:pt-40 xl:pt-52 2xl:pt-60 pl-10 md:pl-14 lg:pl-20 xl:pl-24">
        <div class="w-72 md:w-96 lg:w-97 xl:w-98 h-48 md:h-56 lg:h-80 xl:h-96 bg-white bg-opacity-50 rounded-xl border-2 border-white px-5 py-5">
            <h1 class="font-bold text-lg md:text-2xl lg:text-4xl xl:text-5xl pb-3 xl:pb-5">
                Conference Day?
            </h1>
            <div class="rounded-full bg-gradient-to-l from-blue-300 to-pink-400 w-40 md:w-60 h-1 md:h-2"></div>
            <p class="text-xxs md:text-xs lg:text-base xl:text-xl pt-3 xl:pt-5 text-justify">
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
    <div class ="flex flex-col pt-40 md:px-5 pb-32 md:pb-60 relative justify-center">
        <img src="../images/bulet6.png" alt="", class="absolute w-64 md:w-1/2 right-0 bottom-0 -mb-52">
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
                                Feb 23, 2022                         
                            </span>
                        </div>
                        <div class="swiper-slide slide2 justify-center items-start flex-col items-start py-3 md:py-10">
                            <h2 class="text-center text-base md:text-2xl font-bold py-1 md:py-5">
                                Closed Registration
                            </h2>
                            <span class="text-footer text-xs md:text-xl">
                                Mar 4, 2021
                            </span>
                        </div>
                        <div class="swiper-slide slide2 justify-center items-center flex-col items-start py-3 md:py-10">
                            <h2 class="text-center text-base md:text-2xl font-bold py-1 md:py-5">
                                Delegates Announcement
                            </h2>
                            <span class="text-footer text-xs md:text-xl">
                                Mar 7, 2022
                            </span>
                        </div>
                        <div class="swiper-slide slide2 justify-center items-center flex-col items-start py-3 md:py-10">
                            <h2 class="text-center text-xs md:text-2xl font-bold py-1 md:py-5">
                                Technical Meeting
                            </h2>
                            <span class="text-footer text-xs md:text-xl">
                                Mar 11, 2022
                            </span>
                        </div>
                        <div class="swiper-slide slide2 justify-center items-center flex-col items-start py-3 md:py-10">
                            <h2 class="text-center text-base md:text-2xl font-bold py-1 md:py-5">
                                Conference Day
                            </h2>
                            <span class="text-footer text-xs md:text-xl">
                                Mar 20, 2022
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
    <div class="flex flex-row justify-between px-6 md:px-10 lg:px-14 xl:px-20">
        <div class="flex flex-col items-start w-60 md:w-80 lg:w-96 xl:w-98">
            <h2 class="text-base md:text-xl lg:text-2xl xl:text-3xl font-semibold">
                Session 1
            </h2>
            <h1 class="text-lg md:text-2xl lg:text-3xl xl:text-4xl 2xl:text-5xl font-bold py-1 md:py-3">
                Conference Day
            </h1>
            <div class="rounded-full bg-gradient-to-l from-blue-300 to-pink-400 w-40 w-40 md:w-60 h-1 md:h-2"></div>
            <p class="text-xxss md:text-xxs lg:text-xs xl:text-sm pt-2 text-justify">
            Today, the world faces 2 major issues, namely that concerning energy and ecology. 
            Despite price fluctuations, crude oil has tended to rise. The combustion of fossil 
            fuels generates hazardous substances such as greenhouse gasses, causing harm to everything 
            on this planet. Alternative vehicle fuels are the key to progress. The use of alternative 
            fuels necessitates substantial investment in car engine adaption and gasoline supply 
            infrastructure. In the first session, speakers who are experts in the field of environmentally 
            friendly fuels will provide an introduction to eco-friendly fuels, their importance, and highlight 
            whether they are economically feasible. The speakers will discuss the matter of biofuels, with a 
            highlight on biofuel production via carboxylate platform, their applications as well as the limitations 
            that come along with it.
            </p>
        </div>
        <div class="flex flex-col items-center mt-8 md:mt-5 pl-10 md:pl-20 lg:pl-32 xl:pl-40 z-10 w-36 md:w-52 lg:w-80 xl:w-97">
            <img src="../images/pembicara 1-02.png" alt="" class="h-24 md:h-44 lg:h-60 xl:h-72 2xl:h-80 z-10">
            <p class="text-footer text-xxxs md:text-xxs lg:text-xs xl:text-sm -mt-4 md:-mt-7 lg:-mt-10 xl:-mt-12 font-semibold z-20">Mark Thomas Holtzapple</p>
            <p class="text-footer text-xxs md:text-xxs lg:text-sm xl:text-base mt-1 md:mt-4 text-center">“Carboxylate Platform: Chemicals and Fuels from Biomass”</p>
        </div>
        <div class="flex flex-col items-center mt-8 md:mt-5 pl-5 md:pl-5 lg:pl-10 z-10 w-24 md:w-36 lg:w-60 xl:w-97">
            <img src="../images/pembicara 2-02.png" alt="" class="h-24 md:h-44 lg:h-60 xl:h-72 2xl:h-80">
            <p class="text-footer text-xxxs md:text-xxs lg:text-sm xl:text-sm -mt-4 md:-mt-7 lg:-mt-10 xl:-mt-12 font-semibold z-20">Amitabh Prasad</p>
            <p class="text-footer text-xxs md:text-xxs lg:text-sm xl:text-base mt-1 md:mt-4 text-center">“LNG, CNG and Hydrogen: Automotive Uses”</p>
        </div>
    </div>
    <div class="flex flex-row px-6 md:px-10 lg:px-14 xl:px-20 py-32">
        <!-- <img src="../images/pembicara 3-02.png" alt="" class="h-24 md:h-44 lg:h-60 xl:h-72 2xl:h-80 md:-mt-5 -mt-0 md:-ml-10 z-10">
        <img src="../images/pembicara 4-02.png.png" alt="" class="h-24 md:h-44 lg:h-60 xl:h-72 2xl:h-80 md:-mt-5 -mt-0 pl-5 md:pl-10 z-10"> -->
        <div class="flex flex-col items-center mt-8 md:mt-0 xl:-mt-5 z-10 w-36 md:w-52 lg:w-80 xl:w-96">
            <img src="../images/pembicara 3-02.png" alt="" class="h-24 md:h-44 lg:h-60 xl:h-72 2xl:h-80 z-10">
            <p class="text-footer text-xxxs md:text-xxs lg:text-sm xl:text-sm -mt-4 md:-mt-7 lg:-mt-10 xl:-mt-12 font-semibold z-20">Anish Malan</p>
            <p class="text-footer text-xxs md:text-xxs lg:text-sm xl:text-base mt-1 md:mt-4 text-center">“Battery as the Future of Energy”</p>
        </div>
        <div class="flex flex-col items-center mt-8 md:mt-0 xl:-mt-5 z-10 w-36 md:w-52 lg:w-80 xl:w-96">
            <img src="../images/pembicara 4-02.png" alt="" class="h-24 md:h-44 lg:h-60 xl:h-72 2xl:h-80">
            <p class="text-footer text-xxxs md:text-xxs lg:text-xs xl:text-sm -mt-4 md:-mt-7 lg:-mt-10 xl:-mt-12 font-semibold z-20">Hafeez Ur Rahman Memon</p>
            <p class="text-footer text-xxs md:text-xxs lg:text-sm xl:text-base mt-1 md:mt-4 text-center">“Battery as the Future of Energy”</p>
        </div>
        <img src="../images/bulet-conf-2.png" alt="" class="absolute left-0 -mt-20 h-80 md:h-120 lg:h-150">
        <div class="flex flex-col items-start w-72 md:w-80 lg:w-96 xl:w-98">
            <h2 class="text-base md:text-xl lg:text-2xl xl:text-3xl font-semibold">
                Session 2
            </h2>
            <h1 class="text-lg md:text-2xl lg:text-3xl xl:text-4xl 2xl:text-5xl font-bold py-1 md:py-3">
                Conference Day
            </h1>
            <div class="rounded-full bg-gradient-to-l from-blue-300 to-pink-400 w-40 md:w-60 h-1 md:h-2"></div>
            <p class="text-xxss md:text-xxs lg:text-xs xl:text-sm pt-2 text-justify">
            Today, coals and natural gases are still the primary source of electricity, 
            resulting in significant greenhouse gas emissions that contribute to global warming. 
            Some technological advancements have made it possible for us to get our electricity 
            from sources that are more natural and less harmful to the environment. Sunlight, wind, 
            water movement, earth's heat, plant materials, and many other sources of electricity 
            are more natural and environmentally friendly. The speakers will present the world of 
            various natural resources for electricity in this session. This session will be highlighted 
            by discussions about solar power and other sustainable energy sources.
            </p>
        </div>
    </div>
    <div class="flex flex-row px-6 md:px-10 lg:px-14 xl:px-20">
        <div class="flex flex-col items-start w-60 md:w-80 lg:w-96 xl:w-98">
            <h2 class="text-base md:text-xl lg:text-2xl xl:text-3xl font-semibold">
                Session 3
            </h2>
            <h1 class="text-lg md:text-2xl lg:text-3xl xl:text-4xl 2xl:text-5xl font-bold py-1 md:py-3">
                Conference Day
            </h1>
            <div class="rounded-full bg-gradient-to-l from-blue-300 to-pink-400 w-40 w-40 md:w-60 h-1 md:h-2"></div>
            <p class="text-xxss md:text-xxs lg:text-xs xl:text-sm pt-2 text-justify">
            Nearly everyone in the world uses fast-moving consumer goods (FMCG) every day. 
            Besides that, Greenpeace reported in 2019 that as much as 855 billion packaging 
            FMCG waste was sold in the global market, with Southeast Asia holding up to 50 
            percent of the market share. This is expected to increase to 1.3 million trillion 
            packages by 2027. Therefore, it is important for policy makers, packaging companies, 
            producers, and consumers work together to manage packaging waste responsibly to minimize 
            the impact of environmental damage caused by packaging FMCG waste. The speakers will 
            present Fast-Moving Consumer Goods waste management in Industry sector. This session 
            will be highlighted by discussions about the harmful waste from FMCG Industry sector 
            in ASEAN and how to manage a sustainable packaging to prevent a climate change crisis 
            because FMCG Waste.
            </p>
        </div>
        <div class="flex flex-col items-center mt-14 md:mt-5 pl-10 md:pl-20 lg:pl-32 xl:pl-40 z-10 w-36 md:w-52 lg:w-80 xl:w-97">
            <img src="../images/pembicara 5-02.png" alt="" class="h-24 md:h-44 lg:h-60 xl:h-72 2xl:h-80 z-10">
            <p class="text-footer text-xxxs md:text-xxs lg:text-sm xl:text-sm -mt-4 md:-mt-7 lg:-mt-10 xl:-mt-12 font-semibold z-20">Belinda Azzahra</p>
            <p class="text-footer text-xxs md:text-xxs lg:text-sm xl:text-base mt-1 md:mt-4 text-center">“Waste Management in FMCG Industry”</p>
        </div>
        <div class="flex flex-col items-center mt-14 md:mt-5 pl-5 md:pl-5 lg:pl-10 z-10 w-36 md:w-52 lg:w-80 xl:w-97">
            <img src="../images/pembicara 6-02.png" alt="" class="h-24 md:h-44 lg:h-60 xl:h-72 2xl:h-80">
            <p class="text-footer text-xxxs md:text-xxs lg:text-xs xl:text-sm -mt-4 md:-mt-7 lg:-mt-10 xl:-mt-12 font-semibold z-20">Aurelia Salsabila Putri</p>
            <p class="text-footer text-xxs md:text-xxs lg:text-sm xl:text-base mt-1 md:mt-4 text-center">"The Eco-Friendly Packaging for Sustainable FMCG Industry"</p>
        </div>
        <img src="../images/bulet-conf-1.png" alt="" class="absolute right-0 -mt-20 h-80 md:h-120 lg:h-150">
    </div>

    <!-- Testi -->
    <h1 class="pt-40 text-2xl md:text-4xl lg:text-5xl xl:text-6xl text-footer text-center font-bold z-10">
        Testimonial from Last Year
    </h1>
    <div class="flex flex-col relative justify-center">
        <div class ="flex flex-col pt-10 md:px-0 pb-20 md:pb-40 relative justify-center">
            <div class="border rounded-lg shadow-2xl" data-aos="fade-right">
                <div class="flex flex-row items-end" data-aos="fade-right" data-aos-duration="3000">
                    <!-- Slider main container -->
                    <div class="swiper-container swiper3 px-20 bg-gradient-to-l from-blue-300 to-pink-400">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper md:px-1">
                            <!-- Slides -->
                            <div class="swiper-slide slide3 justify-center items-start flex-col items-start py-3 md:py-10">
                                <div class="bg-white bg-opacity-50 rounded-xl w-full h-full flex flex-row items-center px-5 md:px-10 lg:px-14">
                                    <img src="../images/Testimonial AISC 1-01.png" alt="" class="h-16 md:h-40 lg:h-52 xl:h-60">
                                    <div class="pl-4 md:pl-14 lg:pl-16 xl:pl-20 md:py-4 lg:py-6 xl:py-10">
                                        <h1 class="font-bold text-sm md:text-xl lg:text-2xl xl:text-3xl">
                                            Aditya Perdana Putra Purnomo
                                        </h1>
                                        <p class="text-xxxs md:text-sm lg:text-base xl:text-lg text-justify pt-5">
                                        “Being a delegate in Last Year's conference day was a privilege for me, 
                                        to share the stage with great speakers and other delegates, it's surely an amazing experiences.<br />

                                        Ps : Wanna know the tips and tricks to snatch the best delegate title? 
                                        Don't treat this conference as a competition, but as a media to share 
                                        and fills each others knowledge"
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide slide3 justify-center items-start flex-col items-start py-3 md:py-10">
                                <div class="bg-white bg-opacity-50 rounded-xl w-full h-full flex flex-row items-center px-5 md:px-10 lg:px-14">
                                    <img src="../images/Testimonial AISC 2-01.png" alt="" class="h-16 md:h-40 lg:h-52 xl:h-60">
                                    <div class="pl-4 md:pl-14 lg:pl-16 xl:pl-20 md:py-4 lg:py-6 xl:py-10">
                                        <h1 class="font-bold text-sm md:text-xl lg:text-2xl xl:text-3xl">
                                            Crescencia Melissa
                                        </h1>
                                        <p class="text-xxxs md:text-xs lg:text-base xl:text-lg text-justify pt-5">
                                            “AISC 2021 Conference Day was a truly memorable event for me as I was able 
                                            to directly discuss and interact with experts in the practice of waste management. 
                                            Not only was the discussion substantive, but the invited speakers were also very 
                                            encouraging in our quest for knowledge,I am proud to say that this event led me 
                                            to my very first internship! So, what are you waiting for? Join Conference Day 
                                            AISC 2022 as it will surely prove to be an enriching and memorable experience!”
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide slide3 justify-center items-start flex-col items-start py-3 md:py-10">
                                <div class="bg-white bg-opacity-50 rounded-xl w-full h-full flex flex-row items-center px-5 md:px-10 lg:px-14">
                                    <img src="../images/Testimonial AISC 3-01.png" alt="" class="h-16 md:h-40 lg:h-52 xl:h-60">
                                    <div class="pl-4 md:pl-14 lg:pl-16 xl:pl-20 md:py-4 lg:py-6 xl:py-10">
                                        <h1 class="font-bold text-sm md:text-xl lg:text-2xl xl:text-3xl">
                                            Dayinta Annisa Syaiful
                                        </h1>
                                        <p class="text-xxxs md:text-xs lg:text-sm xl:text-base text-justify pt-5">
                                            “The first thing I can explain about AISC is absolutely worth to try. 
                                            It’s been a pleasure for me to be part of AISC as a delegate. I had an 
                                            amazing experience when joining AISC I. Not only getting the benefit of 
                                            the conference itself, such as getting so much improvement of public 
                                            speaking, negotiation, critical thinking, and met a lot of great young 
                                            future leaders from all around the globe. But also build a friendship, 
                                            sharing cultures, promoting and learning about different issues, which 
                                            make us beautiful in the diversity and many more that would be memorable 
                                            for you. The committees and all of the delegates could bring positive 
                                            vibes through the event. This is not only the international conference, 
                                            but this is the perfect place for you to improve and challenge yourself. 
                                            Don’t be hesitate to be part of AISC!”
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
    <img src="../images/bulet-conf-3.png" alt="" class="absolute left-20 -mt-80 h-60 md:h-120">
    <div class="py-20 flex flex-col items-center bg-white bg-opacity-30 shadow-lg rounded-xl">
        <h1 class="z-10 font-bold text-footer text-xl md:text-3xl lg:text-4xl xl:text-5xl pb-5">
            Check It Out For More Information
        </h1>
        <button class="w-48 md:w-60 lg:w-80 xl:w-96 py-1 bg-gradient-to-l from-blue-300 to-purple-400 shadow-lg text-white text-sm md:text-lg lg:text-xl xl:text-2xl font-semibold rounded-full">
            <a href="">Conference Day Guidebook</a>
        </button>
    </div>

    <img src="../images/bulet-conf-4.png" alt="" class="absolute right-0 -mt-20 h-60 md:h-120">
    <div class="py-20 flex flex-col items-center bg-white bg-opacity-30 shadow-lg rounded-xl">
        <h1 class="z-10 font-bold text-footer text-xl md:text-3xl lg:text-4xl xl:text-5xl pb-5">
            Join Conference Day Now!
        </h1>
        <button class="w-48 md:w-60 lg:w-80 xl:w-96 py-1 bg-gradient-to-l from-blue-300 to-purple-400 shadow-lg text-white text-sm md:text-lg lg:text-xl xl:text-2xl font-semibold rounded-full">
            <a href="{{ route('conference-registration-get') }}">Register Here!</a>
        </button>
    </div>

    <img src="../images/bulet-conf-5.png" alt="" class="absolute left-0 -mt-20 h-80 md:h-120">
    <div class="py-20 flex flex-col items-center bg-white bg-opacity-30 shadow-lg rounded-xl">
        <h1 class="z-10 font-bold text-footer text-xl md:text-3xl lg:text-4xl xl:text-5xl pb-5">
            Exhibition is Here
        </h1>
        <button class="w-48 md:w-60 lg:w-80 xl:w-96 py-1 bg-gradient-to-l from-blue-300 to-purple-400 shadow-lg text-white text-sm md:text-lg lg:text-xl xl:text-2xl font-semibold rounded-full">
            <a href="{{ route('exhibition') }}">Join Here!</a>
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