<?php
$post = (!empty($_POST)) ? true : false;
if($post) {
	$name = $_POST['name'];
	$tel = $_POST['tel'];
	$admin = $_POST['eadmin'];
	$error = '';
	if(!$tel) {$error .= 'Введите номер телефона';}
	if(!$error) {
		$address = $admin;
		$mes = "Оставлена заявка по номеру: $tel";
		$send = mail ($address,$mes,"$mes");
		if($send) {echo 'OK';}
		
	}
	else {echo '<div class="err">'.$error.'</div>';}
}
?>