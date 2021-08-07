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
            <div class="pb-20 z-10">
                <form action="{{ route('volunteer-regis-2', ['name' => $name, 'radio' => $radio, 'major' => $major, 'batch' => $batch]) }}" method="POST" flex flex-col pt-12">
                    @csrf
                    <label for="domicile" class="pb-2 pl-4 text-xl font-medium">Domicile</label>
                    <input name="domicile" type="text" class="outline-none rounded-full border border-form py-1 px-4 w-96 text-sm focus:ring-2 focus:ring-form" placeholder="">
                    <label for="email" class="pt-4 pb-2 pl-4 text-xl font-medium">Email</label>
                    <input name="email" type="email" class="outline-none rounded-full border border-form py-1 px-4 w-96 text-sm focus:ring-2 focus:ring-form" placeholder="youremail@email.com">
                    <label for="wa" class="pt-4 pb-2 pl-4 text-xl font-medium">Whatsapp Number</label>
                    <input name="wa" type="tel" class="outline-none rounded-full border border-form py-1 px-4 w-96 text-sm focus:ring-2 focus:ring-form" placeholder="08xxxxxxxx">
                    <label for="line" class="pt-4 pb-2 pl-4 text-xl font-medium">Line ID</label>
                    <input name="line" type="text" class="outline-none rounded-full border border-form py-1 px-4 w-96 text-sm focus:ring-2 focus:ring-form" placeholder="">
                    <label for="position1" class="pt-4 pb-2 pl-4 text-xl font-medium">Preferable Position</label>
                    <select class="outline-none rounded-full border border-form py-1.5 px-4 w-96 text-sm focus:ring-2 focus:ring-form"
                    name="position1" for="position1">
                        <option class="py-1 font-sans" disabled selected hidden>Option 1</option>
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
                    <div class="pt-6">
                        <select class="outline-none rounded-full border border-form py-1.5 px-4 w-96 text-sm focus:ring-2 focus:ring-form"
                        name="position2" for="position2">
                            <option class="py-1 font-sans" disabled selected hidden>Option 2</option>
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
                    </div>
                    <div class="pt-10">
                        <div class="flex flex-row pl-4">
                            <p class="text-lg font-medium">You can see the requirements.</p>
                            <a href="" class="underline text-blue-700 text-lg pl-1">Here</a>
                        </div>
                    </div>
                    <a href="" class="pt-2">
                        <button type="submit" class="w-96 bg-gradient-to-l from-blue-300 to-purple-400 py-1 rounded-full text-white text-lg font-semibold shadow-lg">
                            Submit
                        </button>
                    </a>
                </form>
            </div>
            
        </div>
        <div class="col-span-3 col-start-3 flex flex-col items-end">
            <div class="flex flex-row pt-6 pr-20">
                <div class="rounded-full h-4 w-4 bg-gradient-to-r from-gray-100 to-gray-300 shadow-lg"></div>
                <div class="px-2">
                    <div class="rounded-full h-4 w-4 bg-gradient-to-l from-blue-300 to-purple-400 shadow-lg"></div>
                </div>
                <div class="">
                    <div class="rounded-full h-4 w-4 bg-gradient-to-r from-gray-100 to-gray-300 shadow-lg"></div>
                </div>
            </div>
            <!-- <div style="background-image: url('images/bg-register-volunteer.png')" class="bg-cover h-landing bg-local relative h-full"></div> -->
            <img src="images/volunteer-regis-2.png" alt="" class="w-5/7">
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