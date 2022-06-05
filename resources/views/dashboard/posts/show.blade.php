@extends('dashboard.layouts.main')

@section('container')

<div class="container">
    <div class="row ">
        <div class="col-md-8">
            
                <h2 class="mb-3">{{ $post->tittle }}</h2>
        
                <p>Ditulis oleh : <strong>{{ $post->user->name }}</strong> dalam category <strong>{{ $post->category->name }}</strong></p>

                <a href="/dashboard/posts" class="btn btn-info mb-3"><span data-feather="arrow-left"></span>Back to Article</a>

                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
            
            <article class="my-3 fs-5">
                {{ $post->content }}
            </article>
        
        </div>
    </div>
</div>


@endsection