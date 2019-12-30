@extends('layouts.master')

@section('content')
<div class="page-head">
    <div class="container">
        <div class="row">
            <div class="page-head-content">
            <h1 class=page-title>Tin tức bất động sản</h1>
            </div>
        </div>
    </div>
    <div class="content-area blog-page padding-top-40" style="background-color: #FCFCFC; padding-bottom: 55px;">
        <div class="container">
            <div class="row">
                <div class="blog-lst col-md-12 pl0">
                    @foreach ($new as $row)
                    <section class="post">
                        <div class="text-center padding-b-50">
                        <h2 class="wow fadeInLeft animated">{{$row->title}}</h2>
                            <div class="title-line wow fadeInRight animated"></div>
                        </div>


                        <div class="image wow fadeInLeft animated">
                            <a href="single.html">

                                <img src="{{$row->thumbnail}}" class="img-responsive" alt="Example blog post alt">


                            </a>
                        </div>
                    <p class="intro">{{$row->description}}</p>
                        <p class="read-more">
                        <a href="{{url('detail-new',$row->id)}}" class="btn btn-default btn-border">Tiếp tục đọc</a>
                        </p>
                    </section>

                    @endforeach



                </div>
            </div>

        </div>
        {{-- <div class="pull-right">{{ $new->links() }}</div> --}}
    </div>
@endsection
