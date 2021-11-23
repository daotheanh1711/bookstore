@extends('layouts.admin')

@section('title', 'Tạo thông tin cửa hàng')

@section('content')
  <h1 style="text-align: center;">Tạo thông tin cửa hàng</h1>

  <form action="/admin/cuahang/tao" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label>Tên</label>
      <input type="text" class="form-control" placeholder="Nhập tên" name="name" required>
      <label>Địa Chỉ</label>
      <input type="text" class="form-control" placeholder="Nhập tên" name="address" required>
      <label>Ảnh <span class="text-danger">*</span></label>
      <input type="file" class="form-control" name="image" required id="selectImage" accept="image/png, image/gif, image/jpeg">
      <div>
        <img id="image" height="100" class="d-none">
      </div>
      <label>SĐT</label>
      <input type="text" class="form-control" placeholder="Nhập tên" name="phone" required>
      <label>Email</label>
      <input type="text" class="form-control" placeholder="Nhập tên" name="email" required>
      <label>Khu vực <span class="text-danger">*</span></label>
      <select name="area_id" class="form-control">
        @foreach ($areas as $a)
          <option value="{{ $a->id }}">{{ $a->name }}</option>
        @endforeach
      </select>
    </div>
    <button type="submit" class="btn btn-primary mt-3">Tạo</button>
  </form>
@endsection