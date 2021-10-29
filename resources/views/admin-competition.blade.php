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
    <div class="flex flex-col py-10 px-10">
        <div class="flex flex-col items-center">
            <img src="/images/logo.png" alt="" class="h-20">
        </div>
        <div class="flex flex-col items-end">
            <form action="{{ route('dashboard') }}" method="GET" class="inline">
                @csrf
                <button class="rounded-lg bg-red-500 text-white font-semibold text-xl py-2 px-5 hover:text-gray-200">
                    Back
                </button>
            </form>
        </div>
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="text-left text-xl font-medium text-gray-900 uppercase tracking-wider">
                            <a href="{{ route('institution') }}" class="px-6 py-3 btn btn-primary btn-sm float-left w-full hover:bg-gray-200 transition duration-200"><span class="fas fa-plus" style="padding-right: 7px;"></span>Institution</a>
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    {{-- @if ($files->count())
                        @foreach ($files as $f)
                            <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <a target="#" href="{{ $f->file_path }}" class="text-sm font-medium text-gray-900">
                                    {{ $f->type }}
                                    </a>
                                </div>
                            </td>
                            </tr>
                        @endforeach
                    @else
                        <p>There are no volunteer</p>
                    @endif --}}
                </tbody>
                </table>
            </div>
            </div>
        </div>
        </div>
    </div>
</body>
</html>