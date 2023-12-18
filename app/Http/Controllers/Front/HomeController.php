<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Package;
use App\Models\PackageEnquiry;

class HomeController extends Controller
{
    public function index()
    {
        return view('front.index',[
            'title'  =>  'Welcome to Website',
            'packages' => Package::orderBy('id','desc')->where('status','active')->get(),
        ]);
    }    
}
