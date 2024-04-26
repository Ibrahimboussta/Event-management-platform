@extends('layouts.index')
@section('content')
    <section class="bg-gray-100 p-5">
        <section class="bg-gray-100 border-b-2">
            <div class="py-5">
                <h1 class="text-center py-4 mt-5">Users</h1>
                <div class="w-full px-5 py-10 lg:px-0 lg:w-full">
                    <div class="w-full md:w-[80%] lg:w-full xl:w-[90%] 2xl:w-[80%] mx-auto rounded px-4 md:px-10 flex flex-col md:flex-row items-center justify-between bg-blue-300 py-3">
                        <p class="m-0 md:w-[20%]">Name</p>
                        <p class="m-0 md:w-[30%]">Email</p>
                        <p class="m-0 md:w-[20%]">Role</p>
                        <p class="m-0 md:w-[20%]">Change role</p>
                        <p class="m-0 md:w-[20%]">Update</p>
                        <p class="m-0 md:w-[20%]">Delete</p>
                    </div>
                    @foreach ($user as $user)
                        <div class="w-full md:w-[80%] lg:w-full xl:w-[90%] 2xl:w-[80%] mx-auto rounded px-4 md:px-10 flex flex-col md:flex-row items-center justify-between bg-[#FFF] py-2 mt-4">
                            <h5 class="m-0 font-semibold md:w-[20%]">{{ $user->name }}</h5>
                            <h5 class="m-0 md:w-[30%]">{{ $user->email }}</h5>
                            <h5 class="m-0 md:w-[20%]">{{ $user->role }}</h5>
                            <select name="" id="" class="w-full md:w-[30%] border border-gray-300 rounded-md mt-2 md:mt-0">
                                <option value="" selected disabled>Change role</option>
                                <option value="Organisateur">Organisateur</option>
                                <option value="Attend">Attend</option>
                            </select>
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
                    <div class="card" style="width: 19rem;">
                        <div class="card-body flex flex-col gap-y-1 shadow-md">
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
                                <button>@include('admin.components.edit')</button>
                                <form method="POST" action="{{ route('events.destroy', $event->id) }}">
                                    @csrf
                                    @method('DELETE')
                                
                                    <!-- Add a button to confirm deletion -->
                                    <button class="border border-black px-3 py-1 rounded-lg " type="submit" onclick="return confirm('Are you sure you want to delete this event?')">
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
