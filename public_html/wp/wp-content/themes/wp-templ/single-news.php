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
        <li><?php the_title() ?></li>
    </ul>
    <div class="flexBox flexBox--between flexBox-notSp">
        <div class="realty-contents">
            <div class="realty-detail-box realty-news-contents">
                <h1 class="realty-news-title"><?php the_title()?></h1>
                <time class="date"><i class="fa fa fa-clock-o"></i>&nbsp; <?php the_time('d.m.Y') ?></time>
                <div style="margin-top: 20px;">
                    <?php 
                        echo $post->post_content;
                    ?>
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
                <h1 class="realty-title realty-title-b">TIN KHÁC LIÊN QUAN</h1>
                <?php 
                $current_post = $post->ID;
                $terms = get_the_terms($post->ID, 'newscat');
                foreach ($terms as $term) :
                    $posts = get_posts(
                        array(
                        'post_type' => 'news',
                        'exclude' => $current_post,
                        'posts_per_page' => '3',
                        'post_status' => 'publish',
                        'tax_query' => array(
                            array(
                            'taxonomy' => 'newscat',
                            'field' => 'term_id',
                            'terms' => $term->term_id)
                            ))
                        );
                        foreach($posts as $post) :
                    ?>
                        <?php 
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
                                    <time class="date"><i class="fa fa-clock-o"></i>&nbsp <?php echo get_the_time('d.m.Y', $post->ID); ?></time>
                                    <p>
                                        <?php
                                            if(mb_strlen($post->post_content)>200) { $cont= mb_substr($post->post_content,0,200) ; echo strip_tags($cont. '...' );} else {echo strip_tags($post->post_content);}
                                        ?>
                                    </p>
                                </div>
                            </a>
                        </div>
                        
                <?php endforeach;?>    
            <?php endforeach;?>
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