<?
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header('Content-type: text/html; charset=Utf-8');


$site_mail = 'zakaz@imageauto.kz';


function send_mail($to, $subject, $message) {
	global $setting;
	
	$message = "<html><head><title>$subject</title></head><body>$message</body></html>";
	
	$headers = "MIME-Version: 1.0"."\n";
	$headers.= 'From: =?utf-8?B?'.base64_encode('zakaz@imageauto.kz').'?= <zakaz@imageauto.kz>'."\n";
	$headers.= "Content-type: text/html; charset=\"utf-8\""."\n";
	$headers.= "Content-Transfer-Encoding: base64"."\n";
	
	@mail($to,'=?utf-8?B?'.base64_encode($subject).'?=',base64_encode($message),$headers);
}

$name = $_POST['name'];
$phone = $_POST['phone'];


if(empty($phone)) {
	
	print 'Не все поля заполнены!';
	exit;
}


// отправка на почту
$out = '';
$out.= 'Имя: '.$name;
$out.= '<br/>';
$out.= 'Телефон: '.$phone;


send_mail($site_mail, 'Забронировать авто (Проблемы)', $out);

$form = "Заполнена форма: Забронировать авто (Проблемы)";
include_once('bitrix.php');

print 'ok';
?>