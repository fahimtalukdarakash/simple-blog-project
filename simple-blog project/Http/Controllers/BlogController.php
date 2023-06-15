<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    private $blogs, $blog;
    public function addBlogPage()
    {
        return view('blog.add-blog');
    }
    public function create(Request $request)
    {
        Blog::newBlog($request);
        return back()->with('message','Blog info save successfully');
    }
    public function manage()
    {
        $this->blogs = Blog::all();
        return view('blog.manage',['blogs'=>$this->blogs]);
    }
    public function updateBlogPage($id)
    {
        $this->blog = Blog::find($id);
        return view('blog.update',['blog' => $this->blog]);
    }
    public function update(Request $request, $id)
    {
        Blog::updateBlog($request,$id);
        return redirect('/manage-blog')->with('message', 'Blog info update successfully');
    }
    public function delete($id)
    {
        Blog::deleteBlog($id);
        return back()->with('message', 'Blog info delete successfully');
    }
}
