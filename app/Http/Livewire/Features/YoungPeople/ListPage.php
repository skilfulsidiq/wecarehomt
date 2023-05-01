<?php

namespace App\Http\Livewire\Features\YoungPeople;

use App\Http\Livewire\BaseComponent;
use App\Services\GeneralService;
use App\Services\YoungPeople\YoungPeopleService;
use Livewire\Component;
use Livewire\WithPagination;

class ListPage extends BaseComponent
{ use WithPagination;

    public function render()
    {
        $data = $this->query();
        return view('livewire.features.young-people.list-page',compact('data'));
    }
    public function query(){
        $feedback = appService(YoungPeopleService::class)->getAllYoungPeople();
        return $feedback["data"];

    }
}
