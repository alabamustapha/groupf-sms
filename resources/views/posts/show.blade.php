@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Post {{ $post->id }} {{ $post->user->name }}</h1>
</div>

<div class="container">
    <div class="row">
        <div class="col">
            {!! $post->content !!}
        </div>


    </div>
@endsection
