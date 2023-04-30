<?php

namespace App\Http\Livewire\Features\YpSupport;

use App\Http\Livewire\BaseComponent;
use App\Services\YpSupport\InteractionService;
use Livewire\Component;
use Livewire\WithPagination;

class MeaningFulPage extends BaseComponent
{
    use WithPagination;
    public $search="";
    public function render()
    {
        $results = $this->query();
        return view('livewire.features.yp-support.meaning-ful-page',compact('results'));
    }
    public function query(){
        $feedback = appService(InteractionService::class)->getAllInteractions($this->search);
        // dd($feedback);
        return $feedback["data"];
    }
}
