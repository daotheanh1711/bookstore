@extends('layouts.admin')

@section('title', 'Trang danh sách cửa hàng')

@section('content')
<h1 style="text-align: center;">Danh sách các của hàng</h1>
  <a href="/admin/cuahang/tao" class="btn btn-success">Tạo</a>
  <table class="table">
    <thead>
      <td>#</td>
      <td>Tên</td>
      <td>Địa Chỉ</td>
      <td>Ảnh</td>
      <td>SĐT</td>
      <td>Email</td>
      <td>Khu vực</td>
    </thead>
    <tbody>
      @foreach ($stores as $s)
      <tr>
        <td>{{ $s->id }}</td>
        <td>{{ $s->name }}</td>
        <td>{{ $s->address }}</td>
        <td><img src="/{{ $s->image }}" alt="" height="40"></td>
        <td>{{ $s->phone }}</td>
        <td>{{ $s->email }}</td>
        <td>{{ $s->area->name }}</td>
        <td>
          <a href="/admin/cuahang/{{ $s->id }}/sua" class="btn btn-primary">Sửa</a>
          <form action="/admin/cuahang/{{ $s->id }}" method="post" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Xóa</button>  
            
          </form>
          <a href="/admin/cuahang/{{ $s->id }}/baocao" class="btn btn-success">In báo cáo</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection