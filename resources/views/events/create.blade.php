<x-app-layout>
    <div class="text-black p-4">
        <div class="flex flex-col w-full">
            <form action="{{route('events.store')}}" method="POST">
                @csrf
                <div class="my-4 w-1/2">
                    <label class="text-white" for="name">Название</label>
                    <input class="w-full" type="text" id="name" name="name" placeholder="Название мероприятия">
                </div>
                <div class="my-4 w-1/2">
                    <label class="text-white" for="date">Дата проведения</label>
                    <input class="w-full" type="date" name="date">
                </div>
                <div class="my-4 w-1/2">
                    <label class="text-white" for="time">Время проведения</label>
                    <input class="w-full" type="time" name="time">
                </div>
                <div class="my-4 w-1/2">
                    <label class="text-white" for="location">Место проведения</label>
                    <input class="w-full" type="text" name="location">
                </div>
                <button class="text-xl text-white bg-green-600 rounded p-2" type="submit">
                    Создать
                </button>
            </form>
        </div>
    </div>
</x-app-layout>
