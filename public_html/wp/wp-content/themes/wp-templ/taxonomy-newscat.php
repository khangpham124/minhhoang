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
        <li><a href="<?php echo APP_URL; ?>bat-dong-san"><i class="fa fa-home" aria-hidden="true"></i></a></li>
        <li>Tin tức</li>
    </ul>
    <h1 class="realty-title-category">
        <?php
            $current_term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
            echo $current_term->name;
        ?>
    </h1>
    <div class="flexBox flexBox--between flexBox-notSp">
        <div class="realty-contents" style="margin-top: 30px">
            <div class="realty-category">
                <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    query_posts($query_string . '&orderby=post_date&order=desc&posts_per_page=10&paged=' . $paged); 
                    if(have_posts()):while(have_posts()) : the_post();
                    $bstaffID = get_post_thumbnail_id($post->ID);
                    $thumb_url = wp_get_attachment_image_src($bstaffID,'full');
                ?>
                    <div class="realty-box-s">
                        <a href="<?php the_permalink(); ?>" class="flexBox flexBox--between">
                            <div class="thumb">
                                <?php if (has_post_thumbnail()) : ?>
                                    <img src="<?php echo thumbCrop($thumb_url[0],370,250); ?>" alt="<?php the_title(); ?>"> 
                                <?php else : ?>
                                    <img src="<?php echo APP_URL; ?>img/realty/logo_thumb.png">   
                                <?php endif;  ?> 
                            </div>
                            <div class="text">
                                <h1><?php the_title()?></h1>
                                <time class="date"><i class="fa fa-clock-o"></i>&nbsp <?php the_time('d.m.Y') ?></time>
                                <p>
                                    <?php
                                        if(mb_strlen($post->post_content)>200) { $cont= mb_substr($post->post_content,0,200) ; echo strip_tags($cont. '...' );} else {echo strip_tags($post->post_content);}
                                    ?>
                                </p>
                            </div>
                        </a>
                    </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="pagination">
                <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
            </div>
        </div>
        <?php include(APP_PATH."libs/news_sidebar.php"); ?>
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