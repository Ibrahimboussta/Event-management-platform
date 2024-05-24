@extends('layouts.index')
@section('content')
    <section class="bg-gray-100 p-5">
        <section class="bg-gray-100 border-b-2">
            <div class="py-5">
                <h1 class="text-center py-4 mt-5">Users</h1>
                <div class="w-full px-5 py-10 lg:px-0 lg:w-full">
                    <div
                        class="w-full md:w-[80%] lg:w-full xl:w-[90%] 2xl:w-[80%] mx-auto rounded px-4 md:px-10 flex flex-col md:flex-row items-center justify-between bg-blue-300 py-3">
                        <p class="m-0 md:w-[20%]">Name</p>
                        <p class="m-0 md:w-[30%]">Email</p>
                        <p class="m-0 md:w-[20%]">Role</p>
                        <p class="m-0 md:w-[20%]">Delete</p>
                    </div>
                    @foreach ($user as $user)
                        <div
                            class="w-full md:w-[80%] lg:w-full xl:w-[90%] 2xl:w-[80%] mx-auto rounded px-4 md:px-10 flex flex-col md:flex-row items-center justify-between bg-[#FFF] py-2 mt-4">
                            <h5 class="m-0 font-semibold md:w-[20%]">{{ $user->name }}</h5>
                            <h5 class="m-0 md:w-[30%]">{{ $user->email }}</h5>
                            <h5 class="m-0 md:w-[20%]">{{ $user->role }}</h5>
                            
                            <div class="flex gap-3 md:w-[20%]">

                                <form action="{{ route('user.delete', $user->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="border border-black p-3 py-1">Delete</button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </section>


        <section class="">
            <div class="">
                <h1 class="text-center py-4 mt-5">Events</h1>
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

                             <div class="flex gap-3">
                                    <button>@include('admin.components.edit')</button>
                                    <form method="POST" action="{{ route('events.destroy', $event->id) }}">
                                        @csrf
                                        @method('DELETE')

                                        <!-- Add a button to confirm deletion -->
                                        <button class="inline-block rounded bg-[#1644ba] px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out hover:bg-primary-accent-300 hover:shadow-primary-2 focus:bg-primary-accent-300 focus:shadow-primary-2 focus:outline-none focus:ring-0 active:bg-primary-600 active:shadow-primary-2 dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong" data-twe-ripple-init data-twe-ripple-color="light" type="submit"
                                            onclick="return confirm('Are you sure you want to delete this event?')">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            
                        </div>
                    </div>
                    
               
                    @endforeach
                </div>



                      
            </div>
            </div>
        </section>
    </section>
@endsection
