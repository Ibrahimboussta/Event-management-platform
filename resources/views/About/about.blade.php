@extends('layouts.index')
@section('content')
    <section class="">
        <div class="py-5">

            <div class="flex flex-col items-center justify-center gap-4 lg:flex-row">
                <div class="py-5 mt-4 lg:mt-0">
                    <div class="w-full md:w-full p-3">
                        <img class="w-full md:w-full lg:w-[45vw] rounded-md hover:scale-105 duration-300" src="{{ asset('img/about.jpg') }}" alt="">
                    </div>
                </div>
            
                <div class="w-full p-3 lg:w-[40vw] flex flex-col gap-3 mt-4">
                    <h1 class="font-semibold text-center lg:text-left">About us</h1>
                    <p class="text-lg">
                        Welcome to our platform for events! We're your go-to destination for everything related to events, from planning to attending and everything in between. Whether you're organizing a conference, a concert, a festival, or a simple get-together, we've got you covered.
                        Our platform offers a seamless experience for event organizers, providing tools and resources to plan, promote, and manage events efficiently. From creating event pages and sending invitations to managing registrations and ticket sales, we make the process smooth and hassle-free.
                        For attendees, we offer a comprehensive platform to discover, RSVP, and attend events of all kinds. Whether you're looking for local happenings or interested in something more specific, our platform makes it easy to find and join events that match your interests.
                        With our user-friendly interface and powerful features, we aim to connect people with the events that matter to them most. Join us and be part of a vibrant community of event enthusiasts!
                    </p>
                </div>
            </div>
            
            

    </section>
    </div>
@endsection
