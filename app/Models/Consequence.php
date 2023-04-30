<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Eloquent as Model;

class Consequence extends Model
{
    use HasFactory;
    protected $fillables = ["consequence_name", "consequence_desc"];
}
