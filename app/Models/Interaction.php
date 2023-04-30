<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Interaction extends Model
{
    use HasFactory;
    protected $fillable = ["date","young_people_id","staff_id","goals","focus","achievements", "refection","slug"];

    public function setDateAttribute($value)
    {
        $this->attributes['date'] = $value;
        $this->attributes['slug'] = Str::slug($value).time();
    }
    public function setGoalsAttribute($value){
        $this->attributes['goals'] = json_encode($value);
    }
    public function setAchievementsAttribute($value){
        $this->attributes['achievements'] = json_encode($value);
    }

    public function getGoalsAttribute()
    {
       return json_decode($this->attributes['goals']);
    }
    public function getAchievementsAttribute()
    {
       return json_decode($this->attributes['achievements']);
    }

    /**Relationship */
    public function youngPeople(){
        return $this->belongsTo(YoungPeople::class,"young_people_id")->withDefault();
    }
    public function staff(){
        return $this->belongsTo(User::class,"staff_id")->withDefault();
    }
}
