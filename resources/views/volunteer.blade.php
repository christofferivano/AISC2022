@extends('layouts.navbar-volunteer')

@section('content')

    <!-- Penjelasan Volunteer -->
    <div class="py-44">
        <div class="relative px-12">
            <div class="absolute z-0">
                <img src="images/bg-volunteer-1.png" alt="">
            </div>
            <div class="absolute z-10 pl-28 py-10">
                <h2 class="text-footer text-5xl font-bold tracking-wide">
                    Apa itu Volunteer?
                </h2>
                <div class="pt-5">
                    <div class="py-1 rounded-full bg-gradient-to-r from-pink-400 to-red-500 w-56"></div>
                </div>
                <p class="w-97.5 py-7 text-footer text-2xl">
                    Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi
                    Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi
                    Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi
                    Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi
                    Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi
                </p>
            </div>
        </div>
    </div>

    <!-- Jobdesc Volunteer -->
    <div class="pt-72 pb-98">
        <div class="relative px-12">
            <div class="absolute z-0">
                <img src="images/bg-volunteer-1.png" alt="">
            </div>
            <div class="absolute flex flex-col items-start z-10 pl-103 py-10">
                <h2 class="text-footer text-5xl font-bold tracking-wide">
                    Jobdesc Volunteer?
                </h2>
                <div class="pt-5">
                    <div class="py-1 rounded-full bg-gradient-to-r from-pink-400 to-red-500 w-56"></div>
                </div>
                <p class="w-97.5 py-7 text-footer text-2xl">
                    Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi
                    Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi
                    Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi
                    Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi
                    Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi
                </p>
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
        <div class="flex flex-row items-center py-5 pl-72">
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