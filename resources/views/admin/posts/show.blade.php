@extends('admin.layout')

@section('content')
    <div class="pt-5">
        <h1 class="mb-3">{{ $post->title }}</h1>
        <p class="mb-5">{{ $post->description }}</p>
        <img src="{{ $post->img }}" alt="" class="mb-3">

        <div class="mt-5">
            <a class="btn btn-success" href="{{ route('admin.posts.index') }}">Torna alla home</a>

            <a class="btn btn-primary" href="{{ route('admin.posts.edit', $post->id) }}">Modifica</a>

            <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST" class="d-inline-block">
                @csrf
                @method('delete')
                <button class="btn btn-danger" type="submit">Elimina</button>
            </form>
        </div>
    </div>
@endsection