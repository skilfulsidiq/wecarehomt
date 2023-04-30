<?php

namespace App\Http\Livewire\Features\YpSupport;

use App\Events\InteractionCreatedEvent;
use App\Services\GeneralService;
use App\Services\YpSupport\InteractionService;
use Livewire\Component;

class CreateInteractionForm extends Component
{
    public $step=1;
    public $total_step=2;
    public $date;
    public $form = [
        'date'=>'',
        'young_people_id'=>'',
        'staff_id'=>'',
        'focus'=>'',
        'goals'=>'',
        'achievements'=>'',
        'refection'=>''
    ];
    // protected $rules = [
    //         'form.date' => 'required',
    //         'form.young_people_id' => 'required',
    //         'form.staff_id' => 'required',
    //         'form.focus' => 'required',
    //         'form.goals' => 'required',
    //     'form.achievements' => 'required',
    //         // 'form.reflection'=>'null'
    // ];


    public function submit(){

        // $t = $this->validate();
        // dd($this->form);

       $feedback = appService(InteractionService::class)->create($this->form);
       if($feedback['status']){
            $data = $feedback['data'];
            event(new InteractionCreatedEvent($data));
            //alert
            //redirect
            return redirect()->route('meaningful-page');
       }
       //show error msg
    }

    public function render()
    {
        $r = $this->query();
        return view('livewire.features.yp-support.create-interaction-form',$r);
    }
    public function query(){
        $service = appService(GeneralService::class);
        $staff = $service->getAllStaff();
        $focus = $service->getFocus();
        // dd($staff);
        $young = $service->getAllYoungPeople();
        $goals = $service->getAllGoals();
        $outcome = $service->getAllAchivements();
        $incident = $service->getAllIncidentType();
        return compact('staff', 'young', 'goals', 'outcome', 'incident','focus');
    }
}
