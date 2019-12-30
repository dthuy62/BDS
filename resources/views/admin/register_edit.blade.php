@extends('layouts_admin.master')
@section('title')
    Quản trị viên | Chỉnh sửa
@endsection
@section('content')

<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Quản lý <small>Vai Trò Đã Đăng Ký</small></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 form-group pull-right top_search">
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
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                <h3>Chỉnh sửa vai trò của người dùng đã đăng ký</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                    <div class="col-md-6">
                    <form action="/admin/role-register/update/{{ $users->id }}" method="POST">
                        @csrf
                        {{ method_field('PUT') }}
                            <div class=form-group>
                                <label>Tên người dùng</label>
                                <input type="text" name="name" value="{{ $users->name }}" class="form-control">
                                </div>

                            <div class=form-group>
                                <label>Vai trò</label>
                                <select name="usertype" class="form-control">
                                <option value="">Không có gì hết</option>
                                <option value="admin">Quản trị viên</option>
                                <option value="vendor">Nhà cung cấp</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-success">Cập nhật</button>
                            <a href="/role-register" class="btn btn-danger">Hủy bỏ</a>
                            </form>
                    </div>

                </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')

@endsection
