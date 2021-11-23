@extends('layouts.admin')

@section('title', 'Trang sửa bài viết')

@section('content')

<h1 style="text-align: center;">Sửa bài viết</h1>

  <form action="/admin/baidang/{{ $posts->id }}/sua" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">    
      <label>Tên <span class="text-danger">*</span></label>
      <input type="text" class="form-control" placeholder="Nhập tên" name="title" required value="{{ $posts->title }}">
    </div>
    <div class="form-group">
      <label>Ảnh</label>
      <input type="file" class="form-control" name="image" id="selectImage" accept="image/png, image/gif, image/jpeg">
    </div>
    <div>
        <img id="image" height="100" src="/{{ $posts->image }}">
    </div>
    <div class="form-group">
    <label>Bài viết</label>
      <input type="text" class="form-control" placeholder="Nhập bài viết" name="content" required value="{{ $posts->content }}">
    </div>
    <button type="submit" class="btn btn-primary">Cập nhật</button>
  </form>

@endsection