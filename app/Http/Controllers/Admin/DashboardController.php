<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard',[
            'page'  =>  'Dashboard'
        ]);
    }

    public function contacts()
    {
        return view('admin.contacts',[
            'page'  =>  'Contacts',
            'records' => Contact::orderBy('id','desc')->get(),
        ]);
    }
}
