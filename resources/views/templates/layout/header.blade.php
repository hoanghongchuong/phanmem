<?php
    $setting = Cache::get('setting');
    $sliders = DB::table('slider')->where('com','gioi-thieu')->where('status',1)->get();
    
?>
<header id="header" class="">
    <div class="menu visible-md visible-lg">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <a href="{{url('')}}" title=""><img src="{{asset('upload/hinhanh/'.$setting->photo)}}" class="img-responsive" alt=""></a>
                </div>
                <div class="col-md-7 pdl-fix">
                    <ul class="navi">
                        <li class="home"><a href="{{url('')}}" class="home">Trang chủ</a></li>
                        <li><a href="{{url('phi-dich-vu')}}">Phí dịch vụ</a></li>
                        <li class="download"><a href="{{url('download')}}">Tải về</a></li>
                        <li class="hardware"><a href="{{url('')}}#hardware" class="hardware">Phần cứng</a></li>
                        <li><a href="{{url('huong-dan')}}" title="">Hướng dẫn</a></li>
                        <li><a href="{{url('')}}#contact" class="contact" title="">Liên hệ</a></li>
                    </ul> 
                </div>
                <div class="col-md-3">
                    <ul class="regis">
                        <li><a href="">Đăng nhập</a></li>
                        <li><a href="">Đăng ký</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="visible-xs visible-sm">
        <div class="hedaer-mobile">
            <div class="" style="text-align: center;"><a href="" title=""><img src="images/logo.png" alt=""></a></div>
            <div class="pull-right" style="margin-top: 20px; margin-left: 5px;">
                <ul class="regis">
                    <li><a href="">Đăng nhập</a></li>
                    <li><a href="">Đăng ký</a></li>
                </ul>
            </div>
        </div>
        <div class="vk-header__search">
            <div class="container">
                
                <a href="#menuMobile" class="menu_Mobile" data-toggle="collapse" class="_btn d-lg-none menu_title"><i class="fa fa-bars"></i> Menu</a>
            </div>
        </div>
        <nav class="vk-header__menu-mobile">
            <ul class="vk-menu__mobile collapse" id="menuMobile">
                
                <li class="home"><a href="{{url('')}}" class="home">Trang chủ</a></li>
                <li><a href="{{url('phi-dich-vu')}}">Phí dịch vụ</a></li>
                <li class="download"><a href="{{url('download')}}">Tải về</a></li>
                <li class="hardware"><a href="{{url('')}}#hardware" class="hardware">Phần cứng</a></li>
                <li><a href="{{url('huong-dan')}}" title="">Hướng dẫn</a></li>
                <li><a href="{{url('')}}#contact" class="contact" title="">Liên hệ</a></li>
                
            </ul>
        </nav>
        
    </div>
    <div class="center-header">
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <h3>Đẳng cấp - hiện đại - tiện dụng</h3>
                    <p>Phần mềm order và quản lý bán hàng thông minh <br> dành riêng cho nhà hàng/ coffe/ trà sữa</p>
                </div>
                <div class="col-md-2"></div>
            </div>
            <div class="row">
                <div class="slider">
                    <div class="col-md-2"></div>
                    <div class="col-md-8"><img src="{{asset('public/images/devices4.png')}}" class="img-responsive" alt=""></div>
                    <div class="col-md-2"></div>
                </div>
                <div class="see-more">
                    <a href=""><img src="{{asset('public/images/seemore.png')}}" alt=""></a>
                </div>
            </div>

        </div>
    </div>

</header><!-- /header -->