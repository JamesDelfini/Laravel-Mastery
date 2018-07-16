@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @foreach($blogs As $blog)
                    <div class="card">
                        <img class="card-img-top" src="http://www.staticwhich.co.uk/static/images/products/no-image/no-image-available.png" height="250px">
                        <div class="card-body">
                            <h5 class="card-title"><a href="{{url("blog/".$blog->id)}}" class="card-link">{{$blog->title}}</a></h5>
                            {{-- <p class="card-text">{{$blog->body}}</p> --}}
                            <p class="card-text float-right"><small class="text-muted">Created {{$blog->created_at}}</small></p>
                        </div>
                    </div>
                    <br>
                @endforeach
                {{$blogs->links()}}
            </div>
        </div>
    </div>
@endsection