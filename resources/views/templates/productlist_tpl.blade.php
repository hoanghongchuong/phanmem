@extends('index')
@section('content')
<div class="crumb">
    <div class="container">
        <div class="row">
            <ol class="breadcrumb">
                <li>
                    <a href="{{url('')}}">Trang chủ</a>
                </li>
                <li class="active">Sản phẩm</li>
            </ol>
        </div>
    </div>
</div>

<div class="content-home content-cate-product">
    <div class="container">
        <!-- <h2 class="title_home">Sản phẩm</h2>
        <div class="dongke"><span></span></div> -->
        <div class="box-product-home">
            <div class="col-md-3 left pdr-0 pdl-0">
                <div class="title-cate"><h4>Danh mục sản phẩm</h4></div>
                <div class="list-category">
                    @foreach($cate_pro as $category)
                        <p class=""><a href="{{url('san-pham/'.$category->alias)}}" title="{{$category->name}}">{{$category->name}}</a></p>
                    @endforeach
                </div>
                <div class="list-category box-support">
                    <div class="title-cate"><h4>Hỗ trợ trực tuyến</h4></div>
                    @foreach($partners as $p)
                        <div class="box1">
                            <p><img src="{{asset('upload/banner/'.$p->photo)}}" alt=""></p>
                            <p>SĐT: {{$p->phone}}</p>
                            <p>Email: {{$p->email}}</p>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-9 pdl-0 right">
                <div class="box-cate1">
                    <div class="top-head">
                        <div class="pull-left"><span class="name-cate">{{$product_cate->name}}</span></div>
                    </div>
                    <div class="list-item-product">
                        @foreach($products as $item)
                        <div class="col-md-4 mb-30">
                            <a href="{{url('san-pham/'.$item->alias.'.html')}}" title="{{$item->name}}">
                                <img src="{{asset('upload/product/'.$item->photo)}}" alt="{{$item->name}}">
                                <p class="product_name name_news"><a href="{{url('san-pham/'.$item->alias.'.html')}}" title="{{$item->name}}">{{$item->name}}</a></p>
                            </a>
                            <p class="price">Giá: {{number_format($item->price)}} vnđ/kg</p>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="pagination"></div>
            </div>
        </div>
    </div>
</div>
@endsection
