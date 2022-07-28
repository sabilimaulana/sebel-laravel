@extends('layouts.main')

@section('container')
  @foreach ($categories as $category)
      <h5>
        <a href="/categories/{{ $category->slug }}">{{ $category->name }}</a>
      </h5>
  @endforeach
@endsection

