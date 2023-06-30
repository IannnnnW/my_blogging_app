@extends('layouts.admin')
@section('content')
@foreach($viewData['posts'] as $post)
<div class="d-flex flex-row justify-content-between card p-2 mb-3">
    <h1 class="text-center">{{$post['title']}}</h1>
    <div  class="d-flex flex-column justify-content-between" >
        <a class="btn"href="{{ route('admin.editpost', $post->getId()) }}"><i class="bi bi-pencil"></i> Edit</a>
        <form method='POST' action="{{ route('admin.deletepost', $post->getId()) }}">
            @csrf
            @method('DELETE')
            <a class="btn"><i class="bi bi-x-lg"></i> Delete</a class="btn">
        </form>
    </div>
</div>
@endforeach
@endsection