<?php

namespace App\Http\Livewire\Features\YpSupport;

use App\Events\IncidentCreatedEvent;
use App\Events\SendEmailNotification;
use App\Services\Branch\BranchCrudService;
use App\Services\GeneralService;
use App\Services\YpSupport\IncidentService;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class CreateIncidentForm extends Component
{
    public $form = [
        'date' => '',
        'location'=>'',
        'young_people_id' => '',
        'staff_id' => '',
        'incident' => '',
        'consequence' => '',
        'action' => ''
    ];
     protected $rules = [
            'form.date' => 'required',
            'form.location'=>'required',
            'form.young_people_id' => 'required',
            'form.staff_id' => 'required',
            'form.incident' => 'required',
            'form.consequence' => 'required'
            // 'form.reflection'=>'null'
    ];
    public function render()
    {
        $result = $this->query();

        return view('livewire.features.yp-support.create-incident-form',$result);
    }

    public function submit()
    {

        $t = $this->validate();
        // dd($this->form);

        $feedback = appService(IncidentService::class)->create($this->form);
        if ($feedback['status']) {
            $data = $feedback['data'];
            event(new IncidentCreatedEvent($data));
            //alert
            //redirect
            return redirect()->route('meaningful-page');
        }
        //show error msg
    }

    public function query(){
        $service = appService(GeneralService::class);
        $staff = $service->getAllStaff();
        // dd($staff);
        $young = $service->getAllYoungPeople();
        $cons = $service->getAllConsequence();
        // $outcome = $service->getAllAchivements();
        $incident = $service->getAllIncidentType();
       return compact('staff','young','incident','cons');
        // $feedback =  appService(BranchCrudService::class)->create(['branch_name'=>'Lagos']);
        // dd($feedback);
    }
}
