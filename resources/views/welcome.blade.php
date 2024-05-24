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
                            class=" px-4 py-1 text-lg rounded-md bg-[#755bf8] text-white w-1/2 z-40 md:w-auto">Search</button>
                        <!-- Set button width to half on phones and auto width on laptops -->
                    </div>
                </form>


                @forelse ($events as $singleEvent)
                @empty
                @endforelse




            </div>
        </div>
    </section>


    <section class="py-7">

        <div>
            <h1 class="text-center text-black font-extrabold text-4xl">Event For You</h1>
        </div>

        <div class="flex flex-wrap justify-center gap-4 mt-3 px-4 mx-3">
            @foreach ($events as $event)
            <div class="block rounded-lg bg-white hover:shadow-lg w-full md:w-[45%] lg:w-[30%] xl:w-[20%] shadow-secondary-1 dark:bg-surface-dark">
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
                        <button class="inline-block rounded bg-[#1644ba] px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out hover:bg-primary-accent-300 hover:shadow-primary-2 focus:bg-primary-accent-300 focus:shadow-primary-2 focus:outline-none focus:ring-0 active:bg-primary-600 active:shadow-primary-2 dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong" data-twe-ripple-init data-twe-ripple-color="light">
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


        {{-- <div class="flex justify-center mt-4">
            {{ $events->links() }} <!-- Pagination links -->
        </div> --}}

        <div class="flex justify-center mt-4">
            <a href="{{ route('events.index') }}"
                class="border  px-4 py-1 text-lg rounded-md bg-[#755bf8] text-white no-underline">View All Events</a>
        </div>
    </section>


    <section class="py-7">
        <div class="bg-blue-200 h-[30%] flex flex-wrap justify-center items-center flex-col gap-y-2 p-5">
            <h1 class="text-2xl font-bold text-center lg:text-4xl text-center">Get More With No Surprises</h1>
            <p class="text-l font-semibold mb-2">Easy-to-use platform for hosting successful events</p>
            <div class="flex flex-wrap gap-3">
                <button><a href="{{ route('register') }}"
                        class=" px-4 py-1 text-lg rounded-md bg-[#755bf8] text-white no-underline">Create
                        Event</a></button>
                <button><a href="{{ route('events.index') }}"
                        class=" px-4 py-1 text-lg rounded-md bg-[#755bf8] text-white no-underline">Find
                        Event</a></button>
            </div>
        </div>
    </section>


    <section class="py-7" id="team">
        <div class="flex flex-wrap justify-center items-center flex-col p-5 gap-y-2 lg:p-5 sm:p-4">
            <h1 class="text-2xl font-bold text-center lg:text-4xl text-center">Our Team</h1>
            <p class="sm:text-l lg:text-xl font-semibold mb-2 text-center">Meet our dedicated event teams - turning your
                vision into reality.</p>
            <div class="flex flex-wrap justify-center gap-3 lg:p-5 sm:p-2">
                <div class="w-full md:w-[40%] lg:w-[20%]">
                    <img src="{{ asset('img/photo-1.avif') }}" alt=""
                        class="w-full h-[50vh] object-cover rounded-md shadow-lg grayscale">
                </div>

                <div class="w-full md:w-[40%] lg:w-[20%]">
                    <img src="{{ asset('img/photo-4.avif') }}" alt=""
                        class="w-full h-[50vh] object-cover rounded-md shadow-lg grayscale">
                </div>

                <div class="w-full md:w-[40%] lg:w-[20%]">
                    <img src="{{ asset('img/photo-3.jpg') }}" alt=""
                        class="w-full h-[50vh] object-cover rounded-md shadow-lg grayscale">
                </div>
                <div class="w-full md:w-[40%] lg:w-[20%]">
                    <img src="{{ asset('img/photo-5.avif') }}" alt=""
                        class="w-full h-[50vh] object-cover rounded-md shadow-lg grayscale">
                </div>




            </div>

        </div>
    </section>



    <!-- ====== FAQ Section Start -->
    <section x-data="{
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
                            Discover answers on event planning, tickets, features, and more. Perfect for organizers and
                            attendees alike. </p>
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
                                Our events platform is your one-stop destination for all things related to events. Whether
                                you're organizing an event or looking to attend one, we've got you covered.

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
                                We host a wide range of events, including conferences, workshops, concerts, festivals,
                                networking events, and more. You'll find events for every interest and occasion.

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
                                Organizing an event with us is easy! Simply create an account, set up your event details,
                                and start promoting. Our platform provides tools for managing registrations, ticket sales,
                                and more.

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
                                It's free to sign up and browse events on our platform. However, some events may require
                                tickets or registration fees. Check the event details for more information.

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
                                You can purchase tickets directly through our platform. Just find the event you're
                                interested in, select your tickets, and proceed to checkout.

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
                                Yes, we provide support for event organizers. If you have any questions or need assistance,
                                our team is here to help.
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


    <section class="p-5">
        <div class="flex justify-center text-center">
            <h1 class="text-sm font-bold  lg:text-xl lg:w-[40%] text-center">Some big companies supports Wemet event
                services</h1>


        </div>
        <div class="flex justify-center">
            <div class="flex items-center ml-8 w-[50vw]">
                <div class="w-[20%]">
                    <img class="w-[60%]" src="{{ asset('img/app1.png') }}" alt="">
                </div>

                <div class="w-[20%]">
                    <img class="w-[60%]" src="{{ asset('img/Zoom-Logo.png') }}" alt="">
                </div>

                <div class="w-[20%]">
                    <img class="w-[60%]" src="{{ asset('img/Slack_Technologies_Logo.svg.png') }}" alt="">
                </div>
                <div class="w-[20%]">
                    <img class="w-[60%]" src="{{ asset('img/skype.png') }}" alt="">
                </div>

                <div class="w-[20%]">
                    <img class="w-[60%]" src="{{ asset('img/ding.png') }}" alt="">
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
