@extends('layouts.index')
@section('content')
    <section class="bg-gray-100 py-5">
       <div class="py-5 mt-3">

        <h1 class="text-center py-3">Join All This Events Now!!!</h1>
        <div class="flex flex-wrap justify-center gap-4 mt-3 px-4 mx-3">
            {{-- <div class="card" style="width: 19rem;">
                <div class="card-body flex flex-col gap-y-1">
                    <h3 class="card-text font-semibold">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores, fugit!</h3>
                    <h5 class="card-title font-sans"><b>Organiteur</b> : lorem</h5>
                    <div class="flex flex-col gap-x-5">
                        <div class="flex">
                            <p class="card-text w-full"> <b>Start</b>:05:30:00</p>
                            <p class="card-text w-full"><b>End</b>:18:00:00</p>
                        </div>

                        <div class="flex">
                            <p class="card-text w-full"> <b>Start</b>:2024-04-26</p>
                            <p class="card-text w-full"><b>End</b>:2024-04-26</p>
                        </div>


                    </div>
                    <p class="card-text"><B>locations</B> : Casablanca</p>
                    <p class="card-text font-bold">Price : 999$</p>
                    <button type="submit" class="border border-black w-[40%] rounded-lg px-3 py-1"><a href="{{ route('register') }}">Buy Event</a></button>

                </div>
            </div>

            <div class="card" style="width: 19rem;">
                <div class="card-body flex flex-col gap-y-1">
                    <h3 class="card-text font-semibold">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores, fugit!</h3>
                    <h5 class="card-title font-sans"><b>Organiteur</b> : lorem</h5>
                    <div class="flex flex-col gap-x-5">
                        <div class="flex">
                            <p class="card-text w-full"> <b>Start</b>:05:30:00</p>
                            <p class="card-text w-full"><b>End</b>:18:00:00</p>
                        </div>

                        <div class="flex">
                            <p class="card-text w-full"> <b>Start</b>:2024-04-26</p>
                            <p class="card-text w-full"><b>End</b>:2024-04-26</p>
                        </div>


                    </div>
                    <p class="card-text"><B>locations</B> : Casablanca</p>
                    <p class="card-text font-bold">Price : 999$</p>
                    <button type="submit" class="border border-black w-[40%] rounded-lg px-3 py-1"><a href="{{ route('register') }}">Buy Event</a></button>

                </div>
            </div>

            <div class="card" style="width: 19rem;">
                <div class="card-body flex flex-col gap-y-1">
                    <h3 class="card-text font-semibold">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores, fugit!</h3>
                    <h5 class="card-title font-sans"><b>Organiteur</b> : lorem</h5>
                    <div class="flex flex-col gap-x-5">
                        <div class="flex">
                            <p class="card-text w-full"> <b>Start</b>:05:30:00</p>
                            <p class="card-text w-full"><b>End</b>:18:00:00</p>
                        </div>

                        <div class="flex">
                            <p class="card-text w-full"> <b>Start</b>:2024-04-26</p>
                            <p class="card-text w-full"><b>End</b>:2024-04-26</p>
                        </div>


                    </div>
                    <p class="card-text"><B>locations</B> : Casablanca</p>
                    <p class="card-text font-bold">Price : 999$</p>
                    <button type="submit" class="border border-black w-[40%] rounded-lg px-3 py-1"><a href="{{ route('register') }}">Buy Event</a></button>

                </div>
            </div>

            <div class="card" style="width: 19rem;">
                <div class="card-body flex flex-col gap-y-1">
                    <h3 class="card-text font-semibold">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores, fugit!</h3>
                    <h5 class="card-title font-sans"><b>Organiteur</b> : lorem</h5>
                    <div class="flex flex-col gap-x-5">
                        <div class="flex">
                            <p class="card-text w-full"> <b>Start</b>:05:30:00</p>
                            <p class="card-text w-full"><b>End</b>:18:00:00</p>
                        </div>

                        <div class="flex">
                            <p class="card-text w-full"> <b>Start</b>:2024-04-26</p>
                            <p class="card-text w-full"><b>End</b>:2024-04-26</p>
                        </div>


                    </div>
                    <p class="card-text"><B>locations</B> : Casablanca</p>
                    <p class="card-text font-bold">Price : 999$</p>
                    <button type="submit" class="border border-black w-[40%] rounded-lg px-3 py-1"><a href="{{ route('register') }}">Buy Event</a></button>

                </div>
            </div>

            <div class="card" style="width: 19rem;">
                <div class="card-body flex flex-col gap-y-1">
                    <h3 class="card-text font-semibold">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores, fugit!</h3>
                    <h5 class="card-title font-sans"><b>Organiteur</b> : lorem</h5>
                    <div class="flex flex-col gap-x-5">
                        <div class="flex">
                            <p class="card-text w-full"> <b>Start</b>:05:30:00</p>
                            <p class="card-text w-full"><b>End</b>:18:00:00</p>
                        </div>

                        <div class="flex">
                            <p class="card-text w-full"> <b>Start</b>:2024-04-26</p>
                            <p class="card-text w-full"><b>End</b>:2024-04-26</p>
                        </div>



                    </div>
                    <p class="card-text"><B>locations</B> : Casablanca</p>
                    <p class="card-text font-bold">Price : 999$</p>
                    <button type="submit" class="border border-black w-[40%] rounded-lg px-3 py-1"><a href="{{ route('register') }}">Buy Event</a></button>

                </div>
            </div> --}}

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
                        <form method="post" action="{{ route('events.buy', $event) }}">
                            @csrf
                            <button type="submit" class="border border-black rounded-lg px-3 py-1">Buy Event</button>
                            <!-- Add a hidden input field to send the event's ID -->
                            <input type="hidden" name="event_id" value="{{ $event->id }}">
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
       </div>
@endsection
