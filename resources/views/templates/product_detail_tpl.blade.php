@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
    
?>
<div class="crumb">
    <div class="container">
        <div class="row">
            <ol class="breadcrumb">
                <li>
                    <a href="{{url('')}}">Trang chủ</a>
                </li>
                <li><a href="{{url('san-pham')}}">Sản phẩm</a></li>
                <li class="active">{{$product_detail->name}}</li>
            </ol>
        </div>
    </div>
</div>
<div class="content-home box-product-detail">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="box-img-product">
                    <img src="{{asset('upload/product/'.$product_detail->photo)}}" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <h1 class="name_product_detail">{{$product_detail->name}}</h1>
                <p class="price">Giá: {{number_format($product_detail->price)}} vnđ</p>
                <div class="des-product">
                    {!! $product_detail->mota !!}
                </div>
                <div class="box-order vk-calculator">
                    <form action="{{route('addProductToCart')}}" method="post" accept-charset="utf-8">
                        {{csrf_field()}}
                        <input type="hidden" name="product_id" value="{{$product_detail->id}}" placeholder="">
                        <input type="number" name="product_numb" value="1" min="1" class="">
                        <button type="submit" class="vk-btn">Thêm vào giỏ hàng</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="des_detail_product">
                <div class="col-md-12">
                    <h3 class="title-detail">Chi tiết</h3>
                    <div class="detail">
                        {!! $product_detail->content !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
