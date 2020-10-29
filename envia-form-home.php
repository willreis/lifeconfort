<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$mensagem = $_POST['mensagem'];

    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "assistencia@lifeconfort.com.br";
    $to = "assistencia@lifeconfort.com.br";
    $subject = "Email Enviado do Site";
    $message = "Nome: ".$nome."\r\n";
    $message .="Email: ".$email."\r\n";
    $message .="Telefone: ".$telefone."\r\n";
    $message .="Mensagem: ".$mensagem."\r\n";
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Formulário enviado com Sucesso');
    window.location.href='index.php';
    </script>");
?>