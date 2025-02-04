<div class="grid grid-cols-5 gap-4 text-center">
    @forelse($this->events() as $event)
        <div class="text-green-600">
            <a href="{{route('events.show', $event)}}">{{$event->name}}</a>
        </div>
        <div class="">{{$event->date}} {{$event->time}}</div>
        <div class="">{{$event->location}}</div>
        <div class="">{{$event->participants->count()}}</div>
        <div class="">{{$event->managers->count()}}</div>
    @empty
        <p>Мероприятий больше не найдено</p>
    @endforelse
    <div x-intersect.full="$wire.loadMore()" class="p-4">
        <div wire:loading wire:target="loadMore"
             class="loading-indicator">
            Загрузка
        </div>
    </div>
</div>
