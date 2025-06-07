<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class StarRating extends Component
{
    public function __construct(public readonly ?float $rating)
    {
        // The rating is expected to be an integer between 0 and 5.
        if ($this->rating < 0 || $this->rating > 5) {
            throw new \InvalidArgumentException('Rating must be between 0 and 5.');
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.star-rating');
    }
}
