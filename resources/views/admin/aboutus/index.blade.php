@extends('layouts_admin.master')

@section('title')
Quản trị viên | Về chúng tôi
@endsection
@section('content')
<div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Quản lý <small>Danh Mục Bất Động Sản</small></h3>
        </div>

        <div class="title_right">
          <div class="col-md-5 col-sm-5   form-group pull-right top_search">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Tìm kiếm">
              <span class="input-group-btn">
                <button class="btn btn-secondary" type="button">Đi</button>
              </span>
            </div>
          </div>
        </div>
      </div>

      <div class="clearfix"></div>

      <div class="">
        <div class="col-md-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>Vai Trò</h2>
              <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="#">Settings 1</a>
                      <a class="dropdown-item" href="#">Settings 2</a>
                    </div>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">

              <p>Bảng quản lý về chúng tôi</p>
              @if (session('status'))
              <div class="alert alert-success" role="alert">
              {{ session('status') }}
              </div>
          @endif


          <a href="{{url('admin/aboutus/create')}}" class="btn btn-primary">Thêm</a>

              <!-- start project list -->
              <table class="table table-striped projects">
                <thead>
                  <tr>

                    <th>Tiêu đề</th>
                    <th>Mô tả </th>
                    <th>Điện thoại</th>
                    <th>Email</th>

                    <th>Chỉnh sửa</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($about as $row)


                  <tr>
                  <td>{{$row->title}}</td>
                    <td>
                      <a>{{$row->desc}}</a>
                    </td>
                    <td>
                      <a>{{$row->phone}}</a>
                    </td>
                    <td>
                        <a>{{$row->email}}</a>
                      </td>

                    <td>
                    <button data-id="{{ $row->id }}" class="btn btn-primary edit" data-toggle="modal" data-target="#edit" title="{{"Sửa".$row->title}}" type="button"><i class="fa fa-edit"></i>Sửa</button>

                    </td>
                  </tr>
                  @endforeach
                </tbody>

              </table>
@endsection
