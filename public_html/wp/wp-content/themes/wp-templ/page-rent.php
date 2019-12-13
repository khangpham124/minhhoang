
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
        <li>Nhà đất cho thuê</li>
    </ul>
    <h1 class="realty-title-category">NHÀ ĐẤT CHO THUÊ</h1>
    <div class="realty-quick-search">
        <form class="flexBox flexBox--between flexBox--start flexBox-wrap flexBox-notSp" acton="" method="post">
            <input type="text" name="key" class="input-text" placeholder="Nhập từ khoá. VD: Vinhomes">
            <select name="list-city" class="input-select" id="quick-city">
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
            <select class="input-select" id="quick-city_child" name="quick-city_child">
                <option value="" selected>Chọn Xã/Phường/Thị Trấn</option>
            </select>
            <button type="submit" class="button-submit"><i class="fa fa-search" aria-hidden="true"></i>&nbsp; Tìm kiếm</button>
        </form>
    </div>
    <div class="flexBox flexBox--between flexBox-notSp">
        <div class="realty-contents">
            <div class="realty-category">
                <?php
                    $current_term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); // get current category 
                    $current_term->slug;
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $wp_query = new WP_Query();
                    
                    if(($_POST['list-city']!="")||($_POST['list-city']!="")) {
                        $param=array(
                        's'=> $_POST['key'],
                        'post_type'=>'real',
                        'order' => 'DESC',
                        'posts_per_page' => '10',
                            'tax_query' => array(
                                'relation' => 'AND',
                                array(
                                    'taxonomy' => 'realrent',
                                    'field' => 'slug',
                                    'terms' => $current_term->slug
                                ),
                                'tax_query' => array(
                                    'relation' => 'OR',
                                    array(
                                        'taxonomy' => 'location',
                                        'field' => 'slug',
                                        'terms' => $_POST['list-city']
                                    ),
                                    array(
                                        'taxonomy' => 'location',
                                        'field' => 'slug',
                                        'terms' => $_POST['quick-city_child']
                                    )
                                )
                            )
                        );
                        
                    } else {
                        $cate = array();
                        $args=array(
                            'child_of' => 0,
                            'orderby' =>'ID',
                            'order' => 'DESC',
                            'hide_empty' => 1,
                            'taxonomy' => 'realrent',
                            'number' => '0',
                            'pad_counts' => false
                            );
                            $categories = get_categories($args);
                            foreach ( $categories as $category ) {
                            $slug = $category->slug;
                            $cate[]=$slug;
                        }
                        
                        $param=array(
                            'post_type'=>'real',
                            'order' => 'DESC',
                            'posts_per_page' => '10',
                            'tax_query' => array(
                                array(
                                'taxonomy' => 'realrent',
                                'field' => 'slug',
                                'terms' => $cate
                                )
                            )
                        );
                    }
                    $wp_query->query($param);
                    if($wp_query->have_posts()):while($wp_query->have_posts()) : $wp_query->the_post();
                    $thumb = get_post_thumbnail_id($post->ID);
                    $thumb_url = wp_get_attachment_image_src($thumb,'full');

                    $terms1 = get_the_terms($post->ID, 'location');
                    foreach($terms1 as $term) { 
                        $city_small = $term->name;
                        $city_big = $term->parent;
                        $pa = get_term_by( 'id', absint( $city_big ), 'location' );
                        $pa2 = $pa->name;
                    }
                  
                ?>
                    <a href="<?php the_permalink(); ?>" class="realty-box-s flexBox flexBox--between">
                        <div class="thumb">
                            <?php if (has_post_thumbnail()) : ?>
                                <img src="<?php echo thumbCrop($thumb_url[0],370,250); ?>" alt="<?php the_title(); ?>"> 
                            <?php else : ?>
                                <img src="<?php echo APP_URL; ?>img/realty/logo_thumb.png">   
                            <?php endif;  ?> 
                        </div>
                        <div class="text">
                            <h1><?php the_title(); ?></h1>
                            <div>
                            <?php
                                if(mb_strlen($post->post_content)>200) { $cont= mb_substr($post->post_content,0,200) ; echo strip_tags($cont. '...' );} else {echo strip_tags($post->post_content);}
                            ?>
                            </div>
                            <div class="flexBox detail flexBox--between flexBox--center flexBox-notSp">
                                <ul class="info">
                                    <li><i class="fa fa-clock-o"></i>&nbsp;<?php the_time('d.m.Y') ?></li>
                                    <li><i class="fa fa-building"></i>&nbsp;<?php the_field('cf_size'); ?>m<sub>2</sub></li>
                                    <li><i class="fa fa-map-marker"></i>&nbsp;<?php echo $pa2; ?> - <?php echo $city_small; ?></li>
                                </ul>
                                <h2 class="price js-price"><?php echo get_field('cf_price'); ?></h2>
                            </div>
                        </div>
                    </a>
                <?php endwhile;endif; ?>
            </div>
            <div class="pagination">
            <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
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
<script>
    $('#quick-city').on('change', function() {
        var sl = $('select[name="list-city"] :selected').attr('data-attr');
        $.ajax({
            url: "https://minhthanhhoang.vn/ajax/city.php?parent="+sl
            }).done(function(data) { // data what is sent back by the php page
            $('#quick-city_child').html(data); // display data
        });
    });
</script>
</body>
</html>	