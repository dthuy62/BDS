@extends('layouts.master')
@section('slide')
<div class="slider-area">
            <div class="slider">
                <div id="bg-slider" class="owl-carousel owl-theme">

                    <div class="item"><img src="{{asset('layouts/img/slide1/slider-image-1.jpg')}}" alt="GTA V"></div>
                    <div class="item"><img src="{{asset('layouts/img/slide1/slider-image-2.jpg')}}" alt="The Last of us"></div>
                    <div class="item"><img src="{{asset('layouts/img/slide1/slider-image-1.jpg')}}" alt="GTA V"></div>

                </div>
            </div>
            <div class="slider-content">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12">
                        <h2>WELCOME TO ĐINH THANH HUY</h2>

                        <div class="search-form wow pulse" data-wow-delay="0.8s">

                        <form action="{{url('/search')}}" method="GET" class=" form-inline">
                                <div class="form-group">
                                    <input type="text" name="key" class="form-control" placeholder="Từ khóa">
                                </div>

                                <button class="btn search-btn" type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
@section('content')
<div class="content-area home-area-1 recent-property" style="background-color: #FCFCFC; padding-bottom: 55px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-sm-12 text-center page-title">
                        <!-- /.feature title -->
                        <h2>BẤT ĐỘNG SẢN CẦN BÁN</h2>
                        <p>Đinh Thanh Huy</p>
                    </div>
                </div>

                <div class="row">
                    @if(isset($bdsmua1))
                    @foreach ($bdsmua1 as $row)
                    <div class="proerty-th">
                            <div class="col-sm-6 col-md-3 p0">
                                <div class="box-two proerty-item">
                                    <div class="item-thumb">
                                    <a href="{{url('chi-tiet-bat-dong-san',$row->id)}}" ><img src="{{asset('img/upload/buy')}}{{'/'.$row->image}}" alt="{{$row->name}}"></a>
                                    </div>
                                    <div class="item-entry overflow">
                                    <h5><a href="{{url('chi-tiet-bat-dong-san',$row->id)}}" >{{$row->title}} </a></h5>
                                        <div class="dot-hr"></div>
                                        <span class="pull-left"><b>Area :</b> {{$row->dt}} m2 </span>
                                    <span class="proerty-price pull-right">{{$row->price}} Tỷ</span>
                                    </div>
                                </div>
                            </div>
                    @endforeach
                    @endif
                    </div>
                    <div class="pull-right">{{ $bdsmua1->links() }}</div>
                </div>

                <div class="row">
                        <div class="col-md-10 col-md-offset-1 col-sm-12 text-center page-title">
                            <!-- /.feature title -->
                            <h2>BẤT ĐỘNG SẢN CHO THUÊ</h2>
                            <p>Đinh Thanh Huy</p>
                        </div>
                    </div>

                    <div class="row">
                        @if(isset($bdsmua2))
                            @foreach ($bdsmua2 as $row)
                            <div class="proerty-th">
                                    <div class="col-sm-6 col-md-3 p0">
                                        <div class="box-two proerty-item">
                                            <div class="item-thumb">
                                            <a href="" ><img src="{{asset('img/upload/buy')}}{{'/'.$row->image}}" alt="{{$row->name}}"></a>
                                            </div>
                                            <div class="item-entry overflow">
                                                <h5><a href="{{url('chi-tiet-bat-dong-san',$row->id)}}" >{{$row->title}} </a></h5>
                                                <div class="dot-hr"></div>
                                                <span class="pull-left"><b>Area :</b> {{$row->dt}} m2 </span>
                                            <span class="proerty-price pull-right">{{$row->price}} Tỷ</span>
                                            </div>
                                        </div>
                                    </div>
                            @endforeach
                            @endif

                            </div>
                            <div class="pull-right">{{ $bdsmua2->links() }}</div>
                        </div>
            </div>

        </div>

@endsection
