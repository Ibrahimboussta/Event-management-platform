@extends('layouts.index')
@section('content')
    <section class="">
        <div class="py-5">
            <h1 class="text-center py-4 mt-5">Contact us</h1>
            <div class="w-full md:w-full p-3">
                <iframe class="w-full px-10"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3323.058438495082!2d-7.536426624302653!3d33.6037881733292!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda7cdb2f812837f%3A0xbbcfc74fbc11b2d9!2sLionsGeek!5e0!3m2!1sen!2sma!4v1714006301758!5m2!1sen!2sma"
                    height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="py-20">
                <form method="POST" action="{{ route('contact.store') }}">
                    @csrf

                    <div class="flex flex-wrap items-center justify-center gap-4 px-5 py-4">
                        <div class="w-full md:w-[40%]">
                            <x-input-label for="first_name" :value="__('First name')" />
                            <x-text-input placeholder="First name" id="first_name" class="block mt-1 w-full" type="text"
                                name="first_name" :value="old('first_name')" required autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
                        </div>

                        <div class="w-full md:w-[40%]">
                            <x-input-label for="last_name" :value="__('Last name')" />
                            <x-text-input placeholder="Last name" id="last_name" class="block mt-1 w-full" type="text"
                                name="last_name" :value="old('last_name')" required autocomplete="username" />
                            <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
                        </div>
                    </div>

                    <div class="flex flex-wrap items-center justify-center gap-4 px-5 py-2">
                        <div class="w-full md:w-[40%]">
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input placeholder="Email" id="email" class="block mt-1 w-full" type="email"
                                name="email" :value="old('email')" required autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <div class="w-full md:w-[40%]">
                            <x-input-label for="phone" :value="__('Phone')" />
                            <x-text-input placeholder="Phone" id="phone" class="block mt-1 w-full" type="number"
                                name="phone" :value="old('phone')" required autocomplete="username" />
                            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                        </div>
                    </div>

                    <div class="flex flex-wrap justify-start items-center flex-col gap-2 px-5">
                        <x-input-label for="message" :value="__('Message')" class="" />
                        <textarea placeholder="Message" class="border border-gray-300 shadow-sm rounded-md lg:w-[60vw] w-full" name="message" id=""
                            cols="135" rows="10"></textarea>
                    </div>


    </section>
@endsection
