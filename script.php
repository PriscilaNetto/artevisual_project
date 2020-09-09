
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

      $body = "Nome: ".$nome. "\r\n".
        "Email: ".$email. "\r\n".
        "Empresa: ".$empresa. "\r\n".
        // 'Mensagem: ".$mensagem. '\r\n".



$headers = "MIME-Version: 1.1".$quebra;
$headers .= "Content-type: text/plain; charset=utf-8".$quebra;
$headers .= "From: adriano@artevisualpro.com.br".$quebra; // remetente
$headers .= "Return-Path: adriano@artevisualpro.com.br".$quebra; // return-path
$headers .= "Reply-To: <"."$email".">".$quebra;
$envio = mail( $assunto, $body, $headers);

if($envio)
  echo "mensagem enviada com sucesso";
else
  echo "A mensagem não pode ser enviada";
  
 
?>


