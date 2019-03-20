@extends('index')
@section('content')
<div class="content-box content-fix">
    <div class="register-container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center m-b-md" style="margin-bottom: 20px;">
                    <h3>Đăng ký</h3>
                    <small>Đăng ký cửa hàng, để quản lý</small>
                </div>
                <form action="">
                    <div class="hpanel">
                        <div class="panel-body">
                            <div>
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <label>Tên cửa hàng <span class="text-danger">*</span></label>
                                        <input type="text" ng-model="shop.name" class="form-control ng-pristine ng-untouched ng-valid ng-empty">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Tên miền <span class="text-danger">*</span></label>
                                        <div class="col-12">
                                            <div class="input-group"><input type="text" ng-model="shop.domain" class="form-control ng-pristine ng-untouched ng-valid ng-empty"> <label class="input-group-addon font-bold">.wimo.vn</label></div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="form-group col-lg-6">
                                        <label>Họ Tên <span class="text-danger">*</span></label>
                                        <input type="text" ng-model="shop.boss_name" class="form-control ng-pristine ng-untouched ng-valid ng-empty">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Số điện thoại <span class="text-danger">*</span></label>
                                        <input type="text" ng-model="shop.phone_number" class="form-control ng-pristine ng-untouched ng-valid ng-empty">
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="form-group col-lg-6">
                                        <label>Mật khẩu <span class="text-danger">*</span></label>
                                        <input type="password" ng-model="shop.password" class="form-control ng-pristine ng-untouched ng-valid ng-empty">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Gõ lại mật khẩu <span class="text-danger">*</span></label>
                                        <input type="password" ng-model="shop.confirm_password" class="form-control ng-pristine ng-untouched ng-valid ng-empty">
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="form-group col-lg-6">
                                        <label>Email <span class="text-danger">*</span></label>
                                        <input type="text" ng-model="shop.email" class="form-control ng-pristine ng-untouched ng-valid ng-empty">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Loại cửa hàng <span class="text-danger">*</span></label>
                                        <div class="col-12">
                                            <select name="" id="" class="form-control">
                                                <option value="">Chọn loại cửa hàng</option>
                                                <option value="">Nhà hàng</option>
                                                <option value="">Cà phê</option>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="form-group col-lg-6">
                                        <label>Tỉnh/Quận huyện <span class="text-danger">*</span></label>
                                        <div class="col-12">
                                            <select name="" id="" class="form-control">
                                                <option value="">Chọn Tỉnh, Quận, Huyện</option>
                                                <option value="">Nhà hàng</option>
                                                <option value="">Cà phê</option>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Đường Phường/Xã <span class="text-danger">*</span></label>
                                        <input type="text" ng-model="shop.address.street" class="form-control ng-pristine ng-untouched ng-valid ng-empty">
                                    </div>

                                    <div class="clearfix"></div>
                                    <div class="form-group col-lg-6">
                                        <label>Số nhà, ngõ ngách</label>
                                        <input type="text" ng-model="shop.address.hamlet" class="form-control ng-pristine ng-untouched ng-valid ng-empty">
                                    </div>


                                </div>
                                <div class="text-center">
                                    <button ladda="loadingRegister" class="btn btn-success ladda-button" ng-click="register()" data-style="zoom-in"><span class="ladda-label">Đăng ký</span><span class="ladda-spinner"></span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection