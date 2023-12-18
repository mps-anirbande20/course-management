<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Package;
use App\Models\PackageEnquiry;

class PackagesController extends Controller
{
    public function index()
    {
        return view('admin.packagelist',[
            'page'  =>  'Package',
            'records' => Package::orderBy('id','desc')->get(),
        ]);
    }

    public function create()
    {
        return view('admin.packageform',[
            'page'  =>  'Package',
        ]);
    }

    public function store(Request $request)
    {
        $thumb = 'noimg.png';
        if($request->file('thumb')){
            $thumb = rand().'.'.$request->thumb->extension();
            $request->file('thumb')->move(public_path('uploads/'), $thumb);
        }
        Package::create([
            'title'  =>  $request->title,
            'price'  =>  $request->price,
            'thumb'  =>  $thumb,
            'ptype'  =>  $request->ptype,
            'description'  =>  $request->description,
            'duration'  =>  $request->duration,
            'info'  =>  $request->info,
            'status'  =>  $request->status,   
        ]);
        return redirect('/admin/packages/create')->with('completed', 'Data has been saved!');
    }

    public function edit($id)
    {
        return view('admin.packageform',[
            'page'  =>  'Package',
            'data'  =>  Package::where('id',$id)->first(),
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = Package::where('id',$id)->first();
        $thumb = $data->thumb;
        if($request->file('thumb')){
            $thumb = rand().'.'.$request->thumb->extension();
            $request->file('thumb')->move(public_path('uploads/'), $thumb);
        }
        Package::where('id',$id)->update([
            'title'  =>  $request->title,
            'price'  =>  $request->price,
            'thumb'  =>  $thumb,
            'ptype'  =>  $request->ptype,
            'description'  =>  $request->description,
            'duration'  =>  $request->duration,
            'info'  =>  $request->info,
            'status'  =>  $request->status,
        ]);
        return redirect('/admin/packages/edit/'.$id)->with('completed', 'Data has been saved!');
    }

    public function destroy($id)
    {
        Package::find($id)->delete();
        return redirect('/admin/packages')->with('completed', 'Data has been Deleted!');
    }

    public function query($id)
    {
        return view('admin.packagequeries',[
            'page'  =>  'Package Enqueries',
            'records'  =>  PackageEnquiry::orderBy('id','desc')->where('package',$id)->get(),
        ]);
    }
}
