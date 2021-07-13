@extends('backend.layout_admin.index')
@section('content-main')
<div class="container">
    <div class="row">
        <h2>Bảng User</h2>
    </div>
    <div class="row">
        @if(!empty($data))
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $value) <tr>
                    <th scope="row">{{$value->id}}</th>
                    <th scope="row">{{$value->name}}</th>
                </tr>
                @endforeach
            </tbody>
        </table>
        @else
        <h2>Không có dữ liệu</h2>
        @endif
    </div>
</div>
@endsection