@extends('layouts.master')
@section('content')
<div class="content-area blog-page padding-top-40" style="background-color: #FCFCFC; padding-bottom: 55px;">
    <div class="container">
        <div class="row">
            <div class="blog-lst col-md-12 pl0">
                <section id="id-100" class="post single">

                    <div class="post-header single">
                        <div class="">
                        <h4 class="wow fadeInLeft animated">{{$new->title}}</h4>
                            <div class="title-line wow fadeInRight animated"></div>
                        </div>

                        <div class="image wow fadeInRight animated">
                            <img src="{{$new->thumbnail}}" class="img-responsive" alt="Example blog post alt">
                        </div>
                    </div>

                    <div id="post-content" class="post-body single wow fadeInLeft animated">

                            {!!$new->content!!}

                    </div>


                </section>

                <section class="about-autor">

                </section>



                <section id="comment-form" class="add-comments">
                    <h4 class="text-uppercase wow fadeInLeft animated">Bình luận</h4>
                    <form>
                        <div class="row wow fadeInLeft animated">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="name">Tên <span class="required">*</span>
                                    </label>
                                    <input class="form-control" id="name" type="text">
                                </div>
                            </div>
                        </div>

                        <div class="row wow fadeInLeft animated">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="email">Email <span class="required">*</span>
                                    </label>
                                    <input class="form-control" id="email" type="text">
                                </div>
                            </div>
                        </div>

                        <div class="row wow fadeInLeft animated">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="comment">bình luận <span class="required">*</span>
                                    </label>
                                    <textarea class="form-control" id="comment" rows="4"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row wow fadeInLeft animated">
                            <div class="col-sm-12 text-right">
                                <button class="btn btn-primary"><i class="fa fa-comment-o"></i> Đăng bình luận</button>
                            </div>
                        </div>
                    </form>
                </section>
            </div>
        </div>

    </div>
</div>
@endsection
