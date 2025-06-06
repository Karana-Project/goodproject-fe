<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ReviewCard extends Component
{
    public $name, $date, $rating, $comment;

    public function __construct($name, $date, $rating, $comment)
    {
        $this->name = $name;
        $this->date = $date;
        $this->rating = $rating;
        $this->comment = $comment;
    }

    public function render()
    {
        return view('components.review-card');
    }
}
