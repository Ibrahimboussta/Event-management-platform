@extends('layouts.index')
@section('content')
    <section class="bg-gray-100 py-5">
        <div class="py-5 mt-3">

            <div class="flex flex-col items-center">
                <h1 class="text-center py-3">Join All This Events Now!!!</h1>

                <form class="flex items-center w-[50%]" action="{{ route('search') }}" method="get">
                    <div class="flex items-center justify-around w-[100%] gap-x-5">
                        <input name="search" type="text" placeholder="Search for an event"
                            class="w-full z-40 text-black opacity-80 rounded-md"
                            value="{{ isset($search) ? $search : '' }}">
                        <button
                            class="border border-white px-4 py-1 text-lg rounded-md bg-blue-600 text-white w-1/2 z-40 md:w-auto">Search</button>
                    </div>
                </form>
            </div>

            <div class="flex flex-wrap justify-center gap-4 mt-3 px-4 mx-3">
                @foreach ($events as $event)
                <div class="block rounded-lg bg-white w-full md:w-[45%] lg:w-[30%] xl:w-[20%] hover:shadow-lg shadow-secondary-1 dark:bg-surface-dark">
                    <div class="relative overflow-hidden bg-cover bg-no-repeat" data-twe-ripple-init data-twe-ripple-color="light">
                        <img class="rounded-t-lg w-full border border-black h-56" src="{{ asset('storage/img/' . $event->image) }}" alt="" />
                        <a href="#!">
                            <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsla(0,0%,98%,0.15)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100">
                            </div>
                        </a>
                    </div>
                    <div class="p-6 text-surface dark:text-white">
                        <h5 class="mb-2 text-xl font-medium leading-tight">{{ $event->name }}</h5>
                        <p class="mb-4 text-base line-clamp-1">
                            {{ $event->descriptions }}
                        </p>
                        <form action="{{ route('detail.detail', $event) }}" method="post">
                            @csrf
                            <button class="inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out hover:bg-primary-accent-300 hover:shadow-primary-2 focus:bg-primary-accent-300 focus:shadow-primary-2 focus:outline-none focus:ring-0 active:bg-primary-600 active:shadow-primary-2 dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong" data-twe-ripple-init data-twe-ripple-color="light">
                                View more
                            </button>
                        </form>
                    </div>
                </div>
                
                    {{-- <div class="flex justify-center w-[90%] sm:w-1/2 md:w-1/3 lg:w-1/4 items-center py-10">
                    <div class="md:px-4 md:grid md:grid-cols-2 lg:flex flex-wrap gap-5 space-y-4 md:space-y-0">
                        <div class="max-w-sm bg-white px-6 pt-6 pb-2 rounded-xl transform hover:shadow-2xl transition duration-500">
                            <h3 class="mb-3 text-xl font-bold text-indigo-600">{{ $event->name }}</h3>
                            <div class="w-full">
                                <img class="w-full h-60 rounded-xl object-cover" src="{{ asset('storage/img/' . $event->image) }}" alt="">
                            </div>
                            <h1 class="mt-4 text-gray-800 text-2xl font-bold cursor-pointer">{{ $event->descriptions }}</h1>
                            <div class="my-4">
                                <div class="flex space-x-1 items-center">
                                    <span class="mb-[12px]">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600 mb-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </span>
                                    <p>{{ $event->timeStart }}</p>
                                </div>
                                <div class="flex space-x-1 items-center">
                                    <span class="mb-[12px]">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600 mb-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                    </span>
                                    <p>{{ $event->dateStart }}</p>
                                </div>
                                <div class="flex space-x-1 items-center">
                                    <span class="mb-[12px]">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600 mb-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                                        </svg>
                                    </span>
                                    <div class="flex gap-2">
                                        <p>{{ $event->price }}$</p>
                                        <p class="line-through">{{ $event->old_price }}$</p>
                                    </div>
                                </div>
                     
    
                                
                                    <form action="{{ route('detail.detail', $event) }}" method="post">
                                        @csrf
                                        <button>
                                            view more
                                        </button>
                                    </form>
                            </div>
                        </div>
                    </div>
                </div> --}}
                @endforeach
            </div>
    </section>
    </div>
@endsection
