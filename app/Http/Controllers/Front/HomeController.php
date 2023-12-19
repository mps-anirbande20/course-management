<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\Contact;

class HomeController extends Controller
{
    public function index()
    {
        return view('front.index',[
            'title'  =>  'Welcome to Website',
            'courses' => Course::orderBy('id','desc')->where('status','active')->get(),
        ]);
    }    

    public function store(Request $request)
    {
        $id = User::create([
            'name'  =>  $request->name,
            'role'  =>  'customer',
            'password'  =>  Hash::make($request->password),
            'email'  =>  $request->email, 
            'status'  =>  'Active',
        ])->id;
        Customer::create([            
            'phone' =>  $request->phone,
            'user'  =>  $id,
        ]);
        return redirect($request->curl)->with('completed', 'Thank you for Registering with us!');
    }

    public function clogin(Request $request)
    {
        $status = Auth::attempt([
            'email' =>  $request->email,
            'password'  =>    $request->password,
            'status'    =>  1,
        ]);
        if($status){
            $user = User::where('users.email',$request->email)->join('customers','customers.user','=','users.id')->first(['users.*','customers.phone as phone']);
            $request->session()->put([
                'customer_id'  =>  Auth::id(),
                'user_type' =>  'customer',
                'user_id'  =>  Auth::id(),
                'user_email' => $user->email,
                'user_name' => $user->name,
                'user_phone' => $user->phone,
            ]);
            return redirect('/');
        }else{
            return back()->with('fail','Invalid Login Details OR Insufficient Permissions!');
        }
    }


    public function logout(Request $request)
    {
        session()->pull('customer_id');
        session()->pull('user_id');
        session()->pull('user_type');
        return redirect()->to('/')->with('msg','Logout Successfully.');
    }


    public function course($slug)
    {
        return view('front.course',[
            'title'  =>  'Welcome to Website',
            'course' => Course::where('slug',$slug)->first(),
            'lessons' => Lesson::orderBy('id','asc')->where('status','active')->get(),
        ]);
    }

    public function contact(Request $request)
    {
        Contact::create([            
            'name' =>  $request->name,
            'email' =>  $request->email,
            'message' =>  $request->message,
        ]);
        return redirect('/')->with('completed', 'Thank you for Contacting with us!');
    }
}
