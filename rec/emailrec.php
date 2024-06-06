<?php 
session_start();
include_once("../conexao.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require './PHPMailer/Exception.php';
require './PHPMailer/PHPMailer.php';
require './PHPMailer/SMTP.php';

       if (isset($_POST['email2']) && !empty($_POST['email2'])) {
                  $email = $_POST['email2'];
       }


    $login=mysqli_query($conn,"SELECT * FROM usuario WHERE email='$email'"); 
    $dado = mysqli_fetch_array($login);
	$senha = $dado['senha'];

    $assunto = 'E-mail de resgate de senha';

    $mail = new PHPMailer;

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Username = 'Seu e-mail';
    $mail->Password = 'Senha do e-mail';
    $mail->Port = 587;



    $mail->setFrom('Seu e-mail', 'Logus LTDA');
    $mail->addAddress($email);

   $mail->isHTML(true);

    $mail->Subject = $assunto;
    $mail->Body    = nl2br('Sua senha de acesso é: '.$senha);
    $mail->AltBody = nl2br(strip_tags($senha));

    if(!$mail->send()) {
        echo "<script type='text/javascript'>alert('Email não localizado!');";
        echo "javascript:window.location='../paglogin.php';</script>";

    } else {
        echo "<script type='text/javascript'>alert('Email enviado com Sucesso!');";
        echo "javascript:window.location='../paglogin.php';</script>";
    }
 ?>

