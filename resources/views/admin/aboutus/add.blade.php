@extends('layouts_admin.master')
@section('title')
    Quản trị viên | Về chúng tôi
@endsection
@section('content')

<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Quản lý <small>Thông tin Công Ty</small></h3>
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
                    <h2></h2>
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
                <h3>Về chúng tôi</h3>
                </div>
                <div class="card-body" >
                    <div class="row">
                    <div class="col-md-12">
                    <form action="{{url('admin/aboutus/store')}}" method="POST">
                        @csrf
                            <div class=form-group>
                                <label>Tiêu đề :</label>
                                <input type="text" name="title" class="form-control" placeholder="Tiêu đề">
                                @if($errors->has('title'))
							<div class="alert alert-danger">{{ $errors->first('title') }}</div>
	                            @endif
                                </div>


                                <div class=form-group>
                                  <label>Dịa chỉ :</label>
                                  <input type="text" name="address" class="form-control" placeholder="Địa chỉ">
                                  @if($errors->has('address'))
							<div class="alert alert-danger">{{ $errors->first('address') }}</div>
	                    @endif
                                  </div>




                              <div class=form-group>
                                <label for="dt">Số điện thoại :</label>
                                <input type="number" name="dt"  class="form-control" placeholder="Nhập số điện thoại ">
                                @if($errors->has('dt'))
							<div class="alert alert-danger">{{ $errors->first('phone') }}</div>
	                    @endif
                                </div>

                                <div class=form-group>
                                  <label for="price">Email :</label>
                                  <input type="email" name="email"  class="form-control" placeholder="Email">
                                  @if($errors->has('email'))
							<div class="alert alert-danger">{{ $errors->first('email') }}</div>
	                    @endif
                            <button type="submit" class="btn btn-success">Thêm</button>
                            <a href="/admin" class="btn btn-danger">Hủy bỏ</a>
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
