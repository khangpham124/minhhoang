<?php
include "class.phpmailer.php"; 
include "class.smtp.php"; 

$p_target = $_POST['p_target'];
$p_doit = $_POST['p_doit'];
$p_city = $_POST['p_city'];
$p_large = $_POST['p_large'];
$p_size1 = $_POST['p_size1'];
$p_floor = $_POST['p_floor'];
$p_price = $_POST['p_price'];
$p_name = $_POST['p_name'];
$p_email = $_POST['p_email'];
$p_content = $_POST['p_content'];


$p_address = $_POST['p_address'];
$p_size2 = $_POST['p_size2'];
$p_numbfloor = $_POST['p_numbfloor'];
$p_price2 = $_POST['p_price2'];
$p_name2 = $_POST['p_name2'];
$p_tell2 = $_POST['p_tell2'];
$p_email2 = $_POST['p_email2'];
$p_address2 = $_POST['p_address2'];

$p_chose = $_POST['p_chose'];



$mail = new PHPMailer();
$mail->IsSMTP(); // set mailer to use SMTP
$mail->Host = "smtp.gmail.com"; // specify main and backup server
$mail->Port = 465; // set the port to use
$mail->SMTPAuth = true; // turn on SMTP authentication
$mail->SMTPSecure = 'ssl';
$mail->Username = "secretofkenn@gmail.com"; // your SMTP username or your gmail username
$mail->Password = "an11235813"; // your SMTP password or your gmail password
$from = "secretofkenn@gmail.com"; // Reply to this email


$to="minhcang.tayninh0208@gmail.com";

$name="BDS Minhthanhhoang System"; // Recipient's name

$mail->From = $from;
$mail->FromName = "BDS Minhthanhhoang System"; // Name to indicate where the email came from when the recepient received
$mail->AddAddress($to,$name);

$mail->WordWrap = 50; // set word wrap
$mail->IsHTML(true); // send as HTML
$mail->Subject = "Mail from BDS Minhthanhhoang System";
$mail->CharSet = 'UTF-8';


if($p_chose=="CẦN THUÊ MUA") {
$mail->Body = "
<b>$p_chose</b><br><br>
Mục đích sử dụng: $p_target<br>
Mở thêm điểm kinh doanh hay mở mới: $p_doit<br>
Tên thành phố quan tâm: $p_city<br>
Diện tích tối thiểu/sàn: $p_large<br>
Mặt tiền tối thiểu: $p_size<br>
Số tầng tối thiểu: $p_floor<br>
Giá tối đa: $p_price<br>
Nội dung: $p_content<br>
Họ và tên: $p_name<br>
Email: $p_email<br>
";
} else {
$mail->Body = "
<b>$p_chose</b><br><br>
Địa chỉ bất động sản: $p_address<br>
Diện tích: $p_size2<br>
Số tầng: $p_numbfloor<br>
Giá (Đơn vị: Triệu/Tỷ): $p_price2<br>
Họ và tên: $p_name2<br>
Điện thoại: $p_tell2<br>
Email: $p_email2<br>
Địa chỉ liên hệ: $p_address2<br>
";
}


$mail->AltBody = "Mail nay duoc goi bang phpmailer class."; //Text Body
//$mail->SMTPDebug = 2;
if(!$mail->Send())
{
	echo "<h1>Loi khi goi mail: " . $mail->ErrorInfo . '</h1>';
}
else
{
	echo "<h1>Send mail thanh cong</h1>";
}
?>