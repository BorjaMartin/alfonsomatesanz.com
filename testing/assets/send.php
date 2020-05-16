
<?php

header("Location: http://www.alfonsomatesanz.com"); 

$Name = $_POST['Name'];
$Email = $_POST['Email'];


$header = 'From: ' . $Email . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";


$mensaje = "Este mensaje fue enviado por " . $Name .  " \r\n";
$mensaje .= "Su e-Email es: " . $Email . " \r\n";
$mensaje .= "Mensaje: " . $_POST['Message'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'alfonso.mv.1991@gmail.com';
$asunto = 'Asunto del mail recibido';

@mail($para, $asunto, utf8_decode($mensaje), $header);

echo '<script>alert("Mensaje enviado correctamente")</script>';

exit;

?>
