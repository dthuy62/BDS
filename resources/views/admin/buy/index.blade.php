@extends('layouts_admin.master')

@section('title')
Quản trị viên | Mua
@endsection
@section('content')

<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Quản lý <small>Bất động sản cần mua</small></h3>
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

                    <p>Bảng quản lý danh mục bất động sản cần mua</p>
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                    </div>
                @endif
                  {{-- <div class="pull-right">{{ $buy->links() }}</div> --}}
                    {{-- <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#addBuyModal" data-whatever="@getbootstrap">Thêm</button> --}}
                    <a href="{{url('admin/buy/create')}}" class="btn btn-primary">Thêm</a>
                    <!-- start project list -->
                    <table class="table table-striped projects">
                      <thead>
                        <tr>
                          <th>STT</th>
                          <th>Danh mục</th>
                          <th>Loại BDS</th>
                          <th>Tiêu đề</th>
                          {{-- <th>Địa chỉ</th>
                          <th>Mô tả</th> --}}
                          <th>Ảnh</th>
                          <th>Diện tích</th>
                          <th>Giá</th>
                          <th>Trạng thái</th>



                          <th>Chỉnh sửa</th>
                        </tr>
                      </thead>
                      <tbody>
                       @foreach ($buy as $row)
                        <tr>
                        <td>{{$row->id}}</td>
                        <td>{{$row->category->name}}</td>
                        <td>{{$row->bdsType->name}}</td>
                        <td>{{$row->title}}</td>
                        {{-- <td>{{$row->address}}</td>
                        <td>{!!$row->desc!!}</td> --}}
                        <td>
                          <img src="{{asset('img/upload/buy')}}{{'/'.$row->image}}" width="100" height="100">
                        </td>
                        <td>{{$row->dt}} m2</td>
                        <td>{{$row->price}} Tỷ</td>
                    <td>
                      @if($row->status == 1)
                      {{ 'Hiển Thị' }}
                  @else
                      {{ 'Không Hiển Thị ' }}
                  @endif
                    </td>
                          <td>
                        <button data-id="{{ $row->id }}" class="btn btn-primary editBuy" data-toggle="modal" data-target="#editBuy" title="{{"Sửa".$row->title}}" type="button"><i class="fa fa-edit"></i>Sửa</button>
                        <button data-id="{{ $row->id }}" class="btn btn-danger deleteBuy" data-toggle="modal" data-target="#deleteBuy" title="{{"Xóa".$row->title}}" type="button"><i class="fa fa-trash-alt"></i>Xóa</button>
                          </td>
                        </tr>

                      </tbody>
                      @endforeach
                      <div class="pull-right">{{ $buy->links() }}</div>
                    </table>

                    @include('admin.buy.delete')
                    @include('admin.buy.edit')
        {{-- EDIT --}}



@endsection

@section('scripts')
<script scr = "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
@endsection
