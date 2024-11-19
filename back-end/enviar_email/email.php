<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'C:\xampp\htdocs\trabalho\vendor\phpmailer\phpmailer\src\Exception.php';
require 'C:\xampp\htdocs\trabalho\vendor\phpmailer\phpmailer\src\PHPMailer.php';
require 'C:\xampp\htdocs\trabalho\vendor\phpmailer\phpmailer\src\SMTP.php';

// Instância da classe PHPMailer
$mail = new PHPMailer(true);

try {
    // Configurações do servidor
    $mail->isSMTP();                                    // Define o uso de SMTP no envio
    $mail->SMTPAuth   = true;                           // Habilita a autenticação SMTP
    $mail->Username   = '@gmail.com';  // Seu e-mail
    $mail->Password   = '';          // Senha de App do Gmail
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;    // Criptografia 
    $mail->Host       = 'smtp.gmail.com';               // Host SMTP do Gmail
    $mail->Port       = 465;                            // Porta SMTP

    // Define o remetente
    $mail->setFrom('techmindacademy22@gmail.com', 'Tech Mind Academy');
    
    // Define o destinatário
    $mail->addAddress('luccasena22@gmail.com', 'Lucca Sena');

    // Conteúdo da mensagem
    $mail->isHTML(true);  // Define o formato do e-mail como HTML
    $mail->Subject = 'Bem-Vindo!';
    $mail->Body    = 'É um prazer Lucca, estamos muito felizes em lhe receber em nosso site :D';
    $mail->AltBody = 'Este é o corpo da mensagem para clientes de e-mail que não reconhecem HTML';

    // Enviar
    $mail->send();
    echo 'A mensagem foi enviada!';
} catch (Exception $e) {
    echo "A mensagem não pode ser enviada. Erro: {$mail->ErrorInfo}";
}

?>
