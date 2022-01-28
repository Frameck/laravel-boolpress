@extends('admin.layout')

@section('main-content')
    <div class="row row-cols-1 row-cols-md-2 g-4 mt-5">
        @foreach($postList as $post)
            <div class="col mb-3">
            <div class="card pt-2" style="min-height: 250px">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">{{ $post->description }}</p>
                    <a href="{{ route('admin.posts.show', $post->slug) }}" class="btn-link">Visualizza post</a>
                </div>
            </div>
            </div>
        @endforeach
    </div>    
@endsection