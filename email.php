<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    function enviar_email($email, $nome){

        $dotenv = Dotenv\Dotenv::createImmutable(__DIR__); 
        $dotenv->load;

        require 'C:\xampp\htdocs\trabalho\vendor\phpmailer\phpmailer\src\Exception.php';
        require 'C:\xampp\htdocs\trabalho\vendor\phpmailer\phpmailer\src\PHPMailer.php';
        require 'C:\xampp\htdocs\trabalho\vendor\phpmailer\phpmailer\src\SMTP.php';

        // Instância da classe PHPMailer
        $mail = new PHPMailer(true);

        try {
            // Configurações do servidor
            $mail->isSMTP();                                    // Define o uso de SMTP no envio
            $mail->SMTPAuth   = true;                           // Habilita a autenticação SMTP
            $mail->Username   = $_ENV['MAIN_EMAIL'];            // Seu e-mail
            $mail->Password   = $_ENV['MAIN_PASSWORD'];         // Senha de App do Gmail
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;    // Criptografia 
            $mail->Host       = 'smtp.gmail.com';               // Host SMTP do Gmail
            $mail->Port       = 465;                            // Porta SMTP

            // Define o remetente
            $mail->setFrom($main_email, 'Tech Mind Academy');
            
            // Define o destinatário
            $mail->addAddress($email, $nome);
            header('Content-Type: text/html; charset=UTF-8');
            // Conteúdo da mensagem
            $mail->isHTML(true);  // Define o formato do e-mail como HTML
            $mail->CharSet  = 'UTF-8';
            $mail->Subject = 'Tech Mind Acadamy';
            $mail->Body = "<body style=\"text-align: center;\"><div style=\"background-color: white; border-radius: 20px; padding: 20px;\"><h1 style=\"text-align: center; font-family: 'Poppins', system-ui;\">Olá {$nome}, Seja Muito Bem-vindo! &#x1F603;</h1><p style=\"font-family: 'Poppins', system-ui; font-size: 20px;\">É um enorme prazer tê-lo(a) conosco. Estamos muito felizes por você fazer parte da nossa comunidade e confiamos que sua experiência aqui será incrível.</p><p style=\"font-family: 'Poppins', system-ui;\">Na <b>Tech Mind Acadamy</b>, trabalhamos constantemente para oferecer os <b>melhores cursos</b> e suporte para ajudá-lo(a) a <b>alcançar seus objetivos</b>.</p> <p style=\"font-family: 'Poppins', system-ui;\">Se precisar de ajuda ou tiver qualquer dúvida, <b>não hesite</b> em entrar em contato com nossa equipe!</p><p style=\"font-family: 'Poppins', system-ui;\">Prepare-se para uma trilha de conhecimentos que irão impulsionar sua carreira! 🚀</p><p style=\"font-family: 'Poppins', system-ui;\"><b>Equipe: Tech Mind Acadamy</b> &#x1F4BB; &#x1F47E;</p><footer style=\"padding: 40px 4%; background-color: rgb(140, 140, 214); height: auto; border-top: 0; box-shadow: 0px 0px 10px;\"><div><div style=\"font-size: 3rem; font-family: 'Poppins', system-ui; font-weight: 700; font-style: italic; line-height: 20px;\"><h3 style=\"text-align: center;\">TECH<span style=\"color: white;\">MIND</span></h3></div></div><div style=\"border-top: 2px solid rgb(255, 255, 255); font-size: 3rem; font-family: 'Poppins', system-ui; font-weight: 700; font-style: italic; line-height: 57px;\"></div><p style=\"font-family: 'Poppins', system-ui; font-size: 12px; text-align: center;\"><b>Você está recebendo esta mensagem porque se inscreveu no site Tech.com usando este endereço de e-mail. Acesse a Central de Ajuda para tirar dúvidas e obter suporte.</b></p></footer></div></body>";
        
            $mail->AltBody = 'Este é o corpo da mensagem para clientes de e-mail que não reconhecem HTML';

            // Enviar
            $mail->send();
            echo 'A mensagem foi enviada!';
        } catch (Exception $e) {
            echo "A mensagem não pode ser enviada. Erro: {$mail->ErrorInfo}";

        }
    }
?>
