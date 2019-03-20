@extends('index')
@section('content')
<div class="content-box content-fix">
    <div class="container">
        <div class="row mrb-20 mrt-20">
            <div class="col-md-3" id="">
                <div class="nav" id="side-menu">                       
                    <div class="panel-group" id="accordion2" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-defaultx">                                
                            <a role="button" class="item-question" data-toggle="collapse" data-parent="#accordion2" href="#collapse1a" aria-expanded="true" aria-controls="collapse1a">
                             Tổng quan</a>                                
                            <div id="collapse1a" class="panel-collapse collapse in" role="tabpanel">
                                <div class="panel-body">
                                  <a href="">Tổng quan đăng ký và sử dụng</a>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-defaultx">
                          <a class="item-question collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapse2a" aria-expanded="false" aria-controls="collapse2a">
                            Đăng ký tài khoản
                          </a>
                          <div id="collapse2a" class="panel-collapse collapse" role="tabpanel">
                            <div class="panel-body">
                              <a href="">Đăng ký wimo</a>
                            </div>
                          </div>
                        </div>
                        <div class="panel panel-defaultx">
                          <a class="item-question collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapse3a" aria-expanded="false" aria-controls="collapse3a">
                            Quản lý bàn
                          </a>
                          <div id="collapse3a" class="panel-collapse collapse" role="tabpanel">
                            <div class="panel-body">
                              <a href="">Quản lý bàn</a>
                            </div>
                          </div>
                        </div>
                        <div class="panel panel-defaultx">
                            <a class="item-question collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapse4a" aria-expanded="false" aria-controls="collapse4a">
                            Quản lý kho
                            </a>
                            <div id="collapse4a" class="panel-collapse collapse" role="tabpanel">
                            <div class="panel-body">
                              <p><a href="">Hướng dẫn nhập kho</a></p>
                              <p><a href="">Hướng dẫn xuất kho</a></p>
                            </div>
                            </div>
                        </div>
                        <div class="panel panel-defaultx">
                            <a class="item-question collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapse5a" aria-expanded="false" aria-controls="collapse5a">
                            Quản lý sản phẩm
                            </a>
                            <div id="collapse5a" class="panel-collapse collapse" role="tabpanel">
                                <div class="panel-body">
                                  <p><a href="">Hướng dẫn quản lý sản phẩm</a></p>
                                  <p><a href="">Quản lý menu</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="content-huongdan">
                    <h1>Tổng quan đăng ký</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection