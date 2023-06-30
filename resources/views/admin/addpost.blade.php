@extends('layouts.admin')
@section('content')
<div class="card mb-4">
    <div class="card-header">
        Add Post
    </div>
    <div class="card-body">
        @if($errors->any())
        <ul class="alert alert-danger list-unstyled">
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif

        <form method='POST' action="{{ route('admin.newpost')}}" enctype="multipart/form-data">
            @csrf   
            <div class="row">
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Title:</label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <input name="title" value="{{old('title')}}" type="text" class="form-control"></input>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    &nbsp;
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Body</label>
                <textarea class="form-control" name="body" rows="3">{{old('body')}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection