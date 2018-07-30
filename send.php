<?php 
require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

	$to = "cristianc150@hotmail.es"; //Correo

	// Recoger los datos del formulario
	$nombre = $_POST['name'];
	$correo = $_POST['email'];
	$asunto = $_POST['subject'];
	$telefono = $_POST['phone'];
	$mensaje = nl2br($_POST['message']); 

	if ($nombre == "" || $telefono == "" || $correo == "" || $mensaje == "" ):
		echo '<div class="alert text-center alert-danger alert-dismissible no" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<p><strong>Advertencia</strong> Todos los campos son requeridos vuelva a intentar.</p>
			</div>';
	else:
				

		$mail->From = $correo;
		$mail->FromName = $nombre;
		$mail->Subject =$asunto;
		$mail->addAddress($to);
		$mail->isHtml(true);
		$mail->Body = '<strong>'.$nombre.'</strong> Lo contacto desde su pagiana Web <br><br><p>'.$mensaje.'<br><br> Telefono: <strong>'.$telefono.'</strong> <br><br> Correo: <strong> '.$correo.'</strong> </p>'; 
		$mail->CharSet = 'UTF-8';
		$mail->send();
		echo '<div class="alert  text-center alert-info alert-dismissible si" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<p><strong>Gracias</strong> Su mensaje fue enviado</p>
			</div>';
	endif;

 ?>