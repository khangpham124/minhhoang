<?php
include($_SERVER["DOCUMENT_ROOT"] . "/app_config.php");
include(APP_PATH."libs/head.php"); 
?>
<link rel="stylesheet" href="<?php echo APP_URL; ?>common/css/top.css" media="all">
</head>

<body id="top">
<!--===================================================-->
<div id="wrapper">
<!--===================================================-->
<!--Header-->
<?php include(APP_PATH."libs/header.php"); ?>
<!--/Header-->
<div class="main">
    <div class="banner">
        <h1 class="title">ĐẶT NỀN MÓNG
            <br>
            CHO GIẤC MƠ 
            <br>
            CỦA BẠN
        </h1>
    </div>
    <div class="information">
        <h1 class="title">
            <span>Công ty TNHH Minh Thanh Hoàng</span>
            <br>
            Với nhiều năm kinh nghiệm cùng với đội ngũ nhân viên xuất sắc, công ty Minh Thanh Hoàng tự hào mang lại nhiều dịch vụ thành công đem đến sự tiện ích và hài lòng cho khách hàng.
        </h1>
        <div class="container">
            <div class="information-list flexBox flexBox-start flexBox-notSp">
                <div class="information-block">
                    <img src="<?php echo APP_URL; ?>img/top/info.png" alt="Information"> 
                    <p>Mọi bất động sản đều được giới thiệu chi tiết rõ ràng, chính xác và minh bạch.</p>
                </div>
                <div class="information-block">
                    <img src="<?php echo APP_URL; ?>img/top/people.png" alt="People"> 
                    <p>Với đội ngũ nhân sự được đào tạo chuyên nghiệp và có nhiều năm kinh nghiệm</p>
                </div>
                <div class="information-block">
                    <img src="<?php echo APP_URL; ?>img/top/building.png" alt="Building"> 
                    <p>Công ty đã giao dịch thành công hàng nghìn bất động sản</p>
                </div>
            </div>
        </div>
    </div>
    <div class="services">
        <div class="container container-noMargin">
            <div class="services-block flexBox flexBox--center flexBox-notSp">
                <div class="image sp">
                    <img src="<?php echo APP_URL; ?>img/top/realty-1.jpg" alt="Building"> 
                </div>
                <div class="text">
                    <p class="service">DỊCH VỤ</p>
                    <h1 class="title">BẤT ĐỘNG SẢN</h1>
                    <p class="note">
                        Quý khách có nhu cầu bán hoặc cho thuê bất động sản, công ty sẽ tìm kiếm, giới thiệu, quảng cáo đến khách hàng có nhu cầu mua hoặc thuê bất động sản. (Quý khách là người có nhu cầu thuê, mua bất động sản, công ty sẽ tìm kiếm bất động sản cần bán, cho thuê để giới thiệu cho quý khách). 
                        <br>
                        <br>
                        Khi quý khách giao dịch thành công, công ty sẽ thực hiện dịch vụ hồ sơ, thủ tục chuyển nhượng hoặc cho thuê bất động sản miễn phí.
                    </p>
                    <a href="<?php echo APP_URL; ?>bat-dong-san" class="top-link">
                        <span>Xem chi tiết  &nbsp;<i class="fa fa-arrow-right" aria-hidden="true"></i></span>
                    </a>
                </div>
                <div class="image pc">
                    <img src="<?php echo APP_URL; ?>img/top/realty-1.jpg" alt="Building"> 
                </div>
            </div>
            <div class="services-block consumer-goods flexBox flexBox--center flexBox-notSp">
                <div class="image">
                    <img src="<?php echo APP_URL; ?>img/top/consumer-goods-1.jpg" alt="Building"> 
                </div>
                <div class="text">
                    <p class="service">DỊCH VỤ</p>
                    <h1 class="title">HÀNG TIÊU DÙNG</h1>
                    <p class="note">
                        Chúng tôi phân phối các mặt hàng tiêu dùng với chất lượng đảm bảo đem lại sự hài lòng cho khách hàng. Hiện tại mạng lưới phần phối của chúng tôi trải rộng trên các huyện Dầu Tiếng, Bàu Bàng, thị xã Bến Cát,... của tỉnh Bình Dương. 
                        <br>
                        <br>
                        Đối tác của chúng tôi: <strong>Công ty cổ phần đường Biên Hoà, Công ty TNHH Kimberly, Công ty TNHH Perfetti</strong>.
                    </p>
                    <a href="<?php echo APP_URL; ?>/hang-tieu-dung" class="top-link">
                        <span>Xem chi tiết  &nbsp;<i class="fa fa-arrow-right" aria-hidden="true"></i></span>
                    </a>
                </div>
            </div>
            <div class="services-block flexBox flexBox--center flexBox-notSp">
                <div class="image sp">
                    <img src="<?php echo APP_URL; ?>img/top/oil-2.jpg" alt="Building"> 
                </div>
                <div class="text">
                    <p class="service">DỊCH VỤ</p>
                    <h1 class="title">XĂNG DẦU</h1>
                    <p class="note">
                        Trong lĩnh vực xăng dầu, công ty Minh Thanh Hoàng kinh doanh các mặt hàng xăng dầu thông qua các cây xăng của công ty. Kết hợp với các dịch vụ <strong>Bất Động Sản</strong> và <strong>Hàng tiêu dùng</strong> công ty mang đến sự tiện lợi tối đa cho khách hàng.
                        <br>
                        <br>
                    </p>
                    <a href="<?php echo APP_URL; ?>xang-dau" class="top-link">
                        <span>Xem chi tiết  &nbsp;<i class="fa fa-arrow-right" aria-hidden="true"></i></span>
                    </a>
                </div>
                <div class="image pc">
                    <img src="<?php echo APP_URL; ?>img/top/oil-2.jpg" alt="Building"> 
                </div>
            </div>
            <div class="services-block coffee flexBox flexBox--center flexBox-notSp">
                <div class="image">
                    <ul class="js-slider">
                        <li>
                            <img src="<?php echo APP_URL; ?>img/top/coffee1.jpg" alt="">
                        </li>
                        <li>
                            <img src="<?php echo APP_URL; ?>img/top/coffee2.jpg" alt="">
                        </li>
                        <li>
                            <img src="<?php echo APP_URL; ?>img/top/coffee3.jpg" alt="">
                        </li>
                        <li>
                            <img src="<?php echo APP_URL; ?>img/top/coffee4.jpg" alt="">
                        </li>
                    </ul>
                </div>
                <div class="text">
                    <p class="service">DỊCH VỤ</p>
                    <h1 class="title">COFFEE</h1>
                    <p class="note">
                        Với không gian đẹp và menu đồ thức uống phong phú, ngon miệng. <strong>Nhà gỗ coffee MTH</strong> sẽ là điểm đến lý tưởng cho gia đình bạn. Hãy đến và trải nghiệm không gian nhà gỗ của của chúng tôi
                        <br>
                        <br>
                        Ngoài ra chúng tôi còn có sân khấu để tổ chức các buổi họp mặt, giao lưu trong không gian của <strong>Nhà gỗ coffee MTH</strong>.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="top-news">
        <h1 class="title">Bất động sản mới nhất</h1>
        <div class="container">
            <div class="top-news-list flexBox flexBox--between flexBox--start flexBox-notSp">
                <?php 
                    $wp_query = new WP_Query();
                    $param = array (
                    'posts_per_page' => '3',
                    'post_type' => 'real',
                    'post_status' => 'publish',
                    'order' => 'DESC',
                    'paged' => $paged,
                    );
                    $wp_query->query($param);
                    if($wp_query->have_posts()): while($wp_query->have_posts()) :$wp_query->the_post();
                    $bstaffID = get_post_thumbnail_id($post->ID);
                    $thumb_url = wp_get_attachment_image_src($bstaffID,'full');
                ?>
                <div class="top-news-block">
                    <a href="<?php the_permalink(); ?>">
                        <div class="thumb">
                            <?php if (has_post_thumbnail()) : ?>
                                <img src="<?php echo thumbCrop($thumb_url[0],370,250)?>" alt="realty"> 
                            <?php else : ?>
                                <img src="<?php echo APP_URL; ?>img/realty/logo_thumb.png">   
                            <?php endif;  ?>
                        </div>
                        <div class="text">
                            <h1><?php echo $post->post_title;?></h1>
                            <p>
                                <?php
                                    if(mb_strlen($post->post_content)>200) { $cont= mb_substr($post->post_content,0,200) ; echo strip_tags($cont. '...' );} else {echo strip_tags($post->post_content);}
                                ?>
                            </p>
                            <div class="bottom flexBox flexBox--between flexBox--center">
                                <time class="date"><i class="fa fa-clock-o"></i>&nbsp; <?php echo get_the_time('d.m.Y', $post->ID); ?></time>
                                <a href="" class="top-news-link"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </a>
                </div>
                <?php endwhile?>
                <?php endif?>
            </div>
            <a href="<?php echo APP_URL; ?>bat-dong-san" class="top-link top-link-news">
                <span>Xem chi tiết  &nbsp;<i class="fa fa-arrow-right" aria-hidden="true"></i></span>
            </a>
        </div>
    </div>
    <div class="contact">
        <div class="container">
            <div class="flexBox flexBox--between flexBox--wrap flexBox-notSp">
                <div class="leftContact">
                    <h3 class="h3_contact">Đừng ngại ngần gì<br>
                        <span>Hãy liên hệ với chúng tôi</span>
                    </h3>
                    <p class="txtContact">
                        Công ty TNHH Minh Thanh Hoàng. Thông tin liên hệ dưới đây :
                    </p>
                    <table class="contactInfo">
                        <tbody>
                            <tr>
                                <th><span><i class="fa fa-map-marker" aria-hidden="true"></i></span></th>
                                <td>Tổ 5, ấp Cống Quẹo, xã Long Tân, huyện Dầu Tiếng, tỉnh Bình Dương, Việt Nam</td>
                            </tr>
                            <tr>
                                <th><span><i class="fa fa-phone" aria-hidden="true"></i></span></th>
                                <td>Bất động sản: 0918.349.014 (Mr.Hoàng)<br>Thương mại: 0399 410 141 (Mr.Cang)</td>
                            </tr>
                            <tr>
                                <th><span><i class="fa fa-envelope" aria-hidden="true"></i></span></th>
                                <td>minhcang.tayninh0208@gmail.com</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="rightContact">
                <div id="map" style="position: relative; overflow: hidden;">
                </div>
            </div>
            </div>
        </div>
    </div>
<div>


<!--Footer-->
<?php include(APP_PATH."libs/footer.php"); ?>
<!--/Footer-->
<!--===================================================-->
</div>
<!--/wrapper-->
<!--===================================================-->

<script src="<?php echo APP_URL; ?>common/js/slick.min.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBV7fW4OF5FqFFlLakpTOvf1Kuq_qHXcqY"></script>
<script>
    $(function(){
        $('.js-slider').slick({
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
<script type="text/javascript">// When the window has finished loading create our google map below
   google.maps.event.addDomListener(window, 'load', init);
   
   function init() {
       // Basic options for a simple Google Map
       // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
       var mapOptions = {
           // How zoomed in you want the map to start at (always required)
           zoom: 14,
            scrollwheel: false,
            scaleControl: false,
            draggable: true,
            clickableIcons: false,
           // The latitude and longitude to center the map (always required)
           center: new google.maps.LatLng(11.2830625, 106.5414988),
   
           // How you would like to style the map. 
           // This is where you would paste any style found on Snazzy Maps.
          styles: [
           {
                "featureType": "administrative",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#444444"
                    }
                ]
            },
            {
                "featureType": "landscape",
                "elementType": "all",
                "stylers": [
                    {
                        "color": "#f2f2f2"
                    }
                ]
            },
            {
            "featureType": "landscape.natural",
            "elementType": "all",
            "stylers": [
                    {
                        "visibility": "on"
                    },
                    {
                        "color": "#e6e6e6"
                    }
                ]
            },
            {
            "featureType": "poi",
            "elementType": "all",
            "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
            "featureType": "road",
            "elementType": "all",
            "stylers": [
                    {
                        "saturation": -100
                    },
                    {
                        "lightness": 45
                    }
                ]
            },
            {
            "featureType": "road",
            "elementType": "geometry.fill",
            "stylers": [
                    {
                        "visibility": "on"
                    },
                    {
                        "hue": "#ff0000"
                    }
                ]
            },
            {
            "featureType": "road.highway",
            "elementType": "all",
            "stylers": [
                    {
                        "visibility": "simplified"
                    }
                ]
            },
            {
            "featureType": "road.highway",
            "elementType": "geometry.fill",
            "stylers": [
                    {
                        "color": "#fd9836"
                    },
                    {
                        "saturation": "85"
                    },
                    {
                        "lightness": "31"
                    },
                    {
                        "gamma": "1.24"
                    }
                ]
            },
            {
            "featureType": "road.highway",
            "elementType": "labels.text",
            "stylers": [
                    {
                        "visibility": "simplified"
                    }
                ]
            },
            {
            "featureType": "road.arterial",
            "elementType": "geometry.fill",
            "stylers": [
            {
                "hue": "#ff0000"
            },
            {
                "saturation": "1"
            }
            ]
            },
            {
            "featureType": "road.arterial",
            "elementType": "labels.icon",
            "stylers": [
            {
                "visibility": "off"
            }
            ]
            },
            {
            "featureType": "transit",
            "elementType": "all",
            "stylers": [
            {
                "visibility": "off"
            }
            ]
            },
            {
            "featureType": "transit.station",
            "elementType": "all",
            "stylers": [
            {
                "visibility": "simplified"
            },
            {
                "hue": "#ff0000"
            },
            {
                "saturation": "-100"
            }
            ]
            },
            {
            "featureType": "transit.station.airport",
            "elementType": "all",
            "stylers": [
            {
                "visibility": "on"
            }
            ]
            },
            {
            "featureType": "transit.station.bus",
            "elementType": "all",
            "stylers": [
            {
                "visibility": "simplified"
            }
            ]
            },
            {
            "featureType": "transit.station.rail",
            "elementType": "all",
            "stylers": [
            {
                "visibility": "simplified"
            },
            {
                "hue": "#ff7e00"
            },
            {
                "saturation": "-100"
            },
            {
                "lightness": "19"
            }
            ]
            },
            {
            "featureType": "water",
            "elementType": "all",
            "stylers": [
            {
                "color": "#d7d7d7"
            },
            {
                "visibility": "on"
            }
            ]
            }
          ]
       };
   
       // Get the HTML DOM element that will contain your map 
       // We are using a div with id="map" seen below in the <body data-rsssl=1>
       var mapElement = document.getElementById('map');
   
       // Create the Google Map using our element and options defined above
       var map = new google.maps.Map(mapElement, mapOptions);
   
       // Let's also add a marker while we're at it
       var marker = new google.maps.Marker({
            position: new google.maps.LatLng(11.2830625, 106.5414988),
            map: map,
            icon: new google.maps.MarkerImage('<?php echo APP_URL; ?>img/top/pin.png',null,null, null,new google.maps.Size(60, 60))
       });
   }
</script>

</body>
</html>	