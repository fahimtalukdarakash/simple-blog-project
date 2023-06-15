@extends('master')

@section('title')
    manage Blog
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-body">
                        <h1 class="text-center text-success">All Blog Info</h1>
                        <p class="text-success text-center">{{session('message')}}</p>
                        <hr/>
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>SL</th>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Image</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($blogs as $blog)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$blog->blog_title}}</td>
                                    <td>{{$blog->blog_author}}</td>
                                    <td>
                                        <img src="{{asset($blog->blog_image)}}" alt="" height="60" width="80"/>
                                    </td>
                                    <td>{{$blog->blog_description}}</td>
                                    <td>
                                        <a href="{{route('update-blog',['id'=>$blog->id])}}" class="btn btn-success btn-sm">Edit</a>
                                        <a href="{{route('delete-blog',['id'=>$blog->id])}}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this?');">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
