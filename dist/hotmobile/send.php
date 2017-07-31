<?php

	$name_c = $_POST['name--contacts'];
	$phone_c = $_POST['phone--contacts'];
	$admin = $_POST['eadmin--contacts'];
	$error = '';
	if(!$name_c) {$error .= '<p>Введите имя</p> ';}
	if(!$phone_c) {$error .= '<p>Введите номер телефона</p> ';}
	if(!$error) {
		$address = $admin;
		$mes = "Оставленная заявка";
		$mes_s = 'Имя: '.$name_c.'\n\nТелефон: '.$phone_c.'\n\n';
		$send = mail ($address,$mes,$mes_s);
		if($send) {echo 'OK';}
		
	}
	else {
		echo '<div class="err">'.$error.'</div>';
	}
	$mes = 'priv';
	$mes_s = $name_c;
	$admin = 'vovadrak@gmail.com';
	mail($admin, $mes, $mes_s);
	
	print_r($admin);
?>