<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class HomeController extends Controller
{
    private $blogs=[], $singleBlog;
    public function index()
    {
        $this->blogs = Blog::all();
        return view('home',['blogs'=>$this->blogs]);
    }
    public function about()
    {
        return view('about');
    }
    public function detail($id)
    {
        $this->singleBlog = Blog::find($id);
        return view('detail',['singleBlog'=>$this->singleBlog]);
    }
}
