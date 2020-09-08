
<?php

$assunto = trim ($_POST['assunto']);
$nome = trim ($_POST['nome']);
$email =  trim($_POST['email']);
$empresa =  trim($_POST['empresa']);
$mensagem = trim($_POST['mensagem']);


if (PATH_SEPARATOR ==":") {
        $quebra = "\r\n";
      } else {
        $quebra = "\n";
      }

// $body = "Nome: ".$nome. "\r\n".
//         "Email: ".$email. "\r\n".
//         "Empresa: ".$empresa. "\n"
//         "Mensagem: ".$mensagem; 

$headers = "MIME-Version: 1.1".$quebra;
$headers .= "Content-type: text/plain; charset=utf-8".$quebra;
$headers .= "From: adriano@artevisualpro.com.br".$quebra; // remetente
$headers .= "Return-Path: adriano@artevisualpro.com.br".$quebra; // return-path
$headers .= "Reply-To: <"."$email".">".$quebra;
$envio = mail( $assunto, $nome, $email, $empresa, $mensagem, $headers,  "-r". "contato@artevisualpro.com.br");



 
?>


