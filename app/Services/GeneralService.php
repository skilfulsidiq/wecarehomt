<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;

class GeneralService {

    public function getAllYoungPeople(){
        return DB::table("young_people")->get();
    }
    public function getAllStaff()
    {
        return DB::table("users")->get();
    }
    public function getAllfunctionTypes()
    {
        return DB::table("function_types")->get();
    }
    public function getAllConsequence()
    {
        return DB::table("consequence")->get();
    }
    public function getAllGoals()
    {
        return DB::table("goals")->get();
    }
    public function getAllIncidentType()
    {
        return DB::table("incident_types")->get();
    }
    public function getAllDisability()
    {
        return DB::table("disabilities")->get();
    }
    public function getAllAchivements()
    {
        return DB::table("outcome_achievements")->get();
    }
}
