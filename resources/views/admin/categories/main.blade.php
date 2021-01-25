@extends('admin.layouts.app')
@section('title', 'Danh sach the loai')
@section('content')
    <h1 style="text-align: center ">List Category</h1>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Stt</th>
            <th scope="col">Name</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>

        <?php  $stt = 1;?>
        @forelse($categories as $c)
            <tr>
                <th scope="row">{{ $stt }}</th>
                <td><a href="{{route('category.edit',['id'=>$c->id])}}">{{$c->name }}</a></td>
                <td><a href="{{ route('category.destroy', ['id' => $c->id]) }}">Delete</a></td>
            </tr>
            <?php $stt++;?>
        @empty
        @endforelse
        </tbody>
    </table>
@stop

