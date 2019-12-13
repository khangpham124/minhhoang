<?php echo('<?xml version="1.0" encoding="UTF-8"?>'); ?>
<!DOCTYPE html>
<html lang="vi">
<head>	
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<!--responsive or smartphone-->
<meta name="format-detection" content="telephone=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="google-site-verification" content="VkeqOhdbac90_MGN2fyZejNcN2zIeaP_6KfGPjSfv-c"/>
<?php
	// set viewport by user agent.
	require_once 'ua.class.php';
	$ua = new UserAgent();
	if($ua->set() === 'tablet') :
		// set width when you use the tablet
		$width = '1024px';
?>
<meta content="width=<?php echo $width; ?>" name="viewport">
<?php else: ?>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
<?php endif; ?>

<?php include(APP_PATH."libs/argument.php"); ?>
<title><?php echo $titlepage; ?></title>
<meta name="description" content="Mua bán - Ký gửi bất động sản uy tín - Hàng tiêu dùng - Xăng dầu">
<meta name="keywords" content="Bất động sản, hàng tiêu dùng, xăng dầu">

<!--facebook-->
<meta property="og:title" content="<?php echo $titlepage; ?>">
<meta property="og:type" content="website">
<meta property="og:url" content="<?php echo $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";?>">
<meta property="og:image" content="<?php echo APP_URL; ?>common/img/logo.png">
<meta property="og:site_name" content="CÔNG TY THHH MINH THANH HOÀNG">
<meta property="og:description" content="Mua bán - Ký gửi bất động sản uy tín - Hàng tiêu dùng - Xăng dầu">
<!--/facebook-->

<!--css-->
<link rel="stylesheet" href="<?php echo APP_URL; ?>common/css/base.css" media="all">
<link rel="stylesheet" href="<?php echo APP_URL; ?>common/css/common.css" media="all">
<link rel="stylesheet" href="<?php echo APP_URL; ?>common/css/oil.css" media="all">
<link rel="stylesheet" href="<?php echo APP_URL; ?>common/css/style.css" media="all">
<link rel="stylesheet" href="<?php echo APP_URL; ?>common/css/media.css" media="all">
<link rel="stylesheet" href="<?php echo APP_URL; ?>common/css/realty.css" media="all">
<link rel="stylesheet" href="<?php echo APP_URL; ?>common/css/slick.css" media="all">
<!--/css-->
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700,900" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<!--favicons-->
<link rel="icon" href="<?php echo APP_URL; ?>common/img/favicon.png" type="image/vnd.microsoft.icon">

<?php
	//wp_head();
?>
