@extends('master')
@section('title')
    Home
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
           <div class="row">
               @foreach($blogs as $blog)
               <div class="col-md-4 mb-3">
                   <div class="card rounded-0">
                       <img src="{{asset($blog->blog_image)}}" alt="" height="280"/>
                       <div class="card-body">
                           <h4>{{$blog->blog_title}}</h4>
                           <h5>{{$blog->blog_author}}</h5>
                           <hr/>
                           <a href="{{route('detail', ['id'=>$blog->id])}}" class="btn btn-success">Detail</a>
                       </div>
                   </div>
               </div>
               @endforeach
           </div>
        </div>
    </section>
@endsection
