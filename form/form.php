
<?php
if($_POST) {
  $nombre1 = $_POST['firstName'];
  $nombre2 = $_POST['lastName'];
  $numContacto= $_POST['contactNumber'];
  $correo = $_POST['email'];
  $mensaje = $_POST['reason'];

  $destinatario = "mrgomez.dev@gmail.com";
  $asunto = "Mensaje enviado desde mi sitio web";
  $contenido = "Nombre: " . $nombre1 . "Apellido: " . $nombre2 . "Telefono: " . $contactNumber . "\nCorreo electrónico: " . $email . "\nMensaje: " . $reason;

  $header = "From: " . $email . "\r\n";
  $header .= "Reply-To: " . $email . "\r\n";

  mail($destinatario, $asunto, $contenido, $header);
}
?>
