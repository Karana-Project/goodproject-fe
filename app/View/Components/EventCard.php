<?php

namespace App\View\Components;

use Illuminate\View\Component;

class EventCard extends Component
{
    public $image, $name, $regulation, $description;
    public $date, $time, $location, $ticket;

    public function __construct($image, $name, $regulation, $description, $date, $time, $location, $ticket = null)
    {
        $this->image = $image;
        $this->name = $name;
        $this->regulation = $regulation;
        $this->description = $description;
        $this->date = $date;
        $this->time = $time;
        $this->location = $location;
        $this->ticket = $ticket;
    }

    public function render()
    {
        return view('components.event-card');
    }
}
