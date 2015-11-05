<?php

require_once("phpmailer/class.phpmailer.php"); 

// aqui começa o script
$nome = utf8_decode($_POST['nome']);
$cidade = utf8_decode($_POST['cidade']);
$telefone=$_POST['telefone'];
$celular=$_POST['celular'];
$email=$_POST['email'];
$assunto = utf8_decode($_POST['assunto']);
$mensagem = utf8_decode($_POST['mensagem']);

global $email; //função para validar a variável $email no script todo

$data = date("d/m/y"); //função para pegar a data de envio do e-mail
$hora = date("H:i"); //para pegar a hora com a função date
$ip = $_SERVER['REMOTE_ADDR']; //função para pegar o ip do usuário
$navegador = $_SERVER['HTTP_USER_AGENT']; //função para pegar o navegador do visitante

$txt = "Nome: " . $nome;
$txt .= "Cidade: " . $cidade;
$txt .= "Telefone: " . $telefone;
$txt .= "Celular: " . $celular;
$txt .= "E-mail: " . $email;
$txt .= "Assunto: " . $assunto;
$txt .= "Mensagem: " . $mensagem;

//$html ="<meta charset='UTF-8' />";
$html.="<strong>Nome:</strong> ".$nome."<br>\n";
$html.="<strong>Cidade:</strong> ".$cidade."<br>\n";
$html.="<strong>Telefone:</strong> ".$telefone."<br>\n";
$html.="<strong>Celular:</strong> ".$celular."<br>\n";
$html.="<strong>E-mail:</strong> ".$email."<br>\n";
$html.="<strong>Assunto:</strong> ".$assunto."<br>\n";
$html.="<strong>Mensagem</strong><br>".$mensagem."<br>\n";

$Email = new PHPMailer(); $Email->SetLanguage("br"); 
$Email->IsSMTP(); // Define que a mensagem ser� SMTP
$Email->Host = ""; // Endere�o do servidor SMTP (caso queira utilizar a autentica��o, utilize o host smtp.seudom�nio.com.br)
$Email->SMTPAuth = true; // Usar autentica��o SMTP (obrigat�rio para smtp.seudom�nio.com.br)
$Email->Port = 587;
$Email->Username = ''; // Usu�rio do servidor SMTP (endere�o de email)
$Email->Password = ''; // Senha do servidor SMTP (senha do email usado)

$Email->IsHTML(true); 
//$mail->CharSet = 'UTF-8';
$Email->From = $email; 
$Email->FromName = utf8_decode($_POST['nome']);
$Email->AddAddress(""); 
$Email->Subject = utf8_decode (""); 
//$Email->AddBcc($email); 

$Email->MsgHTML($html); 
$Email->AltBody = "Para conseguir ler esse e-mail corretamente, use um visualizador de e-mail com suporte a HTML"; 
$Email->WordWrap = 50; 
$Email->Send(); 

?>