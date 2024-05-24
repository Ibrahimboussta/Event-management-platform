<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=é, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.js'></script>
    {{-- <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css"> --}}
    <link rel="stylesheet"
        href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">


</head>

<body>

    <header class=' shadow-md py-4 px-4 sm:px-10 bg-white font-sans min-h-[70px] tracking-wide fixed w-full z-50'>
        <div class='flex flex-wrap items-center justify-around gap-4 w-full'>

            <a href="{{ route('welcome') }}" class="no-underline text-black ">
                <h3
                    class="bg-gradient-to-r from-purple-700 via-blue-500 via-blue-600 to-purple-900 inline-block text-transparent bg-clip-text">
                    EventGeeks</h3>
            </a>
            <div id="collapseMenu"
                class='max-lg:hidden lg:!block max-lg:before:fixed max-lg:before:bg-black max-lg:before:opacity-50 max-lg:before:inset-0 max-lg:before:z-50'>
                <button id="toggleClose" class='lg:hidden fixed top-2 right-4 z-[100] rounded-full bg-white p-3'>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 fill-black" viewBox="0 0 320.591 320.591">
                        <path
                            d="M30.391 318.583a30.37 30.37 0 0 1-21.56-7.288c-11.774-11.844-11.774-30.973 0-42.817L266.643 10.665c12.246-11.459 31.462-10.822 42.921 1.424 10.362 11.074 10.966 28.095 1.414 39.875L51.647 311.295a30.366 30.366 0 0 1-21.256 7.288z"
                            data-original="#000000"></path>
                        <path
                            d="M287.9 318.583a30.37 30.37 0 0 1-21.257-8.806L8.83 51.963C-2.078 39.225-.595 20.055 12.143 9.146c11.369-9.736 28.136-9.736 39.504 0l259.331 257.813c12.243 11.462 12.876 30.679 1.414 42.922-.456.487-.927.958-1.414 1.414a30.368 30.368 0 0 1-23.078 7.288z"
                            data-original="#000000"></path>
                    </svg>
                </button>

                <ul
                    class='lg:flex gap-x-5 max-lg:space-y-3 max-lg:fixed max-lg:bg-white max-lg:w-1/2 max-lg:min-w-[300px] max-lg:top-0 max-lg:left-0 max-lg:p-6 max-lg:h-full max-lg:shadow-md max-lg:overflow-auto z-50  '>
                    <li class='mb-6 hidden max-lg:block'>
                        <a href="" class="no-underline text-black ">
                            <h3
                                class="bg-gradient-to-r from-purple-700 via-blue-500 via-blue-600 to-purple-900 inline-block text-transparent bg-clip-text">
                                EventGeeks</h3>
                        </a>

                    </li>
                    @auth
                        <li class='max-lg:border-b max-lg:py-3 px-3'><a href='{{ route('about.about') }}'
                                class='hover:text-[#007bff] text-gray-600 font-bold block text-base no-underline'>About</a>
                        </li>
                        <li class='max-lg:border-b max-lg:py-3 px-3 '>
                            <a href="{{ route('events.index') }}"
                                class="hover:text-[#007bff] text-gray-600 font-bold block text-base no-underline">Events</a>
                        </li>

                         <li class='max-lg:border-b max-lg:py-3 px-3 '>
                            <a href="{{ route('oragnisateur.index') }}"
                                class="hover:text-[#007bff] text-gray-600 font-bold block text-base no-underline">Create</a>
                        </li>
              

                        <li class='max-lg:border-b max-lg:py-3 px-3'><a href='{{ route('contact.index') }}'
                                class='hover:text-[#007bff] text-gray-600 font-bold block text-base no-underline'>Contact</a>
                        </li>
                    @endauth

                    @guest
                        <li class='max-lg:border-b max-lg:py-3 px-3'><a href='#team'
                                class='hover:text-[#007bff] text-gray-600 font-bold block text-base no-underline'>Team</a>
                        </li>

                        <li class='max-lg:border-b max-lg:py-3 px-3'><a href='{{ route('about.about') }}'
                                class='hover:text-[#007bff] text-gray-600 font-bold block text-base no-underline'>About</a>
                        </li>
                        <li class='max-lg:border-b max-lg:py-3 px-3 '>
                            <a href="{{ route('events.index') }}"
                                class="hover:text-[#007bff] text-gray-600 font-bold block text-base no-underline">Events</a>
                        </li>
                        <li class='max-lg:border-b max-lg:py-3 px-3'><a href='{{ route('contact.index') }}'
                                class='hover:text-[#007bff] text-gray-600 font-bold block text-base no-underline'>Contact</a>
                        </li>
                    @endguest
                </ul>
            </div>

            <div class='flex items-center max-lg:ml-auto space-x-5'>

                @guest

                    <button>
                        <a href="{{ route('register') }}"
                            class=" px-3 py-2 no-underline text-black fw-semibold rounded-lg text-base hover:bg-[#755bf8]">Register</a>
                    </button>
                @endguest

                @auth
                    <a href="{{ route('profile.destroy') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 24 24"
                            class="cursor-pointer hover:fill-[#007bff] inline">
                            <circle cx="10" cy="7" r="6" data-original="#000000" />
                            <path
                                d="M14 15H6a5 5 0 0 0-5 5 3 3 0 0 0 3 3h12a3 3 0 0 0 3-3 5 5 0 0 0-5-5zm8-4h-2.59l.3-.29a1 1 0 0 0-1.42-1.42l-2 2a1 1 0 0 0 0 1.42l2 2a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.42l-.3-.29H22a1 1 0 0 0 0-2z"
                                data-original="#000000" />
                        </svg>
                    </a>

                    <a href="{{ route('ticket') }}">
                        <span class="relative">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px"
                                class="cursor-pointer hover:fill-[#007bff] inline" viewBox="0 0 512 512">
                                <path
                                    d="M164.96 300.004h.024c.02 0 .04-.004.059-.004H437a15.003 15.003 0 0 0 14.422-10.879l60-210a15.003 15.003 0 0 0-2.445-13.152A15.006 15.006 0 0 0 497 60H130.367l-10.722-48.254A15.003 15.003 0 0 0 105 0H15C6.715 0 0 6.715 0 15s6.715 15 15 15h77.969c1.898 8.55 51.312 230.918 54.156 243.71C131.184 280.64 120 296.536 120 315c0 24.812 20.188 45 45 45h272c8.285 0 15-6.715 15-15s-6.715-15-15-15H165c-8.27 0-15-6.73-15-15 0-8.258 6.707-14.977 14.96-14.996zM477.114 90l-51.43 180H177.032l-40-180zM150 405c0 24.813 20.188 45 45 45s45-20.188 45-45-20.188-45-45-45-45 20.188-45 45zm45-15c8.27 0 15 6.73 15 15s-6.73 15-15 15-15-6.73-15-15 6.73-15 15-15zm167 15c0 24.813 20.188 45 45 45s45-20.188 45-45-20.188-45-45-45-45 20.188-45 45zm45-15c8.27 0 15 6.73 15 15s-6.73 15-15 15-15-6.73-15-15 6.73-15 15-15zm0 0"
                                    data-original="#000000"></path>

                            </svg>
                            
                    </a>
                @endauth





                <button id="toggleOpen" class='lg:hidden !ml-7'>
                    <svg class="w-7 h-7" fill="#000" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>

        </div>
    </header>



    @yield('content')


    <footer class="relative bg-gray-200 pt-8 pb-6">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap text-left lg:text-left">
                <div class="w-full lg:w-6/12 px-4">
                    <h4 class="text-3xl fonat-semibold text-blueGray-700">Let's keep in touch!</h4>
                    <h5 class="text-lg mt-0 mb-2 text-blueGray-600">
                        Find us on any of these platforms, we respond 1-2 business days.
                    </h5>

                    <form class="w-auto max-w-sm">
                        <div class="flex items-center border-b border-black py-2">
                            <input
                                class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none"
                                type="text" placeholder="Jane Doe" aria-label="Full name">
                            <button
                                class="flex-shrink-0 bg-black border-black hover:border-teal-700 text-sm border-4 text-white px-2 rounded"
                                type="button">
                                Send
                            </button>

                        </div>
                    </form>
                    <div class="mt-6 lg:mb-0 mb-6">
                        <button
                            class="bg-white text-lightBlue-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                            type="button">
                            <i class="fab fa-twitter"></i></button><button
                            class="bg-white text-lightBlue-600 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                            type="button">
                            <i class="fab fa-facebook-square"></i></button><button
                            class="bg-white text-pink-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                            type="button">
                            <i class="fab fa-dribbble"></i></button><button
                            class="bg-white text-blueGray-800 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                            type="button">
                            <i class="fab fa-github"></i>
                        </button>
                    </div>
                </div>
                <div class="w-full lg:w-6/12 px-4">
                    <div class="flex flex-wrap items-top mb-6">
                        <div class="w-full lg:w-4/12 px-4 ml-auto">
                            <span class="block uppercase text-blueGray-500 text-sm font-semibold mb-2">Useful
                                Links</span>
                            <ul class="list-unstyled">
                                <li>
                                    <a class="text-blueGray-600 text-black hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                                        href="{{ route('about.about') }}">About
                                        Us</a>
                                </li>
                                <li>
                                    <a class="text-blueGray-600 text-black hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                                        href="/events">Events</a>
                                </li>
                                <li>
                                    <a class="text-blueGray-600 text-black hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                                        href="{{ route('contact.index') }}">Contact</a>
                                </li>

                            </ul>
                        </div>
                        <div class="w-full lg:w-4/12 px-4">
                            <span class="block uppercase text-blueGray-500 text-sm font-semibold mb-2">Contact
                            </span>
                            <ul class="list-unstyled">
                                <li>
                                    <a class="text-blueGray-600  text-black hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                                        href="https://github.com/creativetimofficial/notus-js/blob/main/LICENSE.md?ref=njs-profile">
                                        <span>Phone</span> : +123456789
                                    </a>
                                </li>
                                <li>
                                    <a class="text-blueGray-600 text-black hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                                        href="https://creative-tim.com/terms?ref=njs-profile">
                                        <span>Email</span> : Event@Geeks.com
                                    </a>
                                </li>
                                <li>
                                    <a class="text-blueGray-600 text-black hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                                        href="https://creative-tim.com/privacy?ref=njs-profile">Privacy Policy</a>
                                </li>



                            </ul>

                        </div>



                    </div>
                </div>
            </div>
            <hr class="my-6 border-blueGray-300">
            <div class="flex flex-wrap items-center md:justify-between justify-center">
                <div class="w-full md:w-4/12 px-4 mx-auto text-center">
                    <div class="text-sm text-blueGray-500 font-semibold py-1">
                        Copyright © <span id="get-current-year">2024</span><a href="{{ route('register') }}"
                            class="text-blueGray-500 hover:text-gray-800" target="_blank"> EventGeeks

                    </div>
                </div>
            </div>
        </div>
    </footer>






    <!-- component -->



</body>

<script>
    let toggleOpen = document.getElementById('toggleOpen');
    let toggleClose = document.getElementById('toggleClose');
    let collapseMenu = document.getElementById('collapseMenu');

    function handleClick() {
        if (collapseMenu.style.display === 'block') {
            collapseMenu.style.display = 'none';
        } else {
            collapseMenu.style.display = 'block';
        }
    }

    toggleOpen.addEventListener('click', handleClick);
    toggleClose.addEventListener('click', handleClick);

    document.addEventListener('DOMContentLoaded', function() {
    const eventCountSpan = document.getElementById('eventCount');
    const buyEventButton = document.getElementById('buyEventButton');
    
    let eventCount = 0;
    
    buyEventButton.addEventListener('click', function(event) {
        event.preventDefault();
        
        // Increment event count
        eventCount++;
        
        // Update span text
        eventCountSpan.textContent = eventCount.toString();
        
        // Submit the form
        document.getElementById('buyEventForm').submit();
    });
});

</script>

</html>
