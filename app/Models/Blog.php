<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = ['title_en','title_fr','status','image','slug','detail_en','detail_fr','category','thumb','info_en','info_fr'];
}
