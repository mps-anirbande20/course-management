<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mcq extends Model
{
    use HasFactory;
    protected $fillable = ['lesson','quest','opt_1','status','opt_2','opt_3','opt_4','ans'];
}
