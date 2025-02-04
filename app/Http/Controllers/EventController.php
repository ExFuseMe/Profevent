<?php

namespace App\Http\Controllers;

use App\Http\Repositories\EventRepository;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class EventController extends Controller
{
    private EventRepository $repo;

    public function __construct()
    {
        $this->repo = new EventRepository();
    }
    public function index()
    {
        return view('events.index');
    }

    public function create()
    {
        return view('events.create');
    }

    public function store(StoreEventRequest $request)
    {
        $validated = $request->validated();
        $validated['time'] = Carbon::parse($validated['time'])->format('g:i A');
        Event::create($validated);
        return redirect()->route('events.index');
    }

    public function show(Event $event)
    {
        return view('events.show', compact('event'));
    }

    public function edit(Event $event)
    {
        //
    }

    public function update(UpdateEventRequest $request, Event $event)
    {
        //
    }

    public function destroy(Event $event)
    {
        //
    }

    public function report(Event $event)
    {
//        if (Cache::has('event-report.' . $event->id)) {
//            $cache = Cache::get('event-report.' . $event->id);
//        }else{
//
//        }
    }
}
