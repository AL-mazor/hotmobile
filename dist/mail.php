<?php
$post = (!empty($_POST)) ? true : false;
if($post) {
	$name_c = $_POST['name--popup'];
	$phone_c = $_POST['phone--popup'];
	$admin = $_POST['eadmin--popup'];
	$error = '';
	if(!$name_c) {$error .= '<p>Введите имя</p> ';}
	if(!$phone_c) {$error .= '<p>Введите номер телефона</p> ';}
	if(!$error) {
		$address = $admin;
		$mes_s = "Имя: ".$name_c."\n\nТелефон: ".$phone_c."\n\n";
		$send = mail ($address,$mes,"$mes_s");
		if($send) {echo 'OK';}
		
	}
	else {
		echo '<div class="err">'.$error.'</div>';
	}
}
?>