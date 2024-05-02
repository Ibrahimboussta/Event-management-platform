<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=é, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.js'></script>

</head>

<body>
    {{-- <header class="flex justify-between bg-white fixed w-full z-50 py-4 px-10 gap-2 lg:grid-cols-3">

        <div>
            <a class="no-underline rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                href="">EventBrite</a>
        </div>

        <div>
            <a class=" no-underline rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                href="">mmm</a>
            <a class="no-underline rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                href="">mmm</a>
            <a class=" no-underline rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                href="">mmm</a>
            <a class=" no-underline rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                href="">mmm</a>
        </div>


        @if (Route::has('login'))
            <nav class="">

                @auth
                    <a href="{{ url('/dashboard') }}"
                        class=" no-underline rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}"
                        class=" no-underline rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                        Log in
                    </a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class=" no-underline rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                            Register
                        </a>
                    @endif
                @endauth
            </nav>
        @endif
    </header> --}}




    <nav class="lg:w-full fixed z-50 border-b-2 lg:p-0 p-[20px] bg-white  md:px-5 w-full">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto">
            <a href="{{ route('welcome') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
                <span
                    class="self-center text-2xl font-semibold whitespace-nowrap text-[#000] no-underline dark:text-white">EventBrite</span>
            </a>
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <div class="flex gap-3">

                    <a href="{{ route('ticket') }}" class="text-black ">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>

                    <button type="button"
                        class="text-white bg-blue-600 hidden xl:block hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <a href="{{ route('login') }}" class="no-underline text-l text-white">Login</a>
                    </button>

                    <button type="button"
                        class="text-white bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <a href="{{ route('register') }}" class="no-underline text-l text-white">Register</a>
                    </button>
                </div>

                <button data-collapse-toggle="navbar-cta" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-cta" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden xl:ml-[100px] ml-0 w-full md:flex md:w-auto md:order-1" id="navbar-cta">
                <ul
                    class="flex flex-col font-medium  md:p-0 mt-4 rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 border-none  dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">

                    <li>
                        <a href="{{ route('about.about') }}"
                            class="block py-2 px-3 md:p-0  no-underline text-xl text-[#000] rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
                    </li>
                    <li>
                        <a href="{{ route('events.index') }}"
                            class="block py-2 px-3 md:p-0 no-underline text-xl text-[#000]  rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Events</a>
                    </li>
                    <li>
                        <a href="{{ route('contact.index') }}"
                            class="block py-2 px-3 md:p-0  no-underline text-xl text-[#000] rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    {{-- <header>
        <div class="flex justify-around items-center w-full fixed z-50 border-b-2 bg-opacity-50 backdrop-blur py-3">
            <h3> <a href="" class="no-underline text-white font-semibold">EvenBrite</a></h3>

            <div class="flex justify-around w-[20%]">
                <a href="" class="no-underline text-white text-xl">About</a>
                <a href="{{ route('events.index') }}" class="no-underline text-white text-xl">Events</a>
                <a href="" class="no-underline text-white text-xl">Contact</a>
            </div>

            <div class="flex gap-5">
                <a href="{{ route('login') }}" class="no-underline text-white text-xl ">Login</a>
                <a href="{{ route('register') }}" class="no-underline text-white text-xl ">register</a>
            </div>
        </div>
    </header> --}}
    @yield('content')








    <!-- component -->
    <!-- This is an example component -->
    <div class=" bg-white">
        <div class="max-w-2xl mx-auto text-black py-10">
            <div class="text-center">
                <h3 class="text-3xl mb-3"> Download our Eventbrite app </h3>
                <p> Stay fit. All day, every day. </p>
                <div class="flex justify-center my-10">
                    <div class="flex items-center border border-black w-auto rounded-lg px-4 py-2 w-52 mx-2">
                        <img src="https://cdn-icons-png.flaticon.com/512/888/888857.png" class="w-7 md:w-8">
                        <div class="text-left ml-3">
                            <p class='text-xs text-black'>Download on </p>
                            <p class="text-sm md:text-base"> Google Play Store </p>
                        </div>
                    </div>
                    <div class="flex items-center border border-black w-auto rounded-lg px-4 py-2 w-44 mx-2">
                        <img src="https://cdn-icons-png.flaticon.com/512/888/888841.png" class="w-7 md:w-8">
                        <div class="text-left ml-3">
                            <p class='text-xs text-black'>Download on </p>
                            <p class="text-sm md:text-base"> Apple Store </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-20 flex flex-col md:flex-row md:justify-between items-center text-sm text-gray-400">
                <p class="order-2 text-black md:order-1 mt-8 md:mt-0"> &copy; Beautiful Footer, 2024. </p>
                <div class="order-1 md:order-2">
                    <span class="px-2 text-black">About us</span>
                    <span class="px-2 text-black border-l">Contact us</span>
                    <span class="px-2 text-black border-l">Privacy Policy</span>
                </div>
            </div>
        </div>
    </div>


</body>

</html>
