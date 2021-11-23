@extends('layouts.admin')

@section('title', 'Tạo khu vực')

@section('content')
  <h1>Tạo nhà cung cấp</h1>

  <form action="/admin/khuvuc/tao" method="POST">
    @csrf
    <div class="form-group">
      <label>Tên</label>
      <input type="text" class="form-control" placeholder="Nhập tên" name="name" required>
    </div>
    <button type="submit" class="btn btn-primary">Tạo</button>
  </form>
@endsection