<?php

namespace App\Services\YpSupport;

use App\Models\Incident;
use App\Models\Interaction;
use App\Services\BaseService;
use Illuminate\Support\Facades\DB;

class IncidentService extends BaseService
{


    public function __construct(Incident $incident)
    {
        parent::__construct($incident);
    }

    public function getFieldsSearchable()
    {
    }
    public function getAllIncidents($search = "", $perPage = 20)
    {
        $t = $this->allQuery($search)->with(['youngPeople:id,firstname,lastname', 'staff:id,firstname,lastname'])
            ->paginate($perPage);
        return $this->success("success", $t);
    }
}
