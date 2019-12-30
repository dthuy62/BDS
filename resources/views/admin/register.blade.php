@extends('layouts_admin.master')

@section('title')
Quản trị viên | Đăng ký
@endsection
@section('content')

<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Quản lý <small>Vai Trò Đã Đăng Ký</small></h3>
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

            <div class="row">
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

                    <p>Bảng quản lý vai trò người dùng đã đăng ký tài khoản</p>
                    {{-- <a href="{{url('admin/role/create')}}" class="btn btn-primary">Thêm</a> --}}
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                    </div>
                @endif


                    <!-- start project list -->
                    <table class="table table-striped projects">
                      <thead>
                        <tr>
                          <th style="width: 15%">Id</th>
                          <th style="width: 15%">Email</th>
                          <th style="width: 15%">Usertype</th>
                          <th style="width: 15%">Provider</th>
                          <th style="width: 15%">Provider ID</th>

                          <th style="width: 15%">Chỉnh sửa</th>
                        </tr>
                      </thead>
                      <tbody>

                        @foreach($users as $row)
                        <tr>
                          <td>{{$row->id}}</td>
                          <td>
                            <a>{{$row->email}}</a>
                          </td>
                          <td>
                            <a>{{$row->usertype}}</a>
                          </td>
                          <td>
                            <a>{{$row->provider}}</a>
                          </td>
                          <td>
                            <a>{{$row->provider_id}}</a>
                          </td>
                          <td>
                          <a href="/admin/role-register/{{$row->id}}" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> Sửa </a>
                          </td>
                        </tr>
                      </tbody>
                      @endforeach

                    </table>


@endsection

@section('scripts')
<script scr = "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
@endsection
