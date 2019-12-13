<aside class="realty-sidebar">
    <div class="news realty-sidebar-box">
        
            <?php 
                $wp_query = new WP_Query();
                $param=array(
                'post_type'=>'news',
                'order' => 'DESC',
                'posts_per_page' => '3',
                'tax_query' => array(
                array(
                'taxonomy' => 'newscat',
                'field' => 'slug',
                'terms' => 'tin-tuc'
                )
                )
                );
                $wp_query->query($param);
                if($wp_query->have_posts()):
                ?>
                <h1 class="realty-title">TIN TỨC</h1>
                <ul class="realty-sidebar-list">
                <?php while($wp_query->have_posts()) : $wp_query->the_post();
                $bstaffID = get_post_thumbnail_id($post->ID);
                $thumb_url = wp_get_attachment_image_src($bstaffID,'full');
            ?>
            <li>
                <a href="<?php the_permalink(); ?>" class="flexBox flexBox--between">
                    <div class="thumb">
                        <?php if (has_post_thumbnail()) : ?>
                            <img src="<?php echo thumbCrop($thumb_url[0],370,250); ?>" alt="<?php the_title(); ?>"> 
                        <?php else : ?>
                            <img src="<?php echo APP_URL; ?>img/realty/logo_thumb.png">   
                        <?php endif;  ?>
                    </div>
                    <div class="text">
                        <h1><?php 
                            if(mb_strlen($post->post_title)>70) { $cont= mb_substr($post->post_title,0,70) ; echo strip_tags($cont. '...' );} else {echo strip_tags($post->post_title);}
                        ?></h1>
                        <time class="date"><i class="fa fa fa-clock-o"></i>&nbsp; <?php echo get_the_time('d.m.Y', $post->ID); ?></time>
                        <p class="contents">
                        <?php
                            if(mb_strlen($post->post_content)>100) { $cont= mb_substr($post->post_content,0,100) ; echo strip_tags($cont. '...' );} else {echo strip_tags($post->post_content);}
                        ?>
                        </p>
                    </div>
                </a>
            </li>
            <?php endwhile ?>
            </ul>
            <?php endif?>
        
    </div>
    <div class="feng-shui realty-sidebar-box">
            <?php 
                $wp_query = new WP_Query();
                $param=array(
                'post_type'=>'news',
                'order' => 'DESC',
                'posts_per_page' => '3',
                'tax_query' => array(
                array(
                'taxonomy' => 'newscat',
                'field' => 'slug',
                'terms' => 'phong-thuy'
                )
                )
                );
                $wp_query->query($param);
                if($wp_query->have_posts()):
                    ?>
            <h1 class="realty-title">TƯ VẤN PHONG THUỶ</h1>
            <ul class="realty-sidebar-list">       
            <?php
                    while($wp_query->have_posts()) : $wp_query->the_post();
                $bstaffID = get_post_thumbnail_id($post->ID);
                $thumb_url = wp_get_attachment_image_src($bstaffID,'full');
            ?>
            <li>
                <a href="<?php the_permalink(); ?>" class="flexBox flexBox--between">
                    <div class="thumb">
                        <?php if (has_post_thumbnail()) : ?>
                            <img src="<?php echo thumbCrop($thumb_url[0],370,250); ?>" alt="<?php the_title(); ?>"> 
                        <?php else : ?>
                            <img src="<?php echo APP_URL; ?>img/realty/logo_thumb.png">   
                        <?php endif;  ?>
                    </div>
                    <div class="text">
                        <h1><?php 
                            if(mb_strlen($post->post_title)>70) { $cont= mb_substr($post->post_title,0,70) ; echo strip_tags($cont. '...' );} else {echo strip_tags($post->post_title);}
                        ?></h1>
                        <time class="date"><i class="fa fa fa-clock-o"></i>&nbsp; <?php echo get_the_time('d.m.Y', $post->ID); ?></time>
                        <p class="contents">
                        <?php
                            if(mb_strlen($post->post_content)>100) { $cont= mb_substr($post->post_content,0,100) ; echo strip_tags($cont. '...' );} else {echo strip_tags($post->post_content);}
                        ?>
                        </p>
                    </div>
                </a>
            </li>
            <?php endwhile ?>
            </ul>
            <?php endif?>
        
    </div>
    <div class="houses realty-sidebar-box">
            <?php 
                $wp_query = new WP_Query();
                $param=array(
                'post_type'=>'news',
                'order' => 'DESC',
                'posts_per_page' => '4',
                'tax_query' => array(
                array(
                'taxonomy' => 'newscat',
                'field' => 'slug',
                'terms' => 'nha-dep'
                )
                )
                );
                $wp_query->query($param);
                if($wp_query->have_posts()):
            ?>
            <h1 class="realty-title">NHÀ ĐẸP</h1>
            <ul class="realty-sidebar-list">
            <?php 
                    while($wp_query->have_posts()) : $wp_query->the_post();
                $bstaffID = get_post_thumbnail_id($post->ID);
                $thumb_url = wp_get_attachment_image_src($bstaffID,'full');
            ?>
            <li>
                <a href="<?php the_permalink(); ?>" class="flexBox flexBox--between">
                    <div class="thumb">
                        <?php if (has_post_thumbnail()) : ?>
                            <img src="<?php echo thumbCrop($thumb_url[0],370,250); ?>" alt="<?php the_title(); ?>"> 
                        <?php else : ?>
                            <img src="<?php echo APP_URL; ?>img/realty/logo_thumb.png">   
                        <?php endif;  ?>
                    </div>
                    <div class="text">
                        <h1><?php echo $post->post_title;?></h1>
                        <time class="date"><i class="fa fa fa-clock-o"></i>&nbsp; <?php echo get_the_time('d.m.Y', $post->ID); ?></time>
                        <p class="contents">
                        <?php
                            if(mb_strlen($post->post_content)>100) { $cont= mb_substr($post->post_content,0,100) ; echo strip_tags($cont. '...' );} else {echo strip_tags($post->post_content);}
                        ?>
                        </p>
                    </div>
                </a>
            </li>
            <?php endwhile ?>
            </ul>
            <?php endif?>
        
    </div>
    <div class="realty-sidebar-form realty-sidebar-box">
        <ul class="tabs js-sidebar-tabs flexBox">
            <li class="tab current" data-tab="tab-1">CẦN THUÊ MUA</li>
            <li class="tab" data-tab="tab-2">CẦN BÁN</li>
        </ul>
        <div id="tab-1" class="tab-content js-sidebar-tab-content current">
            <form class="flexBox flexBox--wrap flexBox--between" action="https://minhthanhhoang.vn/mail/send.php" method="post" id="ajaxform"> 
                
                <input type="text" name="p_target" class="input input-full" placeholder="*Mục đích sử dụng (ở, loại hình kinh doanh....)" required>
                <input type="text" name="p_doit" class="input input-full" placeholder="*Mở thêm điểm kinh doanh hay mở mới" required>
                <input type="text" name="p_city" class="input input-full" placeholder="*Tên thành phố quan tâm" required>
                <input type="text" name="p_large" class="input input-half" placeholder="*Diện tích tối thiểu/sàn" required>
                <input type="text" name="p_size" class="input input-half" placeholder="*Mặt tiền tối thiểu" required>
                <input type="text" name="p_floor" class="input input-half" placeholder="*Số tầng tối thiểu" required>
                <input type="text" name="p_price" class="input input-half" placeholder="*Giá tối đa" required>
                <textarea name="p_content" class="input-textarea"></textarea>
                <input type="text" name="p_name" class="input input-full" placeholder="*Họ và tên" required>
                <input type="text" name="p_email" class="input input-full" placeholder="Email">
                
                <input type="hidden" id="p_chose" name="p_chose" value="CẦN THUÊ MUA">
                <button class="button-submit" id="simple-post"><i class="fa fa-paper-plane-o" aria-hidden="true"></i>&nbsp Gửi yêu cầu</button>
            </form>
            <p class="note">Nếu bạn không muốn điền trực tiếp vào form trên. Hãy gọi trực tiếp cho chúng tôi qua số 0918.349.014 (Mr.Hoàng) hoặc 0947.600.604 (Ms.Huế)</p>
            <p id="simple-msg"></p>
        </div>

        <div id="tab-2" class="tab-content js-sidebar-tab-content">
            <form class="flexBox flexBox--wrap flexBox--between" action="https://minhthanhhoang.vn/mail/send.php" method="post" id="ajaxform1"> 
                <input type="text" name="p_address" class="input input-full" placeholder="*Địa chỉ bất động sản" required>
                <input type="text" name="p_size2" class="input input-full" placeholder="*Diện tích" required>
                <input type="text" name="p_numbfloor" class="input input-full" placeholder="*Số tầng" required>
                <input type="text" name="p_price2" class="input input-half" placeholder="*Giá (Đơn vị: Triệu/Tỷ)" required> 
                <input type="text" name="p_name2" class="input input-half" placeholder="*Họ và tên"required>
                <input type="text" name="p_tell2" class="input input-half" placeholder="*Điện thoại"required>
                <input type="email" name="p_email2" class="input input-half" placeholder="Email">
                <input type="text" name="p_address2" class="input input-full" placeholder="*Địa chỉ liên hệ"required>
                <input type="hidden" id="p_chose" name="p_chose" value="CẦN BÁN">
                <button class="button-submit" id="simple-post1"><i class="fa fa-paper-plane-o" aria-hidden="true"></i>&nbsp Gửi yêu cầu</button>
            </form>
            <p class="note">Nếu bạn không muốn điền trực tiếp vào form trên. Hãy gọi trực tiếp cho chúng tôi qua số 0918.349.014 (Mr.Hoàng) hoặc 0947.600.604 (Ms.Huế)</p>
            <p id="simple-msg1"></p>
        </div>

    </div>
</aside>