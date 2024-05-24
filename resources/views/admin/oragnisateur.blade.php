@extends('layouts.index')
@section('content')
    <section class="bg-gray-100 py-5">
        <div class="py-5 mt-3">

       



            <div class="flex justify-center px-8">
                <h1 class="text-center mt-6">Welcome!! You can now create an event</h1>
               
            </div>
            @include('admin.components.modal')
        
        
        
        
            <div class="flex flex-wrap justify-center gap-4 mt-3 px-4 mx-3">
                @foreach ($events as $event)
                    @if ($event->user_id == Auth::user()->id)
                    <div class=" flex justify-center items-center py-10">
                        <div class="md:px-4 md:grid md:grid-cols-2 lg:flex flex-wrap gap-5 space-y-4 md:space-y-0">
                            <div
                                class="max-w-sm bg-white  px-6 pt-6 pb-2 rounded-xl shadow-lg transform hover:scale-105 transition duration-500">
                                <h3 class="mb-3 text-xl font-bold text-indigo-600">{{ $event->name }}</h3>
                                <div class="relative">
        
                                    <img class="w-full h-60 rounded-xl object-cover" src="{{ asset('storage/img/' . $event->image) }}" alt="">
        
                                    {{-- <p
                                        class="absolute top-0 bg-yellow-300 text-gray-800 font-semibold py-1 px-3 rounded-br-lg rounded-tl-lg">
                                        FREE</p> --}}
                                </div>
                                <h1 class="mt-4 text-gray-800 text-2xl font-bold cursor-pointer">{{ $event->descriptions }}
                                </h1>
                                <div class="my-4">
                                    <div class="flex space-x-1 items-center">
                                        <span class="mb-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600 mb-1.5"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                        </span>
                                        <p>{{ $event->timeStart }}</p>
                                    </div>
                                    <div class="flex space-x-1 items-center">
                                        <span class="mb-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600 mb-1.5"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                            </svg>
                                        </span>
                                        <p>{{ $event->dateStart }}</p>
                                    </div>
                                    <div class="flex space-x-1 items-center">
                                        <span class="mb-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600 mb-1.5"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                                            </svg>
                                        </span>
                                        <div class="flex gap-2">
                                            <p>{{ $event->price }}$</p>
                                            <p class="line-through">{{ $event->old_price }}$</p>
                                        </div>
                                    </div>
        
        
                                    <div class="mt-4 text-xl w-full text-white bg-indigo-600 py-2 rounded-xl shadow-lg">
                                        <form action="{{ route('event.pay', $event->id) }}" method="post">
                                            @csrf
                                            <input type="hidden" name="eventId" value="{{ $event->id }}">
                                            <!-- Use eventId instead of event_id -->
                                            <input type="hidden" name="name" value="{{ $event->name }}">
                                            <input type="hidden" name="price" value="{{ $event->price }}">
                                            <input type="hidden" name="description" value="{{ $event->description }}">
                                            <button class="btn text-center w-full text-white text-2xl">Buy event</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
        
                        </div>
                    </div>
                    @endif
                @endforeach
            </div>
        
           
    </section>
    </div>
@endsection








