@extends('layouts.master')

@section('content')
<div class="content-area home-area-1 recent-property" style="background-color: #FCFCFC; padding-bottom: 55px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-sm-12 text-center page-title">
                        <!-- /.feature title -->
                    <h5>Tìm thấy {{count($bds)}}</h5>
                        {{-- <p>Đinh Thanh Huy</p> --}}
                    </div>
                </div>

                <div class="row">
                    @if(isset($bds))
                    @foreach ($bds as $row)
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
                        <div class="col-sm-6 col-md-3 p0">
                            <div class="box-tree more-proerty text-center">
                                <div class="item-tree-icon">
                                    <i class="fa fa-th"></i>
                                </div>
                                <div class="more-entry overflow">
                                    <h5><a href="property-1.html" >CAN'T DECIDE ? </a></h5>
                                    <h5 class="tree-sub-ttl">Show all properties</h5>
                                    <button class="btn border-btn more-black" value="All properties">All properties</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
