
<?php
include($_SERVER["DOCUMENT_ROOT"] . "/app_config.php");
include(APP_PATH."libs/head.php"); 
?>
<link rel="stylesheet" href="<?php echo APP_URL; ?>common/css/consumer-goods.css" media="all">
</head>

<body id="top">
<!--===================================================-->
<div id="wrapper" class="wrapper">
<!--===================================================-->
<!--Header-->
<?php include(APP_PATH."libs/header.php"); ?>
<!--/Header-->
<div class="main consumer-goods">
    <div class="wrapSlide">
        <div class="inner">
            <ul id="slider">
                <li>
                    <img src="<?php echo APP_URL; ?>img/consumer-goods/slide1.jpg" alt="">
                </li>
                <li>
                    <img src="<?php echo APP_URL; ?>img/consumer-goods/slide4.jpg" alt="">
                </li>
                <li>
                    <img src="<?php echo APP_URL; ?>img/consumer-goods/slide3.jpg" alt="">
                </li>
            </ul>
        </div>
    </div>
    <div class="container">
        <h1 class="sub-title">Consumer Goods</h1>
        <div class="contents flexBox flexBox--between flexBox-notSp">
            <div class="contents-box">
                <h1>Hàng tiêu dùng</h1>
                <span class="line"></span>
                <p>
                    Với nhiều năm kinh nghiệm trong lĩnh vực hàng tiêu dùng, công ty <strong>Minh Thanh Hoàng</strong> đã và đang phân phối nhiều mặt hàng tiêu dùng chất lượng phục vụ cuộc sống của khách hàng.
                    <br>
                    <br>
                    Những mặt hàng phân phối chủ yếu như: đường, tả giấy, bánhkẹo,… Các sản phẩm do <strong>Minh Thanh Hoàng</strong> phân phối được chọn lựa rất kỹ về chất lượng của những nhà sản xuất uy tín trong nước và được nhập khẩu từ Châu Âu, Mỹ, Úc, Nhật Bản, Hàn Quốc…
                    <br>
                    <br>
                    Doanh thu hàng năm cao và với mục tiêu “phấn đấu trở thành Nhà phân phối hàng tiêu dùng hàng đầu tại thị trường”, <strong>Minh Thanh Hoàng</strong> luôn cam kết đem đến những hàng hoá chất lượng cao và dịch vụ tiện ích, nhanh chóng nhất cho khách hàng.
                    <br>
                    <br>
                    Mạng lưới phân phối rộng lớn trải rộng trên nhiều huyện thị của tỉnh Bình Dương như: Dầu Tiếng Bàu Bàng, Thị xã Bến Cát,...
                </p>
            </div>
            <div class="contents-box">
                <h2>
                    "Sự hài lòng của quý khách hàng là động lực làm việc của chúng tôi."
                </h2>
                <div class="gallery">
                    <img src="<?php echo APP_URL; ?>img/consumer-goods/image1.jpg" class="image1" alt="">
                    <img src="<?php echo APP_URL; ?>img/consumer-goods/image2.jpg" class="image2" alt="">
                    <img src="<?php echo APP_URL; ?>img/consumer-goods/image3.jpg" class="image3" alt="">
                    <img src="<?php echo APP_URL; ?>img/consumer-goods/image4.jpg" class="image4" alt="">
                    <img src="<?php echo APP_URL; ?>img/consumer-goods/image5.jpg" class="image5" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="partner">
        <div class="container">
            <div class="flexBox flexBox--reverse flexBox--between flexBox-notSp">
                <div class="partner-box info">
                    <h1 class="sub-title">Partner</h1>
                    <h1 class="title">
                        Đối tác 
                        <br>
                        của chúng tôi
                    </h1>
                    <p>
                        <strong>Minh Thanh Hoàng</strong> làm việc với các đối tác lớn, uy tín trong lĩnh vực cung cấp hàng tiêu dùng. Với sự hợp tác này công ty chúng tôi phân phối đến quý khách hàng các mặt hàng tiêu dùng với chất lượng đảm bảo, giá cả hợp lý mang lại sự tiện lợi cho quý khách hàng. 
                    </p>
                </div>
                <div class="partner-box company">
                    <div class="partner-company sugar">
                        <a href="http://bienhoasugar.com/" target="_blank">
                            <img src="<?php echo APP_URL; ?>img/consumer-goods/logo_sugar.jpg" alt="">
                        </a>
                    </div>
                    <div class="partner-company kimberly">
                        <a href="https://www.kimberly-clark.com/en-us" target="_blank">
                            <img src="<?php echo APP_URL; ?>img/consumer-goods/logo_kimberly.jpg" alt="">
                        </a>
                    </div>
                    <div class="partner-company perfetti">
                        <a href="http://www.perfettivanmelle.com/" target="_blank">
                            <img src="<?php echo APP_URL; ?>img/consumer-goods/logo_perfetti.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Footer-->
<?php include(APP_PATH."libs/footer.php"); ?>
<!--/Footer-->
<!--===================================================-->
</div>
<!--/wrapper-->
<!--===================================================-->

<script src="<?php echo APP_URL; ?>common/js/slick.min.js"></script>
<script>
    $(function(){
        $('#slider').slick({
            dots: true,
            infinite: true,
            arrows:false,
            speed: 1200,
            autoplay: true,
            fade: true,
            pauseOnFocus: false,
            autoplaySpeed: 2500,
            slidesToShow: 1,
            slidesToScroll: 1,
            responsive: [
                {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false
                }
                },
                {
                breakpoint: 767,
                settings: {
                            arrows: false,
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
                },
                {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    arrows: false,
                    slidesToScroll: 1
                }
                }
            ]
        });
    });
</script>

</body>
</html>	