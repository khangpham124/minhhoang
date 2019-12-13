<?php

//login logo
function custom_login_logo() {
        echo '<style type="text/css">h1 a { background: url('.get_bloginfo('template_directory').'/images/logo.png) 50% 50% no-repeat !important; }</style>';
}

add_action('login_head', 'custom_login_logo');
add_theme_support('post-thumbnails');

//timthumb

define('THEME_DIR', get_template_directory_uri());
/* Timthumb CropCropimg */
function thumbCrop($img='', $w=false, $h=false, $zc=1){
    if($h)
        $h = "&amp;h=$h";
    else
        $h = "";
        
    if($w)
        $w = "&amp;w=$w";
    else
        $w = "";
    $img = str_replace(get_bloginfo('url'), '', $img);
    $image_url = THEME_DIR . "/timthumb/timthumb.php?src=" . $img . $h . $w ;
    return $image_url;

}
$image_cache = THEME_DIR . "/php/cache/";
chmod($image_cache, 0777);

// 管理画面サイドバーメニュー非表示
function remove_menus () {
    if (!current_user_can('level_9')) { //level9以下のユーザーの場合メニューをunsetする
    global $menu;
    var_dump($menu);
    unset($menu[2]);//ダッシュボード
    unset($menu[4]);//メニューの線1
    unset($menu[5]);//投稿
    unset($menu[15]);//リンク
    unset($menu[20]);//ページ
    unset($menu[25]);//コメント
    unset($menu[59]);//メニューの線2
    unset($menu[60]);//テーマ
    unset($menu[65]);//プラグイン
    unset($menu[70]);//プロフィール
    unset($menu[75]);//ツール
    unset($menu[80]);//設定
    unset($menu[90]);//メニューの線3
    }
}
add_action('admin_menu', 'remove_menus');

function custom_admin_footer() {
    echo ' Minh Thanh Hoang Company';
}
add_filter('admin_footer_text', 'custom_admin_footer');

/* term drop down function */
function todo_restrict_manage_posts() {
    global $typenow;
    $args=array( 'public' => true, '_builtin' => false );
    $post_types = get_post_types($args);
    if ( in_array($typenow, $post_types) ) {
    $filters = get_object_taxonomies($typenow);
        foreach ($filters as $tax_slug) {
            $tax_obj = get_taxonomy($tax_slug);
            wp_dropdown_categories(array(
                'show_option_all' => __('カテゴリー '),
                'taxonomy' => $tax_slug,
                'name' => $tax_obj->name,
                'orderby' => 'term_order',
                'selected' => $_GET[$tax_obj->query_var],
                'hierarchical' => $tax_obj->hierarchical,
                'show_count' => false,
                'hide_empty' => true
            ));
        }
    }
}
function todo_convert_restrict($query) {
    global $pagenow;
    global $typenow;
    if ($pagenow=='edit.php') {
        $filters = get_object_taxonomies($typenow);
        foreach ($filters as $tax_slug) {
            $var = &$query->query_vars[$tax_slug];
            if ( isset($var) ) {
                $term = get_term_by('id',$var,$tax_slug);
                $var = $term->slug;
            }
        }
    }
    return $query;
}
add_action( 'restrict_manage_posts', 'todo_restrict_manage_posts' );
add_filter('parse_query','todo_convert_restrict');
/* term drop down function end*/

//for archives
global $my_archives_post_type;
add_filter( 'getarchives_where', 'my_getarchives_where', 10, 2 );
function my_getarchives_where( $where, $r ) {
  global $my_archives_post_type;
  if ( isset($r['post_type']) ) {
    $my_archives_post_type = $r['post_type'];
    $where = str_replace( '\'post\'', '\'' . $r['post_type'] . '\'', $where );
  } else {
    $my_archives_post_type = '';
  }
  return $where;
}
add_filter( 'get_archives_link', 'my_get_archives_link' );
function my_get_archives_link( $link_html ) {
  global $my_archives_post_type;
  if ( '' != $my_archives_post_type )
    $add_link .= '?post_type=' . $my_archives_post_type;
	$link_html = preg_replace("/href=\'(.+)\'\s/","href='$1".$add_link."'",$link_html);

  return $link_html;
}


// Custom post


add_action('init', 'my_custom_news');
function my_custom_news()
{
  $labels = array(
    'name' => _x('Tin tức', 'post type general name'),
    'singular_name' => _x('Tin tức', 'post type singular name'),
    'add_new' => _x('Thêm Tin tức', 'news'),
    'add_new_item' => __('add item'),
    'edit_item' => __('edit Tin tức'),
    'new_item' => __('new item'),
    'view_item' => __('view item'),
    'search_staff' => __('search'),
    'not_found' =>  __('not found'),
    'not_found_in_trash' => __('not found in trash'),
    'parent_item_colon' => ''
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'menu_position' => 5,
    'supports' => array('title','editor','thumbnail'),
	'has_archive' => true,
  );
  register_post_type('news',$args);
}

add_action ('init','create_newscat_taxonomy','0');
function create_newscat_taxonomy () {
	$taxonomylabels = array(
	'name' => _x('Danh mục','post type general name'),
	'singular_name' => _x('newscat','post type singular name'),
	'search_items' => __('newscat'),
	'all_items' => __('Danh mục'),
	'parent_item' => __( 'Parent Cat' ),
	'parent_item_colon' => __( 'Parent Cat:' ),
	'edit_item' => __('edit item'),
	'add_new_item' => __('add new'),
	'menu_name' => __( 'Danh mục' ),
	);
	$args = array(
	'labels' => $taxonomylabels,
	'hierarchical' => true,
	'has_archive' => true,
	'show_ui' => true,
	 'query_var' => true,
	 'rewrite' => array( 'slug' => 'tin-tuc' )
	);
	register_taxonomy('newscat','news',$args);
}


//sample
add_action('init', 'my_custom_real');
function my_custom_real()
{
  $labels = array(
    'name' => _x('BĐS', 'post type general name'),
    'singular_name' => _x('BĐS', 'post type singular name'),
    'add_new' => _x('Thêm BĐS', 'news'),
    'add_new_item' => __('add item'),
    'edit_item' => __('edit BDS'),
    'new_item' => __('new item'),
    'view_item' => __('view item'),
    'search_staff' => __('search'),
    'not_found' =>  __('not found'),
    'not_found_in_trash' => __('not found in trash'),
    'parent_item_colon' => ''
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'menu_position' => 5,
    'supports' => array('title','editor','thumbnail'),
    'has_archive' => true,
    'rewrite' => array('slug'=> 'bat-dong-san','with_front' => false),
  );
  register_post_type('real',$args);
}



add_action ('init','create_location_taxonomy','0');
function create_location_taxonomy () {
	$taxonomylabels = array(
	'name' => _x('Địa điểm','post type general name'),
	'singular_name' => _x('location','post type singular name'),
	'search_items' => __('location'),
	'all_items' => __('Địa điểm'),
	'parent_item' => __( 'Parent Cat' ),
	'parent_item_colon' => __( 'Parent Cat:' ),
	'edit_item' => __('edit item'),
	'add_new_item' => __('add new'),
	'menu_name' => __( 'Địa điểm' ),
	);
	$args = array(
	'labels' => $taxonomylabels,
	'hierarchical' => true,
	'has_archive' => true,
	'show_ui' => true,
	 'query_var' => true,
	 'rewrite' => array( 'slug' => 'location' )
	);
	register_taxonomy('location','real',$args);
}


add_action ('init','create_realsell_taxonomy','0');
function create_realsell_taxonomy () {
	$taxonomylabels = array(
	'name' => _x('BĐS bán','post type general name'),
	'singular_name' => _x('realsell','post type singular name'),
	'search_items' => __('realsell'),
	'all_items' => __('BĐS bán'),
	'parent_item' => __( 'Parent Cat' ),
	'parent_item_colon' => __( 'Parent Cat:' ),
	'edit_item' => __('edit item'),
	'add_new_item' => __('add new'),
	'menu_name' => __( 'BĐS bán' ),
	);
	$args = array(
	'labels' => $taxonomylabels,
	'hierarchical' => true,
	'has_archive' => true,
	'show_ui' => true,
	 'query_var' => true,
	 'rewrite' => array( 'slug' => 'bat-dong-san-can-ban' )
	);
	register_taxonomy('realsell','real',$args);
}


add_action ('init','create_realrent_taxonomy','0');
function create_realrent_taxonomy () {
	$taxonomylabels = array(
	'name' => _x('BĐS cho thuê','post type general name'),
	'singular_name' => _x('realrent','post type singular name'),
	'search_items' => __('realrent'),
	'all_items' => __('BĐS cho thuê'),
	'parent_item' => __( 'Parent Cat' ),
	'parent_item_colon' => __( 'Parent Cat:' ),
	'edit_item' => __('edit item'),
	'add_new_item' => __('add new'),
	'menu_name' => __( 'BĐS cho thuê' ),
	);
	$args = array(
	'labels' => $taxonomylabels,
	'hierarchical' => true,
	'has_archive' => true,
	'show_ui' => true,
	 'query_var' => true,
	 'rewrite' => array( 'slug' => 'bat-dong-san-cho-thue' )
	);
	register_taxonomy('realrent','real',$args);
}

add_action ('init','create_realtrans_taxonomy','0');
function create_realtrans_taxonomy () {
	$taxonomylabels = array(
	'name' => _x('Sang nhượng','post type general name'),
	'singular_name' => _x('realtrans','post type singular name'),
	'search_items' => __('realtrans'),
	'all_items' => __('Sang nhượng'),
	'parent_item' => __( 'Parent Cat' ),
	'parent_item_colon' => __( 'Parent Cat:' ),
	'edit_item' => __('edit item'),
	'add_new_item' => __('add new'),
	'menu_name' => __( 'Sang nhượng' ),
	);
	$args = array(
	'labels' => $taxonomylabels,
	'hierarchical' => true,
	'has_archive' => true,
	'show_ui' => true,
	 'query_var' => true,
	 'rewrite' => array( 'slug' => 'sang-nhuong' )
	);
	register_taxonomy('realtrans','real',$args);
}


add_action ('init','create_realbld_taxonomy','0');
function create_realbld_taxonomy () {
	$taxonomylabels = array(
	'name' => _x('Toà nhà VP','post type general name'),
	'singular_name' => _x('realbld','post type singular name'),
	'search_items' => __('realbld'),
	'all_items' => __('Toà nhà VP'),
	'parent_item' => __( 'Parent Cat' ),
	'parent_item_colon' => __( 'Parent Cat:' ),
	'edit_item' => __('edit item'),
	'add_new_item' => __('add new'),
	'menu_name' => __( 'Toà nhà VP' ),
	);
	$args = array(
	'labels' => $taxonomylabels,
	'hierarchical' => true,
	'has_archive' => true,
	'show_ui' => true,
	 'query_var' => true,
	 'rewrite' => array( 'slug' => 'toa-nha-van-phong' )
	);
	register_taxonomy('realbld','real',$args);
}


add_action ('init','create_realproject_taxonomy','0');
function create_realproject_taxonomy () {
	$taxonomylabels = array(
	'name' => _x('Dự án','post type general name'),
	'singular_name' => _x('realproject','post type singular name'),
	'search_items' => __('realproject'),
	'all_items' => __('Dự án'),
	'parent_item' => __( 'Parent Cat' ),
	'parent_item_colon' => __( 'Parent Cat:' ),
	'edit_item' => __('edit item'),
	'add_new_item' => __('add new'),
	'menu_name' => __( 'Dự án' ),
	);
	$args = array(
	'labels' => $taxonomylabels,
	'hierarchical' => true,
	'has_archive' => true,
	'show_ui' => true,
	 'query_var' => true,
	 'rewrite' => array( 'slug' => 'du-an' )
	);
	register_taxonomy('realproject','real',$args);
}

function getFeed($feed_url) {

    $content = file_get_contents($feed_url);
    $x = new SimpleXmlElement($content);
	 
    foreach($x->channel->item as $entry) {
		$arr = explode('</br>',$entry->description);
		echo'<div class="oil-news-focus-block">   
				<div class="thumb">
					'.$arr[0].'
				</div>
				<div class="text">
					<a href="'.$entry->link.'" target="_blank">
						<h1>'.$entry->title.'</h1>
						<time class="date"><i class="fa fa-clock-o"></i>'.$entry->pubDate.'</time>
					</a>
				</div>
			</div>';
    }
}

function getFeed2($feed_url) {

    $content = file_get_contents($feed_url);
    $x = new SimpleXmlElement($content);
	 
    foreach($x->channel->item as $entry) {
		$arr = explode('</br>',$entry->description);
		echo '<div class="oil-news-box">
				<a href="'.$entry->link.'">
					<div class="thumb">
						'.$arr[0].'
					</div>
					<div class="text">
						<a href="'.$entry->link.'" target="_blank">
							<h1>'.$entry->title.'</h1>
							<div>'.$entry->description.'</div>
							<time><i class="fa fa-clock-o"></i>'.$entry->pubDate.'</time>
						</a>
					</div>
				</a>
			</div>';	
    }
}

function wpb_disable_feed() {
	wp_die( __('No feed available,please visit our <a href="'. get_bloginfo('url') .'">homepage</a>!') );
	}
	 
	add_action('do_feed', 'wpb_disable_feed', 1);
	add_action('do_feed_rdf', 'wpb_disable_feed', 1);
	add_action('do_feed_rss', 'wpb_disable_feed', 1);
	add_action('do_feed_rss2', 'wpb_disable_feed', 1);
	add_action('do_feed_atom', 'wpb_disable_feed', 1);
	add_action('do_feed_rss2_comments', 'wpb_disable_feed', 1);
	add_action('do_feed_atom_comments', 'wpb_disable_feed', 1);
	