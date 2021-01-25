@extends('admin.layouts.app')
@section('title', 'Tao san pham moi')
@section('content')
    <h1 style="text-align: center">Edit Product</h1>
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

    <form method="post" action="{{ route('product.update', ['id' => $product->id]) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" value="{{$product->name}}" name="name" class="form-control"  aria-describedby="emailHelp" placeholder="ENTER NAME">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Desc</label>
            <input type="text" value="{{$product->description}}" name="description" class="form-control"  placeholder="Description">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Price</label>
            <input type="text" value="{{$product->price}}" name="price" class="form-control"   placeholder="Price">
        </div>
        <div class="form-group">
            <label for="exampleFormControlFile1">Image</label>

            <input type="file" name="image" class="form-control-file">
            <div>
                <img width="120" src="{{ asset('storage/'. str_replace('public', '', $product->image))}}" alt="">
            </div>
        </div>
        <div class="form-group">
            <label for="exampleFormControlFile1">The loai san pham</label>
            <select name="manufacturer_id" class="form-control" placeholder="manufacturer_id">
                @forelse($manufacturers as $mn)
                    <option selected  value="{{ $mn->id }}">{{ $mn->name }}</option>
                @empty
                    <option>No data</option>
                @endforelse
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlFile1">The loai san pham</label>
            <select name="categories_id" class="form-control" placeholder="categories_id">
                @forelse($categories as $ct)
                    <option selected value="{{ $ct->id }}">{{ $ct->name }}</option>
                @empty
                    <option>No data</option>
                @endforelse
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@stop

