@extends('index')
@section('content')

<div class="content-home-cate">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-3">
                <div class="crumb">
                    <a href="{{url('')}}">Trang chủ | </a><a href="">Tin tức | </a>
                </div>
                <div class="name_detail">{{$news_detail->name}}</div>
                
            </div>
            <div class="col-xs-12 col-md-9">
                <div class="content_detail">
                    {!! $news_detail->content !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

