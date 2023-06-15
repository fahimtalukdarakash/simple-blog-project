@extends('master')

@section('title')
    Update Blog Page
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card card-body">
                        <h1 class="text-center text-success">Update Blog Form</h1>
                        <p class="text-success text-center">{{session('message')}}</p>
                        <hr/>
                        <form action="{{route('update-blog', ['id'=>$blog->id])}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-md-3">Blog Title</label>
                                <div class="col-md-9">
                                    <input type="text" value="{{$blog->blog_title}}" class="form-control" name="blog_title"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Blog Author</label>
                                <div class="col-md-9">
                                    <input type="text" value="{{$blog->blog_author}}" class="form-control" name="blog_author"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Blog Image</label>
                                <div class="col-md-9">
                                    <input type="file" class="form-control" name="blog_image"/>
                                    <img src="{{asset($blog->blog_image)}}" alt="" height="100" width="120"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Blog Description</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" name="blog_description">{{$blog->blog_description}}</textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-success" value="Update Product"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
