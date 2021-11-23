@extends('layouts.admin')

@section('title', 'Trang tạo bài viết')

@section('content')

<h1 style="text-align: center;">Tạo bài viết </h1>

  <form action="/admin/baidang/tao" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label>Tên Bài Viết</label>
      <input type="text" class="form-control" placeholder="Nhập tên" name="title" required>
      <label>Ảnh <span class="text-danger">*</span></label>
      <input type="file" class="form-control" name="image" required id="selectImage" accept="image/png, image/gif, image/jpeg">
      <div>
        <img id="image" height="100" class="d-none">
      </div>
      <label>Bài viết</label>
      <input type="text" class="form-control" placeholder="Nhập bài viết" name="content" required>
    </div>
    <button type="submit" class="btn btn-primary mt-3">Tạo</button>
  </form>

@endsection