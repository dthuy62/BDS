@extends('layouts.master')

@section('content')
<div class="page-head">
            <div class="container">
                <div class="row">
                    <div class="page-head-content">
                        <h1 class="page-title">Tài khoản mới / Đăng nhập </h1>
                    </div>
                </div>
            </div>
        </div>

         <!-- End page header -->


        <!-- register-area -->
        <div class="register-area" style="background-color: rgb(249, 249, 249);">
            <div class="container">
            @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                <div class="col-md-6">
                    <div class="box-for overflow">
                        <div class="col-md-12 col-xs-12 register-blocks">
                            <h2>Tạo tài khoản mới : </h2>
                            <form action="{{ route('register') }}" method="POST">
                            @csrf
                                <div class="form-group">
                                    <label for="name">{{ __('Tên đầy đủ') }}</label>
                                    <input id="name" type="text" class="form-control" name="name" placeholder="Tên đầy đủ">
                                </div>
                                <div class="form-group">
                                    <label for="email">{{ __('Email') }}</label>
                                    <input id="email" type="email" class="form-control"name="email"  placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label for="password">{{ __('Mật khẩu') }}</label>
                                    <input id="password" type="password" class="form-control"name="password" required autocomplete="new-password"  placeholder="Mật khẩu">
                                </div>
                                <div class="form-group">
                                    <label for="password-confirm">{{ __('Nhập lại mật khẩu') }}</label>
                                    <input id="password-confirm" type="password" class="form-control"name="password_confirmation" required autocomplete="new-password"  placeholder="Nhập lại mật khẩu">
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-default">{{ __('Đăng ký')}}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                                        <!-- Login -->
                <div class="col-md-6">
                    <div class="box-for overflow">
                        <div class="col-md-12 col-xs-12 login-blocks">
                            <h2>Đăng nhập : </h2>
                            <form action="{{route('login')}}" method="POST">
                            @csrf
                                <div class="form-group">
                                    <label for="email">{{ __('Email') }}</label>
                                    <input id="email" type="email" class="form-control"name="email">
                                </div>
                                <div class="form-group">
                                    <label for="password">{{ __('Mật khẩu') }}</label>
                                    <input id="password" type="password" class="form-control"name="password">
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-default">{{ __('Đăng nhập') }}</button>
                                </div>
                            </form>
                            <br>

                            <h2>Đăng nhập với mạng xã hội :  </h2>

                            <p>
                            <a class="login-social" href="#"><i class="fa fa-facebook"></i>&nbsp;Facebook</a>
                            <a class="login-social" href="{{ url('/auth/redirect/google') }}"><i class="fa fa-google-plus"></i>&nbsp;Gmail</a>
                            <a class="login-social" href="#"><i class="fa fa-twitter"></i>&nbsp;Twitter</a>
                            </p>
                        </div>

                    </div>
                </div>

            </div>
        </div>
@endsection

