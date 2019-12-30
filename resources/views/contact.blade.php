@extends('layouts.master')
@section('content')
<div class="page-head">
    <div class="container">
        <div class="row">
            <div class="page-head-content">
            <h1 class=page-title>Liên hệ với chúng tôi</h1>
            </div>
        </div>
    </div>

</div>

<div class="content-area recent-property padding-top-40" style="background-color: #FFF;">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="" id="contact1">
                            <div class="row">
                                <div class="col-sm-4">
                                    <h3><i class="fa fa-map-marker"></i> Địa chỉ</h3>
                                    <p>Hòa Quý, Ngũ Hành Sơn
                                        <br>Đà Nẵng
                                        <br>45Y 73J
                                        <br>
                                        <strong>Việt Nam</strong>
                                    </p>
                                </div>
                                <!-- /.col-sm-4 -->
                                <div class="col-sm-4">
                                    <h3><i class="fa fa-phone"></i> Trung tâm</h3>
                                    <p class="text-muted">Nếu có bất cứ thắc mắc vui lòng gọi đến số</p>
                                    <p><strong>+84 555 444 333</strong></p>
                                </div>
                                <!-- /.col-sm-4 -->
                                <div class="col-sm-4">
                                    <h3><i class="fa fa-envelope"></i>Thư hỗ trợ</h3>
                                    <p class="text-muted">Please feel free to write an email to us or to use our electronic ticketing system.</p>
                                    <ul>
                                        <li><strong><a href="mailto:">info@company.com</a></strong>   </li>
                                        <li><strong><a href="#">Ticketio</a></strong> - our ticketing support platform</li>
                                    </ul>
                                </div>
                                <!-- /.col-sm-4 -->
                            </div>
                            <!-- /.row -->
                            <hr>
                            <div id="map"></div>
                            <hr>
                             <!-- Contact -->
                            <h2>Liên hệ với chúng tôi</h2>
                            @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (session('warning'))
                        <div class="alert alert-warning">
                            {{ session('warning') }}
                        </div>
                    @endif
                            <form method="POST" action="{{route('contactus.store')}}">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                                            <label for="firstname"></label>
                                            <input type="text" class="form-control" name="name" placeholder="Họ và tên *"  required>
                                            @if ($errors->has('name'))
										<span class="help-block">
											<strong>{{ $errors->first('name') }}</strong>
										</span>
				                         @endif
                                        </div>

                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group  {{ $errors->has('email') ? ' has-error' : '' }}">
                                            <label for="email"></label>
                                            <input type="text" class="form-control" name="email" placeholder="Email">
                                            @if ($errors->has('email'))
										<span class="help-block">
											<strong>{{ $errors->first('email') }}</strong>
										</span>
				                         @endif
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                    <div class="form-group {{ $errors->has('subject') ? ' has-error' : '' }}">
                                        <input type="text" name="subject" class="form-control" placeholder="Vấn đề liên hệ *"  />
                                        @if ($errors->has('subject'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('subject') }}</strong>
                                                    </span>
                                         @endif
                                    </div>
                                </div>
                                    <div class="col-sm-12">
                                        <div class="form-group  {{ $errors->has('message') ? ' has-error' : '' }}">
                                            <label for="subject"></label>
                                            <textarea name="message" rows="5" class="form-control" placeholder="Nội dung liên hệ"></textarea>
                                            @if ($errors->has('message'))
										<span class="help-block">
											<strong>{{ $errors->first('message') }}</strong>
										</span>
				                         @endif
                                        </div>
                                    </div>
                                    <div class="col-sm-12 text-center">
                                        <button type="submit" name="btnSubmit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send message</button>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
