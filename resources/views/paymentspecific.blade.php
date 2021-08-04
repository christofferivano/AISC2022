@extends('layouts.navbar')

@section('content')
    <div class="flex justify-center pt-32">
        <h1 class="text-4xl font-bold">
            Payment
        </h1>
    </div>

    <div class="col-span-3 col-start-3 flex flex-col items-end">
        <div class="flex flex-row pt-6 pr-20">
            <div class="rounded-full h-4 w-4 bg-gradient-to-r from-gray-100 to-gray-300 shadow-lg"></div>
            <div class="px-2">
                <div class="rounded-full h-4 w-4 bg-gradient-to-r from-pink-400 to-red-500 shadow-lg"></div>
            </div>
            <div class="rounded-full h-4 w-4 bg-gradient-to-r from-gray-100 to-gray-300 shadow-lg"></div>
        </div>
    </div>

    <div class ="flex flex-col justify-center items-center px-40 py-32">
        <div class="rounded-md py-12 my-3 px-6 border border-grey-200 overflow-hidden bg-white w-6/7 shadow-2xl z-10">
            <div class="flex flex-row px-20 h-full items-center">
                <img src="images/BCA.png" alt="" class="w-1/6">
                <font class="flex pl-40 justify-center items-center font-Poppins font-semibold text-2xl">
                    BCA Transfer
                </font>
                <a href="" class="absolute right-80">
                    <button type="button" class="rounded-full h-6 w-6 bg-gradient-to-r from-gray-100 to-gray-300 shadow-lg">
                        <img src="images/ceklis.png" alt="">
                    </button>
                </a>
            </div>
        </div>

        <div class="relative pr-54">
            <form action="" class="flex flex-col pt-12">
                @csrf
                <label for="name" class="pb-2 pl-4 text-xl font-medium">Name</label>
                <input type="text" class="outline-none border-b-2 py-1 px-4 w-96 text-sm bg-transparent" placeholder="Your Name">
                <label for="institution" class="pt-4 pb-2 pl-4 text-xl font-medium">Institution</label>
                <input type="text" class="outline-none border-b-2 py-1 px-4 w-96 text-sm bg-transparent" placeholder="Your Institution">
                <label for="birth-date" class="pt-4 pb-2 pl-4 text-xl font-medium">Birth Date</label>
                <input type="date" class="outline-none border-b-2 py-1 px-4 w-96 text-sm bg-transparent">
                <div class="pt-10">
                    <div class="flex flex-row pl-4">
                        <p class="text-lg font-medium">You can see the requirements.</p>
                        <a href="" class="underline text-blue-700 text-lg pl-1">Here</a>
                    </div>
                    <div class="pt-28">
                        <a href="">
                            <button type="submit" class="w-full mx-10 bg-gradient-to-r from-pink-400 to-red-500 py-1 px-96 rounded-full text-white text-lg font-semibold shadow-xl">Submit</button>
                        </a>
                    </div>
                </div>
            </form>
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