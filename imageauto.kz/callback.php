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


send_mail($site_mail, 'Обратный звонок', $out);

$form = "Заполнена форма: Обратный звонок";
include_once('bitrix.php');
$postdata = http_build_query(
    array(
        "owner_id"            => '8',
        "domain_name"         => 'imageauto.kz/',
        "acces_key"           => 'SH77sdf772er5',
        "first_name" 		  => $_POST['name'],
        "phone_number"        => $_POST['phone'],
        "awaiting_activity_id" => "12"
    )
);
$opts = array('http' =>
    array(
        'method'  => 'POST',
        'header'  => 'Content-type: application/x-www-form-urlencoded',
        'content' => $postdata
    )

);
$context  = stream_context_create($opts);
$url_for_sending = "https://my.zoomiya.com/index.php?option=com_crm&task=ServerTasksExternal.InsertNewProfile";
$data = file_get_contents($url_for_sending, false, $context);
print 'ok';
?>