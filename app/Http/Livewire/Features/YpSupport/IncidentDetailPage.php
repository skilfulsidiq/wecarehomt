<?php

namespace App\Http\Livewire\Features\YpSupport;

use App\Services\YpSupport\IncidentService;
use Livewire\Component;

class IncidentDetailPage extends Component
{
    public $slug;
    public function mount($slug){
        $this->slug = $slug;
    }
    public function render()
    {
        $details =  $this->query();
        return view('livewire.features.yp-support.incident-detail-page',compact('details'));
    }

    public function query()
    {

        $feedback = appService(IncidentService::class)->findBySlug($this->slug);

        return $feedback["data"];
    }
}
