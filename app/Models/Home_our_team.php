<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home_our_team extends Model
{
    protected $fillable = ['id','image_name','titles','image_path', 'position'];
}
