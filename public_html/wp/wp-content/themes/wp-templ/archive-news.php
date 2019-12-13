<?php
include($_SERVER["DOCUMENT_ROOT"] . "/app_config.php");
include(APP_PATH."libs/head.php"); 
?>
</head>

<body id="top">
<!--===================================================-->
<div id="wrapper" class="wrapper">
<!--===================================================-->
<!--Header-->
<?php include(APP_PATH."libs/realty_header.php"); ?>
<!--/Header-->

<div class="container realty-body realty-detail">
    <ul class="breadcrumb">
        <li><a href="/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
        <li>Nhà đất cần bán</li>
    </ul>
    <h1 class="realty-title-category">NHÀ ĐẤT CẦN BÁN</h1>
    <div class="realty-quick-search">
        <form class="flexBox flexBox--between flexBox--start flexBox-wrap flexBox-notSp">
            <input type="text" class="input-text" placeholder="Nhập từ khoá. VD: Vinhomes">
            <select name="quick-city" class="input-select">
                <option value="">Chọn Huyện/Thành/Thị</option>
                <option value="huyen-bac-tan-uyen">Huyện Bắc Tân Uyên</option>
                <option value="huyen-bau-bang">Huyện Bàu Bàng</option>
                <option value="huyen-dau-tieng">Huyện Dầu Tiếng</option>
                <option value="huyen-phu-giao">Huyện Phú Giáo</option>
                <option value="tp-thu-dau-mot">Thành phố Thủ Dầu Một</option>
                <option value="thi-xa-ben-cat">Thị xã Bến Cát</option>
                <option value="thi-xa-di-an">Thị xã Dĩ An</option>
                <option value="thi-xa-tan-uyen">Thị xã Tân Uyên</option>
                <option value="thi-xa-thuan-an">Thị xã Thuận An</option>
                <option value="tinh-tay-ninh">Tỉnh Tây Ninh</option>
            </select>
            <select class="input-select">
                <option value="" selected>Chọn Xã/Phường/Thị Trấn</option>
                <option value="xxx">Chọn Xã/Phườn/Thị Trấn</option>
            </select>
            <button type="submit" class="button-submit"><i class="fa fa-search" aria-hidden="true"></i>&nbsp Tìm kiếm</button>
        </form>
    </div>
    <div class="flexBox flexBox--between flexBox-notSp">
        <div class="realty-contents">
            <div class="realty-category">
                <div class="realty-box-s">
                    <a href="" class="flexBox flexBox--between">
                        <div class="thumb">
                            <img src="<?php echo APP_URL; ?>img/realty/image.png" alt="realty"> 
                        </div>
                        <div class="text">
                            <h1>Dãy nhà trọ thương mại Bàu Bàng</h1>
                            <p class="pc">
                                Đầu tư ngay nhận tiền liền tay. S: 10×30 thổ cư 100%. Bao Gồm: 2 kiot, 8 phòng Mặt tiền đường nhựa 16m. Gần trung tâm hành chính, gần các KCN. Liên hệ trực tiếp: 0938767500
                            </p>
                            <div class="flexBox detail flexBox--between flexBox--center flexBox-notSp">
                                <ul class="info flexBox flexBox--between flexBox--wrap">
                                    <li><i class="fa fa-clock-o"></i>&nbsp 00.00.2018</li>
                                    <li><i class="fa fa-building"></i>&nbsp 300m<sub>2</sub></li>
                                    <li><i class="fa fa-map-marker"></i>&nbsp Huyện Bàu Bàng, Xã Lai Uyên</li>
                                </ul>
                                <h2 class="price">1.1 - 1.3 tỷ</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="realty-box-s">
                    <a href="" class="flexBox flexBox--between">
                        <div class="thumb">
                            <img src="<?php echo APP_URL; ?>img/realty/image.png" alt="realty"> 
                        </div>
                        <div class="text">
                            <h1>Dãy nhà trọ thương mại Bàu Bàng</h1>
                            <p class="pc">
                                Đầu tư ngay nhận tiền liền tay. S: 10×30 thổ cư 100%. Bao Gồm: 2 kiot, 8 phòng Mặt tiền đường nhựa 16m. Gần trung tâm hành chính, gần các KCN. Liên hệ trực tiếp: 0938767500
                            </p>
                            <div class="flexBox detail flexBox--between flexBox--center flexBox-notSp">
                                <ul class="info flexBox flexBox--between flexBox--wrap">
                                    <li><i class="fa fa-clock-o"></i>&nbsp 00.00.2018</li>
                                    <li><i class="fa fa-building"></i>&nbsp 300m<sub>2</sub></li>
                                    <li><i class="fa fa-map-marker"></i>&nbsp Huyện Bàu Bàng, Xã Lai Uyên</li>
                                </ul>
                                <h2 class="price">1.1 - 1.3 tỷ</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="realty-box-s">
                    <a href="" class="flexBox flexBox--between">
                        <div class="thumb">
                            <img src="<?php echo APP_URL; ?>img/realty/image.png" alt="realty"> 
                        </div>
                        <div class="text">
                            <h1>Dãy nhà trọ thương mại Bàu Bàng</h1>
                            <p class="pc">
                                Đầu tư ngay nhận tiền liền tay. S: 10×30 thổ cư 100%. Bao Gồm: 2 kiot, 8 phòng Mặt tiền đường nhựa 16m. Gần trung tâm hành chính, gần các KCN. Liên hệ trực tiếp: 0938767500
                            </p>
                            <div class="flexBox detail flexBox--between flexBox--center flexBox-notSp">
                                <ul class="info flexBox flexBox--between flexBox--wrap">
                                    <li><i class="fa fa-clock-o"></i>&nbsp 00.00.2018</li>
                                    <li><i class="fa fa-building"></i>&nbsp 300m<sub>2</sub></li>
                                    <li><i class="fa fa-map-marker"></i>&nbsp Huyện Bàu Bàng, Xã Lai Uyên</li>
                                </ul>
                                <h2 class="price">1.1 - 1.3 tỷ</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="realty-box-s">
                    <a href="" class="flexBox flexBox--between">
                        <div class="thumb">
                            <img src="<?php echo APP_URL; ?>img/realty/image.png" alt="realty"> 
                        </div>
                        <div class="text">
                            <h1>Dãy nhà trọ thương mại Bàu Bàng</h1>
                            <p class="pc">
                                Đầu tư ngay nhận tiền liền tay. S: 10×30 thổ cư 100%. Bao Gồm: 2 kiot, 8 phòng Mặt tiền đường nhựa 16m. Gần trung tâm hành chính, gần các KCN. Liên hệ trực tiếp: 0938767500
                            </p>
                            <div class="flexBox detail flexBox--between flexBox--center flexBox-notSp">
                                <ul class="info flexBox flexBox--between flexBox--wrap">
                                    <li><i class="fa fa-clock-o"></i>&nbsp 00.00.2018</li>
                                    <li><i class="fa fa-building"></i>&nbsp 300m<sub>2</sub></li>
                                    <li><i class="fa fa-map-marker"></i>&nbsp Huyện Bàu Bàng, Xã Lai Uyên</li>
                                </ul>
                                <h2 class="price">1.1 - 1.3 tỷ</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="realty-box-s">
                    <a href="" class="flexBox flexBox--between">
                        <div class="thumb">
                            <img src="<?php echo APP_URL; ?>img/realty/image.png" alt="realty"> 
                        </div>
                        <div class="text">
                            <h1>Dãy nhà trọ thương mại Bàu Bàng</h1>
                            <p class="pc">
                                Đầu tư ngay nhận tiền liền tay. S: 10×30 thổ cư 100%. Bao Gồm: 2 kiot, 8 phòng Mặt tiền đường nhựa 16m. Gần trung tâm hành chính, gần các KCN. Liên hệ trực tiếp: 0938767500
                            </p>
                            <div class="flexBox detail flexBox--between flexBox--center flexBox-notSp">
                                <ul class="info flexBox flexBox--between flexBox--wrap">
                                    <li><i class="fa fa-clock-o"></i>&nbsp 00.00.2018</li>
                                    <li><i class="fa fa-building"></i>&nbsp 300m<sub>2</sub></li>
                                    <li><i class="fa fa-map-marker"></i>&nbsp Huyện Bàu Bàng, Xã Lai Uyên</li>
                                </ul>
                                <h2 class="price">1.1 - 1.3 tỷ</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="realty-box-s">
                    <a href="" class="flexBox flexBox--between">
                        <div class="thumb">
                            <img src="<?php echo APP_URL; ?>img/realty/image.png" alt="realty"> 
                        </div>
                        <div class="text">
                            <h1>Dãy nhà trọ thương mại Bàu Bàng</h1>
                            <p class="pc">
                                Đầu tư ngay nhận tiền liền tay. S: 10×30 thổ cư 100%. Bao Gồm: 2 kiot, 8 phòng Mặt tiền đường nhựa 16m. Gần trung tâm hành chính, gần các KCN. Liên hệ trực tiếp: 0938767500
                            </p>
                            <div class="flexBox detail flexBox--between flexBox--center flexBox-notSp">
                                <ul class="info flexBox flexBox--between flexBox--wrap">
                                    <li><i class="fa fa-clock-o"></i>&nbsp 00.00.2018</li>
                                    <li><i class="fa fa-building"></i>&nbsp 300m<sub>2</sub></li>
                                    <li><i class="fa fa-map-marker"></i>&nbsp Huyện Bàu Bàng, Xã Lai Uyên</li>
                                </ul>
                                <h2 class="price">1.1 - 1.3 tỷ</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="realty-box-s">
                    <a href="" class="flexBox flexBox--between">
                        <div class="thumb">
                            <img src="<?php echo APP_URL; ?>img/realty/image.png" alt="realty"> 
                        </div>
                        <div class="text">
                            <h1>Dãy nhà trọ thương mại Bàu Bàng</h1>
                            <p class="pc">
                                Đầu tư ngay nhận tiền liền tay. S: 10×30 thổ cư 100%. Bao Gồm: 2 kiot, 8 phòng Mặt tiền đường nhựa 16m. Gần trung tâm hành chính, gần các KCN. Liên hệ trực tiếp: 0938767500
                            </p>
                            <div class="flexBox detail flexBox--between flexBox--center flexBox-notSp">
                                <ul class="info flexBox flexBox--between flexBox--wrap">
                                    <li><i class="fa fa-clock-o"></i>&nbsp 00.00.2018</li>
                                    <li><i class="fa fa-building"></i>&nbsp 300m<sub>2</sub></li>
                                    <li><i class="fa fa-map-marker"></i>&nbsp Huyện Bàu Bàng, Xã Lai Uyên</li>
                                </ul>
                                <h2 class="price">1.1 - 1.3 tỷ</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="realty-box-s">
                    <a href="" class="flexBox flexBox--between">
                        <div class="thumb">
                            <img src="<?php echo APP_URL; ?>img/realty/image.png" alt="realty"> 
                        </div>
                        <div class="text">
                            <h1>Dãy nhà trọ thương mại Bàu Bàng</h1>
                            <p class="pc">
                                Đầu tư ngay nhận tiền liền tay. S: 10×30 thổ cư 100%. Bao Gồm: 2 kiot, 8 phòng Mặt tiền đường nhựa 16m. Gần trung tâm hành chính, gần các KCN. Liên hệ trực tiếp: 0938767500
                            </p>
                            <div class="flexBox detail flexBox--between flexBox--center flexBox-notSp">
                                <ul class="info flexBox flexBox--between flexBox--wrap">
                                    <li><i class="fa fa-clock-o"></i>&nbsp 00.00.2018</li>
                                    <li><i class="fa fa-building"></i>&nbsp 300m<sub>2</sub></li>
                                    <li><i class="fa fa-map-marker"></i>&nbsp Huyện Bàu Bàng, Xã Lai Uyên</li>
                                </ul>
                                <h2 class="price">1.1 - 1.3 tỷ</h2>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="pagination">
                <a href="#"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
                <a href="#">1</a>
                <a class="active" href="#">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
                <a href="#">5</a>
                <a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </div>
        </div>
        <?php include(APP_PATH."libs/realty_sidebar_detail.php"); ?>
    </div>
</div>

<!--Footer-->
<?php include(APP_PATH."libs/realty_footer.php"); ?>
<!--/Footer-->
<!--===================================================-->
</div>
<!--/wrapper-->
<!--===================================================-->

</body>
</html>	