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
                Total Price
                <h1 class="pl-2 md:hidden text-2xl font-bold">
                    Total Price
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
            <div class="pl-2 md:pl-0 absolute md:relative pt-16 md:pt-4">
                <div class="rounded-full py-0.5 md:py-1 px-20 bg-gradient-to-l from-blue-300 to-purple-400 ">
                    <div class="px-0 md:px-20"></div>
                </div>
            </div>
            <div class="w-72 md:w-full pt-2 md:pt-0 md:pr-5 z-10">
                <div class="flex flex-col">
                    <h2 class="text-xl md:text-2xl font-bold pt-4 md:pt-6"> Team Leader Price after Discount:</h2>
                    <h2 class="border-b-2 focus:border-form border-form py-1 px-0.5 pt-6 w-52 text-lg bg-transparent">{{ $team_leader->currency() }}</h2>
                </div>
                @if($member1)
                    <div class="flex flex-col">
                        <h2 class="text-xl md:text-2xl font-bold pt-4 md:pt-6"> Member 1 Price after Discount:</h2>
                        <h2 class="border-b-2 focus:border-form border-form py-1 px-0.5 pt-6 w-52 text-lg bg-transparent">{{ $member1->currency() }}</h2>
                    </div>
                @endif
                @if($member2)
                    <div class="flex flex-col">
                        <h2 class="text-xl md:text-2xl font-bold pt-4 md:pt-6"> Member 2 Price after Discount:</h2>
                        <h2 class="border-b-2 focus:border-form border-form py-1 px-0.5 pt-6 w-52 text-lg bg-transparent">{{ $member2->currency() }}</h2>
                    </div>
                @endif
                @if($member3)
                    <div class="flex flex-col">
                        <h2 class="text-xl md:text-2xl font-bold pt-4 md:pt-6"> Member 3 Price after Discount:</h2>
                        <h2 class="border-b-2 focus:border-form border-form py-1 px-0.5 pt-6 w-52 text-lg bg-transparent">{{ $member3->currency() }}</h2>
                    </div>
                @endif
                <div class="flex flex-col">
                    <h1 class="text-xl md:text-2xl font-bold pt-4 md:pt-16"> Grand Total Price</h1>
                    <h2 class="border-b-2 focus:border-form border-form py-1 px-0.5 pt-6 w-60 text-2xl bg-transparent">{{ $papercompe->currency() }}</h2>  
                </div>
                <form action="{{ route('poster-competition-regis-payment') }}" method="GET" class="flex flex-col pt-10 md:pt-12">
                    @csrf
                    <div class="flex flex-col pt-20">
                        <a href="" class="pt-2 md:pl-5">
                            <button type="submit" class="px-40 md:px-101 bg-gradient-to-l from-blue-300 to-purple-400 py-3 rounded-full text-white text-lg font-semibold shadow-lg">
                                Next
                            </button>
                        </a>
                    </div>
                </form>
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
            <div class="absolute right-0 bottom-48 -mb-96 z-0">
                <img src="/images/compe-kanan.png" alt="" class="h-150">
            </div>
        </div>
    </div>
    <div class="hidden md:block absolute md:left-0 md:-mt-96 z-0">
        <img src="/images/compe-bawah.png" alt="" class="h-120">
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
