@extends('backend.layout_admin.index')
@section('content-main')
<div class="container">
    <div class="row">
        <h2>Bảng Products</h2>
    </div>
    <div class="row">
        @if(!empty($data))
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Danh mục</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $value) <tr>
                    <th scope="row">{{$value->id}}</th>
                    <th scope="row">{{$value->name}}</th>
                    <th scope="row">{{$value->price}}</th>
                    <th scope="row">{{$value->quantity}}</th>
                    <th scope="row">{{$value->danhmuc}}</th>

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