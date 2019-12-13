<?php
include($_SERVER["DOCUMENT_ROOT"] . "/app_config.php");
include(APP_PATH."wp/wp-load.php"); 

$parent = $_GET['parent'];

$args=array(
    'child_of' => $parent,
    'orderby' =>'ID',
    'order' => 'DESC',
    'hide_empty' => 0,
    'taxonomy' => 'location',
    'number' => '0',
    'pad_counts' => false
    );
    $categories = get_categories($args);
    foreach ( $categories as $category ):
    $slug = $category->slug;
?>
    <option value="<?php echo $category->slug;?>"><?php echo $category->name;?></option>
<?php endforeach; ?>
