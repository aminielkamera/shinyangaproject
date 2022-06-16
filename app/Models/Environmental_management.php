<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Environmental_management extends Model
{
    protected $fillable = ['id','image_name','image_path', 'titles','descriptions'];
}
