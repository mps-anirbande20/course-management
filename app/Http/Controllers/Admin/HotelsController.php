<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hotel;
use App\Models\HotelEnquiry;

class HotelsController extends Controller
{
    public function index()
    {
        return view('admin.hotellist',[
            'page'  =>  'Hotels',
            'records' => Hotel::all(),
        ]);
    }

    public function create()
    {
        return view('admin.hotelform',[
            'page'  =>  'Hotels',
        ]);
    }

    public function store(Request $request)
    {
        $thumb = 'noimg.png';
        if($request->file('thumb')){
            $thumb = rand().'.'.$request->thumb->extension();
            $request->file('thumb')->move(public_path('uploads/'), $thumb);
        }
        Hotel::create([
            'title'  =>  $request->title,
            'price'  =>  $request->price,
            'thumb'  =>  $thumb,
            'location'  =>  $request->location,
            'description'  =>  $request->description,
            'duration'  =>  $request->duration,
            'info'  =>  $request->info,
            'status'  =>  $request->status,   
        ]);
        return redirect('/admin/hotels/create')->with('completed', 'Data has been saved!');
    }

    public function edit($id)
    {
        return view('admin.hotelform',[
            'page'  =>  'Hotels',
            'data'  =>  Hotel::where('id',$id)->first(),
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = Hotel::where('id',$id)->first();
        $thumb = $data->thumb;
        if($request->file('thumb')){
            $thumb = rand().'.'.$request->thumb->extension();
            $request->file('thumb')->move(public_path('uploads/'), $thumb);
        }
        Hotel::where('id',$id)->update([
            'title'  =>  $request->title,
            'price'  =>  $request->price,
            'thumb'  =>  $thumb,
            'location'  =>  $request->location,
            'description'  =>  $request->description,
            'duration'  =>  $request->duration,
            'info'  =>  $request->info,
            'status'  =>  $request->status,
        ]);
        return redirect('/admin/hotels/edit/'.$id)->with('completed', 'Data has been saved!');
    }

    public function destroy($id)
    {
        Hotel::find($id)->delete();
        return redirect('/admin/hotels')->with('completed', 'Data has been Deleted!');
    }

    public function query($id)
    {
        return view('admin.hotelqueries',[
            'page'  =>  'Hotel Enqueries',
            'records'  =>  HotelEnquiry::orderBy('id','desc')->where('hotel',$id)->get(),
        ]);
    }
}
