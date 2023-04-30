<?php

namespace App\Http\Livewire\Features\Home;

use App\Services\DashboardService;
use Livewire\Component;

class DashboardPage extends Component
{
    public function render()
    {
        $data = $this->query();
        $young = $data['total_youngs'];
        $staff = $data['total_users'];
        $interaction = $data['total_interactions'];
        $incident = $data['total_incidents'];
        return view('livewire.features.home.dashboard-page',compact('young','staff','interaction','incident'));
    }

    public function query(){
        $feedback = appService(DashboardService::class)->getDashboardData();
        return $feedback['data'];
    }
}
