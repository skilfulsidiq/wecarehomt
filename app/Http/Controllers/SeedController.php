<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeedController extends Controller
{
    public function seedAllData(){
        //branch
        // DB::table("branches")->insert(['branch_name'=>'Lagos']);
        // DB::table("consequences")->insert(['consequence_name'=>'Intelligent'], ['consequence_name' => 'Greater Value']);
        // DB::table("disabilities")->insert(['disability_name'=>'Blind'], ['disability_name' => 'Deaf'], ['disability_name' => 'Lame']);
        // DB::table("function_types")->insert(['function_name'=>'Interaction'], ['function_name' => 'Incident'], ['function_name' => 'KW Session']);
        // DB::table("incident_types")->insert(['incident_name'=>'Police Report'], ['incident_name' => 'Fight'], ['incident_name' => 'Harrassment']);


        // DB::table("goals")->insert(['function_type_id' => 1, 'goal_name'=>'Clear Communication'], ['function_type_id' => 2, 'goal_name' => 'Positive Feedback'], );
        // DB::table("outcome_achievements")->insert(['function_type_id' => 1, 'outcome_name'=>'Clear Communication'], ['function_type_id' => 2, 'outcome_name' => 'Positive Feedback'], );

        $user= [
            "firstname"=>"sdq",
            "lastname"=>"kunle",
            "email"=>"osodiq@gmail.com",
            "password"=>"123456",
        ];
        $young = [[
            "firstname" => "Kola",
            "lastname" => "Ola",
            "email" => "osodiq+6@gmail.com",
            "phone" => "123456",
            "dob"=>"2020-01-15",
            "gender"=>"Male",
            "disability"=>"Null"
        ], [
            "firstname" => "Bola",
            "lastname" => "Ola",
            "email" => "osodiq+2@gmail.com",
            "phone" => "123456",
            "dob" => "2020-02-30",
            "gender" => "Female",
            "disability" => "Deaf"
        ]];
        // User::create($user);
        DB::table('young_people')->insert($young);
        return true;
    }
}
