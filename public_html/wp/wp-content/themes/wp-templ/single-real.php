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
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.2&appId=1607782269479255&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="container realty-body realty-detail">
    <ul class="breadcrumb">
        <li><a href="<?php echo APP_URL; ?>bat-dong-san"><i class="fa fa-home" aria-hidden="true"></i></a></li>
        <li><?php echo the_title()?></li>
    </ul>
    <div class="flexBox flexBox--between flexBox-notSp">
        <div class="realty-contents">
            <div class="realty-detail-box">
                <div class="info">
                    <h1><?php the_title()?></h1>
                    <p class="date"><i class="fa fa-clock-o"></i>&nbsp <?php the_time('d.m.Y') ?></p>
                    <?php 
                        $terms_location = get_the_terms($post->ID, 'location');
                        foreach($terms_location as $term) { 
                        $termname_location = $term->name;
                        $termname_location_parent = $term->parent;
                        $location_parent = get_term_by( 'id', absint( $termname_location_parent ), 'location' );
                        $name_parent = $location_parent->name;
                        }
                    ?>
                    <p class="location"><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp 
                        <?php echo $termname_location; ?>,
                        <?php if($termname_location_parent!='') { ?>
                        <?php echo $name_parent; ?>
                        <?php } ?>
                    </p>
                    <div class="detail flexBox flexBox-notSp">
                        <p  class="price">
                            <span>Giá: &nbsp</span>
                            <span class="js-price"><?php echo get_field('cf_price'); ?> VND</span>
                        </p>
                        <p  class="area">
                            <span>Diện tích: &nbsp</span>
                            <span><?php echo get_field('cf_size') ?>m<sup>2</sup></span>
                        </p>
                    </div>
                </div>
                <div class="description">
                    <h1>Thông tin mô tả</h1>
                    <div>
                        <?php 
                            echo $post->post_content;
                        ?>
                    </div>
                </div>
            </div>
            <?php
                if(get_field('cf_slider')): 
            ?>
            <div class="realty-detail-box realty-detail-images">
                <h2>Hình ảnh</h2>
                <ul class="slider-for">
                    <?php
                    while(has_sub_field('cf_slider')):
                    $image = wp_get_attachment_image_src(get_sub_field('img'),'full');
                    ?>
                    <li>
                        <img src="<?php echo thumbCrop($image[0],700,525)?>" alt="">
                    </li>
                    <?php endwhile ?>
                </ul>
                <ul class="slider-nav">
                    <?php
                        while(has_sub_field('cf_slider')):
                        $image = wp_get_attachment_image_src(get_sub_field('img'),'full');
                        ?>
                        <li>
                            <img src="<?php echo thumbCrop($image[0],700,525)?>" alt="">
                        </li>
                    <?php endwhile ?>
                </ul>
            </div>
            <?php endif; ?>
            <div class="realty-detail-box flexBox flexBox--between flexBox-notSp">
                <div class="realty-detail-properties">
                    <h2>Đặc điểm bất động sản</h2>
                    <?php 
                        $terms_location = get_the_terms($post->ID, 'location');
                        foreach($terms_location as $term) { 
                        $termname_location = $term->name;
                        $termname_location_parent = $term->parent;
                        $location_parent = get_term_by( 'id', absint( $termname_location_parent ), 'location' );
                        $name_parent = $location_parent->name;
                        }

                        $terms_project = get_the_terms($post->ID, 'realproject');
                        foreach($terms_project as $term) { 
                        $termname_project = $term->name;
                        }

                        $terms_realsell = get_the_terms($post->ID, 'realsell');
                        foreach($terms_realsell as $term) { 
                        $terms_realsell = $term->name;
                        }

                        $terms_realrent = get_the_terms($post->ID, 'realrent');
                        foreach($terms_realrent as $term) { 
                        $terms_realrent = $term->name;
                        }

                        $terms_realtrans = get_the_terms($post->ID, 'realtrans');
                        foreach($terms_realtrans as $term) { 
                        $terms_realtrans = $term->name;
                        }

                        $terms_realbld = get_the_terms($post->ID, 'realbld');
                        foreach($terms_realbld as $term) { 
                        $terms_realbld = $term->name;
                        }
                    ?>
                    <table class="realty-detail-table">
                        <tbody>
                            <tr>
                                <th>Địa chỉ</th>
                                <td><?php echo $termname_location; ?>
                                <?php if($termname_location_parent!='') { ?>
                                - <?php echo $name_parent; ?>
                                <?php } ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Loại bất động sản</th>
                                <td>
                                <?php 
                                    if($terms_realsell!='') {
                                        echo '<span>'.$terms_realsell.'</span>';
                                    }
                                ?>
                                <?php 
                                    if($terms_realrent!='') {
                                        echo '<span>'.$terms_realrent.'</span>';
                                    }
                                ?>
                                <?php 
                                    if($terms_realtrans!='') {
                                        echo '<span>'.$terms_realtrans.'</span>';
                                    }
                                ?>
                                <?php 
                                    if($terms_realbld!='') {
                                        echo '<span>'.$terms_realbld.'</span>';
                                    }
                                ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Hướng</th>
                                <td><?php echo get_field('cf_position') ?></td>
                            </tr>
                            <tr>
                                <th>Số phòng ngủ</th>
                                <td><?php echo get_field('cf_numb') ?></td>
                            </tr>
                            <tr>
                                <th>Dự án</th>
                                <td>
                                <?php echo $termname_project; ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Ngày đăng tin</th>
                                <td><?php the_time('d.m.Y') ?></td>
                            </tr>
                            <tr>
                                <th>Tình trạng</th>
                                <td><?php echo get_field('cf_status') ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="realty-detail-properties">
                    <h2>Thông tin liên hệ</h2>
                    <table class="realty-detail-table">
                        <tbody>
                            <tr>
                                <th>Tên liên lạc</th>
                                <td><?php echo get_field('cf_guy') ?></td>
                            </tr>
                            <tr>
                                <th>Điện thoại</th>
                                <td><a href="tel:<?php echo get_field('cf_phone')?>"><?php echo get_field('cf_phone') ?></a></td>
                            </tr>
                            <tr>
                                <th>Zalo</th>
                                <td><?php echo get_field('cf_phone') ?></td>
                            </tr>
                            <tr>
                                <th>Skype</th>
                                <td><?php echo get_field('cf_skype') ?></td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td><a href="mailto:<?php echo get_field('cf_email')?>"><?php echo get_field('cf_email') ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="sns flexBox flexBox--between flexBox--center flexBox-notSp">
                <p>Chia sẻ bài viết này. Chọn mạng xã hội của bạn!</p>
                <ul class="flexBox sns-list">
                    <li class="facebook">
                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>/" target="_blank"><img src="<?php echo APP_URL; ?>common/img/facebook.png"></a>
                    </li>
                    <li class="google">
                        <a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" target="_blank"><img src="<?php echo APP_URL; ?>common/img/google.png"></a>
                    </li>
                    <li class="twitter">
                        <a href="https://twitter.com/home?status=<?php the_permalink(); ?>" target="_blank"><img src="<?php echo APP_URL; ?>common/img/twitter.png"></a>
                    </li>
                    <li class="linkedin">
                        <a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>" target="_blank"><img src="<?php echo APP_URL; ?>common/img/linkedin.png"></a>
                    </li>
                    <li class="pinterest">
                        <a><img src="<?php echo APP_URL; ?>common/img/pinterest.png"></a>
                    </li>
                </ul>
            </div>

            <div class="realty-ref">
                <h1 class="realty-title" style="margin-bottom: 30px;">TIN KHÁC LIÊN QUAN</h1>
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
                <div class="realty-box-s">
                    <a href="" class="flexBox flexBox--between">
                        <div class="thumb">
                            <?php if (has_post_thumbnail()) : ?>
                                <img src="<?php echo thumbCrop($thumb_url[0],370,250); ?>" alt="<?php the_title(); ?>"> 
                            <?php else : ?>
                                <img src="<?php echo APP_URL; ?>img/realty/logo_thumb.png">   
                            <?php endif;  ?>
                        </div>
                        <div class="text">
                            <h1><?php echo $post->post_title;?></h1>
                            <div class="pc">
                                <?php
                                    if(mb_strlen($post->post_content)>100) { $cont= mb_substr($post->post_content,0,100) ; echo strip_tags($cont. '...' );} else {echo strip_tags($post->post_content);}
                                ?>
                            </div>
                            <div class="flexBox detail flexBox--between flexBox--center flexBox-notSp">
                                <ul class="info">
                                    <li><i class="fa fa-clock-o"></i>&nbsp; <?php echo get_the_time('d.m.Y', $post->ID); ?></li>
                                    <li><i class="fa fa-building"></i>&nbsp; <?php echo get_field('cf_size',$post->ID) ?>m<sub>2</sub></li>
                                    <li><i class="fa fa-map-marker"></i>
                                    <?php
                                        $terms_location = get_the_terms($post->ID, 'location');
                                        foreach($terms_location as $term) { 
                                        $termname_location = $term->name;
                                        $termname_location_parent = $term->parent;
                                        $location_parent = get_term_by( 'id', absint( $termname_location_parent ), 'location' );
                                        $name_parent = $location_parent->name;
                                        }
                                    ?>
                                    <?php echo $termname_location; ?>
                                    <?php if($termname_location_parent!='') { ?>
                                    - <?php echo $name_parent; ?>
                                    <?php } ?>
                                    </li>
                                </ul>
                                <h2 class="price js-price"><?php echo get_field('cf_price',$post->ID) ?></h2>
                            </div>
                        </div>
                    </a>
                </div>
                <?php endwhile?>
                <?php endif?>
            </div>
            <div class="realty-detail-box realty-detail-cmt">
                <h1 class="realty-title">BÌNH LUẬN</h1>
                <div class="fb-comments" data-href="<?php echo $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>" data-width="100%" data-numposts="5" data-colorscheme="light" fb-xfbml-state="rendered" fb-iframe-plugin-query="" style="width: 100%;"></div>
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
<script src="<?php echo APP_URL; ?>common/js/slick.min.js"></script>
<script>
    $(function(){
        $('.slider-for').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            asNavFor: '.slider-nav'
        });
        $('.slider-nav').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            arrows: false,
            asNavFor: '.slider-for',
            dots: false,
            centerMode: true,
            focusOnSelect: true
        });
    });
</script>
</body>
</html>	