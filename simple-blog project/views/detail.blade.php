@extends('master')
@section('title')
    Blog Detail
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <img src="{{asset($singleBlog->blog_image)}}" alt=""/>
                        <div class="card-img-overlay">

                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-body">
                        <h1>{{$singleBlog->blog_title}}</h1>
                        <h4>{{$singleBlog->blog_author}}</h4>
                        <p>{{$singleBlog->blog_description}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
