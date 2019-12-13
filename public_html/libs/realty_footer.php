<div class="realty-footer">
    <div class="container">
        <div class="nav flexBox flexBox--between flexBox-notSp">
            <div class="realty-footer-block">
                <h1>DỰ ÁN NỔI BẬT</h1>
                <ul>
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
                    <li>
                        <a href="<?php the_permalink(); ?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i>&nbsp; <?php echo $post->post_title;?></a>
                    </li>
                <?php endwhile?>
                <?php endif?>
                </ul>
            </div>
            <div class="realty-footer-block">
                <h1>TIN TỨC 24h</h1>
                <ul>
                <?php 
                    $wp_query = new WP_Query();
                    $param = array (
                    'posts_per_page' => '3',
                    'post_type' => 'news',
                    'post_status' => 'publish',
                    'order' => 'DESC',
                    'paged' => $paged,
                    );
                    $wp_query->query($param);
                    if($wp_query->have_posts()): while($wp_query->have_posts()) :$wp_query->the_post();
                    $bstaffID = get_post_thumbnail_id($post->ID);
                    $thumb_url = wp_get_attachment_image_src($bstaffID,'full');
                ?>
                    <li>
                        <a href="<?php the_permalink(); ?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i>&nbsp; <?php echo $post->post_title;?></a>
                    </li>
                <?php endwhile?>
                <?php endif?>
                </ul>
            </div>
            <div class="realty-footer-block contact flexBox">
                <div class="icon">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                </div>
                <div class="text">
                    <h2>
                        0918 349 014 <span style="font-size:14px;">(Mr.Hoàng)</span>
                        <br>
                        0399 410 141 <span style="font-size:14px;">(Mr.Cang)</span>
                    </h2>
                    <p><i class="fa fa-fax" aria-hidden="true"></i>&nbsp 0274.3543.590</p>
                    <p><i class="fa fa-envelope-o" aria-hidden="true"></i>&nbsp minhcang.tayninh0208@gmail.com<p>
                    <p><i class="fa fa-internet-explorer" aria-hidden="true"></i>&nbsp minhthanhhoang.vn</p>
                </div>
            </div>
        </div>
    </div>
    <div class="menu">
        <div class="container">
            <ul class="flexBox flexBox--center flexBox--between flexBox-notSp">
                <li> 
                    <a href="<?php echo APP_URL; ?>">TRANG CHỦ</a>
                </li>
                <li> 
                    <a href="<?php echo APP_URL; ?>bat-dong-san-can-ban/">NHÀ ĐẤT CẦN BÁN</a>
                </li>
                <li> 
                    <a href="<?php echo APP_URL; ?>bat-dong-san-cho-thue/">NHÀ ĐẤT CHO THUÊ</a>
                </li>
                <li> 
                    <a href="<?php echo APP_URL; ?>sang-nhuong/">SANG NHƯỢNG</a>
                </li>
                <li> 
                    <a href="<?php echo APP_URL; ?>toa-nha-van-phong/">TOÀ NHÀ VĂN PHÒNG</a>
                </li>
                <li> 
                    <a href="<?php echo APP_URL; ?>du-an/">DỰ ÁN</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<footer class="footer footer--realty">
    <p class="copyright">
        Copyright &copy; 2019 minhthanhhoang.vn. 
        <br class="sp"> All rights reserved.
        <br>
        Ghi rõ nguồn "MinhThanhHoang" khi coppy.
        <br>
        <i class="fa fa-user" aria-hidden="true"></i> Online: <?php echo do_shortcode('[wpstatistics stat=usersonline]');?>
        <br>
        <i class="fa fa-eye" aria-hidden="true"></i> Lượt truy cập: <?php echo do_shortcode('[wpstatistics stat=visits time=total]');?>
    </p>
</footer>
<script src="<?php echo APP_URL; ?>common/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="<?php echo APP_URL; ?>common/js/common.js"></script>

<script>
    $('#quick-city-main').on('change', function() {
        var sl = $('select[name="quick-city"] :selected').attr('data-attr');
        $.ajax({
            url: "https://minhthanhhoang.vn/ajax/city.php?parent="+sl
            }).done(function(data) { // data what is sent back by the php page
            $('#quick-city-main_child').html(data); // display data
        });
    });
</script>

<script>
$(document).ready(function(){
    $("#simple-post").click(function(){
        $("#ajaxform").submit(function(e){
        $("#simple-msg").html("thông tin đã được gửi");
        var postData = $(this).serializeArray();
        var formURL = $(this).attr("action");
        $.ajax(
        {
        url : formURL,
        type: "POST",
        data : postData,
        success:function(data, textStatus, jqXHR) 
        {
        location.href = call;
        $('.input-full').val('');
        },
        error: function(jqXHR, textStatus, errorThrown) 
        {
        $("#simple-msg").html('<pre><code class="prettyprint">AJAX Request Failed<br/> textStatus='+textStatus+', errorThrown='+errorThrown+'</code></pre>');
        }
        });
        e.preventDefault(); //STOP default action
        e.unbind();
        });
    });

    $("#simple-post1").click(function(){
        $("#ajaxform1").submit(function(e){
        $("#simple-msg1").html("thông tin đã được gửi");
        var postData = $(this).serializeArray();
        var formURL = $(this).attr("action");
        $.ajax(
        {
        url : formURL,
        type: "POST",
        data : postData,
        success:function(data, textStatus, jqXHR) 
        {
        location.href = call;
        $('.input-full').val('');
        },
        error: function(jqXHR, textStatus, errorThrown) 
        {
        $("#simple-msg1").html('<pre><code class="prettyprint">AJAX Request Failed<br/> textStatus='+textStatus+', errorThrown='+errorThrown+'</code></pre>');
        }
        });
        e.preventDefault(); //STOP default action
        e.unbind();
        });
    });
});
</script>
