<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUs_main_content extends Model
{
    protected $fillable = ['id','image_name','image_path', 'titles','text','videoLink','descriptions'];

}
