<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class YoungPeople extends Model
{
    use HasFactory;
     protected $fillable = ["firstname","lastname","email","phone","dob","gender","disability"];



    /**Relationship */
    public function interactions()
    {
        return $this->hasMany(Interaction::class, "young_people_id");
    }
}
