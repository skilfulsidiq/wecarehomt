<?php

namespace App\Services;

use App\Models\Incident;
use App\Models\Interaction;
use App\Services\BaseService;
use Illuminate\Support\Facades\DB;

class DashboardService extends BaseService
{


    public function __construct(Incident $incident)
    {
        parent::__construct($incident);
    }

    public function getDashboardData(){
        $total_youngs = DB::table('young_people')->count();
        $total_incidents = DB::table('incidents')->count();
        $total_interactions = DB::table('interactions')->count();
        $total_users = DB::table('users')->count();
        return $this->success("data",compact('total_youngs', 'total_incidents','total_interactions','total_users'));
    }
}
