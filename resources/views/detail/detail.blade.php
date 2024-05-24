@extends('layouts.index')
@section('content')
    <section class="bg-gray-100 py-5">
        <div class="py-5 flex flex-col items-center justify-center mt-3 gap-8">
            @foreach ($events as $event)
                <div class="border-b-2 border-black w-full sm:w-3/4 lg:w-[70vw] p-2 sm:p-4 lg:p-6">
                    <img class="w-full h-56 sm:h-72 lg:h-96 rounded-lg object-cover" src="{{ asset('storage/img/' . $event->image) }}" alt="">
                </div>
                <div class="flex flex-col lg:flex-row justify-between w-full sm:w-3/4 lg:w-[90vw] gap-4 p-2 sm:p-4 lg:p-6">
                    <div class="bg-white w-full lg:w-3/5 p-3 rounded-lg shadow-md">
                        <h3>Descriptions :</h3>
                        <p>{{ $event->descriptions }}</p>
                    </div>
                    <div class="bg-white w-full lg:w-2/5 p-3 rounded-lg shadow-md flex flex-col gap-2">
                        <h3><b>Name</b> : {{ $event->name }}</h3>
                        <h3><b>Date</b> : <span class="text-xl">{{ $event->dateStart }} | {{ $event->dateEnd }}</span></h3>
                        <h3><b>Time</b> : <span class="text-xl">{{ $event->timeStart }} | {{ $event->timeEnd }}</span></h3>
                        <h3><b>Location</b> : {{ $event->locations }}</h3>
                        <div class="flex justify-between items-center w-full">
                            <div class="flex gap-2">
                                <h4><b>Price</b> : {{ $event->price }}$</h4>
                                <h5 class="line-through text-red-600">{{ $event->old_price }}$</h5>
                            </div>
                            <div class="text-l w-1/3 text-white bg-[#755bf8] py-2 rounded-xl shadow-lg">
                                <form action="{{ route('event.pay', $event->id) }}" method="post">
                                    @csrf
                                    <input type="hidden" name="eventId" value="{{ $event->id }}">
                                    <input type="hidden" name="name" value="{{ $event->name }}">
                                    <input type="hidden" name="price" value="{{ $event->price }}">
                                    <input type="hidden" name="description" value="{{ $event->description }}">
                                    <button class="text-center w-full text-white text-l">Buy event</button>
                                </form>
                            </div>
                        </div>
                        <div class="mt-4">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3323.40331310918!2d-7.602716774303016!3d33.59483852333261!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda7cd6ff98b256d%3A0x3c47bcc754e884ff!2sGrand%20Mogador%20City%20center%20-%20Luxury%20Hotel!5e0!3m2!1sen!2sma!4v1716476561480!5m2!1sen!2sma"
                                width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        
        
    </section>
@endsection
