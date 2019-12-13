
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

<div class="container realty-body">
    <div class="flexBox flexBox--between flexBox-notSp">
        <div class="realty-contents">
            <h1 class="realty-title">Kết quả tìm kiếm</h1>
            <div class="realty-list flexBox flexBox--between flexBox--wrap flexBox-notSp">
                <?php
                    $s_realsell = $_POST['realty-sell'];
                    $s_realrent = $_POST['realty-rent'];
                    $s_realtrans = $_POST['realty-transfer'];
                    $s_realbld = $_POST['realty-bld'];
                    $s_realproject = $_POST['realty-project'];

                    $realtyCity = $_POST['quick-city-main'];
                    $realtyScity = $_POST['quick-city-main_child'];

                    $realtySize = $_POST['size'];
                    $realtyPrice = $_POST['price'];
                    $realtyQuarter = $_POST['quarter'];
                    $realtyBedroom = $_POST['bedroom'];

                    $search = $_POST['search'];
                    $type_search = $_POST['type_search'];



                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $wp_query = new WP_Query();
                    
                    $param=array(
                        's'=> $search,
                        'post_type'=>'real',
                        'order' => 'DESC',
                        'posts_per_page' => '-1',
                        'meta_query' => array(
                            'relation' => 'OR',
                            array(
                                'key' => 'sl_price',
                                'value' => $realtyPrice,
                                'compare' => '='
                            ),
                            array(
                                'key' => 'sl_size',
                                'value' => $realtySize,
                                'compare' => '='
                            ),
                            array(
                                'key' => 'cf_numb',
                                'value' => $realtyBedroom,
                                'compare' => 'LIKE'
                            ),
                            array(
                                'key' => 'cf_position',
                                'value' => $realtyQuarter,
                                'compare' => 'LIKE'
                                ),
                        ),
                        // 'tax_query' => array(
                        //     'relation' => 'OR',
                        //     array(
                        //         'taxonomy' => $type_search,
                        //         'field' => 'slug',
                        //         'terms' => ${'s_'.$type_search}
                        //     ),
                        //     'tax_query' => array(
                        //         'relation' => 'OR',
                        //         array(
                        //             'taxonomy' => 'location',
                        //             'field' => 'slug',
                        //             'terms' => $realtyCity
                        //         ),
                        //         array(
                        //             'taxonomy' => 'location',
                        //             'field' => 'slug',
                        //             'terms' => $realtyScity
                        //         )
                        //     )
                        // )
                    );
                    $wp_query->query($param);
                    if($wp_query->have_posts()):while($wp_query->have_posts()) : $wp_query->the_post();
                    $thumb = get_post_thumbnail_id($post->ID);
                    $thumb_url = wp_get_attachment_image_src($thumb,'full');    
                ?>
                <div class="realty-box">
                    <div class="thumb">
                        <?php if (has_post_thumbnail()) : ?>
                            <img src="<?php echo thumbCrop($thumb_url[0],370,250); ?>" alt="<?php the_title(); ?>"> 
                        <?php else : ?>
                            <img src="<?php echo APP_URL; ?>img/realty/logo_thumb.png">   
                        <?php endif;  ?>
                    </div>
                    <div class="text">
                        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></h1>
                        <div>
                        <?php
                            if(mb_strlen($post->post_content)>200) { $cont= mb_substr($post->post_content,0,200) ; echo strip_tags($cont. '...' );} else {echo strip_tags($post->post_content);}
                        ?>
                        </div>
                        <ul class="info flexBox flexBox--between flexBox--wrap">
                            <li><i class="fa fa-clock-o"></i>&nbsp; <?php the_time('d.m.Y') ?></li>
                            <li><i class="fa fa-building"></i>&nbsp; <?php the_field('cf_size'); ?>m<sub>2</sub></li>
                            <li><i class="fa fa-map-marker"></i>&nbsp; 
                                <?php 
                                $terms_location = get_the_terms($post->ID, 'location');
                                foreach($terms_location as $term) { 
                                $termname_location = $term->name;
                                $termname_location_parent = $term->parent;
                                $location_parent = get_term_by( 'id', absint( $termname_location_parent ), 'location' );
                                $name_parent = $location_parent->name;
                                }
                                ?>
                                <?php echo $termname_location; ?>,
                                <?php if($termname_location_parent!='') { ?>
                                <?php echo $name_parent; ?>
                                <?php } ?>
                            </li>
                        </ul>
                        <div class="bottom flexBox flexBox--between flexBox--center">
                            <h2 class="price js-price"><?php echo get_field('cf_price'); ?></h2>
                            <a href="<?php the_permalink(); ?>" class="realty-link">Xem chi tiết</a>
                        </div>
                    </div>
                </div>
                <?php endwhile;endif; ?>
            </div>
        </div>
        <?php include(APP_PATH."libs/realty_sidebar.php"); ?>
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