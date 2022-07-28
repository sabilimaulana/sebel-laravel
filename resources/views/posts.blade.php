@extends('layouts.main')

@section('container')
  <h2>{{ $title }}</h2>

  @foreach ($posts as $post)
    <article class="mb-5 border-bottom">
      <h2>
        <a href="/blog/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a>
      </h2> 
      <h6>By: <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></h6>
      <p>{!! $post->excerpt !!}</p>
    </article>
  @endforeach
@endsection

