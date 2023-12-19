<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lesson;
use App\Models\Course;
use App\Models\Mcq;

class LessonController extends Controller
{
    public function index()
    {
        return view('admin.lessonlist',[
            'page'  =>  'Lesson',
            'records' => Lesson::all(),
        ]);
    }

    public function create()
    {
        return view('admin.lessonform',[
            'page'  =>  'Lesson',
            'courses' => Course::where('status','Active')->get(),
        ]);
    }

    public function store(Request $request)
    {
        $audio = 'noimg.png';
        if($request->file('audio')){
            $audio = rand().'.'.$request->audio->extension();
            $request->file('audio')->move(public_path('uploads/'), $audio);
        }
        $image = 'noimg.png';
        if($request->file('image')){
            $image = rand().'.'.$request->image->extension();
            $request->file('image')->move(public_path('uploads/'), $image);
        }
        Lesson::create([
            'title'  =>  $request->title,
            'status'  =>  $request->status,
            'audio'  =>  $audio,
            'course'  =>  $request->course,
            'image'  =>  $image,
        ]);
        return redirect('/admin/lessons/create')->with('completed', 'Data has been saved!');
    }

    public function edit($id)
    {
        return view('admin.lessonform',[
            'page'  =>  'Lesson',
            'data'  =>  Lesson::where('id',$id)->first(),
            'courses' => Course::where('status','Active')->get(),
        ]);
    }

    public function update(Request $request, $id)
    {
        $lesson = Lesson::where('id',$id)->first();
        $audio = $lesson->audio;
        if($request->file('audio')){
            $audio = rand().'.'.$request->audio->extension();
            $request->file('audio')->move(public_path('uploads/'), $audio);
        }
        $image = $lesson->image;
        if($request->file('image')){
            $image = rand().'.'.$request->image->extension();
            $request->file('image')->move(public_path('uploads/'), $image);
        }
        Lesson::where('id',$id)->update([
            'title'  =>  $request->title,
            'status'  =>  $request->status,
            'audio'  =>  $audio,
            'course'  =>  $request->course,
            'image'  =>  $image,
        ]);
        return redirect('/admin/lessons/edit/'.$id)->with('completed', 'Data has been saved!');
    }

    public function destroy($id)
    {
        Lesson::find($id)->delete();
        return redirect('/admin/lessons')->with('completed', 'Data has been Deleted!');
    }













    public function mcq(Request $request)
    {
        return view('admin.mcqlist',[
            'page'  =>  'Mcq',
            'records' => Mcq::where('lesson',$request->segment(4))->get(),
        ]);
    }

    public function mcqcreate()
    {
        return view('admin.mcqform',[
            'page'  =>  'Mcq',
            'courses' => Mcq::where('status','Active')->get(),
        ]);
    }

    public function mcqstore(Request $request)
    {
        Mcq::create([
            'lesson'  =>  $request->lesson,
            'status'  =>  $request->status,
            'quest'  =>  $request->quest,
            'opt_1'  =>  $request->opt_1,
            'opt_2'  =>  $request->opt_2,
            'opt_3'  =>  $request->opt_3,
            'opt_4'  =>  $request->opt_4,
            'ans'   =>  $request->ans,
        ]);
        return redirect('/admin/lessons/mcq/create/'.$request->lesson)->with('completed', 'Data has been saved!');
    }

    public function mcqedit($id)
    {
        return view('admin.mcqform',[
            'page'  =>  'Mcq',
            'data'  =>  Mcq::where('id',$id)->first(),
        ]);
    }

    public function mcqupdate(Request $request, $id)
    {
        Mcq::where('id',$id)->update([
            'lesson'  =>  $request->lesson,
            'status'  =>  $request->status,
            'quest'  =>  $request->quest,
            'opt_1'  =>  $request->opt_1,
            'opt_2'  =>  $request->opt_2,
            'opt_3'  =>  $request->opt_3,
            'opt_4'  =>  $request->opt_4,
            'ans'   =>  $request->ans,
        ]);
        return redirect('/admin/lessons/mcq/edit/'.$id)->with('completed', 'Data has been saved!');
    }

    public function mcqdestroy($id)
    {
        Mcq::find($id)->delete();
        return redirect('/admin/lessons/mcq')->with('completed', 'Data has been Deleted!');
    }
}
