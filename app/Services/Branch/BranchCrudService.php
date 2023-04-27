<?php

namespace App\Services\Branch;
use App\Models\Branch as MainBranch;
use App\Services\BaseService;

// use App\Services\BaseService;

class BranchCrudService extends BaseService{

    protected $fieldSearchable = [
        'name',
        'status',
        'description',
        'custom_fields'
    ];

    public function __construct(MainBranch $model,)
    {
        parent::__construct($model);
    }
      /**
     * Get searchable fields array
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     *
     * @return string
     */
    public function model()
    {
        return $this->model;
    }
}
