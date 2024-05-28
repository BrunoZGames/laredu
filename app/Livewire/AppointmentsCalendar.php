<?php

namespace App\Livewire;

use Omnia\LivewireCalendar\LivewireCalendar;
use Carbon\Carbon;
use Illuminate\Support\Collection;

class AppointmentsCalendar extends LivewireCalendar
{
    public function onDayClick($year, $month, $day)
    {
        dd($year, $month, $day);
    }

    public function onEventClick($eventId)
    {
        dd($eventId);
    }

    public function onEventDropped($eventId, $year, $month, $day)
    {
        dd($eventId, $year, $month, $day);
    }
    public function events(): Collection
    {
        return collect([
            [
                'id' => 1,
                'title' => 'Breakfast',
                'description' => 'Pancakes! 🥞',
                'date' => Carbon::today(),
            ],
            [
                'id' => 2,
                'title' => 'Meeting with Pamela',
                'description' => 'Work stuff',
                'date' => Carbon::tomorrow(),
            ],
        ]);
    }
}
