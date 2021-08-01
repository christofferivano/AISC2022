@extends('layouts.navbar')

@section('content')
    <!-- Penjelasan AISC -->
    <div class ="flex flex-row justify-center items-center px-40 py-32">
        <div class="justify-left items-left w-96">
            <h1 class="text-4xl font-bold">
                Capture The Flag
            </h1>
            <p class="text-footer py-5">
                Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi 
            </p>
        </div>
        <div class="rounded-lg overflow-hidden w-96 ml-80">
            <img src="images/bg-landing.png" alt="ko">
        </div>
    </div>

    <!-- List Competition -->
    <div class="mt-24 pt-16">
        <span class="h-70 flex justify-center items-center font-bold text-3xl py-5">
            <font color ="#30264F">Prizes</font>
        </span>
        <div class="absolute right-3/4 top-1/4 z-0 pr-20">
            <img src="images/bulet6.png" alt="" class="w-full">
        </div>
    </div>

    <div class="container my-20 mx-auto px-52">
        <div class="flex items-end flex-wrap -mx-1">
            <div class="my-4 px-2 w-1/3">
                <div class="card bg-yellow-500 overflow-hidden shadow-lg shadow-2xl rounded-lg border bg-cover h-landing bg-local relative h-52">
                    <div class="card-event flex flex-col items-start py-3 px-4" id="card-event">
                        <h2 class="px-28 py-16 text-footer text-5xl font-bold">
                            <font color="#FFFFF">2nd</font>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="my-4 px-2 w-1/3 items-start">
                <div class="card bg-red-600 overflow-hidden shadow-lg shadow-2xl rounded-lg border bg-cover h-landing bg-local relative h-64">
                    <div class="card-event flex flex-col items-start py-3 px-4" id="card-event">
                        <h2 class="px-28 py-20 text-footer text-5xl font-bold">
                            <font color="#FFFFF">1st</font>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="my-4 px-2 w-1/3">
                <div class="card bg-purple-600 overflow-hidden shadow-lg shadow-2xl rounded-lg border bg-cover h-landing bg-local relative h-52">
                    <div class="card-event flex flex-col items-start py-3 px-4" id="card-event">
                        <h2 class="px-28 py-16 text-footer text-5xl font-bold">
                            <font color="#FFFFF">3rd</font>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <!-- Timeline -->
    <div class ="flex flex-col px-16 pb-80 py-20 relative justify-center">
        <img src="images/bg-compe.png" alt="", class="absolute w-1/4 right-0 mb-96">
        <div class="border rounded-lg shadow-2xl py-5">
            <!-- Timeline -->
            <div class="pt-5">
                <span class="h-70 flex justify-center items-center font-bold text-3xl py-5">
                    <font color ="#30264F">Timeline</font>
                </span>
            </div>
            <div class="flex flex-row items-end">
                <!-- Timeline -->
                <div class="container my-20 px-2">
                    <div class="my-4 px-20 w-full">
                        <div class="card bg-gradient-to-bl from-yellow-400 via-red-500 to-pink-500 overflow-hidden shadow-lg rounded-lg border bg-cover bg-local relative w-full">
                            <div class="card-event flex justify-center items-center flex-col items-start py-10" id="card-event">
                                <h2 class="underline text-2xl font-bold py-5">
                                    <font color="#FFFFFF">Open Registration</font>
                                </h2>
                                <span class="text-footer text-xl">
                                    <font color="#FFFFFF">24 Agustus 2021</font>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-row items-center justify-starts">  
                        <div class="border-4 border-red-300 font-bold text-grey-700 rounded-full bg-red-500 flex items-center justify-center" style="height: 1.25rem; width: 1.25rem"></div>
                        <div class="h-2 mx-2 rounded-full bg-red-500 flex items-center justify-center w-full"></div>
                    </div>
                </div>
                <div class="container my-20 px-2">
                    <div class="my-4 px-20 w-full">
                        <div class="card bg-gradient-to-br from-gray-100 via-gray-300 to-gray-400 overflow-hidden shadow-lg rounded-lg border bg-cover bg-local relative w-full">
                            <div class="card-event flex justify-center items-center flex-col items-start py-3" id="card-event">
                                <h2 class="underline text-2xl font-bold py-5">
                                    <font color="#00000">Open Registration</font>
                                </h2>
                                <span class="text-footer text-xl">
                                    <font color="#00000">24 Agustus 2021</font>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center justify-start">
                        <div class="border-4 border-grey-300 font-bold text-grey-700 rounded-full bg-grey-100 flex items-center justify-center" style="height: 1.25rem; width: 1.25rem"></div>
                        <div class="h-2 mx-2 rounded-full bg-gradient-to-br from-gray-100 via-gray-300 to-gray-400 flex items-center justify-center w-full"></div>
                    </div>
                </div>
                <div class="container my-20 px-2">
                    <div class="my-4 px-20 w-full">
                        <div class="card bg-gradient-to-br from-gray-100 via-gray-300 to-gray-400 overflow-hidden shadow-lg rounded-lg border bg-cover bg-local relative w-full">
                            <div class="card-event flex justify-center items-center flex-col items-start py-3" id="card-event">
                                <h2 class="underline text-2xl font-bold py-5">
                                    <font color="#00000">Open Registration</font>
                                </h2>
                                <span class="text-footer text-xl">
                                    <font color="#00000">24 Agustus 2021</font>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-row items-center justify-start">
                        <div class="border-4 border-grey-300 font-bold text-grey-700 rounded-full bg-grey-100 flex items-center justify-center" style="height: 1.25rem; width: 1.25rem"></div>
                        <div class="h-2 mx-2 rounded-full bg-gradient-to-br from-gray-100 via-gray-300 to-gray-400 flex items-center justify-center w-full"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-col justify-center items-center">
        <img src="images/bulet6.png" alt="", class="absolute w-1/2 left-0.5 bottom-0 mb-60 opacity-70">
        <h1 class="text-5xl font-bold">
            <font color="#30264F">Join Our Competition Now !</font>
        </h1>
        <div class="py-20">
            <button class="py-1.5 rounded-full bg-gradient-to-r from-purple-400 to-red-500">
                <a href="" class="px-16 text-sm text-white">Register Here !</a>
            </button>
        </div>
    </div>

    <!-- Footer -->
    <footer class="relative py-30">
        <div class="bg-footer h-96 flex justify-center items-center">
            <span class="font-bold text-4xl text-white">
                Contact Us
            </span>
        </div>
    </footer>
@endsection