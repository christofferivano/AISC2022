@extends('layouts.navbar')

@section('content')
    <!-- Penjelasan AISC -->
    <div class ="flex flex-col justify-center items-center px-40 py-32">
        <div class="rounded-lg overflow-hidden w-6/7 ml-1">
            <img src="images/bg-compedone.png" alt="ko">
        </div>
        <div class="justify-center items-center pt-20">
            <h1 class="text-4xl font-bold text-footer">
                Thankyou for Participating in the Competition!
                <h2 class="text-4xl font-bold text-footer pl-32">
                    We Wish You the Best of Luck
                </h2>
            </h1>
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