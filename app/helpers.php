<?php

use Illuminate\Support\Facades\DB;

function slug($slug){

    return strtolower(str_replace(' ','-',$slug));
}

function getoption($name){

    return DB::table('options')->where('name', $name)->first();
}

function updateoption($name,$value){

    DB::table('options')->where('name', $name)->update(['value'=>$value]);
}

function getby($tab,$col,$val){

    return DB::table($tab)->where($col, $val)->first();
}

function count_lesson_in_course($cat){

    return count(DB::table('lessons')->where('course',$cat)->get());
}
