@extends ('layouts.layout')

@section ('content')
      @foreach ($posts as $post)
        @include ('posts.partials.post')
      @endforeach
      <nav class="blog-pagination">
        <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">Newer</a>
      </nav>
@endsection