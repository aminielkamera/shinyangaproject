<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home_about extends Model
{
    protected $fillable = ['id','image_name','image_path', 'descriptions'];
}
