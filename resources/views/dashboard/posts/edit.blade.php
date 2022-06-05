@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Post</h1>
  </div>

  <div class="col-lg-10">
  <form method="post" action="/dashboard/posts/{{ $post->id }}">
    @method('put')
    @csrf
    <div class="mb-3">
      <label for="tittle" class="form-label">Tittle</label>
      <input type="text" class="form-control" id="tittle" name="tittle" value="{{ old('tittle',$post->tittle) }}" required>
    </div>

    <div class="mb-3">
        <label for="content" class="form-label">Content</label>
        <input type="text" class="form-control" id="content" name="content" value="{{ old('content',$post->content) }}" required>
      </div>

    <div class="mb-3">
        <label for="category" class="form-label">Category</label>
        <input type="number" class="form-control" id="category" name="category_id" value="{{ old('category_id',$post->category_id) }}" required>
      </div>

    <div class="mb-3">
        <label for="user" class="form-label">User</label>
        <input type="number" class="form-control" id="user" name="user_id" value="{{ old('user_id',$post->user_id) }}" required>
      </div>

      <div class="mb-3">
        <label for="inputText" class="form-label">Image URL</label>
            <input type="url" class="form-control @error('image') is-invalid @enderror" name="image"
                required value="{{ old('image',$post->image) }}">
            @error('image')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>

    
    <button type="submit" class="btn btn-primary">Update post</button>
  </form>
</div>
@endsection