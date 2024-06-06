<?php 
session_start();
include_once("../conexao.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require './PHPMailer/Exception.php';
require './PHPMailer/PHPMailer.php';
require './PHPMailer/SMTP.php';

       if (isset($_POST['email']) && !empty($_POST['email'])) {
                  $email = $_POST['email'];
       }
	$senha = $_POST['message'];
    $nome = $_POST['name'];

    $assunto = 'Novo Contato';

    $mail = new PHPMailer;

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Username = 'Seu e-mail';
    $mail->Password = 'Senha do e-mail';
    $mail->Port = 587;



    $mail->setFrom('Seu E-mail', 'Cliente Logus');
    $mail->addAddress('E-mail de quem vai receber');

   $mail->isHTML(true);

    $mail->Subject = $assunto;
    $mail->Body    = nl2br('Uma nova mensagem de: '.$email .', Nome: ' .$nome .', Assunto: ' .$senha);
    $mail->AltBody = nl2br(strip_tags($senha));

    if(!$mail->send()) {
        echo "<script type='text/javascript'>alert('Email não localizado!');";
        echo "javascript:window.location='../Contato.html';</script>";
    }
 ?>

