@extends('layouts.reader')
@section('title', 'Ian\'s Blog')
@section('subtitle', 'Welcome to Ian\'s Blog')
@section('content')
@foreach($viewData['posts'] as $post)
<div class="card mb-3 p-3">
    <h1 class="fs-3">{{$post['title']}}</h1>
    <p>{{$post['body']}}</p>
</div>
@endforeach
@endsection
