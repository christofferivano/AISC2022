@extends('layouts.navbar-regis-volunteer')


@section('content')
    <div class="hidden md:block absolute z-0">
        <img src="/images/compe-atas.png" alt="" class="w-97 ml-64 pl-20">
    </div>

    <div class="absolute right-0 top-96">
        <img src="/images/bayarbcovgo.png" alt="" class="w-96">
    </div>

    <div class="absolute flex flex-row right-0 pr-5 md:pr-28 pt-44 md:pt-48 z-10">
        <div class="rounded-full h-3 w-3 md:h-4 md:w-4 bg-gradient-to-r from-gray-100 to-gray-300 shadow-lg"></div>
        <div class="px-2">
            <div class="rounded-full h-3 w-3 md:h-4 md:w-4 bg-gradient-to-l from-blue-300 to-purple-400 shadow-lg"></div>
        </div>
        <div class="rounded-full h-3 w-3 md:h-4 md:w-4 bg-gradient-to-r from-gray-100 to-gray-300 shadow-lg"></div>
    </div>

    <!-- Payment Method -->
    <div class="pt-40 flex flex-col items-center justify-center z-10">
        <h1 class="text-2xl md:text-5xl font-bold pr-5 md:pr-10 pb-16">
            Payment
        </h1>
    </div>

    <div class="grid grid-cols-2">
        <div class="">
            <img src="/images/payment-bg.png" alt="" class="w-6/7">
        </div>
        <h1 class="flex flex-col text-5xl justify-center font-semibold">
            Registration Fee : <br>
            <div class="pt-2">
                Rp. 60.000/Person
            </div>
            <div class="text-xl font-normal pt-2">
                *6 USD/person (international student)
            </div>
            <div class="text-xl font-normal pt-16">
            BCA 7655051236 (Salwa Azzahrah) <br>
            OVO 08113150102 (Salwa Azzahrah) <br>
            Gopay 08113150102 (Salwa Azzahrah) <br>
            </div>
        </h1>
    </div>

    <div class="flex flex-col rounded bg-gray-50 border border-grey-700 h-96 z-0 w-full max-w-full justify-center items-center drop-shadow-xl">
        <form action="" method="POST" class="w-full max-w-screen-lg pt-10 z-10">
                <div class="z-10">
                    <input class="hidden" id="radio_1" type="radio" name="radio" checked>
                    <label class="flex flex-col p-4 shadow-md rounded-md md:rounded-xl cursor-pointer" for="radio_1">
                        <div class="px-2 md:px-6 flex flex-row items-center justify-between h-16">
                            <img src="images/BCA.png" alt="" class="h-14">
                            <h2 class="text-xl md:text-2xl font-bold -ml-10 md:-ml-40 md:pl-4">BCA Transfer</h2>
                            <button type="button" class="rounded-full h-6 w-6 border-1 border-gray-400">
                                <img src="images/ceklis.png" alt="" class="ceklis h-full w-full hidden">
                            </button>
                        </div>
                    </label>
                </div>
                <div class="pt-5 z-10">
                    <input class="hidden" id="radio_2" type="radio" name="radio">
                    <label class="flex flex-col p-4 shadow-md rounded-xl cursor-pointer" for="radio_2">
                        <div class="px-2 md:pr-6 flex flex-row items-center justify-between h-16">
                            <img src="images/paypal.png" alt="" class="h-8 md:h-14">
                            <h2 class="text-xl md:text-2xl font-bold -ml-28 md:-ml-64">Paypal</h2>
                            <button type="button" class="rounded-full h-6 w-6 border-1 border-gray-400">
                                <img src="images/ceklis.png" alt="" class="ceklis h-full w-full hidden">
                            </button>
                        </div>
                    </label>
                </div>
            </form>
        </div>
        <div class="absolute left-0 -bottom-96 -mb-64 z-0">
                <img src="/images/bayarrounded.png" alt="" class="w-80 opacity-75">
        </div>
        
        <div class="flex flex-col items-center pt-60 md:pt-40 pb-40 px-80">
            <button type="submit" class="w-full bg-gradient-to-l from-blue-300 to-purple-400 py-1.5 rounded-full text-white text-lg font-semibold shadow-lg">
                Next
            </button>
        </div>

        <div class="absolute right-0 top-3/4 pt-103 bottom-0 z-0">
            <img src="/images/bayarbawah.png" alt="" class="w-72">
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
