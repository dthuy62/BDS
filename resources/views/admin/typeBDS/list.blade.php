@extends('layouts_admin.master')

@section('title')
Quản trị viên | Loại Bất Động Sản
@endsection
@section('content')

<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Quản lý <small>Loại Bất Động Sản</small></h3>
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
                    <h2>Bất động sản Mua </h2>
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

                    <p>Bảng quản lý Loại bất động sản</p>
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                    </div>
                @endif
                  <div class="pull-right">{{ $category->links() }}</div>
                    {{-- <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#addTypeModal" data-whatever="@getbootstrap">Thêm</button> --}}
                  <a href="{{url('admin/typeBDS/create')}}" class="btn btn-primary">Thêm</a>
                    <!-- start project list -->
                    <table class="table table-striped projects">
                      <thead>
                        <tr>
                          <th style="width: 15%">STT</th>
                          <th style="width: 15%">Danh mục</th>
                          <th style="width: 15%">Tên</th>
                          <th style="width: 15%">Slug</th>
                          <th style="width: 15%">Trạng thái</th>

                          <th style="width: 15%">Chỉnh sửa</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($category as $row)


                        <tr>
                        <td>{{$row->id}}</td>
                          <td>
                            <a>{{$row->category->name}}</a>
                          </td>
                          <td>
                            <a>{{$row->name}}</a>
                          </td>
                          <td>
                            <a>{{$row->slug}}</a>
                          </td>
                          <td>
                            <a>
                              @if($row->status==1)
                              Hiện
                              @else
                              Ẩn
                              @endif
                            </a>
                          </td>
                          <td>
                          <button data-id="{{ $row->id }}" class="btn btn-primary editType" data-toggle="modal" data-target="#editType" title="{{"Sửa".$row->name}}" type="button"><i class="fa fa-edit"></i>Sửa</button>
                        <button data-id="{{ $row->id }}" class="btn btn-danger deleteType" data-toggle="modal" data-target="#deleteType" title="{{"Xóa".$row->name}}" type="button"><i class="fa fa-trash-alt"></i>Xóa</button>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>

                    </table>




@include('admin.typeBDS.edit')
@include('admin.typeBDS.delete')
@endsection

@section('scripts')
<script scr = "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
@endsection
