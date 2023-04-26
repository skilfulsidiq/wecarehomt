<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Branch extends Model
{
    use HasFactory;
    protected $fillable = ["branch_name","slug"];

    /**Mutation */
    public function setBranchNameAttribute($value){
        $this->attributes['branch_name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }
    public function users(){
        return $this->hasMany(User::class,'branch_id');
    }
    public function young(){
        return $this->hasMany(YoungPeople::class,'branch_id');
    }
}
