<?php
    $setting = Cache::get('setting');    
?>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xs-12" id="contact">
                <form action="{{route('postContact')}}" id="contact-form" method="post" accept-charset="utf-8">
                    {{csrf_field()}}
                    <div class="form-group">
                       <label for="">Name:</label>
                       <input type="text" class="form-control" name="name" required="">
                    </div>
                    <div class="form-group">
                       <label for="">Email:</label>
                       <input type="email" class="form-control" name="email" required="">
                    </div>
                    <div class="form-group">
                       <label for="">Phone:</label>
                       <input type="text" class="form-control" name="phone" required="">
                    </div>
                    <div class="form-group">
                       <label for="">Message:</label>
                       <textarea name="" class="form-control" required="" rows="5" cols="20"></textarea>
                    </div>
                    <div class="btn-send">
                        <!-- <a href="javscript:;" title="" class="btn-submit"><img src="{{asset('public/images/send.png')}}" alt=""></a> -->
                        <button type="submit" class="btn-submit">Send</button>
                    </div>
                </form>
            </div>
           <div class="col-md-6 col-xs-12 right-footer">
                <div class="name-title">Liên hệ</div>
                <p style="text-align: center;"><img src="{{asset('public/images/ngang.png')}}" alt="" class="ngang"></p>
                <div class="list-social">
                   <a href="{{$setting->facebook}}" target="_blank" title=""><img src="{{asset('public/images/facebook.png')}}" alt=""></a>
                   <a href="{{$setting->twitter}}" target="_blank" title=""><img src="{{asset('public/images/twitter.png')}}" alt=""></a>
                   <a href="{{$setting->skype}}" title="" target="_blank"><img src="{{asset('public/images/prinet.png')}}" alt=""></a>
                   <a href="{{$setting->youtube}}" title="" target="_blank"><img src="{{asset('public/images/in.png')}}" alt=""></a>
                </div>
                <h4>Address:</h4>
                <p>{{$setting->address}}</p>
                <div class="col-md-4 pdl-0">
                    <h4>Phone:</h4>
                    <p>{{$setting->phone}}</p>
                </div>
                <div class="col-md-4">
                    <h4>Email:</h4>
                    <p>{{$setting->email}}</p>
                </div>
           </div>
        </div>
        <div class="row bottom-footer">
            <div class="col-md-4">COPYRIGHT 2019 BY HUNGTHINHADS.COM</div>
            <div class="col-md-2"></div>
            <div class="col-md-6">
                <ul class="menu-footer navi">
                    <li><a href="{{url('')}}">Trang chủ</a></li>
                    <li><a href="{{url('phi-dich-vu')}}">Phí dịch vụ</a></li>
                    <li><a href="{{url('download')}}">Tải về</a></li>
                    <li><a href="{{url('')}}#hardware">Phần cứng</a></li>
                    <li><a href="{{url('huong-dan')}}">Hướng dẫn</a></li>
                    <li><a href="{{url('')}}#contact">Liên hệ</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>