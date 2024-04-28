@extends('layouts.index')
@section('content')
    <section class="bg-gray-100 py-5">
       <div class="py-5 mt-3">

        <h1 class="text-center py-3">Join All This Events Now!!!</h1>
        <div class="flex flex-wrap justify-center gap-4 mt-3 px-4 mx-3">
            

            <form action="{{ route('search') }}" method="get">
                <div class="flex items-center justify-around w-[100%] gap-x-5">
                    <input name="search" type="text" placeholder="Search for an event"
                           class="w-full z-40 text-black opacity-80 rounded-md" value="{{ isset($search) ? $search : '' }}">
                           <button
                           class="border border-white px-4 py-1 text-lg rounded-md bg-blue-600 text-white w-1/2 z-40 md:w-auto">Search</button>                </div>
            </form>

            @foreach ($events as $event)
            <div class="card" style="width: 19rem;">
                <div class="card-body flex flex-col gap-y-1">
                    <h3 class="card-text font-semibold">{{ $event->descriptions }}</h3>
                    <h5 class="card-title font-sans"><b>Organiteur</b> : {{ $event->name }}</h5>
                    <div class="flex flex-col gap-x-5">
                        <div class="flex">
                            <p class="card-text w-full"> <b>Start</b>:{{ $event->timeStart }}</p>
                            <p class="card-text w-full"><b>End</b>:{{ $event->timeEnd }}</p>
                        </div>

                        <div class="flex">
                            <p class="card-text w-full"> <b>Start</b>:{{ $event->dateStart }}</p>
                            <p class="card-text w-full"><b>End</b>:{{ $event->dateEnd }}</p>

                        </div>


                    </div>
                    <p class="card-text"><B>locations</B> : {{ $event->locations }}</p>
                    <p class="card-text font-bold">Price : {{ $event->price }}$</p>
                    <div class="flex gap-3">
                        <form action="{{ route('event.pay', $event->id) }}" method="post">
                            @csrf
                            <input type="hidden" name="eventId" value="{{ $event->id }}"> <!-- Use eventId instead of event_id -->
                            <input type="hidden" name="name" value="{{ $event->name }}">
                            <input type="hidden" name="price" value="{{ $event->price }}">
                            <input type="hidden" name="description" value="{{ $event->description }}">
                            <button class="btn btn-primary">Shop Now</button>
                        </form>
                        
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
       </div>
@endsection
