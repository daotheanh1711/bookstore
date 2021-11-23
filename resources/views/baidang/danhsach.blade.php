@extends('layouts.admin')

@section('title', 'Trang danh sách bài viết')

@section('content')

<h1 style="text-align: center;">Danh sách bài viết</h1>
  <a href="/admin/baidang/tao" class="btn btn-success">Tạo</a>
  <table class="table">
    <thead>
      <td>#</td>
      <td>Tên bài viết</td>
      <td>Ảnh</td>
      <td>Bài Viết</td>
    </thead>
    <tbody>
      @foreach ($posts as $p)
      <tr>
        <td>{{ $p->id }}</td>
        <td>{{ $p->title }}</td>
        <td><img src="/{{ $p->image }}" alt="" height="40"></td>
        <td><textarea cols="60" rows="6">{{ $p->content }}</textarea> </td>
        <td>
            <a href="/admin/baidang/{{ $p->id }}/sua" class="btn btn-primary">Sửa</a>
          <form action="/admin/baidang/{{ $p->id }}" method="post" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Xóa</button>  
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

@endsection