<x-app-layout>
    <div class="text-white p-4">
        <div class="flex flex-col">
            <div class="flex items-baseline space-x-4">
                <div class="text-2xl">Название:</div>
                <div>{{$event->name}}</div>
            </div>
            <div class="flex items-baseline space-x-4">
                <div class="text-2xl">Адрес:</div>
                <div>{{$event->location}}</div>
            </div>
            <div class="flex items-baseline space-x-4">
                <div class="text-2xl">Дата/время:</div>
                <div>{{$event->date}} {{$event->time}}</div>
            </div>
            <div class="">
                <div class="my-8">
                    <div class="text-xl cursor-pointer flex" onclick="toggleList(1)">
                        Зарегистрированные студенты ({{$event->participants->count()}})
                        <svg fill="#ffffff" height="32" viewBox="-6.5 0 32 32" version="1.1"
                             xmlns="http://www.w3.org/2000/svg">
                            <title>dropdown</title>
                            <path
                                d="M18.813 11.406l-7.906 9.906c-0.75 0.906-1.906 0.906-2.625 0l-7.906-9.906c-0.75-0.938-0.375-1.656 0.781-1.656h16.875c1.188 0 1.531 0.719 0.781 1.656z"></path>
                        </svg>
                    </div>
                    <div id="list.1" class="hidden">
                        @foreach($event->participants as $student)
                            <div class="my-2">{{$student->name}}</div>
                        @endforeach
                    </div>
                </div>
                <div class="my-8">
                    <div class="text-xl cursor-pointer flex" onclick="toggleList(2)">
                        Подтверждённые записи ({{$event->participants()->wherePivot('is_accepted', true)->count()}})
                        <svg fill="#ffffff" height="32" viewBox="-6.5 0 32 32" version="1.1"
                             xmlns="http://www.w3.org/2000/svg">
                            <title>dropdown</title>
                            <path
                                d="M18.813 11.406l-7.906 9.906c-0.75 0.906-1.906 0.906-2.625 0l-7.906-9.906c-0.75-0.938-0.375-1.656 0.781-1.656h16.875c1.188 0 1.531 0.719 0.781 1.656z"></path>
                        </svg>
                    </div>
                    <div id="list.2" class="hidden">
                        @foreach($event->participants()->wherePivot('is_accepted', true)->get() as $student)
                            <div class="my-2">{{$student->name}}</div>
                        @endforeach
                    </div>
                </div>

                <div class="my-8">
                    <div class="text-xl cursor-pointer flex" onclick="toggleList(3)">
                        Зарегистрированные организаторы ({{$event->managers->count()}})
                        <svg fill="#ffffff" height="32" viewBox="-6.5 0 32 32" version="1.1"
                             xmlns="http://www.w3.org/2000/svg">
                            <title>dropdown</title>
                            <path
                                d="M18.813 11.406l-7.906 9.906c-0.75 0.906-1.906 0.906-2.625 0l-7.906-9.906c-0.75-0.938-0.375-1.656 0.781-1.656h16.875c1.188 0 1.531 0.719 0.781 1.656z"></path>
                        </svg>
                    </div>
                    <div id="list.3" class="hidden">
                        @foreach($event->managers as $student)
                            <div class="my-2">{{$student->name}}</div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="">
                <form action="" method="POST">
                    @csrf
                    <button class="text-xl bg-green-600 rounded p-2" type="submit">
                        Сформировать отчёт
                    </button>
                </form>
            </div>
        </div>
    </div>

    <script>
        function toggleList(id) {
            const studentsList = document.getElementById('list.' + id);
            studentsList.classList.toggle('hidden');
        }
    </script>
</x-app-layout>
