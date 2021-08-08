<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <link href="https://unpkg.com/swiper/swiper-bundle.min.css" rel="stylesheet" />
    <link href="{{ asset('css/forswiper.css') }}" rel="stylesheet">
    <title>Admin Page</title>
</head>
<body class="relative">
    <div class="bg-gradient-to-l from-blue-300 to-purple-400 h-full w-full">
        <div class="flex flex-row justify-center items-center h-full">
            <div class="rounded-lg border-2 border-gray-500 h-80 w-98 bg-white">
                <div class="flex flex-col items-start">
                    <div class="border-b-2 border-gray-500 py-4 w-full flex flex-col items-center">
                        <div class="flex">
                        <img src="images/logo.png" alt="" class="h-10">
                        <h1 class="pl-4 font-bold text-4xl text-center">Login</h1>
                        </div>
                    </div>
                    <div class="py-4 px-10 w-full">
                        @if (session('status'))
                            {{ session('status') }}
                        @endif
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <label for="email" class="pt-2 pb-2 pl-4 text-base md:text-xl font-medium">Email</label><br>
                            <input name="email" type="email" class="outline-none rounded-full border border-form py-1 px-4 w-72 md:w-full text-sm focus:ring-2 focus:ring-form
                            @error('email') border-red-500 @enderror" placeholder="email@gmail.com" value="{{ old('email') }}"><br>
                            @error('email')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{ $message }}
                                </div>
                            @enderror
                            <label for="password" class="pt-2 pb-2 pl-4 text-base md:text-xl font-medium">Password</label><br>
                            <input name="password" type="password" class="outline-none rounded-full border border-form py-1 px-4 w-72 md:w-full text-sm focus:ring-2 focus:ring-form
                            @error('password') border-red-500 @enderror" placeholder="password">
                            @error('password')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{ $message }}
                                </div>
                            @enderror
                            <div class="pt-10 flex flex-col items-center">
                                <button type="submit" class="w-96 bg-gradient-to-l from-blue-300 to-purple-400 py-1 rounded-full text-white text-lg font-semibold shadow-lg">
                                    Login
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>