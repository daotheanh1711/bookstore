@extends('layouts.admin')

@section('title', 'Sửa thông tin cửa hàng')

@section('content')
  <h1 style="text-align: center;">Sửa cửa hàng</h1>

  <form action="/admin/cuahang/{{ $store->id }}/sua" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">    
      <label>Tên <span class="text-danger">*</span></label>
      <input type="text" class="form-control" placeholder="Nhập tên" name="name" required value="{{ $store->name }}">
    </div>
    <div class="form-group">
      <label>Địa Chỉ <span class="text-danger">*</span></label>
      <input type="text" class="form-control" placeholder="Nhập địa chỉ" name="address" required value="{{ $store->address }}">
    </div>
    <div class="form-group">
      <label>Ảnh</label>
      <input type="file" class="form-control" name="image" id="selectImage" accept="image/png, image/gif, image/jpeg">
    </div>
    <div>
        <img id="image" height="100" src="/{{ $store->image }}">
    </div>
    <div class="form-group">
      <label>SĐT <span class="text-danger">*</span></label>
      <input type="text" class="form-control" placeholder="Nhập đơn vị" name="phone" required value="{{ $store->phone }}">
    </div>
    <div class="form-group">
      <label>Email <span class="text-danger">*</span></label>
      <input type="text" class="form-control" placeholder="Nhập đơn vị" name="email" required value="{{ $store->email }}">
    </div>
    <div class="form-group">
      <label>Khu vực <span class="text-danger">*</span></label>
      <select name="area_id" class="form-control">
        @foreach ($areas as $a)
          <option value="{{ $a->id }}" {{ $store->area_id == $a->id ? 'selected' : '' }}>{{ $a->name }}</option>
        @endforeach
      </select>
    </div>
    <button type="submit" class="btn btn-primary">Cập nhật</button>
  </form>
@endsection