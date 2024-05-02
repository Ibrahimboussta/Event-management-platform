@extends('layouts.index')
@section('content')
    <section>


        <div>
            <div class="image1 flex justify-center items-center flex-col gap-y-3">
                <h1 class="text-2xl font-bold text-center text-white z-40 lg:text-5xl text-center text-white"
                    id="reveal-text">We Help Make Great Events Happen</h1>
                <form action="{{ route('search') }}" method="get" class="w-[80%] md:w-[40%]">
                    <!-- Set the form width to full on phones and 40% on laptops -->
                    <div class="flex items-center justify-around w-full gap-2 md:gap-x-5">
                        <!-- Remove the gap between items on phones -->
                        <input name="search" type="text" placeholder="Search for an event"
                            class="w-full text-black opacity-80 rounded-md" value="{{ isset($search) ? $search : '' }}">
                        <!-- Set input width to full on both phones and laptops -->
                        <button
                            class=" px-4 py-1 text-lg rounded-md bg-blue-600 text-white w-1/2 z-40 md:w-auto">Search</button>
                        <!-- Set button width to half on phones and auto width on laptops -->
                    </div>
                </form>


                @forelse ($events as $singleEvent)
                @empty
                @endforelse


                {{-- @foreach ($events as $event)
                    @if ($event->count() > 0)
                        <ul>
                            @foreach ($event as $singleEvent)
                                <li>{{ $singleEvent->name }}</li>
                            @endforeach
                        </ul>
                    @else
                        <p>No events found for your search.</p>
                    @endif
                @endforeach --}}

            </div>
        </div>
    </section>


    <section class="py-7">

        <div>
            <h1 class="text-center text-black font-extrabold text-4xl">Event For You</h1>
        </div>

        <div class="flex flex-wrap justify-center gap-4 mt-3 px-4 mx-3">



            @foreach ($events->take(8) as $event)
                <div class="card bg-white border-none hover:scale-105 transition-all hover:shadow-xl" style="width: 19rem;">
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
                                <input type="hidden" name="eventId" value="{{ $event->id }}">
                                <!-- Use eventId instead of event_id -->
                                <input type="hidden" name="name" value="{{ $event->name }}">
                                <input type="hidden" name="price" value="{{ $event->price }}">
                                <input type="hidden" name="description" value="{{ $event->description }}">
                                <button class="btn btn-primary">Buy event</button>
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
            <a href="{{ route('events.index') }}" class="border border-white px-4 py-1 text-lg rounded-md bg-blue-600 text-white no-underline">View All Events</a>
        </div>
    </section>


    <section class="py-7">
        <div class="bg-blue-200 h-[30%] flex flex-wrap justify-center items-center flex-col gap-y-2 p-5">
            <h1 class="text-2xl font-bold text-center lg:text-4xl text-center">Get More With No Surprises</h1>
            <p class="text-l font-semibold mb-2">Easy-to-use platform for hosting successful events</p>
            <div class="flex flex-wrap gap-3">
                <button><a href="{{ route('register') }}" class="border border-white px-4 py-1 text-lg rounded-md bg-blue-600 text-white no-underline">Create
                        Event</a></button>
                <button><a href="{{ route('events.index') }}" class="border border-white px-4 py-1 text-lg rounded-md bg-blue-600 text-white no-underline">Find
                        Event</a></button>
            </div>
        </div>
    </section>


    <section class="py-7">
        <div class="flex flex-wrap justify-center items-center flex-col gap-y-2 lg:p-5 sm:p-4">
            <h1 class="text-2xl font-bold text-center lg:text-4xl text-center">Our Team</h1>
            <p class="text-l font-semibold mb-2">Meet our dedicated event teams - turning your vision into reality.</p>
            <div class="flex flex-wrap justify-center gap-3 lg:p-5 sm:p-2">
                <div class="w-full md:w-[40%] lg:w-[20%]">
                    <img src="{{ asset('img/photo-1.avif') }}" alt="" class="w-full h-[50vh] object-cover rounded-md shadow-lg grayscale">
                </div>
                
                <div class="w-full md:w-[40%] lg:w-[20%]">
                    <img src="{{ asset('img/photo-4.avif') }}" alt="" class="w-full h-[50vh] object-cover rounded-md shadow-lg grayscale">
                </div>
            
                <div class="w-full md:w-[40%] lg:w-[20%]">
                    <img src="{{ asset('img/photo-3.jpg') }}" alt="" class="w-full h-[50vh] object-cover rounded-md shadow-lg grayscale">
                </div>
                <div class="w-full md:w-[40%] lg:w-[20%]">
                    <img src="{{ asset('img/photo-5.avif') }}" alt="" class="w-full h-[50vh] object-cover rounded-md shadow-lg grayscale">
                </div>
                <div class="w-full md:w-[40%] lg:w-[20%]">
                    <img src="{{ asset('img/photo-8.avif') }}" alt="" class="w-full h-[50vh] object-cover rounded-md shadow-lg grayscale">
                </div>
                <div class="w-full md:w-[40%] lg:w-[20%]">
                    <img src="{{ asset('img/photo-6.avif') }}" alt="" class="w-full h-[50vh] object-cover rounded-md shadow-lg grayscale">
                </div>
            
                <div class="w-full md:w-[40%] lg:w-[20%]">
                    <img src="{{ asset('img/photo-9.avif') }}" alt="" class="w-full h-[50vh] object-cover rounded-md shadow-lg grayscale">
                </div>
                <div class="w-full md:w-[40%] lg:w-[20%]">
                    <img src="{{ asset('img/photo-7.avif') }}" alt="" class="w-full h-[50vh] object-cover rounded-md shadow-lg grayscale">
                </div>
            </div>
            
        </div>
    </section>



    <!-- ====== FAQ Section Start -->
    <section  x-data="{
        openFaq1: false,
        openFaq2: false,
        openFaq3: false,
        openFaq4: false,
        openFaq5: false,
        openFaq6: false
    }"
        class="relative z-20 overflow-hidden bg-white dark:bg-dark pt-20 pb-12 lg:pt-[120px] lg:pb-[90px]">
        <div class="container mx-auto">
            <div class="flex flex-wrap -mx-4">
                <div class="w-full px-4">
                    <div class="mx-auto mb-[60px] max-w-[520px] text-center lg:mb-20">
                        <span class="block mb-2 text-lg font-semibold text-primary">
                            FAQ
                        </span>
                        <h2 class="text-dark dark:text-white mb-4 text-3xl font-bold sm:text-[40px]/[48px]">
                            Any Questions? Look Here
                        </h2>
                        <p class="text-base text-body-color  dark:text-dark-6">
                            Discover answers on event planning, tickets, features, and more. Perfect for organizers and attendees alike.                        </p>
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap -mx-4">
                <div class="w-full px-4 lg:w-1/2">
                    <div
                        class="w-full p-4 mb-8 bg-white rounded-lg shadow-[0px_20px_95px_0px_rgba(201,203,204,0.30)] dark:shadow-[0px_20px_95px_0px_rgba(0,0,0,0.30)] dark:bg-dark-2 sm:p-8 lg:px-6 xl:px-8">
                        <button class="flex w-full text-left faq-btn" @click="openFaq1 = !openFaq1">
                            <div
                                class="bg-primary/5 dark:bg-white/5 text-primary mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg">
                                <svg :class="openFaq1 && 'rotate-180'" width="22" height="22" viewBox="0 0 22 22"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11 15.675C10.7937 15.675 10.6219 15.6062 10.45 15.4687L2.54374 7.69998C2.23436 7.3906 2.23436 6.90935 2.54374 6.59998C2.85311 6.2906 3.33436 6.2906 3.64374 6.59998L11 13.7844L18.3562 6.53123C18.6656 6.22185 19.1469 6.22185 19.4562 6.53123C19.7656 6.8406 19.7656 7.32185 19.4562 7.63123L11.55 15.4C11.3781 15.5719 11.2062 15.675 11 15.675Z"
                                        fill="currentColor" />
                                </svg>
                            </div>
                            <div class="w-full">
                                <h4 class="mt-1 text-lg font-semibold text-dark dark:text-white">
                                    What is your events platform about?
                                </h4>
                            </div>
                        </button>
                        <div x-show="openFaq1" class="faq-content pl-[62px]">
                            <p class="py-3 text-base leading-relaxed text-body-color dark:text-dark-6">
                                Our events platform is your one-stop destination for all things related to events. Whether you're organizing an event or looking to attend one, we've got you covered.

                            </p>
                        </div>
                    </div>
                    <div
                        class="w-full p-4 mb-8 bg-white rounded-lg shadow-[0px_20px_95px_0px_rgba(201,203,204,0.30)] dark:shadow-[0px_20px_95px_0px_rgba(0,0,0,0.30)] dark:bg-dark-2 sm:p-8 lg:px-6 xl:px-8">
                        <button class="flex w-full text-left faq-btn" @click="openFaq2 = !openFaq2">
                            <div
                                class="bg-primary/5 dark:bg-white/5 text-primary mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg">
                                <svg :class="openFaq2 && 'rotate-180'" width="22" height="22" viewBox="0 0 22 22"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11 15.675C10.7937 15.675 10.6219 15.6062 10.45 15.4687L2.54374 7.69998C2.23436 7.3906 2.23436 6.90935 2.54374 6.59998C2.85311 6.2906 3.33436 6.2906 3.64374 6.59998L11 13.7844L18.3562 6.53123C18.6656 6.22185 19.1469 6.22185 19.4562 6.53123C19.7656 6.8406 19.7656 7.32185 19.4562 7.63123L11.55 15.4C11.3781 15.5719 11.2062 15.675 11 15.675Z"
                                        fill="currentColor" />
                                </svg>
                            </div>
                            <div class="w-full">
                                <h4 class="mt-1 text-lg font-semibold text-dark dark:text-white">
                                    What kind of events can I find on your platform?
                                </h4>
                            </div>
                        </button>
                        <div x-show="openFaq2" class="faq-content pl-[62px]">
                            <p class="py-3 text-base leading-relaxed text-body-color dark:text-dark-6">
                                We host a wide range of events, including conferences, workshops, concerts, festivals, networking events, and more. You'll find events for every interest and occasion.

                            </p>
                        </div>
                    </div>
                    <div
                        class="w-full p-4 mb-8 bg-white rounded-lg shadow-[0px_20px_95px_0px_rgba(201,203,204,0.30)] dark:shadow-[0px_20px_95px_0px_rgba(0,0,0,0.30)] dark:bg-dark-2 sm:p-8 lg:px-6 xl:px-8">
                        <button class="flex w-full text-left faq-btn" @click="openFaq3 = !openFaq3">
                            <div
                                class="bg-primary/5 dark:bg-white/5 text-primary mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg">
                                <svg :class="openFaq3 && 'rotate-180'" width="22" height="22" viewBox="0 0 22 22"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11 15.675C10.7937 15.675 10.6219 15.6062 10.45 15.4687L2.54374 7.69998C2.23436 7.3906 2.23436 6.90935 2.54374 6.59998C2.85311 6.2906 3.33436 6.2906 3.64374 6.59998L11 13.7844L18.3562 6.53123C18.6656 6.22185 19.1469 6.22185 19.4562 6.53123C19.7656 6.8406 19.7656 7.32185 19.4562 7.63123L11.55 15.4C11.3781 15.5719 11.2062 15.675 11 15.675Z"
                                        fill="currentColor" />
                                </svg>
                            </div>
                            <div class="w-full">
                                <h4 class="mt-1 text-lg font-semibold text-dark dark:text-white">
                                    How can I organize an event using your platform?
                                </h4>
                            </div>
                        </button>
                        <div x-show="openFaq3" class="faq-content pl-[62px]">
                            <p class="py-3 text-base leading-relaxed text-body-color dark:text-dark-6">
                                Organizing an event with us is easy! Simply create an account, set up your event details, and start promoting. Our platform provides tools for managing registrations, ticket sales, and more.

                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-1/2">
                    <div
                        class="w-full p-4 mb-8 bg-white rounded-lg shadow-[0px_20px_95px_0px_rgba(201,203,204,0.30)] dark:shadow-[0px_20px_95px_0px_rgba(0,0,0,0.30)] dark:bg-dark-2 sm:p-8 lg:px-6 xl:px-8">
                        <button class="flex w-full text-left faq-btn" @click="openFaq4 = !openFaq4">
                            <div
                                class="bg-primary/5 dark:bg-white/5 text-primary mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg">
                                <svg :class="openFaq4 && 'rotate-180'" width="22" height="22" viewBox="0 0 22 22"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11 15.675C10.7937 15.675 10.6219 15.6062 10.45 15.4687L2.54374 7.69998C2.23436 7.3906 2.23436 6.90935 2.54374 6.59998C2.85311 6.2906 3.33436 6.2906 3.64374 6.59998L11 13.7844L18.3562 6.53123C18.6656 6.22185 19.1469 6.22185 19.4562 6.53123C19.7656 6.8406 19.7656 7.32185 19.4562 7.63123L11.55 15.4C11.3781 15.5719 11.2062 15.675 11 15.675Z"
                                        fill="currentColor" />
                                </svg>
                            </div>
                            <div class="w-full">
                                <h4 class="mt-1 text-lg font-semibold text-dark dark:text-white">
                                    Is it free to use your platform?
                                </h4>
                            </div>
                        </button>
                        <div x-show="openFaq4" class="faq-content pl-[62px]">
                            <p class="py-3 text-base leading-relaxed text-body-color dark:text-dark-6">
                                It's free to sign up and browse events on our platform. However, some events may require tickets or registration fees. Check the event details for more information.

                            </p>
                        </div>
                    </div>
                    <div
                        class="w-full p-4 mb-8 bg-white rounded-lg shadow-[0px_20px_95px_0px_rgba(201,203,204,0.30)] dark:shadow-[0px_20px_95px_0px_rgba(0,0,0,0.30)] dark:bg-dark-2 sm:p-8 lg:px-6 xl:px-8">
                        <button class="flex w-full text-left faq-btn" @click="openFaq5 = !openFaq5">
                            <div
                                class="bg-primary/5 dark:bg-white/5 text-primary mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg">
                                <svg :class="openFaq5 && 'rotate-180'" width="22" height="22" viewBox="0 0 22 22"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11 15.675C10.7937 15.675 10.6219 15.6062 10.45 15.4687L2.54374 7.69998C2.23436 7.3906 2.23436 6.90935 2.54374 6.59998C2.85311 6.2906 3.33436 6.2906 3.64374 6.59998L11 13.7844L18.3562 6.53123C18.6656 6.22185 19.1469 6.22185 19.4562 6.53123C19.7656 6.8406 19.7656 7.32185 19.4562 7.63123L11.55 15.4C11.3781 15.5719 11.2062 15.675 11 15.675Z"
                                        fill="currentColor" />
                                </svg>
                            </div>
                            <div class="w-full">
                                <h4 class="mt-1 text-lg font-semibold text-dark dark:text-white">
                                    How can I buy tickets for an event?
                                </h4>
                            </div>
                        </button>
                        <div x-show="openFaq5" class="faq-content pl-[62px]">
                            <p class="py-3 text-base leading-relaxed text-body-color dark:text-dark-6">
                                You can purchase tickets directly through our platform. Just find the event you're interested in, select your tickets, and proceed to checkout.

                            </p>
                        </div>
                    </div>
                    <div
                        class="w-full p-4 mb-8 bg-white rounded-lg shadow-[0px_20px_95px_0px_rgba(201,203,204,0.30)] dark:shadow-[0px_20px_95px_0px_rgba(0,0,0,0.30)] dark:bg-dark-2 sm:p-8 lg:px-6 xl:px-8">
                        <button class="flex w-full text-left faq-btn" @click="openFaq6 = !openFaq6">
                            <div
                                class="bg-primary/5 dark:bg-white/5 text-primary mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg">
                                <svg :class="openFaq6 && 'rotate-180'" width="22" height="22" viewBox="0 0 22 22"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11 15.675C10.7937 15.675 10.6219 15.6062 10.45 15.4687L2.54374 7.69998C2.23436 7.3906 2.23436 6.90935 2.54374 6.59998C2.85311 6.2906 3.33436 6.2906 3.64374 6.59998L11 13.7844L18.3562 6.53123C18.6656 6.22185 19.1469 6.22185 19.4562 6.53123C19.7656 6.8406 19.7656 7.32185 19.4562 7.63123L11.55 15.4C11.3781 15.5719 11.2062 15.675 11 15.675Z"
                                        fill="currentColor" />
                                </svg>
                            </div>
                            <div class="w-full">
                                <h4 class="mt-1 text-lg font-semibold text-dark dark:text-white">
                                    Do you offer support for event organizers?
                                </h4>
                            </div>
                        </button>
                        <div x-show="openFaq6" class="faq-content pl-[62px]">
                            <p class="py-3 text-base leading-relaxed text-body-color dark:text-dark-6">
                                Yes, we provide support for event organizers. If you have any questions or need assistance, our team is here to help.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="absolute bottom-0 right-0 z-[-1]">
            <svg width="1440" height="886" viewBox="0 0 1440 886" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path opacity="0.5"
                    d="M193.307 -273.321L1480.87 1014.24L1121.85 1373.26C1121.85 1373.26 731.745 983.231 478.513 729.927C225.976 477.317 -165.714 85.6993 -165.714 85.6993L193.307 -273.321Z"
                    fill="url(#paint0_linear)" />
                <defs>
                    <linearGradient id="paint0_linear" x1="1308.65" y1="1142.58" x2="602.827" y2="-418.681"
                        gradientUnits="userSpaceOnUse">
                        <stop stop-color="#3056D3" stop-opacity="0.36" />
                        <stop offset="1" stop-color="#F5F2FD" stop-opacity="0" />
                        <stop offset="1" stop-color="#F5F2FD" stop-opacity="0.096144" />
                    </linearGradient>
                </defs>
            </svg>
        </div>
    </section>
    <!-- ====== FAQ Section End -->


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
