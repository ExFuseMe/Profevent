<?php

namespace App\Livewire;

use App\Http\Repositories\EventRepository;
use Livewire\Component;

class Events extends Component
{
    public int $on_page = 10;
    private EventRepository $eventRepository;

    public function __construct()
    {
        $this->eventRepository = new EventRepository();
    }

    public function events()
    {
        return $this->eventRepository->all($this->on_page);
    }

    public function loadMore(): void
    {
        $this->on_page += 15;
    }
}
