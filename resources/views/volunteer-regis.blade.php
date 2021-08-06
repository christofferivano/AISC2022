@extends('layouts.navbar-regis-volunteer');

@section('content')
    <div class="absolute">
        <img src="images/bulet-regis-volun-4.png" alt="" class="w-2/7 ml-98 pl-20 mt-20">
    </div>
    <div class="absolute right-0">
        <img src="images/bulet-regis-volun-2.png" alt="" class="h-80 pl-20 mt-98">
    </div>
    <div class="absolute mt-60 pt-100">
        <img src="images/bulet-regis-volun-3.png" alt="" class="h-96">
    </div>
    <div class="pt-28 grid grid-cols-5">
        <div class="col-span-2 col-start-1 pl-24 flex flex-col items-start">
            <h1 class="text-5xl font-bold">
                Registration
            </h1>
            <div class="pt-4">
                <div class="rounded-full py-1 bg-gradient-to-l from-blue-300 to-purple-400">
                    <div class="px-20"></div>
                </div>
            </div>
            <div>
                <form action="{{ route('volunteer-regis') }}" method="POST" class="flex flex-col pt-12">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="pb-2 pl-4 text-xl font-medium">Name</label>
                        <input type="text" class="outline-none rounded-full border border-form py-1 px-4 w-96 text-sm
                        @error('name') border-red-500 @enderror" 
                        placeholder="Your Name" id="name" name="name" value="{{ old('name') }}">

                        @error('name')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    
                    <div class="mb-4">
                        <label for="institution" class="pb-2 pl-4 text-xl font-medium">Institution</label>
                        <input type="text" class="outline-none rounded-full border border-form py-1 px-4 w-96 text-sm
                        @error('institution') border-red-500 @enderror" 
                        placeholder="Your Institution" id="institution" name="institution" value="{{ old('institution') }}">

                        @error('institution')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    
                    <div class="mb-4">
                        <label for="birth_date" class="pb-2 pl-4 text-xl font-medium">Birth Date</label>
                        <input type="date" class="outline-none rounded-full border border-form py-1 px-4 w-96 text-sm
                        @error('birth_date') border-red-500 @enderror" 
                        id="birth_date" name="birth_date" value="{{ old('birth_date') }}">

                        @error('birth_date')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="email" class="pb-2 pl-4 text-xl font-medium">Email</label>
                        <input type="text" class="outline-none rounded-full border border-form py-1 px-4 w-96 text-sm
                        @error('email') border-red-500 @enderror" 
                        placeholder="Your email" id="email" name="email" value="{{ old('email') }}">

                        @error('email')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="phone_number" class="pb-2 pl-4 text-xl font-medium">Phone Number</label>
                        <input type="text" class="outline-none rounded-full border border-form py-1 px-4 w-96 text-sm
                        @error('phone_number') border-red-500 @enderror" 
                        placeholder="08xxxxxxxx" id="phone_number" name="phone_number" value="{{ old('phone_number') }}">

                        @error('phone_number')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="volunteer_in" class="pb-2 pl-4 text-xl font-medium">volunteer_in</label>
                        <input type="text" class="outline-none rounded-full border border-form py-1 px-4 w-96 text-sm
                        @error('volunteer_in') border-red-500 @enderror" 
                        id="volunteer_in" name="volunteer_in" value="{{ old('volunteer_in') }}">

                        @error('volunteer_in')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="pt-10">
                        <div class="flex flex-row pl-4">
                            <p class="text-lg font-medium">You can see the requirements.</p>
                            <a href="{{ route('volunteer-end') }}" class="underline text-blue-700 text-lg pl-1">Here</a>
                        </div>
                    </div>
                    <button type="submit" class="w-96 bg-gradient-to-r from-pink-400 to-red-500 py-1 rounded-full text-white text-lg font-semibold shadow-lg">Submit</button>
                </form>
            </div>
            
        </div>
        <div class="col-span-3 col-start-3 flex flex-col items-end">
            <div class="flex flex-row pt-6 pr-20">
                <div class="rounded-full h-4 w-4 bg-gradient-to-l from-blue-300 to-purple-400 shadow-lg"></div>
                <div class="px-2">
                    <div class="rounded-full h-4 w-4 bg-gradient-to-r from-gray-100 to-gray-300 shadow-lg"></div>
                </div>
                <div class="">
                    <div class="rounded-full h-4 w-4 bg-gradient-to-r from-gray-100 to-gray-300 shadow-lg"></div>
                </div>
            </div>
            <!-- <div style="background-image: url('images/bg-register-volunteer.png')" class="bg-cover h-landing bg-local relative h-full"></div> -->
            <img src="images/volunteer-regis-1.png" alt="" class="w-4/7">
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-footer absolute w-full">
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