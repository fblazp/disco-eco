<?php 
	if(isset($_POST['mail'])){
		$email_to = "fblazp@gmail.com";
		$email_subject  = "Consulta Disco Eco";

		if(!isset($_POST['name']) ||
		!isset($_POST['mail']) ||
		!isset($_POST['telefono']) ||
		!isset($_POST['consulta'])) {

		echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
		echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
		die();
		}

		$email_message = "Detalles del formulario de contacto:\n\n";
		$email_message = "Nombre: " . $_POST['name'] . "\n";
		$email_message = "E-mail: " . $_POST['mail'] . "\n";
		$email_message = "Teléfono: " . $_POST['telefono'] . "\n";
		$email_message = "Comentarios: " . $_POST['consulta'] . "\n\n";


		// Ahora se envía el e-mail usando la función mail() de PHP
		$headers = 'From: '.$email_from."\r\n".
		'Reply-To: '.$email_from."\r\n" .
		'X-Mailer: PHP/' . phpversion();
		@mail($email_to, $email_subject, $email_message, $headers);

		echo "¡El formulario se ha enviado con éxito!<br/>";
		echo '<a href="index.html">Volver al inicio</a>';
		}
?>
	}
?>