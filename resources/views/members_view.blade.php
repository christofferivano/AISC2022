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
                Members of {{ $members[0]->comperegis->nama_tim }}
                <h2 class="md:hidden text-lg font-bold">
                    Members
                </h2>
                <h1 class="md:hidden text-2xl font-bold">
                    Members
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
                <div class="flex flex-row">
                    @foreach($members as $m)
                        <div class="flex flex-col">
                            <label for="" class="pb-2 pl-4 text-base md:text-xl font-medium">Nama - Status</label>
                            <div class="outline-none rounded-full border border-form py-1 px-4 w-96 md:w-80 text-sm focus:ring-2 focus:ring-form">
                                {{ $m->nama }} - {{ $m->jenis_member }}
                            </div>
                        </div>
                    @endforeach
                </div>
                {{-- <div class="flex flex-col pt-20">
                    <a href="{{ route('competition-data', $payment->comperegis->jenis) }}" class="pt-2 md:pl-5">
                        <button href="{{ route('competition-data', $payment->comperegis->jenis) }}" type="" class="px-40 md:px-50 bg-gradient-to-l from-blue-300 to-purple-400 py-3 rounded-full text-white text-lg font-semibold shadow-lg">
                            Back
                        </button>
                    </a>
                </div> --}}
            </div>
        </div>
    </div>
@endsection
