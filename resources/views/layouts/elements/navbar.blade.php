<nav class="navbar navbar-default ">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="assets/img/logo.png" alt=""></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse yamm" id="navigation">
                    <div class="button navbar-right">
                    @if(Auth::check())
                    <div class="btn-group">
                    <button class="navbar-btn nav-button wow bounceInRight login" data-wow-delay="0.45s" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <a href="#">{{Auth::user()->name}}</a>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <li>
                                    <a class="dropdown-item" href="{{ url('profile') }}">
                                        {{ __('Cập nhật thông tin') }}
                                    </a>
                                    </li>
                                <li><a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Đăng xuất') }}
                                    </a>
                                    </li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                    @else
                        <button class="navbar-btn nav-button wow bounceInRight login" data-wow-delay="0.45s">
                            <a href="{{route('login')}}">Đăng Nhập</a>
                        </button>
                    @endif
                    @if(Auth::check())
                        <button class="navbar-btn nav-button wow fadeInRight"  data-wow-delay="0.48s">
                        <a href="{{url('post')}}">Đăng Tin</a>
                        </button>
                    @else
                    <button class="navbar-btn nav-button wow bounceInRight login" data-wow-delay="0.45s">
                            <a href="{{route('login')}}">Đăng Tin</a>
                        </button>
                    @endif
                    </div>
                    <ul class="main-nav nav navbar-nav navbar-right">
                    <li class="wow fadeInDown" data-wow-delay="0.3s"><a class="" href="{{url('/')}}">Trang chủ</a></li>

                    @if(isset($category))
                        @foreach ($category as $row)
                        <li class="dropdown ymm-sw " data-wow-delay="0.1s">
                        <a class="dropdown-toggle active" data-toggle="dropdown" data-hover="dropdown" data-delay="200">{{ $row->name }}<b class="caret"></b></a>
                            <ul class="dropdown-menu navbar-nav">
                                <li>
                                    @if(count($row->BDSTypes) > 0)
                                    @foreach ($row->BDSTypes as $type)
                                <a href="{{url('mua-ban-cho-thue',$type->id) }}.html">{{$type->name}}</a>
                                    @endforeach
                                    @endif
                                </li>
                          </ul>
                        </li>
                        @endforeach
                        @endif



                        <li class="wow fadeInDown" data-wow-delay="0.5s"><a href="{{url('news')}}">Tin Tức</a></li>
                        <li class="wow fadeInDown" data-wow-delay="0.5s"><a href="{{url('contact-us')}}">Về Chúng Tôi</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
