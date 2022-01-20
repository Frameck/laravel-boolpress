@extends('admin.layout')

@section('content')
    <h1 class="pt-5">
        Bentornato/a {{ Auth::user()->name }}
    </h1>
@endsection