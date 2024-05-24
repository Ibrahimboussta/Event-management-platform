<!-- Button trigger modal -->
    <button type="button" class="inline-block rounded bg-[#1644ba] px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out hover:bg-primary-accent-300 hover:shadow-primary-2 focus:bg-primary-accent-300 focus:shadow-primary-2 focus:outline-none focus:ring-0 active:bg-primary-600 active:shadow-primary-2 dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong" data-twe-ripple-init data-twe-ripple-color="light" data-bs-toggle="modal" data-bs-target="#events{{ $event->id }}">
    Edit
</button>

<!-- Modal -->
<div class="modal fade" id="events{{ $event->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-black text-white">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body bg-gray-900">
                <form method="POST" action="{{ route('admin.update', $event) }}">
                    @csrf
                    @method('PUT')
                    <!-- Name -->
                    <div>
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input value="{{ old('name', $event->name) }}"  class="block mt-1 w-full" type="text" name="name" required
                            autofocus autocomplete="name" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="descriptions" :value="__('Descriptions')" />
                        <x-text-input  value="{{ old('descriptions', $event->descriptions) }}" class="block mt-1 w-full" type="text" name="descriptions" required autofocus
                            autocomplete="descriptions" />
                    </div>

        
                    <div class="mt-4">
                        <x-input-label class="text-black" for="date" :value="__('Date Start')" />
                        <x-text-input name="dateStart" min="{{ date('Y-m-d') }}" value="{{ old('dateStart', $event->dateStart) }}" id="date-start" type="date" class="w-full" />
                    </div>

                    <div class="mt-4">
                        <x-input-label class="text-black" for="date" :value="__('Date End')" />
                        <x-text-input name="dateEnd" id="date-end" value="{{ old('dateEnd', $event->dateEnd) }}" type="date" class="w-full"/>
                    </div>

                    <div class="mt-4">
                        <x-input-label class="text-black" for="time" :value="__('Time Start')" />
                        <x-text-input  name="timeStart"
                        id="time-start" type="time" class="w-full" value="{{ old('timeStart', $event->timeStart) }}"/>
                    </div>
        
                    <div class="mt-4">
                        <x-input-label class="text-black" for="time" :value="__('Time End')" />
                        <x-text-input name="timeEnd" id="time-end" type="time" class="w-full" value="{{ old('timeEnd', $event->timeEnd) }}"/>
                    </div>

                    <div class="mt-4">
                        <x-input-label for="locations" :value="__('Locations')" />
                        <x-text-input value="{{ old('locations', $event->locations) }}" class="block mt-1 w-full" type="text" name="locations" required
                            autocomplete="locations" />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <x-input-label for="price" :value="__('Price')" />
                        <x-text-input value="{{ old('price', $event->price) }}" class="block mt-1 w-full" type="number" name="price" required
                            autocomplete="price" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="old_price" :value="__('Old Price')" />
                        <x-text-input value="{{ old('old_price', $event->old_price) }}" class="block mt-1 w-full" type="number" name="old_price" required
                            autocomplete="old_price" />
                    </div>

                    <div class="flex items-center justify-end mt-4 ">

                        <button class="bg-white px-4 py-1 rounded-md">Create</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
