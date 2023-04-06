<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class BarChartOne extends Component
{
    public $title;
    public function render()
    {
        return view('livewire.components.bar-chart-one');
    }
}
