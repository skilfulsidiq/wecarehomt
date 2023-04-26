<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OutcomeAchievement extends Model
{
    use HasFactory;

    protected $fillable = ["function_type_id","outcome_name"];

    public function function_type(){
        return $this->belongsTo(FunctionType::class,"function_type_id")->withDefault();
    }
}
