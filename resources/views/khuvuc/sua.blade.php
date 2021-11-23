@extends('layouts.admin')

@section('title', 'Sửa khu vực')

@section('content')
  <h1>Sửa nhà cung cấp</h1>

  <form action="/admin/khuvuc/{{ $areas->id }}/sua" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label>Tên</label>
      <input type="text" class="form-control" placeholder="Nhập tên" name="name" required value="{{ $areas->name }}">
    </div>
    <button type="submit" class="btn btn-primary">Cập nhật</button>
  </form>
@endsection