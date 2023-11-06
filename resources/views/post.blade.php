@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h2 class="mb-3">{{ $post->title }}</h2>
            <p>By: <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in 
                <a href="/posts?category={{  $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
                @if ($post->image)
                <div style="max-height: 350px; overflow:hidden">
                    <img src="{{ asset('storage/' . $post->image) }}" 
                    class="card-img-top img-fluid mt-3" alt="post">
                </div>
                @else
                  <img src="https://images.tokopedia.net/img/KRMmCm/2023/8/10/06246435-9d85-4849-a741-aa09daf7fa11.jpg" 
                  class="card-img-top img-fluid mt-3" alt="post">
                @endif
            <article class="my-3 fs-5">
                {!! $post->body !!}
            </article>

            
        <a href="/posts" class="text-decoration-none d-block mt-3">Back To Post</a>
        </div>
    </div>
</div>
     
@endsection