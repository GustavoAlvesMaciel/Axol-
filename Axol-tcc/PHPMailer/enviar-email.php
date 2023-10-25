<?php

use PHPMailer\PHPMailer\PHPMailer;

require './src/Exception.php';
require './src/PHPMailer.php';
require './src/SMTP.php';


//estão vindo do index.html do formulário de contato
$nome = $_POST['nome'];  
$email = $_POST['email'];
$assunto = $_POST['assunto'];

//Para corrigir acentuação
$assunto_codificado = sprintf('=?%s?%s?%s=', 'UTF-8', 'Q', quoted_printable_encode($assunto));

//Vem do index.hmtl do formulário de contato
$conteudo = $_POST['mensagem'];

//require_once('../PHPMailer/src/PHPMailer.php'); //Chama a classe de onde você a colocou. Ele é uma classe PHP... tem acesso a diversos atributos e métodos...Uma vez importado, posso instanciar.

$mail = new PHPMailer; //Instanciando objeto mail

$mail->isSMTP(); //Protocolo transferência de email
$mail->Host = 'smtp.gmail.com'; //Domínio ou Endereço para se conectar e enviar o email (NOSSO É GMAIL)
$mail->CharSet = 'UTF-8'; //UTF-8 é para corrigir questões de acentuação do nosso idioma
$mail->SMTPAuth = true; //Autenticação...segurança

$mail->Username = 'starlight.oficial01@gmail.com'; //Email que quero trabalhar pra poder enviar emails
$mail->Password = 'starlight100axol'; //Senha do email
$mail->SMTPSecure = 'ssl'; //Tipo de segurança
$mail->Port = 465; //Porta(redes)

$mail->setFrom('starlight.oficial01@gmail.com', 'STARLIGHT'); //Repetindo minha conta, título do nosso email 

$mail->addAddress($email); //email do destinatário...se quiser outro email só poder o $email

$mail->Subject = $assunto_codificado;//Assunto do email
$mail->Body = $conteudo; //Receber o conteúdo

if(!$mail->Send()){ //se meu email for diferente de enviar
    echo "Erro ao enviar Email:" .$mail->ErrorInfo;
}else{ //senão
    $url='../tcc-axol/index.php'; //verificar se o encaminhamento está correto mesmo..
    echo("<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$url'>");
        exit();
}

?>