@extends('layouts.navbar-regis-volunteer');

@section('content')
<div class="md:hidden absolute left-0 top-0">
        <img src="/images/bulet-respon-volun-1.png" alt="" class="h-96"> 
    </div>
    <div class="hidden md:block absolute">
        <img src="/images/bulet-regis-volun-4.png" alt="" class="w-2/7 ml-98 pl-20 mt-20">
    </div>
    <div class="absolute bottom-0 right-0">
        <img src="/images/bulet-regis-volun-2.png" alt="" class="h-52 -mt-80 md:hidden">
    </div>
    <div class="absolute left-0 mt-24 pt-100">
        <img src="/images/bulet-mob-regis-volun-1.png" alt="" class="h-80 md:h-96">
    </div>
    <div class="pt-28 grid md:grid-cols-5 pb-96 md:pb-0 w-full">
        <div class="md:col-span-2 md:col-start-1 pl-5 md:pl-24 flex flex-col items-start w-full">
            <h1 class="absolute md:relative text-2xl md:text-5xl font-bold">
                Registration
                <div class="md:hidden flex flex-row right-0 pl-80 -mt-10 pt-6">
                    <div class="rounded-full h-3 md:h-4 w-3 md:w-4 bg-gradient-to-r from-gray-100 to-gray-300 shadow-lg"></div>
                    <div class="px-1 md:px-2">
                        <div class="rounded-full h-3 md:h-4 w-3 md:w-4 bg-gradient-to-r from-gray-100 to-gray-300 shadow-lg"></div>
                    </div>
                    <div class="">
                        <div class="rounded-full h-3 md:h-4 w-3 md:w-4 bg-gradient-to-l from-blue-300 to-purple-400 shadow-lg"></div>
                    </div>
                </div>
            </h1>
            <div class="absolute md:relative pt-8 md:pt-4">
                <div class="rounded-full py-0.5 md:py-1 bg-gradient-to-l from-blue-300 to-purple-400">
                    <div class="px-14 md:px-20"></div>
                </div>
            </div>
            <h1 class="text-base md:text-xl font-bold pt-20">
                <font color="#30264F">Please kindly upload the requirements needed :</font> 
            </h1>
            <div class="w-full md:pr-5 z-10">
                <form action="{{ route('volunteer-regis-3', ['name' => $name, 'radio' => $radio, 'major' => $major, 'batch' => $batch,
                            'domicile' => $domicile, 'email' => $email, 'wa' => $wa, 'line' => $line, 'position1' => $position1, 'position2' =>$position2]) }}" 
                            class="flex flex-col pt-10 md:pt-12" method="POST" enctype="multipart/form-data">
                    @csrf
                    @if (count($errors) > 0)
                        <div class="alert alert-danger pb-2 text-red-500 font-semibold">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>*{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <label for="cv" class="pb-2 pl-4 text-base md:text-xl font-medium">Curriculum Vitae</label>
                    {{-- <label for="twibbon_link" class="outline-none rounded-full border border-form py-1 px-4 w-72 md:w-96 text-sm focus:ring-2 focus:ring-form">
                        Upload File
                    </label> --}}
                    <input name="twibbon_link" type="text" class="outline-none rounded-full border border-form py-1 px-4 w-72 md:w-96 text-sm focus:ring-2 focus:ring-form" placeholder="">
                    <!-- <input type="button" value="Select a File" onclick="document.getElementById('selectedFile').click()" class="outline-none rounded-full border border-form py-1 px-4 w-72 md:w-96 text-sm focus:ring-2 focus:ring-form"> -->
                    <label for="portofolio" class="pt-4 pb-2 pl-4 text-base md:text-xl font-medium">Portofolio (Media Production Only)</label>
                    {{-- <label for="file-upload-2" class="outline-none rounded-full border border-form py-1 px-4 w-72 md:w-96 text-sm focus:ring-2 focus:ring-form">
                        Upload File
                    </label> --}}
                    <input name="proof_link" type="text" class="outline-none rounded-full border border-form py-1 px-4 w-72 md:w-96 text-sm focus:ring-2 focus:ring-form" placeholder="">
                    {{-- <label for="twibbon" class="pt-4 pb-2 pl-4 text-base md:text-xl font-medium">Twibbon Upload</label> --}}
                    {{-- <label for="file-upload-3" class="outline-none rounded-full border border-form py-1 px-4 w-72 md:w-96 text-sm focus:ring-2 focus:ring-form">
                        Upload File
                    </label> --}}
                    {{-- <input name="twibbon" type="string" id="file-upload-3" class="hidden"> --}}
                    {{-- <label for="sg" class="pt-4 pb-2 pl-4 text-base md:text-xl font-medium">Information Sharing via Snapgram</label>
                    <label for="file-upload-4" class="outline-none rounded-full border border-form py-1 px-4 w-72 md:w-96 text-sm focus:ring-2 focus:ring-form">
                        Upload File
                    </label>
                    <input name="ig_sharing" type="file" id="file-upload-4" class="hidden">
                    <label for="proof" class="pt-4 pb-2 pl-4 text-base md:text-xl font-medium">Instagram @aisc2022 Follow Proof</label>
                    <label for="file-upload-5" class="outline-none rounded-full border border-form py-1 px-4 w-72 md:w-96 text-sm focus:ring-2 focus:ring-form">
                        Upload File
                    </label>
                    <input name="ig_follow" type="file" id="file-upload-5" class="hidden"> --}}
                    <div class="pt-10">
                        <div class="flex flex-row pl-4">
                            <p class="text-lg font-medium">You can see the requirements.</p>
                            <a href="" class="underline text-blue-700 text-lg pl-1">Here</a>
                        </div>
                    </div>
                        <button type="submit" class="w-96 bg-gradient-to-l from-blue-300 to-purple-400 py-1 rounded-full text-white text-lg font-semibold shadow-lg">
                            Submit
                        </button>
                </form>
            </div>
            <img src="/images/volunteer-regis-3.png" alt="" class="absolute md:hidden right-0 bottom-0 -mb-96 h-80">
        </div>
        <div class="hidden col-span-3 col-start-3 md:flex flex-col items-end">
            <div class="flex flex-row pt-6 pr-20">
                <div class="rounded-full h-4 w-4 bg-gradient-to-r from-gray-100 to-gray-300 shadow-lg"></div>
                <div class="px-2">
                    <div class="rounded-full h-4 w-4 bg-gradient-to-r from-gray-100 to-gray-300 shadow-lg"></div>
                </div>
                <div class="">
                    <div class="rounded-full h-4 w-4 bg-gradient-to-l from-blue-300 to-purple-400 shadow-lg"></div>
                </div>
            </div>
            <!-- <div style="background-image: url('images/bg-register-volunteer.png')" class="bg-cover h-landing bg-local relative h-full"></div> -->
            <img src="/images/volunteer-regis-3.png" alt="" class="w-6/7">
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-footer absolute w-full z-10">
        <div class="h-full flex flex-col items-start">
            <div class="px-8 md:px-20 py-6 md:py-10">
                <h2 class="font-bold text-2xl md:text-5xl text-white">
                    Contact Us
                </h2>
                <div class="flex pt-2 md:pt-8 items-center">
                    <img src="/images/instagram.png" alt="" class="w-6 md:w-12">
                    <p class="pl-2 md:pl-5 text-white font-semibold text-sm md:text-2xl">@aisc2022</p>
                </div>
                <div class="flex pt-2 md:pt-8 items-center">
                    <img src="/images/line-app.png" alt="" class="w-6 md:w-12">
                    <p class="pl-2 md:pl-5 text-white font-semibold text-sm md:text-2xl">@961ckski</p>
                </div>
                <div class="flex pt-2 md:pt-8 items-center">
                    <img src="/images/linkedin.png" alt="" class="w-6 md:w-12">
                    <p class="pl-2 md:pl-5 text-white font-semibold text-sm md:text-2xl">AIChE Indonesia Student Conference 2022</p>
                </div>
            </div>
        </div>
    </footer>
@endsection