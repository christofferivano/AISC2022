@extends('layouts.navbar-aischat')


@section('content')
    <div class="block md:hidden absolute left-0 top-0 z-0">
        <img src="images/bulet-aischat-4.png" alt="" class="h-48 opacity-50">
    </div>
    <div class="hidden md:block absolute z-0">
        <img src="/images/bulet-regis-aischat-2.png" alt="" class="w-98 ml-102 pl-20 mt-20">
    </div>
    <div class="pt-32 grid md:grid-cols-5 pb-96 md:pb-32 w-full">
        <div class="md:col-span-2 md:col-start-1 pl-5 md:pl-24 flex flex-col items-start w-full">
            <h1 class="absolute md:relative text-base md:text-2xl font-semibold">
                AISChat 1 : Judul
            </h1>
            <h1 class="absolute py-5 md:py-0.5 md:relative text-2xl md:text-5xl font-bold">
                Registration
                <div class="md:hidden flex flex-row right-0 pl-64 md:pl-80 -mt-10 pt-2 md:pt-6">
                    <div class="rounded-full h-3 md:h-4 w-3 md:w-4 bg-gradient-to-r from-gray-100 to-gray-300 shadow-lg"></div>
                    <div class="px-1 md:px-2">
                        <div class="rounded-full h-3 md:h-4 w-3 md:w-4 bg-gradient-to-l from-blue-300 to-purple-400 shadow-lg"></div>
                    </div>
                    <div class="">
                        <div class="rounded-full h-3 md:h-4 w-3 md:w-4 bg-gradient-to-r from-gray-100 to-gray-300 shadow-lg"></div>
                    </div>
                    <div class="px-1 md:px-2">
                        <div class="rounded-full h-3 md:h-4 w-3 md:w-4 bg-gradient-to-r from-gray-100 to-gray-300 shadow-lg"></div>
                    </div>
                </div>
            </h1>
            <div class="absolute md:relative pt-14 md:pt-4">
                <div class="rounded-full py-0.5 md:py-1 bg-gradient-to-l from-blue-300 to-purple-400 ">
                    <div class="px-16 md:px-20"></div>
                </div>
            </div>
            <div class="w-full pt-10 md:pt-0 md:pr-5 z-10">
                <form action="{{ route('aischat-regis-two') }}" method="POST" class="flex flex-col pt-10 md:pt-12">
                    @csrf
                    <label for="source" class="pb-2 pl-4 text-base md:text-xl font-medium">Where did you get this information?*</label>
                    <select class="outline-none rounded-full border border-form py-1 px-4 w-72 md:w-96 text-sm focus:ring-2 focus:ring-form"
                    name="source" for="source">
                        <option class="py-1 font-sans" disabled selected hidden>Choose an Option</option>
                        <option {{{ (isset($chatregis->source) && $chatregis->source == 'AISC Instagram') ? "selected=\"selected\"" : "" }}} class="py-1 font-sans">AISC Instagram</option>
                        <option {{{ (isset($chatregis->source) && $chatregis->source == 'AISC LinkedIn') ? "selected=\"selected\"" : "" }}} class="py-1 font-sans">AISC LinkedIn</option>
                        <option {{{ (isset($chatregis->source) && $chatregis->source == 'AISC Tik Tok') ? "selected=\"selected\"" : "" }}} class="py-1 font-sans">AISC Tik Tok</option>
                        <option {{{ (isset($chatregis->source) && $chatregis->source == 'AISC OA Line') ? "selected=\"selected\"" : "" }}} class="py-1 font-sans">AISC OA Line</option>
                        <option {{{ (isset($chatregis->source) && $chatregis->source == 'AISC Media Partner') ? "selected=\"selected\"" : "" }}} class="py-1 font-sans">Media Partner</option>
                        <option {{{ (isset($chatregis->source) && $chatregis->source == 'AISC Friends') ? "selected=\"selected\"" : "" }}} class="py-1 font-sans">Friends</option>
                        <option {{{ (isset($chatregis->source) && $chatregis->source == 'AISC Others') ? "selected=\"selected\"" : "" }}} class="py-1 font-sans">Others</option>
                    </select>
                    @error('source')
                            <div class="text-red-500 mt-2 text-sm">
                                The information source is required!
                            </div>
                    @enderror
                    <label for="expect" class="pt-4 pb-2 pl-4 text-base md:text-xl font-medium">What do you expect from this event?*</label>
                    <input value="{{{ $chatregis->expect ?? '' }}}" name="expect" type="text" class="outline-none rounded-lg border border-form py-20 px-4 w-72 md:w-96 text-sm focus:ring-2 focus:ring-form" placeholder="">
                    @error('expect')
                            <div class="text-red-500 mt-2 text-sm">
                                Your expectation is required!
                            </div>
                    @enderror

                    <div class="text-black-500 mt-4 text-sm">
                        * is required!
                    </div>
                    
                    <a href="" class="pt-32 md:pt-10">
                        <button type="submit" class="w-80 md:w-96 bg-gradient-to-l from-blue-300 to-purple-400 py-1 rounded-full text-white text-lg font-semibold shadow-lg">
                            Next
                        </button>
                    </a>
                </form>
            </div>
            <img src="/images/aischatresp.png" alt="" class="md:hidden absolute left-0 bottom-0 -mb-72">
            <img src="images/bulet-aischat-responsive.png" alt="" class="md:hidden absolute left-0 bottom-0 h-80 -mb-96 opacity-100">
            <img src="images/bulet-aischat-responsive2.png" alt="" class="md:hidden absolute right-0 bottom-36 h-80 -mb-28 opacity-100">
        </div>
        <div class="hidden col-span-3 col-start-3 md:flex flex-col items-end">
            <div class="flex flex-row pt-6 pr-20">
                <div class="px-2">
                    <div class="rounded-full h-4 w-4 bg-gradient-to-r from-gray-100 to-gray-300 shadow-lg"></div>
                </div>
                <div class="rounded-full h-4 w-4 bg-gradient-to-l from-blue-300 to-purple-400 shadow-lg"></div>
                <div class="px-2">
                    <div class="rounded-full h-4 w-4 bg-gradient-to-r from-gray-100 to-gray-300 shadow-lg"></div>
                </div>
                <div class="rounded-full h-4 w-4 bg-gradient-to-r from-gray-100 to-gray-300 shadow-lg"></div>
            </div>
            <img src="/images/bg-regis-aischat-2.png" alt="" class="w-5/7 pt-48 z-10">
        </div>
    </div>
    <div class="hidden md:block absolute left-0 -mt-80 z-0">
        <img src="/images/bulet-aischat-4.png" alt="" class="h-120">
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
