<?php

$method = $_SERVER['REQUEST_METHOD'];


$project_name = "Mads Show";
$admin_email  = "k.roman@mds.show";
$from_email = "marketing@mds.show";


//Script Foreach
$c = true;
if ( $method === 'POST' ) {
    $form_name = trim($_POST["form_name"]);

	foreach ( $_POST as $key => $value ) {
		if ( $value != "" && $key != "form_name" ) {
			$message .= "
			" . ( ($c = !$c) ? '<tr>':'<tr style="background-color: #f8f8f8;">' ) . "
			<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>$key</b></td>
			<td style='padding: 10px; border: #e9e9e9 1px solid;'>$value</td>
			</tr>
			";
		}
	}
} else if ( $method === 'GET' ) {
    $form_name = trim($_GET["form_name"]);
	
	foreach ( $_GET as $key => $value ) {
		if ( $value != "" && $key != "form_name" ) {
			$message .= "
			" . ( ($c = !$c) ? '<tr>':'<tr style="background-color: #f8f8f8;">' ) . "
			<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>$key</b></td>
			<td style='padding: 10px; border: #e9e9e9 1px solid;'>$value</td>
		</tr>
		";
    	}
    }
}

$message = "<table style='width: 100%;'>$message</table>";

function adopt($text) {
	return '=?UTF-8?B?'.base64_encode($text).'?=';
}

$headers = "MIME-Version: 1.0" . PHP_EOL .
"Content-Type: text/html; charset=utf-8" . PHP_EOL .
'From: '.adopt($project_name).' <'.$from_email.'>' . PHP_EOL .
'Reply-To: '.$admin_email.'' . PHP_EOL;

mail($admin_email, adopt($form_name), $message, $headers );


