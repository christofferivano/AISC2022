@extends('layouts.navbar-volunteer')

@section('content')

    <div class="pt-16 ml-80 pl-10">
        <img src="images/end-volunteer.png" alt="" class="w-5/7">
    </div>
    <div class="py-20 text-montserrat flex flex-col items-center pb-60">
        <h1 class="text-5xl font-bold">Thank You for Being The Volunteer of AISC 2022</h1>
        <h1 class="text-5xl font-bold pt-1 jusify-center">We Will Reach Out to You Soon!</h1>
    </div>

    <!-- Footer -->
    <footer style="background-image: url('images/bg-footer.png');" class="bg-cover h-landing bg-local relative">
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