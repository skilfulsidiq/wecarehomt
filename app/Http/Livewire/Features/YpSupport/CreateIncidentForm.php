<?php

namespace App\Http\Livewire\Features\YpSupport;

use App\Services\Branch\BranchCrudService;
use App\Services\GeneralService;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class CreateIncidentForm extends Component
{
    public $form = [
        "date"=>"",
        "support"=>"",
        "acheivement"=>""
    ];
    public function render()
    {
        $result = $this->query();

        return view('livewire.features.yp-support.create-incident-form',$result);
    }

    public function query(){
        $service = appService(GeneralService::class);
        $staff = $service->getAllStaff();
        // dd($staff);
        $young = $service->getAllYoungPeople();
        $goals = $service->getAllGoals();
        $outcome = $service->getAllAchivements();
        $incident = $service->getAllIncidentType();
       return compact('staff','young','goals','outcome','incident');
        // $feedback =  appService(BranchCrudService::class)->create(['branch_name'=>'Lagos']);
        // dd($feedback);
    }
}
