@extends('index')
@section('content')
<div class="content-box content-fix">
    <div class="container">
        <div class="row">
            <div class="box-phi">
                <h1>{{$data->name}}</h1>
                <div class="content-phi">
                    {!! $data->content !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection