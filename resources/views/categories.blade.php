@extends('layouts.main')

@section('container')
    <h1 class="mb-3">Categories</h1> 

    <div class="container">
        <div class="row">

            @foreach ($categories as $category)
                         
            <div class="col-md-4">
                <a href="/posts?category={{ $category->slug }}" >
                <div class="card text-bg-dark">
                    <img src="https://images.tokopedia.net/img/KRMmCm/2023/8/10/06246435-9d85-4849-a741-aa09daf7fa11.jpg" 
                        class="card-img-top img-fluid" alt="post" style="width: 500px; height: 300px">
                    <div class="card-img-overlay d-flex align-items-center p-0">
                      <h5 class="card-title text-center flex-fill fs-3 p-4" style="background-color: rgba(0, 0, 0, 0.7)">{{ $category->name }}</h5>
                    </div>
                  </div>
                </a>
            </div>
            
            @endforeach

        </div>
    </div>
    
@endsection