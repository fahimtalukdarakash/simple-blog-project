<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    private static $blog, $image, $imageName,$directory, $imageUrl;
    public static function imageUpload($request)
    {
        self::$image = $request->file('blog_image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = "img/upload/";
        self::$image->move(self::$directory, self::$imageName);
        return self::$directory.self::$imageName;
    }
    protected $fillable = ['blog_title', 'blog_author', 'blog_image', 'blog_description'];
    public static function newBlog($request)
    {
        self::$imageUrl = self::imageUpload($request);
        self::$blog = new Blog();
        self::$blog->blog_title = $request->blog_title;
        self::$blog->blog_author = $request->blog_author;
        self::$blog->blog_image = self::$imageUrl;
        self::$blog->blog_description = $request->blog_description;
        self::$blog->save();
    }
    public static function updateBlog($request,$id)
    {
        self::$blog = Blog::find($id);
        if($request->file('blog_image'))
        {
            if(file_exists(self::$blog->blog_image))
            {
                unlink(self::$blog->blog_image);
            }
            self::$imageUrl = self::imageUpload($request);
        }
        else
        {
            self::$imageUrl = self::$blog->blog_image;
        }
        self::$blog->blog_title = $request->blog_title;
        self::$blog->blog_author = $request->blog_author;
        self::$blog->blog_image = self::$imageUrl;
        self::$blog->blog_description = $request->blog_description;
        self::$blog->save();
    }
    public static function deleteBlog($id)
    {
        self::$blog = Blog::find($id);
        if(file_exists(self::$blog->blog_image))
        {
            unlink(self::$blog->blog_image);
        }
        self::$blog->delete();
    }
}
