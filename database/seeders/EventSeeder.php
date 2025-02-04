<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\Manager;
use App\Models\Participant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Event::factory(100)->create();

        foreach (Event::all() as $event) {
            $event->participants()->saveMany(Participant::all()->random(5));
            $event->managers()->saveMany(Manager::all()->random(5));
        }
    }
}
