<?php
//Librerías para el envío de mail
require('class.phpmailer.php');

/*if(isset( $_POST['fname']) && isset($_POST['lname']) && isset($_POST['Tname']) && isset($_POST['edad']) && isset($_POST['Ename']) && isset($_POST['Primarios']) && isset($_POST['Secundarios']) && isset($_POST['Superiores']) && isset($_POST['comments'])) {
    $n1 = $_POST['fname'];
    $n2 = $_POST['lname'];
	$n3 = $_POST['Tname'];
	$n4 = $_POST['edad'];
    $n5 = $_POST['Ename'];
	$n6 = $_POST['Primarios'];
    $n7 = $_POST['Secundarios'];
	$n8 = $_POST['Superiores'];
	$n9 = $_POST['comments'];*/
	
//Este bloque es importante
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = "tls";
$mail->Host = "smtp.gmail.com";
$mail->Port = 587;
 
//Nuestra cuenta
$mail->Username ='micorreo@gmail.com';
$mail->Password = 'password'; //Su password
 
$mail->From = "micorreo@gmail.com"; // Desde donde enviamos (Para mostrar)
$mail->FromName = "Oscar";

//Estas dos líneas, cumplirían la función de encabezado (En mail() usado de esta forma: “From: Nombre <correo@dominio.com>”) de //correo.
$mail->AddAddress("correo@gmail.com"); // Esta es la dirección a donde enviamos
$mail->IsHTML(true); // El correo se envía como HTML
$mail->Subject = "Titulo"; // Este es el titulo del email.
$body = "Hola mundo. Esta es la primer línea<br/>";
$body .= "Correo enviado con PHPMailer en el ejercicio 4 POO de libro de visitas";
$mail->Body = $body; // Mensaje a enviar
$exito = $mail->Send(); // Envía el correo.

 
//Avisar si fue enviado o no y dirigir al index
if($exito)
{
    echo'<script type="text/javascript">
            alert("Enviado Correctamente");
         </script>';
}
else{
    echo'<script type="text/javascript">
            alert("NO ENVIADO, intentar de nuevo");
         </script>';
}
/*}
class Libro_Visitas {   
         public function LeerLibro() {   
		  $file = fopen("libro.txt", "r");
          while(!feof($file)) {
              echo fgets($file). "<br />";
           }
          fclose($file);  
	     }
		public function EscribirLibro() {   
		   $file = fopen("libro.txt", "a");
           fwrite($file, "linea: ". $_POST['fname']. $_POST['comments'] . PHP_EOL);
           fclose($file);
	    }
    }
$objeto1 = new Libro_Visitas();
$objeto1->EscribirLibro();
$objeto1->LeerLibro();*/
?>