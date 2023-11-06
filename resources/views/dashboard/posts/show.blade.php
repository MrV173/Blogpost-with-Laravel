@extends('dashboard.layouts.main')

@section('container')

<div class="container">
    <div class="row mb-5">
        <div class="col-lg-8">
            <h2 class="my-3">{{ $post->title }}</h2>
            <a href="/dashboard/posts" class="btn btn-success "><i class="bi bi-arrow-left"></i> Back to all my posts</a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning "><i class="bi bi-feather"></i> Edit</a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger border-0" onclick="return confirm('Are you sure?')">
                  <i class="bi bi-x-circle-fill"></i> Delete
                </button>
              </form>
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
        </div>
    </div>
</div>
     

@endsection