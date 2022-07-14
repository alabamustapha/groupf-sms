@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Create a post</h1>
</div>

<div class="container">
    <div class="row">
        <div class="col">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('posts.save') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Content</label>
                    <textarea name="content" id="content" cols="30" rows="10" class="form-control">{{ old('content') }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Post owner</label>
                    <select name="user_id" id="user_id" class="form-control">
                        <option value="">Select user</option>
                        @foreach ($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <button type="submit" class="btn btn-primary btn-lg"> Add new post</button>
                </div>
            </form>
        </div>


    </div>
@endsection
