<div id="fb-root"></div>
<script async defer src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.2&appId=303954003810171&autoLogAppEvents=1"></script>
<header class="header realty_header">
    <div class="container container-header">
        <div class="header-inner flexBox flexBox--center flexBox--between">
            <p id="logo">
                <a href="<?php echo APP_URL;?>">
                    <img src="<?php echo APP_URL; ?>common/img/logo.png">
                </a>
            </p>
            <div class="navigation pc flexBox flexBox--center">
                <ul class="flexBox flexBox--center gNavi">	
                    <li><a href="<?php echo APP_URL;?>">Trang chủ</a></li>    
                
                    <li class="active"><a href="<?php echo APP_URL;?>bat-dong-san">Bất Động Sản</a></li>

                    <li><a href="<?php echo APP_URL;?>xang-dau">Xăng Dầu</a></li>
                                                                                    
                    <li><a href="<?php echo APP_URL;?>hang-tieu-dung">Hàng Tiêu Dùng</a></li>
                </ul>
            </div>
            <div class="header-contact pc flexBox">
                <div class="phone flexBox">
                    <a href="tel:0918349014" class="phone-number">
                        <i class="fa fa-phone"></i>
                        <br>
                        0918 349 014
                    </a>
                    <div class="mail flexBox flexBox--center">
                        <a href="mailto: nthanhan0604@gmail.com">
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            <br>
                            LIÊN HỆ 
                        </a>
                    </div>  
                </div>
            </div>
            <div class="header-contact-sp sp">
                <div class="phone flexBox">
                    <a href="tel:0918349014" class="phone-number">
                        <i class="fa fa-phone"></i>
                    </a>
                    <div class="mail flexBox flexBox--center">
                        <a href="mailto: nthanhan0604@gmail.com">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </a>
                    </div>  
                    <div class="header-hamburger" id="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
            <div class="navigation-sp sp">
                <ul class="gNavi-sp js-nav">			

                    <li><a href="<?php echo APP_URL;?>">Trang chủ</a></li>

                    <li class="active"><a href="<?php echo APP_URL;?>bat-dong-san">Bất Động Sản</a></li>

                    <li><a href="<?php echo APP_URL;?>xang-dau">Xăng Dầu</a></li>
                                                                                    
                    <li><a href="<?php echo APP_URL;?>hang-tieu-dung">Hàng Tiêu Dùng</a></li>
                </ul>
                <ul class="menu_sp">
                    <li class="dropdown js-dropdown-sp"> 
                        <a href="<?php echo APP_URL; ?>bat-dong-san-can-ban">Bất động sản bán</a>
                            <ul class="dropdown-menu">
                            <?php
                                $args= array (
                                'child_of' => 0,
                                'orderby' =>'ID',
                                'order' => 'DESC',
                                'hide_empty' => 0,
                                'taxonomy' => 'realsell',
                                'number' => '0',
                                'pad_counts' => false
                                );
                                $categories = get_categories($args);
                                foreach ( $categories as $category ):
                                $slug = $category->slug;
                                ?>
                                <li><a href="<?php echo get_term_link($category->slug,'realsell');?>"><?php echo $category->name;?></a> </li>
                                <?php endforeach; ?>
                            </ul>
                    </li>
                    <li class="dropdown js-dropdown-sp"> 
                        <a href="<?php echo APP_URL; ?>bat-dong-san-cho-thue">Bất động sản cho thuê</a>
                        <ul class="dropdown-menu">
                        <?php
                                $args= array (
                                'child_of' => 0,
                                'orderby' =>'ID',
                                'order' => 'DESC',
                                'hide_empty' => 0,
                                'taxonomy' => 'realrent',
                                'number' => '0',
                                'pad_counts' => false
                                );
                                $categories = get_categories($args);
                                foreach ( $categories as $category ):
                                $slug = $category->slug;
                                ?>
                                <li><a href="<?php echo get_term_link($category->slug,'realrent');?>"><?php echo $category->name;?></a> </li>
                                <?php endforeach; ?>
                            </ul>
                    </li>
                    <li class="dropdown js-dropdown-sp"> 
                        <a href="<?php echo APP_URL; ?>sang-nhuong">Sang nhượng</a>
                        <ul class="dropdown-menu">
                        <?php
                                $args= array (
                                'child_of' => 0,
                                'orderby' =>'ID',
                                'order' => 'DESC',
                                'hide_empty' => 0,
                                'taxonomy' => 'realtrans',
                                'number' => '0',
                                'pad_counts' => false
                                );
                                $categories = get_categories($args);
                                foreach ( $categories as $category ):
                                $slug = $category->slug;
                                ?>
                                <li><a href="<?php echo get_term_link($category->slug,'realtrans');?>"><?php echo $category->name;?></a> </li>
                                <?php endforeach; ?>
                            </ul>
                    </li>
                    <li class="dropdown js-dropdown-sp"> 
                        <a href="<?php echo APP_URL; ?>toa-nha-van-phong">Toà nhà văn phòng</a>
                        <ul class="dropdown-menu">
                        <?php
                                $args= array (
                                'child_of' => 0,
                                'orderby' =>'ID',
                                'order' => 'DESC',
                                'hide_empty' => 0,
                                'taxonomy' => 'realbld',
                                'number' => '0',
                                'pad_counts' => false
                                );
                                $categories = get_categories($args);
                                foreach ( $categories as $category ):
                                $slug = $category->slug;
                                ?>
                                <li><a href="<?php echo get_term_link($category->slug,'realbld');?>"><?php echo $category->name;?></a> </li>
                                <?php endforeach; ?>
                            </ul>
                    </li>
                    <li class="dropdown js-dropdown-sp"> 
                        <a href="<?php echo APP_URL; ?>du-an">Dự án</a>
                        <ul class="dropdown-menu">
                        <?php
                                $args= array (
                                'child_of' => 0,
                                'orderby' =>'ID',
                                'order' => 'DESC',
                                'hide_empty' => 0,
                                'taxonomy' => 'realproject',
                                'number' => '0',
                                'pad_counts' => false
                                );
                                $categories = get_categories($args);
                                foreach ( $categories as $category ):
                                $slug = $category->slug;
                                ?>
                                <li><a href="<?php echo get_term_link($category->slug,'realproject');?>"><?php echo $category->name;?></a> </li>
                                <?php endforeach; ?>
                            </ul>
                    </li>
                    <li class="dropdown js-dropdown-sp"> 
                        <a href="#">Cẩm Nang</a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo APP_URL;?>tin-tuc/nha-dep">Nhà đẹp</a></li>
                            <li><a href="<?php echo APP_URL;?>tin-tuc/phong-thuy">Phong thuỷ</a></li>
                            <li><a href="<?php echo APP_URL;?>tin-tuc/tin-tuc">Tin tức</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="menu js-menu pc">
        <div class="container">
            <ul class="menu_parents flexBox flexBox--center flexBox--between">
                <li> 
                    <a href="<?php echo APP_URL;?>bat-dong-san">TRANG CHỦ</a>
                </li>
                <li class="dropdown js-dropdown"> 
                    <a href="<?php echo APP_URL; ?>bat-dong-san-can-ban">Bất động sản bán</a>
                        <ul class="dropdown-menu">
                        <?php
                            $args= array (
                            'child_of' => 0,
                            'orderby' =>'ID',
                            'order' => 'DESC',
                            'hide_empty' => 0,
                            'taxonomy' => 'realsell',
                            'number' => '0',
                            'pad_counts' => false
                            );
                            $categories = get_categories($args);
                            foreach ( $categories as $category ):
                            $slug = $category->slug;
                            ?>
                            <li><a href="<?php echo get_term_link($category->slug,'realsell');?>"><?php echo $category->name;?></a> </li>
                            <?php endforeach; ?>
                        </ul>
                </li>
                <li class="dropdown js-dropdown"> 
                    <a href="<?php echo APP_URL; ?>bat-dong-san-cho-thue">Bất động sản cho thuê</a>
                    <ul class="dropdown-menu">
                    <?php
                            $args= array (
                            'child_of' => 0,
                            'orderby' =>'ID',
                            'order' => 'DESC',
                            'hide_empty' => 0,
                            'taxonomy' => 'realrent',
                            'number' => '0',
                            'pad_counts' => false
                            );
                            $categories = get_categories($args);
                            foreach ( $categories as $category ):
                            $slug = $category->slug;
                            ?>
                            <li><a href="<?php echo get_term_link($category->slug,'realrent');?>"><?php echo $category->name;?></a> </li>
                            <?php endforeach; ?>
                        </ul>
                </li>
                <li class="dropdown js-dropdown"> 
                    <a href="<?php echo APP_URL; ?>sang-nhuong">Sang nhượng</a>
                    <ul class="dropdown-menu">
                    <?php
                            $args= array (
                            'child_of' => 0,
                            'orderby' =>'ID',
                            'order' => 'DESC',
                            'hide_empty' => 0,
                            'taxonomy' => 'realtrans',
                            'number' => '0',
                            'pad_counts' => false
                            );
                            $categories = get_categories($args);
                            foreach ( $categories as $category ):
                            $slug = $category->slug;
                            ?>
                            <li><a href="<?php echo get_term_link($category->slug,'realtrans');?>"><?php echo $category->name;?></a> </li>
                            <?php endforeach; ?>
                        </ul>
                </li>
                <li class="dropdown js-dropdown"> 
                    <a href="<?php echo APP_URL; ?>toa-nha-van-phong">Toà nhà văn phòng</a>
                    <ul class="dropdown-menu">
                    <?php
                            $args= array (
                            'child_of' => 0,
                            'orderby' =>'ID',
                            'order' => 'DESC',
                            'hide_empty' => 0,
                            'taxonomy' => 'realbld',
                            'number' => '0',
                            'pad_counts' => false
                            );
                            $categories = get_categories($args);
                            foreach ( $categories as $category ):
                            $slug = $category->slug;
                            ?>
                            <li><a href="<?php echo get_term_link($category->slug,'realbld');?>"><?php echo $category->name;?></a> </li>
                            <?php endforeach; ?>
                        </ul>
                </li>
                <li class="dropdown js-dropdown"> 
                    <a href="<?php echo APP_URL; ?>du-an">Dự án</a>
                    <ul class="dropdown-menu">
                    <?php
                            $args= array (
                            'child_of' => 0,
                            'orderby' =>'ID',
                            'order' => 'DESC',
                            'hide_empty' => 0,
                            'taxonomy' => 'realproject',
                            'number' => '0',
                            'pad_counts' => false
                            );
                            $categories = get_categories($args);
                            foreach ( $categories as $category ):
                            $slug = $category->slug;
                            ?>
                            <li><a href="<?php echo get_term_link($category->slug,'realproject');?>"><?php echo $category->name;?></a> </li>
                            <?php endforeach; ?>
                        </ul>
                </li>
                <li class="dropdown js-dropdown"> 
                    <a href="#">CẨM NANG</a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo APP_URL;?>tin-tuc/nha-dep">Nhà đẹp</a></li>
                        <li><a href="<?php echo APP_URL;?>tin-tuc/phong-thuy">Phong thuỷ</a></li>
                        <li><a href="<?php echo APP_URL;?>tin-tuc/tin-tuc">Tin tức</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <div class="realty-banner">
        <div class="container">
            <div class="realty-banner-form">
                <ul class="tabs js-banner-tabs flexBox flexBox-notSp">
                    <li class="tab current" data-cate="realsell" data-type="select-realty-sell" data-tab="tab-group">BẤT ĐỘNG SẢN BÁN</li>
                    <li class="tab" data-cate="realrent" data-type="select-realty-rent" data-tab="tab-group">BẤT ĐỘNG SẢN THUÊ</li>
                    <li class="tab" data-cate="realtrans" data-type="select-realty-transfer" data-tab="tab-group">SANG NHƯỢNG</li>
                    <li class="tab" data-cate="realbld" data-tab="tab-office">VĂN PHÒNG</li>
                    <li class="tab" data-cate="realproject" data-tab="tab-projects">DỰ ÁN</li>
                </ul>

                <div id="tab-group" class="tab-content js-banner-tab-content current">
                    <form action="<?php echo APP_URL; ?>tim-kiem" method="post"> 
                        <input type="text" name="search" class="input-text" placeholder="Nhập từ khoá. VD: Vinhomes">
                        <div class="flexBox flexBox--wrap flexBox-notSp">
                        <select name="realty-sell" id="select-realty-sell" class="input-select tpye_realsell slBox">
                            <option value="" selected>Chọn loại nhà đất</option>
                            <?php 
                            $argsSub= array (
                                'child_of' => 0,
                                'orderby' =>'ID',
                                'order' => 'DESC',
                                'hide_empty' => 0,
                                'taxonomy' => 'realsell',
                                'number' => '0',
                                'pad_counts' => false
                            );
                            $categorySub = get_categories($argsSub); 
                            foreach ($categorySub as $catsub) {
                            ?>
                            <option value="<?php echo $catsub->slug; ?>"><?php echo $catsub->name;?></option>
                            <?php } ?>
                        </select>
                        <select name="realty-rent" id="select-realty-rent" class="input-select type_realrent slBox">
                            <option value="" selected>Chọn loại nhà đất</option>
                            <?php 
                                $argsSub= array (
                                    'child_of' => 0,
                                    'orderby' =>'ID',
                                    'order' => 'DESC',
                                    'hide_empty' => 0,
                                    'taxonomy' => 'realrent',
                                    'number' => '0',
                                    'pad_counts' => false
                                );
                                $categorySub = get_categories($argsSub); 
                                foreach ($categorySub as $catsub) {
                                ?>
                                <option value="<?php echo $catsub->slug; ?>"><?php echo $catsub->name;?></option>
                            <?php } ?>
                        </select>
                        <select name="realty-transfer" id="select-realty-transfer" class="input-select type_realtrans slBox">
                            <option value="">Chọn kiểu sang nhượng</option>
                            <?php 
                            $argsSub= array (
                                'child_of' => 0,
                                'orderby' =>'ID',
                                'order' => 'DESC',
                                'hide_empty' => 0,
                                'taxonomy' => 'realtrans',
                                'number' => '0',
                                'pad_counts' => false
                            );
                            $categorySub = get_categories($argsSub); 
                            foreach ($categorySub as $catsub) {
                            ?>
                            <option value="<?php echo $catsub->slug; ?>"><?php echo $catsub->name;?></option>
                            <?php } ?>
                        </select>

                        <select name="realty-bld" id="select-realty-bld" class="input-select type_realbld slBox">
                            <option value="" selected>Chọn loại văn phòng</option>
                            <?php 
                            $argsSub= array (
                                'child_of' => 0,
                                'orderby' =>'ID',
                                'order' => 'DESC',
                                'hide_empty' => 0,
                                'taxonomy' => 'realbld',
                                'number' => '0',
                                'pad_counts' => false
                            );
                            $categorySub = get_categories($argsSub); 
                            foreach ($categorySub as $catsub) {
                            ?>
                            <option value="<?php echo $catsub->slug; ?>"><?php echo $catsub->name;?></option>
                            <?php } ?>
                        </select>

                        <select name="realty-project" id="select-realty-project" class="input-select type_realproject slBox">
                            <option value="" selected>Dự án khác</option>
                            <?php 
                            $argsSub= array (
                                'child_of' => 0,
                                'orderby' =>'ID',
                                'order' => 'DESC',
                                'hide_empty' => 0,
                                'taxonomy' => 'realproject',
                                'number' => '0',
                                'pad_counts' => false
                            );
                            $categorySub = get_categories($argsSub); 
                            foreach ($categorySub as $catsub) {
                            ?>
                            <option value="<?php echo $catsub->slug; ?>"><?php echo $catsub->name;?></option>
                            <?php } ?>
                        </select>


                        <select name="quick-city" class="input-select" id="quick-city-main">
                            <option value="">Chọn Huyện/Thành/Thị</option>
                            <?php
                            $args = array(
                            'parent' => 0,
                            'hide_empty' => 0,
                            'taxonomy' => 'location',
                            'pad_counts' => false );
                            $categories = get_categories( $args );
                            foreach ($categories as $cat)
                            {
                            ?>
                            <option data-attr="<?php echo $cat->term_id;?>" value="<?php echo $cat->slug;?>"><?php echo $cat->name;?></option>
                            <?php } ?>
                        </select>
                        <select class="input-select" id="quick-city-main_child">
                            <option value="" selected>Chọn Xã/Phường/Thị Trấn</option>
                            
                        </select>
                        <select name="size" id="size" class="input-select">
                            <option value="" selected="selected">Diện tích</option>
                            <option value="0">Tất cả</option>
                            <option value="10-30">10-30 m2</option>
                            <option value="30-50">30-50 m2</option>
                            <option value="51-80">50-80 m2</option>
                            <option value="81-100">80-100 m2</option>
                            <option value="100-150">100-150 m2</option>
                            <option value="150-200">150-200 m2</option>
                            <option value="201-250">200-250 m2</option>
                            <option value="251-300">250-300 m2</option>
                            <option value="301-500">300-500 m2</option>
                            <option value="501">Trên 500 m2</option>
                        </select>
                        <select name="price" id="price" class="input-select">
                            <option value="" selected="selected">Chọn mức giá</option>
                            <option value="thoa-thuan">Thỏa thuận</option>
                            <option value="0-500">&lt; 500 triệu</option>
                            <option value="500-1000">500 Triệu -1 tỷ</option>
                            <option value="1000-3000">1 tỷ - 3 tỷ</option>
                            <option value="3000-5000">3 tỷ - 5 tỷ</option>
                            <option value=">5000">&gt; 5 tỷ</option>
                        </select>
                        <select name="quarter" id="quarter" class="input-select nonBld">
                            <option value="">Hướng</option>
                            <option value="Bắc">Bắc</option>
                            <option value="Đông">Đông</option>
                            <option value="Đông Bắc">Đông Bắc</option>
                            <option value="Đông Nam">Đông Nam</option>
                            <option value="Không xác định">Không xác định</option>
                            <option value="Nam">Nam</option>
                            <option value="Tây">Tây</option>
                            <option value="Tây Bắc">Tây Bắc</option>
                            <option value="Tây Nam">Tây Nam</option>
                        </select>
                        <select name="bedroom" id="bedroom" class="input-select nonBld">
                            <option value="">Số phòng ngủ</option>
                            <option value="khong-xac-dinh">Không xác định</option>
                            <option value="1">1+</option>
                            <option value="2">2+</option>
                            <option value="3">3+</option>
                            <option value="4">4+</option>
                            <option value="5">5+</option>
                        </select>
                        <button class="button-submit"><i class="fa fa-search" aria-hidden="true"></i>&nbsp Tìm kiếm</button>
                        </div>
                       <input type="hidden" name="type_search" id="type_search" value="realsell">
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>