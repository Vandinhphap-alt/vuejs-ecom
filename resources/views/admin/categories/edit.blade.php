@extends('admin.layouts.app')
@section('title', 'Edit the loai')
@section('content')
    <h1 style="text-align: center">Edit News</h1>
    <h1>{{ (session('message') ? session('message') : " ") }}</h1>
    <div class="error">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

    <form method="post" action="{{ route('category.update', ['id' => $category->id]) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="exampleInputEmail1 margin-left-3px">Name</label>
            <input type="text" value="{{$category->name}}" name="name" class="form-control"  aria-describedby="emailHelp" placeholder="ENTER NAME">
        </div>
        <div class="form-group">
            <label for="exampleFormControlFile1">Image</label>

            <input type="file" name="image" class="form-control-file">
            <div>
                <img width="120" src="{{ asset('storage/'. str_replace('public', '', $news->image))}}" alt="">
            </div>
        </div>
        <button type="submit" class="btn btn-primary margin-left-3px">Update Here</button>
    </form>
@stop

