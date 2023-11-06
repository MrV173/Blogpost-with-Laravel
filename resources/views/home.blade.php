@extends('layouts.main')

@section('container')
<div class="text-center mt-5 mb-4">
    <h1>SAY BLOG</h1>
    <span class="fst-italic">Discover, Learn, Connect: Where Stories Come to Life</span>
</div>  
<div class="row justify-content-center mt-5">
    <div class="col-md-6">
        <form action="/posts">
            @if (request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}">
            @endif
            @if (request('author'))
                <input type="hidden" name="category" value="{{ request('author') }}">
            @endif
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
                <button class="btn btn-info text-white" type="submit">Search</button>
              </div>
        </form>
    </div>
</div>
@endsection
