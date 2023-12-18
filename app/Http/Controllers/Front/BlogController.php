<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\BlogComment;

class BlogController extends Controller
{
    public function index()
    {
        return view('front.bloglist',[
            'title'  =>  'Blogs',
            'records' => Blog::orderBy('id','desc')->get(),
        ]);
    }

    public function detail($slug)
    {
        $data = Blog::where('slug',$slug)->first();
        return view('front.blogdetail',[
            'title'  =>  $data->title_en,
            'data' => Blog::orderBy('id','desc')->first(),
            'categories'    =>  BlogCategory::all(),
            'latest' => Blog::orderBy('id','desc')->limit(5)->get(),
            'comments'  =>  BlogComment::where('blog',$data->id)->get(),
        ]);
    }

    public function category($slug)
    {
        $category = BlogCategory::where('slug',$slug)->first();
        return view('front.bloglist',[
            'title'  =>  $category->title_en,
            'records' => Blog::where('category',$category->id)->orderBy('id','desc')->get(),
        ]);
    }

    public function comment(Request $request,$slug)
    {
        $blog = Blog::where('slug',$slug)->first();
        BlogComment::create([
            'blog'  =>  $blog->id,
            'name'  =>  $request->name,
            'email'  =>  $request->email,
            'message'  =>  $request->message,
        ]);
        return redirect('/blog/'.$blog->slug)->with('success', 'Thank you for Your Comment.');
    }
}
