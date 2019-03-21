<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <ul class="sidebar-menu">
            <!-- <li class="header">MAIN NAVIGATION</li> -->            
            <li class="treeview {{@$_GET['type'] == 'san-pham' ? 'active' : '' }}">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Sản phẩm</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <!-- <li><a href="backend/productcate?type=san-pham"><i class="fa fa-circle-o"></i> <span>Danh mục sản phẩm</span></a></li> -->
                <li><a href="backend/product?type=san-pham"><i class="fa fa-circle-o"></i> <span>Phần cứng</span></a></li>
                <li><a href="backend/about/edit?type=san-pham"><i class="fa fa-circle-o"></i> <span>Mô tả</span></a></li>               
              </ul>
            </li>

            <li><a href="backend/about/edit?type=service"><i class="fa fa-circle-o"></i> <span>Phí dịch vụ</span></a></li>
            <li><a href="backend/slogan"><i class="fa fa-circle-o"></i> <span>Lợi ích</span></a></li>
            <li><a href="backend/about/edit?type=quy-trinh"><i class="fa fa-circle-o"></i> <span>Quy trình</span></a></li>
            <!-- <li><a href="backend/news?type=tin-tuc"><i class="fa fa-circle-o"></i> <span>Tin tức</span></a></li> -->
            <!-- <li><a href="backend/partner"><i class="fa fa-circle-o"></i> <span>Quản lý đối tác</span></a></li> -->
            <!-- <li><a href="backend/feedback"><i class="fa fa-gear" aria-hidden="true"></i> <span>Tại sao chọn chúng tôi</span></a></li> -->
            <!-- <li><a href="backend/slogan"><i class="fa fa-gear" aria-hidden="true"></i> <span>Tại sao chọn chúng tôi</span></a></li> -->
           
            <li><a href="backend/contact"><i class="fa fa-envelope"></i> <span>Quản lý liên hệ</span></a></li>
            <!-- <li><a href="backend/newsletter?type=newsletter"><i class="fa fa-circle-o"></i> <span>Đăng ký nhận tin</span></a></li> -->
            <!-- <li><a href="backend/chinhanh"><i class="fa fa-envelope"></i><span>Quản lý cửa hàng</span></a></li> -->
            <li><a href="backend/slider?type=gioi-thieu"><i class="fa fa-circle-o"></i> <span>Quản lý slider</span></a></li>
            <!-- <li class="treeview">
              <a href="#">
                <i class="fa fa-pie-chart"></i>
                <span>Hình ảnh slider-banner</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">            
                
                <li><a href="backend/banner"><i class="fa fa-gear" aria-hidden="true"></i> <span>Quản lý banner</span></a></li>
                <li><a href="backend/lienket?type=quang-cao"><i class="fa fa-gear" aria-hidden="true"></i> <span>Quản lý quảng cáo</span></a></li>
                <li><a href="backend/position"><i class="fa fa-gear" aria-hidden="true"></i> <span>Vị trí quảng cáo</span></a></li>
              </ul>
            </li> -->
            <!-- <li><a href="backend/bankaccount"><i class="fa fa-envelope"></i><span>Quản lý tài khoản ngân hàng</span></a></li> -->
            <li><a href="{{ asset('backend/setting') }}"><i class="fa fa-gear" aria-hidden="true"></i> <span>Quản lý thiết lập</span></a></li>        
            
        </ul>
    </section>
</aside>