@extends('base')
@section('main')
<div class="container-fluid">
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add a post</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('posts.store') }}">
          @csrf
  <div class="form-group">
    <label>Title</label>
    <input type="type" class="form-control" name="title">
  </div>
  <div class="form-group">
    <label>Content</label>
    <textarea class="form-control" name="content" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label>Category</label>
    <select class="form-control" name="category">
      <option value="" disabled selected>Select category</option>
      <option value="html" {{ old('category') === 'html' ? 'selected' : null }}>HTML</option>
      <option value="css" {{ old('category') === 'css' ? 'selected' : null }}>CSS</option>
      <option value="javascript" {{ old('category') === 'javascript' ? 'selected' : null }}>JavaScript</option>
      <option value="php" {{ old('category') === 'php' ? 'selected' : null }}>PHP</option>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Add</button>

</form>
      
  </div>
</div>
</div>
</div>
@endsection