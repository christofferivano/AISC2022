<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <title>Admin Page</title>
    <link rel="shortcut icon" href="images/Logogram.ico" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>
    $(document).ready(function () {
        $("#filter1").change(function () {
            switch($(this).val()) {
                case 'option1':
                    $("#filter2").html("<option value=''>Institut Teknologi Sepuluh Nopember</option><option value=''>Institut Teknologi Bandung</option><option value=''>Universitas Indonesia</option><option value=''>Universitas Pertamina</option><option value=''>PEM Akamigas</option>");
                    break;
                case 'option2':
                    $("#filter2").html("<option value=''>2019</option><option value=''>2020</option>");
                    break;
                case 'option3':
                    $("#filter2").html("<option>Pre-Event</option><option>Conference Day</option><option>nAISC Night</option><option>Logistic</option><option>Sponsorship</option><option>Paper Competition</option><option>Poster Competition</option><option>ChemE Jeopardy Competition</option><option>Social Media Specialist</option><option>Outreach</option><option>Media Production</option>");
                    break;
                case 'option4':
                    $("#filter2").html("<option>Pre-Event</option><option>Conference Day</option><option>nAISC Night</option><option>Logistic</option><option>Sponsorship</option><option>Paper Competition</option><option>Poster Competition</option><option>ChemE Jeopardy Competition</option><option>Social Media Specialist</option><option>Outreach</option><option>Media Production</option>");
                    break;
                default:
                    $("#filter2").html("<option value=''>Institut Teknologi Sepuluh Nopember</option><option value=''>Institut Teknologi Bandung</option><option value=''>Universitas Indonesia</option><option value=''>Universitas Pertamina</option><option value=''>PEM Akamigas</option>");
            }
        });
    });

    </script>
</head>
<body class="relative">
    <nav class="hidden md:block fixed w-screen top-0 z-20 shadow-lg bg-white font-montserrat backdrop-filter backdrop-blur-lg bg-opacity-30">
        <div class="mx-auto px-10 md:px-24 py-2">
            <div class="flex items-center justify-between h-20">
                <!-- <span class="text-2xl text-gray-900 font-semibold">
                    LOGO AISC
                </span> -->
                <div>
                    <img src="/public/images/logo.png" alt="" class="w-20 md:w-24">
                </div>
                {{-- <div>
                    <select name="" id="filter1" class="rounded-lg bg-blue-300 text-white hover:bg-blue-400 hover:text-gray-200">
                        <option value="option1" id="option1">University</option>
                        <option value="option2" id="option2">Batch</option>
                        <option value="option3" id="option3">Position 1</option>
                        <option value="option4" id="option4">Position 2</option>
                    </select>
                    <select name="" id="filter2" class="rounded-lg bg-blue-300 text-white hover:bg-blue-400 hover:text-gray-200 w-96">
                        <option value="">Institut Teknologi Sepuluh Nopember</option>
                        <option value="">Institut Teknologi Bandung</option>
                        <option value="">Universitas Indonesia</option>
                        <option value="">Universitas Pertamina</option>
                        <option value="">PEM Akamigas</option>
                    </select>
                </div> --}}
                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button class="rounded-lg bg-red-500 text-white font-semibold text-xl py-2 px-5 hover:text-gray-200">
                        Log Out
                    </button>
                </form>
                
                <form action="{{ route('admin') }}" method="GET" class="inline">
                    @csrf
                    <button class="rounded-lg bg-red-500 text-white font-semibold text-xl py-2 px-5 hover:text-gray-200">
                        Back
                    </button>
                </form>
            </div>
        </div>
    </nav>
    <div class="bg-gradient-to-l from-blue-300 to-purple-400 h-full w-screen">
    <div class="flex flex-col py-32">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">
                            Full Name
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">
                            Institution / University / Company
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">
                            Major
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">
                            Email
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">
                            WA
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">
                            Source
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">
                            Expectation
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">
                            Edit
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @if ($registrator->count())
                        @foreach ($registrator as $r)
                            <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="text-sm font-medium text-gray-900">
                                    {{ $r->name }}
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{ $r->place }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                {{ $r->major }}
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $r->email }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $r->wa }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $r->source }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $r->expect }}
                            </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    <a href="{{ route('admin-aischat-delete', $r) }} " class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-200 text-red-800">Delete</a>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    <a href="{{ route('admin-aischat-show', $r->id) }} " class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-200 text-red-800">Validate</a>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <p>There are no volunteer</p>
                    @endif
                </tbody>
                </table>
                <div class="d-flex justify-content-center">
                    {!! $registrator->links() !!}
                </div>
            </div>
            <form action="{{ route('export-aischat') }}" method="GET">
                @csrf
                <button class="rounded-lg bg-red-500 text-white font-semibold text-xl py-2 px-5 hover:text-gray-200">Export</button>
            </form>
        </div>
    </div>
</body>
</html>