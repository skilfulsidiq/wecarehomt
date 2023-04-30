<?php

namespace App\Http\Livewire\Features\YpSupport;

use App\Services\YpSupport\InteractionService;
use Livewire\Component;

class MeaningFulDetailPage extends Component
{
    public $slug;
    public function mount($slug){
        $this->slug = $slug;
    }
    public function render()
    {
       $details =  $this->query();
        return view('livewire.features.yp-support.meaning-ful-detail-page',compact('details'));
    }
    public function query(){

        $feedback = appService(InteractionService::class)->findBySlug($this->slug);

        return $feedback["data"];

    }
}
