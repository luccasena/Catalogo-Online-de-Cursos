<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


    function inscrever_curso($email, $nome, $curso){

        require 'C:\xampp\htdocs\Catalogo-Online-de-Cursos\vendor\phpmailer\src\Exception.php';
        require 'C:\xampp\htdocs\Catalogo-Online-de-Cursos\vendor\phpmailer\src\PHPMailer.php';
        require 'C:\xampp\htdocs\Catalogo-Online-de-Cursos\vendor\phpmailer\src\SMTP.php';

        // Instância da classe PHPMailer.
        $mail = new PHPMailer(true);

        try {

            // Configurações do servidor

            $mail->isSMTP();                                            // Define o uso de SMTP no envio.
            $mail->SMTPAuth   = true;                                   // Habilita a autenticação SMTP.
            $mail->Username   = '';                    // O e-mail da empresa.
            $mail->Password   = '';                 // A senha do e-mail da empresa.
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            // Criptografia: Importante para manter a segurança dos dados no momento de envio.
            $mail->Host       = 'smtp.gmail.com';                       // Define que o servidor utilizado para o envio de e-mails é o "gmail" ou simplesmente define o host SMTP.
            $mail->Port       = 465;                                    // Define a porta utilizada para a comunicação com o servidor SMTP.

            
            $mail->setFrom('techmindacademy22@gmail.com' , 'Tech Mind Academy');   // Define o remetente, assumindo respectivamente o e-mail e o nome da empresa.
            
                                                                        
            $mail->addAddress($email, $nome);                           // Define o destinatário, assumindo respectivamente o e-mail e o nome do usuário.
            header('Content-Type: text/html; charset=UTF-8');

            // Conteúdo da mensagem

            $mail->isHTML(true);                                        // Define o formato do e-mail como HTML.
            $mail->CharSet  = 'UTF-8';                                  // Define a codificação para o uso de acentos.
            $mail->Subject = 'Tech Mind Acadamy';                       // Define o Conteúdo do e-mail.

            $mail->Body = "<body style=\"text-align: center; font-family: 'Poppins', system-ui, sans-serif; margin: 0; background-color: #f4f4f4;\"><div style=\"background-color: white; border-radius: 20px; padding: 20px; margin: 20px auto; width: 90%; max-width: 600px; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);\"><h1 style=\"text-align: center; font-family: 'Poppins', system-ui, sans-serif;\">Olá {$nome}, Parabéns! &#x1F603;</h1><p style=\"font-size: 20px; line-height: 1.5;\">Agora você está inscrito no curso <b>{$curso}!</b></p><p style=\"font-size: 16px; line-height: 1.5;\">Esperamos que você aproveite este curso e se enriqueça com todo o conhecimento que certamente será ótimo para o seu futuro nesta área!</p><p style=\"font-size: 16px; line-height: 1.5;\">Se precisar de ajuda ou tiver qualquer dúvida, <b>não hesite</b> em entrar em contato com nossa equipe!</p><p style=\"font-size: 16px; line-height: 1.5;\"><b>Equipe: Tech Mind Academy</b> &#x1F4BB; &#x1F47E;</p></div><footer style=\"padding: 40px 4%; background-color: rgb(140, 140, 214); color: white; text-align: center; font-family: 'Poppins', system-ui, sans-serif;\"><div style=\"font-size: 3rem; font-weight: 700; font-style: italic; line-height: 20px;\"><h3 style=\"margin: 0;\">TECH<span style=\"color: white;\">MIND</span></h3></div><div style=\"border-top: 2px solid white; margin: 20px 0;\"></div><p style=\"font-size: 12px;\"><b>Você está recebendo esta mensagem porque se inscreveu no site Tech.com usando este endereço de e-mail. Acesse a Central de Ajuda para tirar dúvidas e obter suporte.</b></p></footer></body>";

                                                                        
            $mail->AltBody = "Olá {$nome}, Seja Muito Bem-vindo! É um enorme prazer tê-lo(a) conosco. Estamos muito felizes por você fazer parte da nossa comunidade e confiamos que sua experiência aqui será incrível.Na Tech Mind Academy, trabalhamos constantemente para oferecer os melhores cursos e suporte para ajudá-lo(a) a alcançar seus objetivos. Se precisar de ajuda ou tiver qualquer dúvida, não hesite em entrar em contato com nossa equipe! Prepare-se para uma trilha de conhecimentos que irão impulsionar sua carreira! 
            Equipe: Tech Mind Academy 
            Nota: Você está recebendo esta mensagem porque se inscreveu no site Tech.com usando este endereço de e-mail. Caso tenha dúvidas ou precise de suporte, acesse a nossa Central de Ajuda."; // Texto Alternativo para aqueles que não possuem suporte para o HTML

            // Enviar o e-mail após toda a configuração
            $mail->send();
            echo 'A mensagem foi enviada!';
        } catch (Exception $e) {
            echo "A mensagem não pode ser enviada. Erro: {$mail->ErrorInfo}";

        }
    }

?>