@extends('layouts.navbar-volunteer');

@section('content')
    <div class="absolute">
        <img src="images/bulet-regis-volun-1.png" alt="" class="w-2/7 ml-98 pl-20 mt-20">
    </div>
    <div class="absolute right-0">
        <img src="images/bulet-regis-volun-2.png" alt="" class="h-80 pl-20 mt-98">
    </div>
    <div class="absolute mt-48 pt-100">
        <img src="images/bulet-regis-volun-3.png" alt="" class="h-96">
    </div>
    <div class="pt-28 grid grid-cols-5">
        <div class="col-span-2 col-start-1 pl-24 flex flex-col items-start">
            <h1 class="text-5xl font-bold">
                Registration
            </h1>
            <div class="pt-4">
                <div class="rounded-full py-1 bg-gradient-to-r from-pink-400 to-red-500">
                    <div class="px-20"></div>
                </div>
            </div>
            <div>
                <form action="" class="flex flex-col pt-12">
                    @csrf
                    <label for="name" class="pb-2 pl-4 text-xl font-medium">Name</label>
                    <input type="text" class="outline-none rounded-full border border-form py-1 px-4 w-96 text-sm" placeholder="Your Name">
                    <label for="institution" class="pt-4 pb-2 pl-4 text-xl font-medium">Institution</label>
                    <input type="text" class="outline-none rounded-full border border-form py-1 px-4 w-96 text-sm" placeholder="Your Institution">
                    <label for="birth-date" class="pt-4 pb-2 pl-4 text-xl font-medium">Birth Date</label>
                    <input type="date" class="outline-none rounded-full border border-form py-1 px-4 w-96 text-sm">
                    <label for="institution" class="pt-4 pb-2 pl-4 text-xl font-medium">Email</label>
                    <input type="email" class="outline-none rounded-full border border-form py-1 px-4 w-96 text-sm" placeholder="your_email@email.com">
                    <label for="institution" class="pt-4 pb-2 pl-4 text-xl font-medium">Phone Number</label>
                    <input type="tel" class="outline-none rounded-full border border-form py-1 px-4 w-96 text-sm" placeholder="08xxxxxxxx">
                    <label for="institution" class="pt-4 pb-2 pl-4 text-xl font-medium">Volunteering In</label>
                    <input type="text" class="outline-none rounded-full border border-form py-1 px-4 w-96 text-sm">
                    <div class="pt-10">
                        <div class="flex flex-row pl-4">
                            <p class="text-lg font-medium">You can see the requirements.</p>
                            <a href="{{ route('volunteer-end') }}" class="underline text-blue-700 text-lg pl-1">Here</a>
                        </div>
                    </div>
                    <form action="{{ route('volunteer-end') }}" method="GET" class="pt-2">
                        @csrf
                        <button type="submit" class="w-96 bg-gradient-to-r from-pink-400 to-red-500 py-1 rounded-full text-white text-lg font-semibold shadow-lg">Submit</button>
                    </form>
                </form>
            </div>
            
        </div>
        <div class="col-span-3 col-start-3 flex flex-col items-end">
            <div class="flex flex-row pt-6 pr-20">
                <div class="rounded-full h-4 w-4 bg-gradient-to-r from-pink-400 to-red-500 shadow-lg"></div>
                <div class="px-2">
                    <div class="rounded-full h-4 w-4 bg-gradient-to-r from-gray-100 to-gray-300 shadow-lg"></div>
                </div>
            </div>
            <!-- <div style="background-image: url('images/bg-register-volunteer.png')" class="bg-cover h-landing bg-local relative h-full"></div> -->
            <img src="images/bg-regis-volunteer.png" alt="" class="w-6/7 pr-10 pt-28">
        </div>
    </div>

    <!-- Footer -->
    <footer class="relative">
        <div class="bg-footer h-96 flex justify-center items-center">
            <span class="font-bold text-4xl text-white">
                Contact Us
            </span>
        </div>
    </footer>
@endsection