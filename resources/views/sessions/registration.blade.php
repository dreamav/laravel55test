@extends ('layouts.layout')

@section ('content')
<h1>Registration</h1>

<form action="/register" method="post">
	{{ csrf_field() }}
	<div class="form-group">
		<label for="name">Name</label>
		<input type="text" class="form-control" id="name" name="name">
	</div>
	<div class="form-group">
		<label for="email">Email</label>
		<input type="email" class="form-control" id="email" name="email">
	</div>
	<div class="form-group">
		<label for="password">Password</label>
		<input type="password" class="form-control" id="password" name="password">
	</div>
	<div class="form-group">
		<label for="password_confirmation">Password confirmation</label>
		<input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-primary">Register</button>
	</div>
		@include('posts.partials.errors')
</form>


@endsection