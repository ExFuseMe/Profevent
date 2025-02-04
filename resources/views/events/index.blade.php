<x-app-layout>
    <div class="text-white p-4">
        <div class="grid grid-cols-5 gap-4 text-center">
            <div class="">Название</div>
            <div class="">Дата/время</div>
            <div class="">Место проведения</div>
            <div class="">Кол-во зарегистрированных студентов</div>
            <div class="mb-8">Кол-во организаторов</div>
            @foreach($events as $event)
                <div class="text-green-600">
                    <a href="{{route('events.show', $event)}}">{{$event->name}}</a>
                </div>
                <div class="">{{$event->date}} {{$event->time}}</div>
                <div class="">{{$event->location}}</div>
                <div class="">{{$event->participants->count()}}</div>
                <div class="">{{$event->managers->count()}}</div>
            @endforeach
        </div>
    </div>

</x-app-layout>
