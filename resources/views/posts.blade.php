@extends('layouts.main')

@section('container')
  @foreach ($posts as $post)
    <article class="mb-5 border-bottom">
      <h2>
        <a href="/blog/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a>
      </h2>
      <h5>By: {{ $post->user->name }}</h5>
      <p>{!! $post->excerpt !!}</p>
    </article>
  @endforeach
@endsection

