@extends('layouts.homepage')

@section('title', 'Trang thống kê')

@section('content')

<div class="navbar navbar-expand-md navbar-dark bg-dark mb-4" role="navigation">
    <a class="navbar-brand" href="/">QUANLYCUAHANGSACH</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" >Thông tin</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Facebook</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="dropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Hỗ trợ</a>
                <ul class="dropdown-menu" aria-labelledby="dropdown1">
                    <li class="dropdown-item" href="#"><a>Liên Hệ</a></li>
                    <li class="dropdown-item" href="#"><a>Chăm sóc khách hàng</a></li>
                    <li class="dropdown-item" href="#"><a>Đăng ký cửa hàng</a></li>
                    <li class="dropdown-item" href="#"><a>Bất động sản</a></li>
                </ul>
            </li>   
        </ul>
        <form class="form-inline my-2 my-lg-0" method="GET" action="/">
            <input class="form-control mr-sm-2" placeholder="Nhập tên khu vực muốn tìm kiếm" name="q">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm kiếm</button>
        </form>
    </div>
</div>

<div class="container mt-5">
    @foreach($posts as $post)
    <div class="media mt-2">
    <img class="align-self-start mr-3" height="180" width="250" src="{{ $post->image }}" alt="Generic placeholder image">
    <div class="media-body">
        <a href="#" class="mt-0" style="color: red;font-size:20px;">{{ $post->title }}</a>
        <p>{{ $post->content }}</p>
    </div>
    </div>
    @endforeach
</div>
<div class="container mt-3">
    <h1 style="text-align: center;">DANH SÁCH CÁC CỬA HÀNG SÁCH</h1>
</div>


<div class="container">
    <div class="row">
            @foreach($stores as $store)
            <div class="col-md-4 mt-5">
                <div class="card">
                    <img class="card-img-top" height="200" src="{{ $store->image }}" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title text-bold">{{ $store->name }}</h4>
                        <p class="card-text">Địa chỉ: {{ $store->address }}</p>
                        <div class="card-text">SĐT: {{ $store->phone }}</div>
                        <div class="card-text"> {{ $store->email }}</div>
                        <div class="card-text text-danger">Khu vực: {{ $store->area->name }}</div>
                        <a href="/cuahang/{{ $store->id }}/baocao" class="btn btn-primary">In báo cáo</a>
                    </div>
                </div>
            </div>
            @endforeach
    </div>
</div>
@endsection

