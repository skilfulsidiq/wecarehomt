<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Goal extends Model
{
    use HasFactory;
    protected $fillable = ["function_type_id","goal_name"];

    public function function_type(){
        return $this->belongsTo(FunctionType::class,"function_type_id")->withDefault();
    }
}
