<?php
require 'C:\wamp64\www\TestesPhp\PHPMailer\PHPMailerAutoload.php';
$host = "localhost";
$user = "root";
$pass = "php2016";
$banco = "pontoeletronico";
$conexao = mysqli_connect($host , $user , $pass) or die(mysql_error());
mysqli_select_db($conexao , $banco) or die("erro no banco"); 

	 
$email = $_POST['email'];

$sql = mysqli_query($conexao,"SELECT senha FROM gerentesetor WHERE email = '$email'") or die("usuario n encontrado");
$rows = mysqli_num_rows($sql);

	if($rows != 0){

		$fetch = mysqli_fetch_row($sql);
		
		$mail = new PHPMailer;

		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = 'pontoeletronicouespi';                 // SMTP username
		$mail->Password = 'phpweb2017';                           // SMTP password
		$mail->SMTPSecure = 'tsl';                            // Enable TLS encryption, `ssl` also accepted
		$mail->Port = 587;                                    // TCP port to connect to

		$mail->From = 'pontoeletronicouespi@gmail.com';
		$mail->FromName = 'Recuperar senha';     // Add a recipient
		$mail->addAddress($email);               // Name is optional

		$mail->isHTML(true);                                  // Set email format to HTML

		$mail->Subject = 'Recuperar senha';
		$mail->Body    = "Senha: {$fetch[0]}";

		if($mail->send()) {
			echo 'Mensagem foi enviada';
		} else {
		    echo 'Message could not be sent.';
		    echo 'Mailer Error: ' . $mail->ErrorInfo;
		}
	
	}

	else{
		echo "Email não cadastrado";
	}
 	header("Location: index.php");
 		exit;

?>





