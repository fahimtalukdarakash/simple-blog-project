@extends('master')

@section('title')
    Add Blog
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card card-body">
                        <h1 class="text-center text-success">Add Blog Form</h1>
                        <p class="text-success text-center">{{session('message')}}</p>
                        <hr/>
                        <form action="{{route('new-blog')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-md-3">Blog Title</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="blog_title"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Author</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="blog_author"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Blog Image</label>
                                <div class="col-md-9">
                                    <input type="file" class="form-control" name="blog_image"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Blog Description</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" name="blog_description"></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-success" value="Create New Blog"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
