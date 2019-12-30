@extends('layouts_admin.master')
@section('title')
    Quản trị viên | Bất động sản
@endsection
@section('content')

<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Quản lý <small>Bất động sản</small></h3>
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
                <h3>Tạo mới bất động sản</h3>
                </div>
                <div class="card-body" >
                    <div class="row">
                    <div class="col-md-12">
                    <form action="{{route('buy.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                            <div class=form-group>
                                <label>Tiêu đề :</label>
                                <input type="text" name="title" class="form-control" placeholder="Tiêu đề">
                                @if($errors->has('title'))
							<div class="alert alert-danger">{{ $errors->first('title') }}</div>
	                    @endif
                                </div>

                                <div class="form-group">
                                  <label>Danh mục</label>
                                  <select name="idCategory" class="form-control cateBDS">
                                    @foreach ($category as $cate)
                                  <option value="{{$cate->id}}">{{$cate->name}}</option>
                                    @endforeach
                                  </select>
                                </div>
                                <div class="form-group">
                                  <label>Loại bất động sản</label>
                                  <select name="idBDSType" class="form-control typeBDS">
                                    @foreach ($type as $type)
                                  <option value="{{$type->id}}">{{$type->name}}</option>
                                    @endforeach
                                  </select>
                                </div>

                                <div class=form-group>
                                  <label>Dịa chỉ :</label>
                                  <input type="text" name="address" class="form-control" placeholder="Địa chỉ">
                                  @if($errors->has('address'))
							<div class="alert alert-danger">{{ $errors->first('address') }}</div>
	                    @endif
                                  </div>

                              <div class="form-group">
                                <label>Mô tả :</label>
                                <div>
                                <textarea class="form-control" rows="5" id="demo" name="desc" placeholder="Điền mô tả cho bất động sản"></textarea>
                                @if($errors->has('desc'))
							<div class="alert alert-danger">{{ $errors->first('desc') }}</div>
	                    @endif
                                </div>
                              </div>


                              <div class=form-group>
                                <label for="dt"  class="col-sm-3">Diện tích :</label>
                                <div class="col-sm-3">
                                <input type="number" name="dt"  class="form-control" placeholder="Nhập diện tích ">
                                @if($errors->has('dt'))
							<div class="alert alert-danger">{{ $errors->first('dt') }}</div>
	                    @endif
                                </div>

                                <div class=form-group>
                                  <label for="price" class="col-sm-3">Giá :</label>
                                  <div class="col-sm-3">
                                  <input type="text" name="price" step="100" class="form-control" placeholder="Nhập giá bất động sản">
                                  @if($errors->has('price'))
							<div class="alert alert-danger">{{ $errors->first('price') }}</div>
	                    @endif
                                  </div>
                                  <div class="form-group">
                                    <label>Trạng thái</label>
                                    <select class="form-control" name="status">
                                        <option value="1">Hiển Thị</option>
                                        <option value="0">Không Hiển Thị</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                  <label>Ảnh</label>
                                  <input type="file" name="image" class="form-control">
                                  @if($errors->has('image'))
							<div class="alert alert-danger">{{ $errors->first('image') }}</div>
	                    @endif
                            </div>
                            <button type="submit" class="btn btn-success">Thêm</button>
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
