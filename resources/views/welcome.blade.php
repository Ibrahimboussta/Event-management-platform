@extends('layouts.index')
@section('content')
    <section>


        <div>
            <div class="image1 flex justify-center items-center flex-col gap-y-5">
                <h1 class="text-2xl font-bold text-center text-white z-40 lg:text-5xl text-center text-white"
                    id="reveal-text">We Help Make Great Events Happen</h1>
                <div class="flex items-center justify-around w-[40%] gap-x-5">
                    <input type="text" placeholder="Search for a event"
                        class="w-full z-40 text-black opacity-80 rounded-md">
                    <label for="" class="text-white z-40 border border-white px-3 py-1 rounded-md">Search</label>
                </div>
            </div>
        </div>
    </section>


    <section class="py-7">

        <div>
            <h1 class="text-center text-black font-extrabold text-4xl">Event For You</h1>
        </div>

        <div class="flex flex-wrap justify-center gap-4 mt-3 px-4 mx-3">

            <div class="card" style="width: 19rem;">
                <div class="card-body flex flex-col gap-y-1">
                    <h3 class="card-text font-semibold">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        Asperiores, fugit!</h3>
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
                    <button type="submit" class="border border-black w-[40%] rounded-lg px-3 py-1"><a
                            href="{{ route('register') }}">Buy Event</a></button>

                </div>
            </div>

            <div class="card" style="width: 19rem;">
                <div class="card-body flex flex-col gap-y-1">
                    <h3 class="card-text font-semibold">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        Asperiores, fugit!</h3>
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
                    <button type="submit" class="border border-black w-[40%] rounded-lg px-3 py-1"><a
                            href="{{ route('register') }}">Buy Event</a></button>

                </div>
            </div>

            <div class="card" style="width: 19rem;">
                <div class="card-body flex flex-col gap-y-1">
                    <h3 class="card-text font-semibold">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        Asperiores, fugit!</h3>
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
                    <button type="submit" class="border border-black w-[40%] rounded-lg px-3 py-1"><a
                            href="{{ route('register') }}">Buy Event</a></button>

                </div>
            </div>

            <div class="card" style="width: 19rem;">
                <div class="card-body flex flex-col gap-y-1">
                    <h3 class="card-text font-semibold">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        Asperiores, fugit!</h3>
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
                    <button type="submit" class="border border-black w-[40%] rounded-lg px-3 py-1"><a
                            href="{{ route('register') }}">Buy Event</a></button>

                </div>
            </div>

            <div class="card" style="width: 19rem;">
                <div class="card-body flex flex-col gap-y-1">
                    <h3 class="card-text font-semibold">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        Asperiores, fugit!</h3>
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
                    <button type="submit" class="border border-black w-[40%] rounded-lg px-3 py-1"><a
                            href="{{ route('register') }}">Buy Event</a></button>

                </div>
            </div>

            @foreach ($events->take(8) as $event)
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

        {{-- <div class="flex justify-center mt-4">
            {{ $events->links() }} <!-- Pagination links -->
        </div> --}}

        <div class="flex justify-center mt-4">
            <a href="{{ route('events.index') }}" class="border border-black rounded-lg px-3 py-1">View All Events</a>
        </div>
    </section>


    <section class="py-7">
        <div class="bg-blue-200 h-[30%] flex flex-wrap justify-center items-center flex-col gap-y-2 p-5">
            <h1 class="text-2xl font-bold text-center lg:text-4xl text-center">Get More With No Surprises</h1>
            <p class="text-l font-semibold mb-2">Easy-to-use platform for hosting successful events</p>
            <div class="flex flex-wrap gap-3">
                <button><a href="{{ route('register') }}" class="border border-black px-4 py-1 rounded-lg ">Create
                        Event</a></button>
                <button><a href="{{ route('events.index') }}" class="border border-black px-4 py-1 rounded-lg ">Find
                        Event</a></button>
            </div>
        </div>
    </section>


    <section class="py-7">
        <div class="flex flex-wrap justify-center items-center flex-col gap-y-2 p-5">
            <h1 class="text-2xl font-bold text-center lg:text-4xl text-center">Our Teams</h1>
            <p class="text-l font-semibold mb-2">Easy-to-use platform for hosting successful events</p>
            <div class="flex flex-wrap justify-center gap-3">
                <div class="w-full md:w-[20%]">
                    <img src="{{ asset('img/photo-1.avif') }}" alt="" class="w-full h-[50vh] object-cover rounded-md shadow-lg ">
                </div>
                <div class="w-full md:w-[20%] ">
                    <img src="{{ asset('img/photo-3.jpg') }}" alt="" class="w-full h-[50vh] object-cover rounded-md shadow-lg">
                </div>
                <div class="w-full md:w-[20%]">
                    <img src="{{ asset('img/photo-3.avif') }}" alt="" class="w-full h-[50vh] object-cover rounded-md shadow-lg">
                </div>

                <div class="w-full md:w-[20%]">
                    <img src="{{ asset('img/photo-1.avif') }}" alt="" class="w-full h-[50vh] object-cover rounded-md shadow-lg">
                </div>
                <div class="w-full md:w-[20%] ">
                    <img src="{{ asset('img/photo-3.jpg') }}" alt="" class="w-full h-[50vh] object-cover rounded-md shadow-lg">
                </div>
                <div class="w-full md:w-[20%]">
                    <img src="{{ asset('img/photo-3.avif') }}" alt="" class="w-full h-[50vh] object-cover rounded-md shadow-lg">
                </div>

                <div class="w-full md:w-[20%] ">
                    <img src="{{ asset('img/photo-3.jpg') }}" alt="" class="w-full h-[50vh] object-cover rounded-md shadow-lg">
                </div>
                <div class="w-full md:w-[20%]">
                    <img src="{{ asset('img/photo-3.avif') }}" alt="" class="w-full h-[50vh] object-cover rounded-md shadow-lg">
                </div>
            </div>
        </div>
    </section>
    

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const text = document.getElementById('reveal-text');
            const characters = text.textContent.split(''); // Split the text into characters
            text.textContent = ''; // Clear the text

            characters.forEach((char, index) => {
                const span = document.createElement('span');
                span.textContent = char === ' ' ? '\u00A0' :
                    char; // If character is space, use non-breaking space
                span.className = 'text-reveal';
                span.style.transitionDelay = `${index * 25}ms`; // Adjust the delay for each character
                text.appendChild(span);
            });

            setTimeout(() => {
                const spans = document.querySelectorAll('.text-reveal');
                spans.forEach(span => span.classList.add('reveal'));
            }, 100); // Delay the reveal animation for better effect
        });
    </script>
@endsection
