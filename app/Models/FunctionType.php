<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FunctionType extends Model
{
    use HasFactory;
     protected $fillables = ["function_name"];

     public function goals(){
        return $this->hasMany(Goal::class,"function_type_pd");
     }
      public function outcome_achievement(){
        return $this->hasMany(OutcomeAchievement::class,"function_type_pd");
     }
}
