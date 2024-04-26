<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.js'></script>

</head>

<body>

    <h1>create</h1>
    @include('admin.components.modal')


    <!-- component -->
    <!-- follow me on twitter @asad_codes -->
{{-- 
    <div class="flex flex-wrap justify-center items-center h-screen">
        <!-- card -->
        @foreach ($events as $event)
        <div class="overflow-hidden shadow-lg transition duration-500 ease-in-out transform hover:-translate-y-5 hover:shadow-2xl rounded-lg h-90 w-60 md:w-80 cursor-pointer m-4">
            <img alt="event photo" src="{{ asset("storage/img/" . $image->image) }}" class="h-40 w-full object-cover" />
            <div class="bg-white w-full p-4">
                <p class="text-indigo-500 text-2xl font-medium">{{ $event->descriptions }}</p>
                <p class="text-gray-800 text-sm font-medium mb-2">
                    <span>{{ $event->date }}</span>
                    <span>{{ $event->time }}</span>
                </p>
                <p class="text-gray-600 font-light text-md">{{ $event->locations }}</p>
                <div class="flex flex-wrap justify-start items-center py-3 border-b-2 text-xs text-white font-medium">
                    <span class="m-1 px-2 py-1 rounded bg-indigo-500">{{ $event->price }}</span>
                </div>
                <div class="flex items-center mt-2">
                    <img class="w-10 h-10 object-cover rounded-full" alt="User avatar" src="{{ asset("storage/img/" . $image->image) }}">
                    <div class="pl-3">
                        <div class="font-medium">{{ $event->user->name }}</div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div> --}}
    

    <!-- Does this resource worth a follow? -->
   
    <div class="flex flex-wrap gap-4 mt-3 px-4 mx-3">
        @foreach ($events as $event)
        @if ($event->user_id == Auth::user()->id)
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h3 class="card-title font-bold">{{ $event->name }}</h3>
                <p class="card-text">{{ $event->descriptions }}</p>
                <div class="flex justify-start gap-x-5">
                    <p class="card-text">{{ $event->date }}</p>
                    <p class="card-text">{{ $event->time }}</p>
                </div>
                <p class="card-text">{{ $event->locations }}</p>
                <p class="card-text font-bold">{{ $event->price }}</p>
                <div class="flex gap-3">
                    <button>@include('admin.components.edit')</button>
                    <form method="POST" action="{{ route('events.destroy', $event->id) }}">
                        @csrf
                        @method('DELETE')

                        <!-- Add a button to confirm deletion -->
                        <button class="border border-black px-3 py-1 rounded-lg" type="submit"
                            onclick="return confirm('Are you sure you want to delete this event?')">
                            Delete
                        </button>
                    </form>
                </div>
            </div>
        </div>
        @endif
        @endforeach
    </div>





    <div class="text-black">
        {{-- @foreach ($event->user as $user)
            <h1>{{ $user->name }}</h1>
        @endforeach --}}
    </div>
</body>

</html>
