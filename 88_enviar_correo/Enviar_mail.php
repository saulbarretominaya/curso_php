<?php

$descripcion = $_POST["descripcion"];
$destinatarios = $_POST["email"];
$asunto = $_POST["asunto"];

//$headers='Solicito Tener una call con el incorregible Brandex \r\n';
// $headers.='Content-type: text/html; charset=iso-8859-1 \r\n';
// $headers.='From: La Leyenda \r\n'; //de quien viene el mensaje


$headers = 'From: El incorregible <saulbarretominaya@gmail.com>' . "\r\n" ;
//'Reply-To: ' . $email . "\r\n" .
//'X-Mailer: PHP/' . phpversion();


$exito = mail($destinatarios, $asunto, $descripcion, $headers);


if ($exito) {

    echo "Mensaje enviado con Exito";
} else {
    echo "Ha habido un error";
}
