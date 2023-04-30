<?php

namespace App\Http\Livewire\Features\YpSupport;

use App\Http\Livewire\BaseComponent;
use App\Services\YpSupport\IncidentService;
use App\Services\YpSupport\InteractionService;
use Livewire\Component;

class IncidentMgtPage extends BaseComponent
{
    public $search="";
    public function render()
    {
        $results = $this->query();

        return view('livewire.features.yp-support.incident-mgt-page',compact('results'));
    }
    public function query()
    {
        $feedback = appService(IncidentService::class)->getAllIncidents($this->search);
        return $feedback["data"];
    }
}
