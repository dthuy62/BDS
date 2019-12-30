@extends('layouts.master')
@section('content')
<div class="page-head">
    <div class="container">
        <div class="row">
            <div class="page-head-content">

            <h4 class="page-title">Mua Bán</h4>

            </div>
        </div>
    </div>
</div>
<div class="properties-area recent-property" style="background-color: #FFF;">
    <div class="container">
        <div class="row">

        <div class="col-md-3 p0 padding-top-40">
            <div class="blog-asside-right pr0">
                <div class="panel panel-default sidebar-menu wow fadeInRight animated" >
                    <div class="panel-heading">
                        <h3 class="panel-title">Tìm kiếm</h3>
                    </div>
                    <div class="panel-body search-widget">
                        <form action="{{url('/search')}}" method="GET" class=" form-inline">
                            <fieldset>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <input type="text" name=key class="form-control" placeholder="Key word">
                                    </div>
                                </div>
                            </fieldset>
                             <fieldset >
                                <div class="row">
                                    <div class="col-xs-12">
                                        <input class="button btn largesearch-btn" value="Tìm kiếm" type="submit">
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>

                <div class="panel panel-default sidebar-menu wow fadeInRight animated">
                    <div class="panel-heading">
                        <h3 class="panel-title">Bất động sản tương tự</h3>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-md-9  pr0 padding-top-40 properties-page">


            <div class="col-md-12 clear">
                    @foreach($bds_type as $row)
                    <div class="col-sm-6 col-md-4 p0">
                        <div class="box-two proerty-item">
                            <div class="item-thumb">
                            <a href="{{url('chi-tiet-bat-dong-san',$row->id)}}" ><img src="{{asset('img/upload/buy')}}{{'/'.$row->image}}" alt="{{$row->title}}"></a>
                            </div>
                            <div class="item-entry overflow">
                            <h5><a href="{{url('chi-tiet-bat-dong-san',$row->id)}}">{{$row->title}}</a></h5>
                                <div class="dot-hr"></div>
                                <span class="pull-left"><b> Diện tích :</b> {{$row->dt}}m </span>
                            <span class="proerty-price pull-right">$ {{$row->price}} Tỷ</span>
                                <p style="display: none;">Suspendisse ultricies Suspendisse ultricies Nulla quis dapibus nisl. Suspendisse ultricies commodo arcu nec pretium ...</p>
                                    {{-- <div class="property-icon">
                                        <img src="layouts/img/icon/bed.png">(5)|
                                        <img src="layouts/img/icon/shawer.png">(2)|
                                        <img src="layouts/img/icon/cars.png">(1)
                                    </div> --}}
                            </div>
                        </div>
                    </div>
                    @endforeach




            </div>


        </div>

        </div>
    </div>
</div>
@endsection

