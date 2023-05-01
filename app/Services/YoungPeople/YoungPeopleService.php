<?php

namespace App\Services\YoungPeople;

use App\Models\Incident;
use App\Models\Interaction;
use App\Models\YoungPeople;
use App\Services\BaseService;
use Illuminate\Support\Facades\DB;

class YoungPeopleService extends BaseService
{


    public function __construct(YoungPeople $incident)
    {
        parent::__construct($incident);
    }

    public function getFieldsSearchable()
    {
        return ['firstname'];
    }
    public function getAllYoungPeople($search = "", $perPage = 20)
    {
        $t = $this->allQuery($search) ->paginate($perPage);
        return $this->success("success", $t);
    }
}
