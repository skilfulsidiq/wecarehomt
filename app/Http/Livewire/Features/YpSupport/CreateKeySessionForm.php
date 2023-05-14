<?php

namespace App\Http\Livewire\Features\YpSupport;

use Livewire\Component;

class CreateKeySessionForm extends Component
{
    public $form = [
        'date' => '',
        'staff_id' => '',
        'goals' => '',
        'consequence' => '',
        'acheivement' => '',
        'reflection' => '',
    ];
    public function render()
    {
        return view('livewire.features.yp-support.create-key-session-form');
    }

    public function submit(){
        return redirect()->route('key-work-page');
    }
}
