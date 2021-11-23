@extends('layouts.admin')

@section('title', 'Trang danh sách khu vực')

@section('content')
<h1>Danh sách các khu vực</h1>
  <a href="/admin/khuvuc/tao" class="btn btn-success">Tạo</a>
  <table class="table">
    <thead>
      <td>#</td>
      <td>Tên</td>
    </thead>
    <tbody>
      @foreach ($areas as $a)
      <tr>
        <td>{{ $a->id }}</td>
        <td>{{ $a->name }}</td>
        <td>
          <a href="/admin/khuvuc/{{ $a->id }}/sua" class="btn btn-primary">Sửa</a>
          <form action="/admin/khuvuc/{{ $a->id }}" method="post" class="d-inline">
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