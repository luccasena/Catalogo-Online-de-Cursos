<?php
 
    // Reduz o caminho que seria utilizado no código:

    use PHPMailer\PHPMailer\PHPMailer;  // Reduz o caminho para a Biblioteca Principal.
    use PHPMailer\PHPMailer\SMTP;       // Reduz o caminho para o protocolo SMTP.
    use PHPMailer\PHPMailer\Exception;  // Reduz o caminho para a o tratamento de erro.

    // O código foi criado através de uma função para ser mais fácil de implementa-la no sistema. Nele, foi passado os parâmetros "$email" e "$nome" que serão respectivos ao e-mail e nome do usuário.

    function email_bem_vindo($email, $nome){

        require // Caminho que leva ao arquivo Exception.php
        require // Caminho que leva ao arquivo PHPMailer.php
        require // Caminho que leva ao arquivo SMTP.php

        // Instância da classe PHPMailer.
        $mail = new PHPMailer(true);

        try {

            // Configurações do servidor

            $mail->isSMTP();                                            // Define o uso de SMTP no envio.
            $mail->SMTPAuth   = true;                                   // Habilita a autenticação SMTP.
            $mail->Username   = '';                                     // O e-mail da empresa.
            $mail->Password   = '';                                     // A senha do e-mail da empresa.
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            // Criptografia: Importante para manter a segurança dos dados no momento de envio.
            $mail->Host       = 'smtp.gmail.com';                       // Define que o servidor utilizado para o envio de e-mails é o "gmail" ou simplesmente define o host SMTP.
            $mail->Port       = 465;                                    // Define a porta utilizada para a comunicação com o servidor SMTP.

            
            $mail->setFrom('techmindacademy22@gmail.com', 'Tech Mind Academy');   // Define o remetente, assumindo respectivamente o e-mail e o nome da empresa.
            
                                                                        
            $mail->addAddress($email, $nome);                           // Define o destinatário, assumindo respectivamente o e-mail e o nome do usuário.
            header('Content-Type: text/html; charset=UTF-8');

            // Conteúdo da mensagem

            $mail->isHTML(true);                                        // Define o formato do e-mail como HTML.
            $mail->CharSet  = 'UTF-8';                                  // Define a codificação para o uso de acentos.
            $mail->Subject = 'Tech Mind Acadamy';                       // Define o Conteúdo do e-mail.

            $mail->Body = "<body style=\"text-align: center;\"><div style=\"background-color: white; border-radius: 20px; padding: 20px;\"><h1 style=\"text-align: center; font-family: 'Poppins', system-ui;\">Olá {$nome}, Seja Muito Bem-vindo! &#x1F603;</h1><p style=\"font-family: 'Poppins', system-ui; font-size: 20px;\">É um enorme prazer tê-lo(a) conosco. Estamos muito felizes por você fazer parte da nossa comunidade e confiamos que sua experiência aqui será incrível.</p><p style=\"font-family: 'Poppins', system-ui;\">Na <b>Tech Mind Acadamy</b>, trabalhamos constantemente para oferecer os <b>melhores cursos</b> e suporte para ajudá-lo(a) a <b>alcançar seus objetivos</b>.</p> <p style=\"font-family: 'Poppins', system-ui;\">Se precisar de ajuda ou tiver qualquer dúvida, <b>não hesite</b> em entrar em contato com nossa equipe!</p><p style=\"font-family: 'Poppins', system-ui;\">Prepare-se para uma trilha de conhecimentos que irão impulsionar sua carreira! 🚀</p><p style=\"font-family: 'Poppins', system-ui;\"><b>Equipe: Tech Mind Acadamy</b> &#x1F4BB; &#x1F47E;</p><footer style=\"padding: 40px 4%; background-color: rgb(140, 140, 214); height: auto; border-top: 0; box-shadow: 0px 0px 10px;\"><div><div style=\"font-size: 3rem; font-family: 'Poppins', system-ui; font-weight: 700; font-style: italic; line-height: 20px;\"><h3 style=\"text-align: center;\">TECH<span style=\"color: white;\">MIND</span></h3></div></div><div style=\"border-top: 2px solid rgb(255, 255, 255); font-size: 3rem; font-family: 'Poppins', system-ui; font-weight: 700; font-style: italic; line-height: 57px;\"></div><p style=\"font-family: 'Poppins', system-ui; font-size: 12px; text-align: center;\"><b>Você está recebendo esta mensagem porque se inscreveu no site Tech.com usando este endereço de e-mail. Acesse a Central de Ajuda para tirar dúvidas e obter suporte.</b></p></footer></div></body>";

                                                                        
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
