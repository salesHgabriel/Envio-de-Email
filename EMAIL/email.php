<?php

//testa se variavel está inicializada e vazia
//Necessario email server para funcionamento
if ((isset($_POST['email'])) && !empty($_POST['email'])) {
   
	//pega os names do formulario com superglobal POST
	$nome = addslashes($_POST['name']);
	$email= addslashes($_POST['email']);
	$mensagem = addslashes($_POST['msg']);

	//cabeçalho
	$to = "ghesales04@gmail.com";
	$subjet = "Contato - Gabriel desenvolvedor";    

	//corpo do email  e de quem é
	$body = "Nome:" . $nome . "\r\n".
	         "Email:" . $email . "\r\n" . 
	         "Mensagem:" . $mensagem;
	          
	$header = "From:ghesales04@gmail.com" .
	    "\r\n"."Reply-To:" .
	    $email . "\r\n" .
	     "X-Mailer:PHP/".
	     phpversion();

	//texta o envio

	if (mail($to, $subjet, $body, $header)){
	    echo ("Email enviado com sucesso");


	}else{
	       echo("<h2>O email não pode ser enviado</h2>");
	}


}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Contato de Email</title>
</head>
<link rel="stylesheet" type="text/css" href="Css/style.css">
<body>

</body>
</html>