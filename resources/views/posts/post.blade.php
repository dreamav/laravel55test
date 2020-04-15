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

@endsection