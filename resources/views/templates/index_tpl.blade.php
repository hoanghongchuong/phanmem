@extends('index')
@section('content')
<?php
$setting = Cache::get('setting');
$sliders = DB::table('slider')->where('status',1)->where('com','gioi-thieu')->orderBy('id','desc')->first();
?>
<div class="content-box">
    <div class="container">
        <div class="row quytrinh" id="service">
            <div class="col-md-5">
               <div class="name-title">{{$quytrinh->name}}</div>
               <p><img src="{{asset('public/images/ngang.png')}}" alt="" class="ngang"></p>
            </div>
            <div class="col-md-2 hidden-xs" style="text-align: center;"><img src="{{asset('public/images/doc.png')}}" alt=""></div>
            <div class="col-md-5">
               <div class="des-short">
                   {!! $quytrinh->content !!}
               </div>
            </div>
            <div class="col-md-12">
                <div class="box-img">
                    <img src="{{asset('upload/hinhanh/'.$quytrinh->photo)}}" class="img-responsive" alt="">
                </div>
            </div>
        </div>
        <div class="row loiich">
            <div class="col-md-5"></div>
            <div class="col-md-2 hidden-xs" style="text-align: center;"><img src="{{asset('public/images/doc.png')}}" alt=""></div>
            <div class="col-md-5"><div class="name-title">Lợi ích</div>
               <p><img src="{{asset('public/images/ngang.png')}}" alt="" class="ngang"></p>
            </div>
            <div class="list-item">
                <div class="col-md-4 item">
                    <img src="{{asset('public/images/l1.png')}}" alt="">
                    <h4>Sử dụng trên mọi thiết bị</h4>
                    <div class="des">
                        Với giao diện thống nhất trực quan, sử dụng dễ dàng cả khi bạn sử dụng máy tính bàn hay các thiết bị di động như ipad, iphone, tblet,...
                    </div>
                </div>
                <div class="col-md-4 item">
                    <img src="{{asset('public/images/l2.png')}}" alt="">
                    <h4>An toàn và bảo mật</h4>
                    <div class="des">
                        Công nghệ điện toán đám mây giúp bạn lưu trữ thông tin 1 cách an toàn và bảo mật.
                    </div>
                </div>
                <div class="col-md-4 item">
                    <img src="{{asset('public/images/l3.png')}}" alt="">
                    <h4>Quản lý mọi lúc mọi nơi</h4>
                    <div class="des">
                        Nắm bắt tình hình kinh doanh ở bất cứ đâu theo thời gian thực để có sự cả thiện phù hợp đem lại hiệu quả cao
                    </div>
                </div>
                <div class="col-md-4 item">
                    <img src="{{asset('public/images/l4.png')}}" alt="">
                    <h4>Quản lý kho, xuất kho tự động</h4>
                    <div class="des">
                        Công nghệ Print Cloud giúp bạn in hóa đơn từ bất kì thiết bị nào kết nối với máy in.
                    </div>
                </div>
                <div class="col-md-4 item">
                    <img src="{{asset('public/images/l5.png')}}" alt="">
                    <h4>Tối giản chi phí</h4>
                    <div class="des">
                        Giảm chi phí vận hành tối ưu nhân sự và thời gian quản lý làm tăng năng suất công việc.
                    </div>
                </div>
                <div class="col-md-4 item">
                    <img src="{{asset('public/images/l4.png')}}" alt="">
                    <h4>Thúc đẩy doanh số</h4>
                    <div class="des">
                        Phong cách phục vụ chuyên nghiệp mang lại sự hài lòng cho khách hàng, thúc đẩy kinh doanh.
                    </div>
                </div>
            </div>
        </div>
        <div class="row phancung" id="hardware">
            <div class="col-md-5">
               <div class="name-title">Phần cứng</div>
               <p><img src="{{asset('public/images/ngang.png')}}" alt="" class="ngang"></p>
            </div>
            <div class="col-md-2 hidden-xs" style="text-align: center;"><img src="{{asset('public/images/doc.png')}}" alt=""></div>
            <div class="col-md-5">
               <div class="des-short">
                   Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
               tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
               quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
               consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
               cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
               proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
               </div>
            </div>

            <div class="list-product">
                @foreach($products as $product)
                <div class="col-md-3 box-item">
                    <img src="{{asset('upload/product/'.$product->photo)}}" alt="" class="img-responsive">
                </div>
                @endforeach
            </div>
            <div class="col-md-12 box-load-more">
                <p style="text-align: center; margin-top: 30px; margin-bottom: 40px;"><a href="" title=""><img src="{{asset('public/images/loadmore.png')}}" alt=""></a></p>
            </div>
        </div>
    </div>
</div>
@endsection
