<div class="flex flex-col lg:flex-row w-full">
    <div class="w-full lg:w-[45vw] p-5">
        <form method="POST" action="/admin/post"  >
            @csrf
            <!-- Name -->
            <div>
                <x-input-label class="text-black" for="name" :value="__('Name')" />
                <x-text-input class="block mt-1 w-full" type="text" name="name" required autofocus
                    autocomplete="name" />
            </div>

            {{-- <div>
                <x-input-label class="text-black" for="image" :value="__('Image')" />
                <x-text-input class="block mt-1 w-full border border-gray-200" type="file" name="image" required autofocus
                    autocomplete="name" />
            </div> --}}

            <div class="mt-4">
                <x-input-label class="text-black" for="descriptions" :value="__('Descriptions')" />
                <x-text-input class="block mt-1 w-full" type="text" name="descriptions" required autofocus
                    autocomplete="descriptions" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label class="text-black" for="date" :value="__('Date Start')" />
                <x-text-input name="dateStart" min="{{ date('Y-m-d') }}" value="{{ date('Y-m-d') }}" id="date-start"
                    type="date" class="w-full" />
            </div>

            <div class="mt-4">
                <x-input-label class="text-black" for="date" :value="__('Date End')" />
                <x-text-input name="dateEnd" id="date-end" type="date" class="w-full" />
            </div>

            <div class="mt-4">
                <x-input-label class="text-black" for="time" :value="__('Time Start')" />
                <x-text-input name="timeStart" id="time-start" type="time" class="w-full" />
            </div>

            <div class="mt-4">
                <x-input-label class="text-black" for="time" :value="__('Time End')" />
                <x-text-input name="timeEnd" id="time-end" type="time" class="w-full" />
            </div>

            <div class="mt-4">
                <x-input-label class="text-black" for="locations" :value="__('Locations')" />
                <x-text-input class="block mt-1 w-full" type="text" name="locations" required
                    autocomplete="locations" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label class="text-black" for="price" :value="__('Price')" />
                <x-text-input class="block mt-1 w-full" type="number" name="price" required autocomplete="price" />
            </div>

            <div class="flex items-center justify-end mt-4 ">
                <button class="bg-gray-900 text-white px-4 py-1 rounded-md">Create</button>
            </div>
        </form>
    </div>

    <div class="w-full lg:w-[50vw]">
        <div id="calendar" class="w-full"></div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', async function() {

        const response = await axios.get('/event/show')
        const event = response.data.events;

        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            headerToolbar: {
                right: window.innerWidth < 768 ? 'timeGridDay' :
                    'dayGridMonth,timeGridWeek,timeGridDay',
                center: 'title',
                left: window.innerWidth < 768 ? '' : 'listMonth, listWeek, listDay',
            },
            views: {
                listDay: {
                    buttonText: 'Day Event',
                },
                listWeek: {
                    buttonText: 'Week Event',
                },
                listMonth: {
                    buttonText: 'Month Event',
                },
                timeGridDay: {
                    buttonText: 'Day',
                },
                timeGridWeek: {
                    buttonText: 'Week',
                },
                dayGridMonth: {
                    buttonText: 'Month',
                },
            },
            initialView: window.innerWidth < 768 ? "timeGridDay" : "timeGridWeek",
            // For phone displays, initially set the view to timeGridDay, otherwise set it to timeGridWeek
            // Add more configurations as needed for responsiveness
            nowIndicator: true,
            selectable: true,
            selectMirror: true,
            selectOverlap: true,
            events: event,
            selectAllow: (info) => {
                let instant = new Date()
                return info.start >= instant
            },
            select: (info) => {
                let start = info.start
                let end = info.end

                if (end.getDate() - start.getDate() != 0 && !info.allDay) {
                    calendar.unselect()
                    return
                }

                formmatData(start)

                let dates = document.getElementById('date-start').value = formmatData(start).day

                if (info.allDay) {
                    document.getElementById("date-end").value = formmatData(start).day
                    document.getElementById('time-start').value = '08:00:00'
                    document.getElementById('time-end').value = '16:00:00'
                } else {
                    document.getElementById("date-end").value = formmatData(end).day
                    document.getElementById('time-start').value = formmatData(start).time
                    document.getElementById('time-end').value = formmatData(end).time
                }
            },
        });

        if (window.innerWidth < 768) {
            calendar.changeView("timeGridDay");
        } else {
            calendar.changeView("timeGridWeek");
        }
        calendar.render();

        function formmatData(date) {

            let year = String(date.getFullYear())
            let month = String(date.getMonth() + 1).padStart(2, 0)
            let day = String(date.getDate()).padStart(2, 0)

            let hour = String(date.getHours()).padStart(2, 0)
            let min = String(date.getMinutes()).padStart(2, 0)
            let sec = String(date.getSeconds()).padStart(2, 0)

            return {
                day: `${year}-${month}-${day}`,
                time: `${hour}:${min}:${sec}`
            }
        }
    });
</script>
