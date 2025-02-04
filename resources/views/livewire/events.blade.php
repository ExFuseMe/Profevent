<div class="grid grid-cols-6 gap-4 text-center">
    @foreach($this->events() as $event)
        <div class="text-green-600">
            <a href="{{route('events.show', $event)}}">{{$event->name}}</a>
        </div>
        <div class="">{{$event->date}} {{$event->time}}</div>
        <div class="">{{$event->location}}</div>
        <div class="">{{$event->participants->count()}}</div>
        <div class="">{{$event->managers->count()}}</div>
        <div class="">
            <form action="{{route('event.report', $event)}}" method="POST">
                @csrf
                <button class="text-sm bg-green-600 rounded p-2" type="submit">
                    Сформировать отчёт
                </button>
            </form>
        </div>
    @endforeach
    <div x-intersect.full="$wire.loadMore()" class="p-4">
        <div wire:loading wire:target="loadMore"
             class="loading-indicator">
            Загрузка
        </div>
    </div>
</div>
