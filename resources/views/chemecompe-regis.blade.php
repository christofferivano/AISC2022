@extends('layouts.navbar-aischat')


@section('content')
    <div class="block md:hidden absolute left-0 top-0 z-0">
        <img src="/images/bulet-aischat-4.png" alt="" class="h-48 opacity-50">
    </div>
    <div class="hidden md:block absolute">
        <img src="/images/compe-atas.png" alt="" class="w-97 ml-96 pl-20">
    </div>
    <div class="pt-32 md:grid md:grid-cols-5 pb-96 md:pb-32 md:w-full">
        <div class="md:col-span-2 md:col-start-1 pl-1 md:pl-24 flex flex-col items-start md:w-full">
            <h1 class="hidden md:block md:absolute py-5 md:py-0.5 md:relative text-2xl md:text-5xl font-bold">
                ChemE Jeopardy Competition Registration
                <h2 class="md:hidden text-lg font-bold">
                    ChemE Jeopardy Competition
                </h2>
                <h1 class="md:hidden text-2xl font-bold">
                    Registration
                </h1>
                <div class="md:hidden flex flex-row right-0 pl-72 md:pl-80 -mt-10 pt-6">
                    <div class="rounded-full h-3 md:h-4 w-3 md:w-4 bg-gradient-to-l from-blue-300 to-purple-400 shadow-lg"></div>
                    <div class="px-1 md:px-2">
                        <div class="rounded-full h-3 md:h-4 w-3 md:w-4 bg-gradient-to-r from-gray-100 to-gray-300 shadow-lg"></div>
                    </div>
                    <div class="">
                        <div class="rounded-full h-3 md:h-4 w-3 md:w-4 bg-gradient-to-r from-gray-100 to-gray-300 shadow-lg"></div>
                    </div>
                </div>
            </h1>
            <div class="absolute md:relative pt-16 md:pt-4">
                <div class="rounded-full py-0.5 md:py-1 px-20 bg-gradient-to-l from-blue-300 to-purple-400 ">
                    <div class="px-0 md:px-20"></div>
                </div>
            </div>
            <div class="w-72 md:w-full pt-2 md:pt-0 md:pr-5 z-10">
                <form action="{{ route('aischat-regis-one') }}" method="POST" class="flex flex-col pt-10 md:pt-12">
                    @csrf
                    <label for="teamname" class="pb-2 pl-4 text-base md:text-xl font-medium">Team Name*</label>
                    <input value="{{{ $chatregis->teamname ?? '' }}}" name="team name" type="text" class="outline-none rounded-full border border-form py-1 px-4 w-96 md:w-80 text-sm focus:ring-2 focus:ring-form" placeholder="">
                    @error('teamname')
                            <div class="text-red-500 mt-2 text-sm">
                                The team name is required!
                            </div>
                    @enderror
                    <label for="tl" class="pt-10 pb-2 pl-4 text-base md:text-xl font-medium">Team Leader*</label>
                    <input value="{{{ $chatregis->tl ?? '' }}}" name="tl" type="text" class="outline-none rounded-full border border-form py-1 px-4 w-96 md:w-80 text-sm focus:ring-2 focus:ring-form" placeholder="">
                    @error('place')
                            <div class="text-red-500 mt-2 text-sm">
                                The team leader is required!
                            </div>
                    @enderror
                    <label for="origin" class="pt-10 pb-2 pl-4 text-base md:text-xl font-medium">Origin*</label>
                    <select name="origin" for="origin" class="outline-none rounded-full border border-form py-1 px-4 w-96 md:w-80 text-sm focus:ring-2 focus:ring-form">
                        <option class="py-1 font-sans" disabled selected hidden>Select Origin</option>
                        <option class="py-1 font-sans">Indonesia</option>
                        <option class="py-1 font-sans">International</option>
                    </select>
                    @error('origin')
                            <div class="text-red-500 mt-2 text-sm">
                                The origin is required!
                            </div>
                    @enderror
                    <label for="place" class="pt-10 pb-2 pl-4 text-base md:text-xl font-medium">Institution/University*</label>
                    <select name="place" for="place" class="outline-none rounded-full border border-form py-1 px-4 w-96 md:w-80 text-sm focus:ring-2 focus:ring-form" placeholder="">
                    <option class="py-1 font-sans" disabled selected hidden>Select University/Institution</option>
                        <option class="py-1 font-sans">Pre-Event</option>
                        <option class="py-1 font-sans">Conference Day</option>
                        <option class="py-1 font-sans">nAISC Night</option>
                        <option class="py-1 font-sans">Logistic</option>
                        <option class="py-1 font-sans">Sponsorship</option>
                        <option class="py-1 font-sans">Paper Competition</option>
                        <option class="py-1 font-sans">Poster Competition</option>
                        <option class="py-1 font-sans">ChemE Jeopardy Competition</option>
                        <option class="py-1 font-sans">Social Media Specialist</option>
                        <option class="py-1 font-sans">Outreach</option>
                        <option class="py-1 font-sans">Media Production</option>
                    </select>
                    @error('place')
                            <div class="text-red-500 mt-2 text-sm">
                                The institution/university is required!
                            </div>
                    @enderror
                    <label for="telp" class="pt-10 pb-2 pl-4 text-base md:text-xl font-medium">Phone Number*</label>
                    <input value="{{{ $chatregis->telp ?? '' }}}" name="telp" type="tel" class="outline-none rounded-full border border-form py-1 px-4 w-96 md:w-80 text-sm focus:ring-2 focus:ring-form" placeholder="">
                    @error('wa')
                            <div class="text-red-500 mt-2 text-sm">
                                The phone number is required!
                            </div>
                    @enderror
                    <div class="flex flex-col md:flex-row">
                        <div class="flex flex-col">
                                <label for="member1" class="pt-10 pb-2 pl-4 text-base md:text-xl font-medium">Member 1*</label>
                                <input value="{{{ $chatregis->member1 ?? '' }}}" name="" type="text" class="outline-none rounded-full border border-form py-1 px-4 w-96 md:w-80 text-sm focus:ring-2 focus:ring-form" placeholder="">
                                @error('place')
                                        <div class="text-red-500 mt-2 text-sm">
                                            The team member 1 is required!
                                        </div>
                                @enderror
                        </div>
                        <div class="flex flex-col px-0 md:px-10">
                            <label for="place1" class="pt-10 pb-2 pl-4 text-base md:text-xl font-medium">Institution/University*</label>
                            <select name="place1" for="place1" class="outline-none rounded-full border border-form py-1 px-4 w-96 md:w-80 text-sm focus:ring-2 focus:ring-form" placeholder="">
                            <option class="py-1 font-sans" disabled selected hidden>Select University/Institution</option>
                                <option class="py-1 font-sans">Pre-Event</option>
                                <option class="py-1 font-sans">Conference Day</option>
                                <option class="py-1 font-sans">nAISC Night</option>
                                <option class="py-1 font-sans">Logistic</option>
                                <option class="py-1 font-sans">Sponsorship</option>
                                <option class="py-1 font-sans">Paper Competition</option>
                                <option class="py-1 font-sans">Poster Competition</option>
                                <option class="py-1 font-sans">ChemE Jeopardy Competition</option>
                                <option class="py-1 font-sans">Social Media Specialist</option>
                                <option class="py-1 font-sans">Outreach</option>
                                <option class="py-1 font-sans">Media Production</option>
                            </select>
                            @error('place')
                                    <div class="text-red-500 mt-2 text-sm">
                                        The institution/university for team member 1 is required!
                                    </div>
                            @enderror   
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row">
                        <div class="flex flex-col">
                                <label for="member2" class="pt-10 pb-2 pl-4 text-base md:text-xl font-medium">Member 2*</label>
                                <input value="{{{ $chatregis->member2 ?? '' }}}" name="" type="text" class="outline-none rounded-full border border-form py-1 px-4 w-96 md:w-80 text-sm focus:ring-2 focus:ring-form" placeholder="">
                                @error('place')
                                        <div class="text-red-500 mt-2 text-sm">
                                            The team member 2 is required!
                                        </div>
                                @enderror
                        </div>
                        <div class="flex flex-col px-0 md:px-10">
                            <label for="place2" class="pt-10 pb-2 pl-4 text-base md:text-xl font-medium">Institution/University*</label>
                            <select name="place2" for="place2" class="outline-none rounded-full border border-form py-1 px-4 w-96 md:w-80 text-sm focus:ring-2 focus:ring-form" placeholder="">
                            <option class="py-1 font-sans" disabled selected hidden>Select University/Institution</option>
                                <option class="py-1 font-sans">Pre-Event</option>
                                <option class="py-1 font-sans">Conference Day</option>
                                <option class="py-1 font-sans">nAISC Night</option>
                                <option class="py-1 font-sans">Logistic</option>
                                <option class="py-1 font-sans">Sponsorship</option>
                                <option class="py-1 font-sans">Paper Competition</option>
                                <option class="py-1 font-sans">Poster Competition</option>
                                <option class="py-1 font-sans">ChemE Jeopardy Competition</option>
                                <option class="py-1 font-sans">Social Media Specialist</option>
                                <option class="py-1 font-sans">Outreach</option>
                                <option class="py-1 font-sans">Media Production</option>
                            </select>
                            @error('place')
                                    <div class="text-red-500 mt-2 text-sm">
                                        The institution/university for team member 2 is required!
                                    </div>
                            @enderror   
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row">
                        <div class="flex flex-col">
                                <label for="member3" class="pt-10 pb-2 pl-4 text-base md:text-xl font-medium">Member 3*</label>
                                <input value="{{{ $chatregis->member3 ?? '' }}}" name="" type="text" class="outline-none rounded-full border border-form py-1 px-4 w-96 md:w-80 text-sm focus:ring-2 focus:ring-form" placeholder="">
                                @error('place')
                                        <div class="text-red-500 mt-2 text-sm">
                                            The team member 3 is required!
                                        </div>
                                @enderror
                        </div>
                        <div class="flex flex-col px-0 md:px-10">
                            <label for="place3" class="pt-10 pb-2 pl-4 text-base md:text-xl font-medium">Institution/University*</label>
                            <select name="place3" for="place3" class="outline-none rounded-full border border-form py-1 px-4 w-96 md:w-80 text-sm focus:ring-2 focus:ring-form" placeholder="">
                            <option class="py-1 font-sans" disabled selected hidden>Select University/Institution</option>
                                <option class="py-1 font-sans">Pre-Event</option>
                                <option class="py-1 font-sans">Conference Day</option>
                                <option class="py-1 font-sans">nAISC Night</option>
                                <option class="py-1 font-sans">Logistic</option>
                                <option class="py-1 font-sans">Sponsorship</option>
                                <option class="py-1 font-sans">Paper Competition</option>
                                <option class="py-1 font-sans">Poster Competition</option>
                                <option class="py-1 font-sans">ChemE Jeopardy Competition</option>
                                <option class="py-1 font-sans">Social Media Specialist</option>
                                <option class="py-1 font-sans">Outreach</option>
                                <option class="py-1 font-sans">Media Production</option>
                            </select>
                            @error('place')
                                    <div class="text-red-500 mt-2 text-sm">
                                        The institution/university for team member 3 is required!
                                    </div>
                            @enderror   
                        </div>
                    </div>
                    <div class="text-black-500 mt-4 text-sm">
                        * is required!
                    </div>
                    <div class="flex flex-col pt-20">
                        <div class="text-black-500 w-96 md:w-full mt-4 text-xs md:text-lg pl-2 md:pl-10">
                        The guidebook of each competitions can be found, <a href="" class="underline text-blue-500">Here</a>
                        </div>
                        <a href="competitionregis-2" class="pt-2 md:pl-5">
                            <button type="submit" class="px-40 md:px-101 bg-gradient-to-l from-blue-300 to-purple-400 py-3 rounded-full text-white text-lg font-semibold shadow-lg">
                                Next
                            </button>
                        </a>
                    </div>
                </form>
            </div>
            <div class="py-20 md:py-0">
                <img src="/images/cheme-bg.png" alt="" class="md:hidden absolute right-0 bottom-6/7 h-96 -mb-96">
            </div>
            <img src="/images/bulet-aischat-responsive.png" alt="" class="md:hidden absolute left-0 bottom-0 h-80 -mb-52 opacity-100">
            <img src="/images/bulet-aischat-responsive2.png" alt="" class="md:hidden absolute right-0 bottom-36 h-80 -mb-10 opacity-100">
        </div>
        <div class="hidden col-span-3 col-start-3 md:flex flex-col items-end">
            <div class="flex flex-row pt-6 pr-20">
                <div class="px-2">
                    <div class="rounded-full h-4 w-4 bg-gradient-to-l from-blue-200 to-pink-300 shadow-lg"></div>
                </div>
                <div class="rounded-full h-4 w-4 bg-gradient-to-r from-gray-100 to-gray-300 shadow-lg"></div>
                <div class="px-2">
                    <div class="rounded-full h-4 w-4 bg-gradient-to-r from-gray-100 to-gray-300 shadow-lg"></div>
                </div>
            </div>
            <img src="/images/cheme-bg.png" alt="" class="w-5/7 pt-20 z-10">
            <div class="absolute right-0 bottom-48 -mb-96 z-0">
                <img src="/images/compe-kanan.png" alt="" class="h-150">
            </div>
        </div>
    </div>
    <div class="hidden md:block absolute md:left-0 md:-mt-96 z-0">
        <img src="/images/compe-bawah.png" alt="" class="h-120">
    </div>
    <div class="hidden md:block absolute md:right-0 md:-mt-80 z-0 opacity-75">
        <img src="/images/compe-kbawah.png" alt="" class="h-100">
    </div>

    <!-- Footer -->
    <footer class="bg-footer absolute w-full z-10">
        <div class="h-full flex flex-col items-start">
            <div class="px-10 md:px-12 lg:px-16 xl:px-20 py-8 md:py-10">
                <h2 class="font-bold text-2xl md:text-3xl lg:text-4xl xl:text-5xl text-white">
                    Contact Us
                </h2>
                <div class="flex pt-2 md:pt-4 lg:pt-6 xl:pt-8 items-center">
                    <img src="/images/tiktok.png" alt="" class="w-6 md:w-8 lg:w-10 xl:w-12 mr-2 md:mr-4">
                    <img src="/images/instagram.png" alt="" class="w-6 md:w-8 lg:w-10 xl:w-12">
                    <p class="pl-2 md:pl-5 text-white font-semibold text-sm md:text-base lg:text-lg xl:text-2xl">@aisc2022</p>
                </div>
                <div class="flex pl-8 md:pl-12 lg:pl-14 xl:pl-16 pt-2 md:pt-4 lg:pt-6 xl:pt-8 items-center">
                    <img src="/images/line-app.png" alt="" class="w-6 md:w-8 lg:w-10 xl:w-12">
                    <p class="pl-2 xl:pl-5 text-white font-semibold text-sm md:text-base lg:text-lg xl:text-2xl">@961ckski</p>
                </div>
                <div class="flex pl-8 md:pl-12 lg:pl-14 xl:pl-16 pt-2 md:pt-4 lg:pt-6 xl:pt-8 items-center">
                    <img src="/images/linkedin.png" alt="" class="w-6 md:w-8 lg:w-10 xl:w-12">
                    <p class="pl-2 xl:pl-5 text-white font-semibold text-sm md:text-base lg:text-lg xl:text-2xl">AIChE Indonesia Student Conference 2022</p>
                </div>
            </div>
        </div>
    </footer>
@endsection
