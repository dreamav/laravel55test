@extends ('layouts.layout')

@section ('content')
	<h1>Create a post</h1>
<hr>
	<form method="post" action="/posts">
		{{csrf_field()}}
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name='title'>
  </div>
  <div class="form-group">
    <label for="body">Body</label>
    <textarea name="body" id="body" class="form-control" cols="30" rows="10"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Publish</button>
</form>

@if ($errors)
<div class="form-group">
<div class="alert alert-danger">
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
  </ul>
</div>
</div>
@endif
@endsection