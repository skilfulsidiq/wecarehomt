<?php

namespace App\Services\YpSupport;

use App\Models\Interaction;
use App\Services\BaseService;
use Illuminate\Support\Facades\DB;

class InteractionService extends BaseService{


    public function __construct(Interaction $interaction)
    {
        parent::__construct($interaction);
    }

    public function getFieldsSearchable()
    {

    }
    public function getAllInteractions($search="",$perPage=20){
        $t = $this->allQuery($search)->with(['youngPeople:id,firstname,lastname','staff:id,firstname,lastname'])
        ->paginate($perPage);
        return $this->success("success",$t);
    }
}
