@extends('layouts.app')
@section('content')
<div class="container">
    <h1>All Posts <a href=" {{ route('posts.create') }} "  target="_blank"> New</a></h1>
</div>

<div class="container">
    <div class="row">
        @foreach ($posts as $post)
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Post {{ $post->id }}</h5>
                        <p class="card-text">{{ $post->content }}</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
