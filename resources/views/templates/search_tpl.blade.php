@extends('index')
@section('content')
<div class="box-category-list content-home">
    <div class="container">
        <div class="content-wraper">
            <div class="box-content-cate">
                <h1 class="title-category"><span>Kết quả tìm kiếm</span></h1>
                <div class="list-item-category">
                    @foreach($data as $item)
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
        </div>
    </div>
</div>


@endsection
