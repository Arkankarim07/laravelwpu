
@extends('layout.main')

@section('container')
<div class="container">
  <div class="row justify-content-center mb-5 ">
    <div class="col-md-8">
      <h2>{{$post->title}}</h2>
      <p>
        By <a href="/blog?author={{ $post->author->username }}" class=" text-decoration-none ">{{ $post->author->name }}</a> in 
        <a href="/blog?category=  {{ $post->category->slug }}">{{ $post->category->nama }}</a>
      </p>

      <img src="https://source.unsplash.com/1200x400?{{ $post->category->nama }}" class=" img-fluid " alt="{{ $post->category->nama }}">

      <article class="my-3 fs-5 ">

        {{-- agar bisa memakai html syntax !! --}}
        {!!$post->body!!}
      </article>

    <a href="/blog">Bck to posts</a>
    </div>
  </div>
</div>

@endsection




