<?php
$pagename = str_replace(array('/', '.php', '?s='), '', $_SERVER['REQUEST_URI']);
$pagename = str_replace("wp", '', $_SERVER['REQUEST_URI']);
$pagename = $pagename ? $pagename : 'default';

switch ($pagename) {
    case "hang-tieu-dung":
		$titlepage = "Hàng tiêu dùng";
		$desPage = "Hàng tiêu dùng, Công ty TNHH Minh Thanh Hoàng";
		$keyPage = "minhthanhhoang,consumer-goods";
		$txtH1 = "H1 content for consumer goods";
	break;

	case "xang-dau":
		$titlepage = "Xăng dầu";
		$desPage = "Xăng dầu, Công ty TNHH Minh Thanh Hoàng";
		$keyPage = "minhthanhhoang, oil";
		$txtH1 = "H1 content for oil";
	break;
	 
    default:
		$titlepage = "Công ty TNHH Minh Thanh Hoàng";			
		$desPage = "";
		$keyPage = "";
		$txtH1 = "H1 Default";
}
?>