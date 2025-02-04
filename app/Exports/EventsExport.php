<?php

namespace App\Exports;

use App\Models\Event;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;

class EventsExport implements FromCollection
{
    public function collection()
    {
        return Event::select("id", "name", "address", 'date', 'time')->get();

    }

    public function headings(): array
    {
        return ["id", "Название", "Место проведения", 'Дата', 'время'];
    }
}
