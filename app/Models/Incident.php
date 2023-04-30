<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Incident extends Model
{
    use HasFactory;

    protected $fillable = ["date", "location",   "young_people_id", "staff_id", "incident", "consequence", "action", "slug"];

    public function setDateAttribute($value)
    {
        $this->attributes['date'] = $value;
        $this->attributes['slug'] = Str::slug($value) . time();
    }
    /**Relationship */
    public function youngPeople()
    {
        return $this->belongsTo(YoungPeople::class, "young_people_id")->withDefault();
    }
    public function staff()
    {
        return $this->belongsTo(User::class, "staff_id")->withDefault();
    }
}
