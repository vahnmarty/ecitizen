@extends('layouts.guest')

@section('header')
    <header>
        <h1 class="text-3xl font-bold">LGU Directory</h1>
    </header>
@endsection
@section('content')
    <div class="py-6 bg-white">
        <div class="wrapper">
            <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($directories as $directory)
                    <div class="p-4 bg-gray-100 border border-gray-300 rounded-lg shadow-sm">
                        <h2 class="text-lg font-bold">{{ $directory->name }}</h2>
                        <div class="gap-3 mt-1 xl:block">
                            <div class="flex">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 text-green-600">
                                    <path fill-rule="evenodd" d="M9.69 18.933l.003.001C9.89 19.02 10 19 10 19s.11.02.308-.066l.002-.001.006-.003.018-.008a5.741 5.741 0 00.281-.14c.186-.096.446-.24.757-.433.62-.384 1.445-.966 2.274-1.765C15.302 14.988 17 12.493 17 9A7 7 0 103 9c0 3.492 1.698 5.988 3.355 7.584a13.731 13.731 0 002.273 1.765 11.842 11.842 0 00.976.544l.062.029.018.008.006.003zM10 11.25a2.25 2.25 0 100-4.5 2.25 2.25 0 000 4.5z" clip-rule="evenodd" />
                                  </svg>
                                  
                                @if($directory->address)
                                <span class="ml-2">{{ $directory->address }}</span>
                                @else
                                <span class="ml-2 text-gray-400">*not specified</span>
                                @endif
                            </div>
                            <div class="flex">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 text-green-600">
                                    <path d="M3.5 2A1.5 1.5 0 002 3.5V5c0 1.149.15 2.263.43 3.326a13.022 13.022 0 009.244 9.244c1.063.28 2.177.43 3.326.43h1.5a1.5 1.5 0 001.5-1.5v-1.148a1.5 1.5 0 00-1.175-1.465l-3.223-.716a1.5 1.5 0 00-1.767 1.052l-.267.933c-.117.41-.555.643-.95.48a11.542 11.542 0 01-6.254-6.254c-.163-.395.07-.833.48-.95l.933-.267a1.5 1.5 0 001.052-1.767l-.716-3.223A1.5 1.5 0 004.648 2H3.5zM16.5 4.56l-3.22 3.22a.75.75 0 11-1.06-1.06l3.22-3.22h-2.69a.75.75 0 010-1.5h4.5a.75.75 0 01.75.75v4.5a.75.75 0 01-1.5 0V4.56z" />
                                  </svg>
                                  
                                @if($directory->cellphone)
                                <span class="ml-2">{{ $directory->cellphone }}</span>
                                @else
                                <span class="ml-2 text-gray-400">*not specified</span>
                                @endif
                            </div>
                            <div class="flex">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 text-green-600">
                                    <path d="M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z" />
                                    <path d="M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z" />
                                  </svg>
                                  
                                @if($directory->email)
                                <span class="ml-2">{{ $directory->email }}</span>
                                @else
                                <span class="ml-2 text-gray-400">*not specified</span>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
