@extends('admin.layouts.app')
@section('title', 'Danh sach the loai')
@section('content')
    <h1 style="text-align: center">List Model Machine</h1>
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
        @forelse($manufacturers as $mn)
            <tr>
                <th scope="row">{{ $stt }}</th>
                <td><a href="{{route('manufacturers.edit',['id'=>$mn->id])}}">{{$mn->name }}</a></td>
                <td><a href="{{ route('manufacturers.destroy', ['id' => $mn->id]) }}">Delete</a></td>
            </tr>
            <?php $stt++;?>
        @empty
        @endforelse
        </tbody>
    </table>
@stop

