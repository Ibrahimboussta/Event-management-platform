@extends('layouts.index')
@section('content')
    <section class="bg-gray-100 border-b-2">
        <div class="py-5">
            <h1 class="text-center py-4 mt-5">Your events</h1>
            <div class="w-full px-5 py-10 lg:px-0 lg:w-full">

                @if ($user)
                    @foreach ($user as $user)
                        @foreach ($user->events as $event)
                            <div
                                class="w-full md:w-[80%] lg:w-full xl:w-[90%] 2xl:w-[80%] mx-auto rounded px-4 md:px-10 flex flex-col md:flex-row items-center justify-between bg-[#FFF] py-2 mt-4">
                                <h5 class="m-0 font-semibold md:w-[20%]">Event Name: {{ $event->name }}</h5>
                                <p class="m-0 md:w-[30%]">Date Start: {{ $event->dateStart }}</p>
                                <p class="m-0 md:w-[30%]">Date End: {{ $event->dateEnd }}</p>
                                <p class="m-0 md:w-[20%]">Location: {{ $event->locations }}</p>
                                <p class="m-0 md:w-[20%]">Price: {{ $event->price }}</p>
                            </div>
                        @endforeach
                    @endforeach
                @endif



            </div>
        </div>
    </section>
@endsection
