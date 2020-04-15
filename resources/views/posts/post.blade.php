@extends ('layouts.layout')

@section ('content')
@include('posts.partials.post')

<hr>

<div class="comments">
	<ul class="list-group">
		@foreach ($post->comments as $comment)
		<li class="list-group-item">{{ $comment->body }}</li>
		@endforeach
	</ul>
</div>
<hr>
{{--Add Comment--}}
<div class="card">
	<div class="card-block">
		<form action="/posts/{{$post->id}}/comments">
			{{method_field('POST')}}  
			<div class="form-group">
				<textarea name="body" placeholder="your comment here" class="form-control"></textarea>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary">Add comment</button>
			</div>
		</form>
	</div>
</div>


@endsection