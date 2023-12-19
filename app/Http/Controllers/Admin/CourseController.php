<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\PackageEnquiry;

class CourseController extends Controller
{
    public function index()
    {
        return view('admin.courselist',[
            'page'  =>  'Course',
            'records' => Course::orderBy('id','desc')->get(),
        ]);
    }

    public function create()
    {
        return view('admin.courseform',[
            'page'  =>  'Course',
        ]);
    }

    public function store(Request $request)
    {
        $thumb = 'noimg.png';
        if($request->file('thumb')){
            $thumb = rand().'.'.$request->thumb->extension();
            $request->file('thumb')->move(public_path('uploads/'), $thumb);
        }
        Course::create([
            'title'  =>  $request->title,
            'slug'  =>  slug($request->title),
            'price'  =>  $request->price,
            'thumb'  =>  $thumb,
            'info'  =>  $request->info,
            'status'  =>  $request->status,   
        ]);
        return redirect('/admin/courses/create')->with('completed', 'Data has been saved!');
    }

    public function edit($id)
    {
        return view('admin.courseform',[
            'page'  =>  'Course',
            'data'  =>  Course::where('id',$id)->first(),
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = Course::where('id',$id)->first();
        $thumb = $data->thumb;
        if($request->file('thumb')){
            $thumb = rand().'.'.$request->thumb->extension();
            $request->file('thumb')->move(public_path('uploads/'), $thumb);
        }
        Course::where('id',$id)->update([
            'title'  =>  $request->title,
            'slug'  =>  slug($request->title),
            'price'  =>  $request->price,
            'thumb'  =>  $thumb,
            'info'  =>  $request->info,
            'status'  =>  $request->status,   
        ]);
        return redirect('/admin/courses/edit/'.$id)->with('completed', 'Data has been saved!');
    }

    public function destroy($id)
    {
        Course::find($id)->delete();
        return redirect('/admin/courses')->with('completed', 'Data has been Deleted!');
    }

    public function query($id)
    {
        return view('admin.packagequeries',[
            'page'  =>  'Course Enqueries',
            'records'  =>  PackageEnquiry::orderBy('id','desc')->where('package',$id)->get(),
        ]);
    }
}
