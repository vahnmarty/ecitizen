@extends('layouts.guest')

@section('header')
    <header class="flex items-center justify-between">
        <h1 class="text-3xl font-bold">Hotline</h1>
        <div>

        </div>
    </header>
@endsection
@section('content')
    <div class="py-6 bg-white">
        <div class="wrapper">
            <section class="mt-8" x-data="{ category: null }">
                <select x-model="category" class="border-gray-300 rounded-lg">
                    <option value="">-- All --</option>
                    @foreach (\App\Enums\HotlineCategory::asSelectArray() as $value => $key)
                        <option value="{{ $value }}">{{ $key }}</option>
                    @endforeach
                </select>
                <div class="grid gap-6 mt-8 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach ($hotlines as $hotline)
                        <div x-show="category == null || category == {{ $hotline->hotline_category->value }}"
                            class="p-6 border rounded-lg shadow-md">
                            <div class="grid grid-cols-8 sm:grid-cols-5 lg:grid-cols-4">
                                <div class="p-0.5">
                                    <img src="{{ asset('img/pnp.png') }}">
                                </div>
                                <div class="col-span-7 ml-6 sm:col-span-4 lg:col-span-3">
                                    <h3 class="mb-2 font-bold md:text-xl">{{ $hotline->name }}</h3>
                                    @foreach ($hotline->numbers as $number)
                                        <p class="flex gap-2 text-sm md:text-base">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                                            </svg>
                                            <span>{{ $number->number }}</span>
                                        </p>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>
        </div>
    </div>
@endsection
