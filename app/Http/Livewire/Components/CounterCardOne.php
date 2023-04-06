<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class CounterCardOne extends Component
{
    public $title;
    public $value;
    public $color_class;
    public $icon;
    public function render()
    {
        return view('livewire.components.counter-card-one');
    }
}
