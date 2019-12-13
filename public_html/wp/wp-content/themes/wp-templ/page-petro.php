
<?php
include($_SERVER["DOCUMENT_ROOT"] . "/app_config.php");
include(APP_PATH."libs/head.php"); 
?>
</head>

<?php
/* Template Name: Petro Page */
?>


<body id="top">
<!--===================================================-->
<div id="wrapper" class="wrapper wrapper-oil">
<!--===================================================-->
<!--Header-->
<?php include(APP_PATH."libs/header.php"); ?>
<!--/Header-->
<div class="main oil">
    <div class="container">
        <div class="oil-news-focus flexBox flexBox--between flexBox--wrap flexBox-notSp">
           
        </div>
        <div class="oil-news flexBox flexBox--between flexBox--reverse flexBox-notSpSpec">
            <div class="oil-table">
                <div class="oil-table-title">
                    <p>THÔNG TIN THỊ TRƯỜNG</p>
                </div>
                <table class="retail">
                    <tr class="title">
                        <th>Giá bán lẻ xăng dầu</th>
                        <th colspan="2"><img src="<?php echo APP_URL; ?>img/oil/icon-gas-station.png" alt="Gas station"></th> 
                    </tr>
                    <tr>
                        <td></td>
                        <td>Vùng 1</td> 
                        <td>Vùng 2</td>
                    </tr>
                    <?php
                        while(has_sub_field('price_retail')):
                    ?>
                        <tr>
                            <td><?php echo get_sub_field('name') ?></td>
                            <td><?php echo get_sub_field('price_1') ?></td> 
                            <td><?php echo get_sub_field('price_2') ?></td>
                        </tr>
                    <?php endwhile; ?>
                </table>
                <table>
                    <tr class="title">
                        <th>giá dầu thế giới</th>
                        <th colspan="2"><img src="<?php echo APP_URL; ?>img/oil/icon-earth.png" alt="Gas station"></th> 
                    </tr>
                    <?php
                        while(has_sub_field('price_global')):
                    ?>
                        <tr>
                            <td><?php echo get_sub_field('city') ?></td> 
                            <td><?php echo get_sub_field('price') ?></td>
                        </tr>
                    <?php endwhile; ?>
                </table>
                <table>
                    <tr class="title">
                        <th>Vàng SJC</th>
                        <th colspan="2"><img src="<?php echo APP_URL; ?>img/oil/icon-gold.png" alt="Gas station"></th> 
                    </tr>
                    <?php
                        while(has_sub_field('price_gold')):
                    ?>
                        <tr>
                            <td>Mua</td> 
                            <td><?php echo get_sub_field('buy') ?></td>
                        </tr>
                        <tr>
                            <td>Bán</td> 
                            <td><?php echo get_sub_field('sell') ?></td>
                        </tr>
                    <?php endwhile; ?>
                </table>
                <table>
                    <tr class="title">
                        <th>Tỷ giá USD</th>
                        <th colspan="2"><img src="<?php echo APP_URL; ?>img/oil/icon-money.png" alt="Gas station"></th> 
                    </tr>
                    <?php
                        while(has_sub_field('usd')):
                    ?>
                        <tr>
                            <td>Mua</td> 
                            <td><?php echo get_sub_field('buy') ?></td>
                        </tr>
                        <tr>
                            <td>Bán</td> 
                            <td><?php echo get_sub_field('sell') ?></td>
                        </tr>
                    <?php endwhile; ?>
                </table>
            </div>
            <div class="oil-news-contents">
                <div class="oil-news-list flexBox flexBox--between flexBox--wrap flexBox-notSp">
                
                </div>
                
                <!-- <a href="" class="oil-view-more">Xem nhiều hơn</a> -->
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