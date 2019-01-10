<?php
include($_SERVER["DOCUMENT_ROOT"] . "/minhhoang/app_config.php");
include(APP_PATH."libs/head.php"); 
?>
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
                    <img src="<?php echo APP_URL; ?>img/consumer-goods/slide1.jpg" class="pc" alt="">
                </li>
                <li>
                    <img src="<?php echo APP_URL; ?>img/consumer-goods/slide2.jpg" class="pc" alt="">
                </li>
                <li>
                    <img src="<?php echo APP_URL; ?>img/consumer-goods/slide3.jpg" class="pc" alt="">
                </li>
            </ul>
        </div>
    </div>
    <div class="container">
        <h1 class="sub-title">Hàng tiêu dùng</h1>
        <div class="contents flexBox flexBox--between">
            <div class="contents-box">
                <h1>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</h1>
                <span class="line"></span>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    <br>
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
                    <br>
                    But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?
                </p>
            </div>
            <div class="contents-box">
                <h2>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                </h2>
                <div class="gallery">
                    <img src="<?php echo APP_URL; ?>img/consumer-goods/image1.jpg" class="image1 pc" alt="">
                    <img src="<?php echo APP_URL; ?>img/consumer-goods/image2.jpg" class="image2 pc" alt="">
                    <img src="<?php echo APP_URL; ?>img/consumer-goods/image3.jpg" class="image3 pc" alt="">
                    <img src="<?php echo APP_URL; ?>img/consumer-goods/image4.jpg" class="image4 pc" alt="">
                    <img src="<?php echo APP_URL; ?>img/consumer-goods/image5.jpg" class="image5 pc" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="partner">
        <div class="container">
            <div class="flexBox flexBox--between">
                <div class="partner-box company">
                    <div class="partner-company sugar">
                        <a href="">
                            <img src="<?php echo APP_URL; ?>img/consumer-goods/logo_sugar.jpg" class="pc" alt="">
                        </a>
                    </div>
                    <div class="partner-company kimberly">
                        <a href="">
                            <img src="<?php echo APP_URL; ?>img/consumer-goods/logo_kimberly.jpg" class="pc" alt="">
                        </a>
                    </div>
                    <div class="partner-company perfetti">
                        <a href="">
                            <img src="<?php echo APP_URL; ?>img/consumer-goods/logo_perfetti.jpg" class="pc" alt="">
                        </a>
                    </div>
                </div>
                <div class="partner-box info">
                    <h1 class="sub-title">Partner</h1>
                    <h1 class="title">
                        Đối tác 
                        <br>
                        của chúng tôi
                    </h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent 
                    </p>
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