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
                @foreach($loiich as $item)
                <div class="col-md-4 item">
                    <img src="{{asset('upload/hinhanh/'.$item->photo)}}" alt="">
                    <h4>{{$item->name}}</h4>
                    <div class="des">
                        {!! $item->content !!}
                    </div>
                </div>
                @endforeach
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
                   {!! $about_mota->content !!}
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
