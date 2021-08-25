@extends('layouts.navbar-regis-volunteer')


@section('content')
    <div class="hidden md:block absolute left-0 bottom-0 z-0">
        <img src="/images/bulet-aischat-6.png" alt="" class="w-96">
    </div>
    <div class="hidden md:block absolute right-0 bottom-0 z-0">
        <img src="/images/bulet-aischat-7.png" alt="" class="h-96 -mb-10">
    </div>

    <div class="absolute flex flex-row right-0 pr-28 pt-48">
        <div class="px-2">
            <div class="rounded-full h-4 w-4 bg-gradient-to-r from-gray-100 to-gray-300 shadow-lg"></div>
        </div>
        <div class="rounded-full h-4 w-4 bg-gradient-to-r from-gray-100 to-gray-300 shadow-lg"></div>
        <div class="px-2">
            <div class="rounded-full h-4 w-4 bg-gradient-to-l from-blue-300 to-purple-400 shadow-lg"></div>
        </div>
        <div class="rounded-full h-4 w-4 bg-gradient-to-r from-gray-100 to-gray-300 shadow-lg"></div>
    </div>

    <!-- Payment Method -->
    <div class="pt-40 pb-20 flex flex-col items-center justify-center">
        <h1 class="text-5xl font-bold pb-10">
            Payment
        </h1>
        <form class="w-full max-w-screen-md">
            <div>
                <input class="hidden" id="radio_1" type="radio" name="radio" checked>
                <label class="flex flex-col p-4 shadow-md rounded-xl cursor-pointer" for="radio_1">
                    <div class="px-6 flex flex-row items-center justify-between h-16">
                        <img src="images/BCA.png" alt="" class="h-14">
                        <h2 class="text-2xl font-bold -ml-40 pl-4">BCA Transfer</h2>
                        <button type="button" class="rounded-full h-6 w-6 border-2 border-gray-400">
                            <img src="images/ceklis.png" alt="" class="ceklis h-full hidden">
                        </button>
                    </div>
                </label>
            </div>
            <div class="pt-5">
                <input class="hidden" id="radio_2" type="radio" name="radio">
                <label class="flex flex-col p-4 shadow-md rounded-xl cursor-pointer" for="radio_2">
                    <div class="pr-6 flex flex-row items-center justify-between h-16">
                        <img src="images/paypal.png" alt="" class="h-14">
                        <h2 class="text-2xl font-bold -ml-64">Paypal</h2>
                        <button type="button" class="rounded-full h-6 w-6 border-2 border-gray-400">
                            <img src="images/ceklis.png" alt="" class="ceklis h-full hidden">
                        </button>
                    </div>
                </label>
            </div>
            <div class="flex flex-col items-center pt-20">
                <button type="submit" class="w-full bg-gradient-to-l from-blue-300 to-purple-400 py-1.5 rounded-full text-white text-lg font-semibold shadow-lg">
                    Next
                </button>
            </div>
        </form>
    </div>

    <!-- Footer -->
    <footer class="bg-footer absolute w-full z-10">
        <div class="h-full flex flex-col items-start">
            <div class="px-10 md:px-20 py-8 md:py-10">
                <h2 class="font-bold text-2xl md:text-5xl text-white">
                    Contact Us
                </h2>
                <div class="flex pt-2 md:pt-8 items-center">
                    <img src="images/tiktok.png" alt="" class="w-6 md:w-12 mx-4">
                    <img src="images/instagram.png" alt="" class="w-6 md:w-12">
                    <p class="pl-2 md:pl-5 text-white font-semibold text-sm md:text-2xl">@aisc2022</p>
                </div>
                <div class="flex pl-20 pt-2 md:pt-8 items-center">
                    <img src="images/line-app.png" alt="" class="w-6 md:w-12">
                    <p class="pl-2 md:pl-5 text-white font-semibold text-sm md:text-2xl">@961ckski</p>
                </div>
                <div class="flex pl-20 pt-2 md:pt-8 items-center">
                    <img src="images/linkedin.png" alt="" class="w-6 md:w-12">
                    <p class="pl-2 md:pl-5 text-white font-semibold text-sm md:text-2xl">AIChE Indonesia Student Conference 2022</p>
                </div>
            </div>
        </div>
    </footer>
@endsection
