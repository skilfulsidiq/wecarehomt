<?php

namespace App\Http\Livewire\Features\YpSupport;

use Livewire\Component;

class CreateInteractionForm extends Component
{
    public $step=1;
    public $total_step=2;
    public $date;
    public $form = [
        'date'=>'',
        'young'=>'',
        'support'=>'',
        'focus'=>'',
        'goal'=>'',
        'acheivement'=>'',
        'reflection'=>''
    ];
    public function goNextStep(){
        if($this->step < $this->total_step){
            $this->step++;
        }
    }
    public function goBack(){
        if ($this->step > 1) {
            $this->step--;
        }
    }
    public function submit(){
        return redirect()->route('meaningful-page');
        // return redirect(request()->header('Referer'));
    }
    public function play()
    {
        dd($this->form);
    }
    public function render()
    {
        return view('livewire.features.yp-support.create-interaction-form');
    }
}
