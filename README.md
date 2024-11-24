## Catálogo Online de Cursos com Inscrição 💻 

Aplicação que exibe cursos disponíveis e permite que usuários se inscrevam, recebendo confirmação por e-mail. Um projeto realizado por um grupo de alunos cursando o 2º período da faculdade UNIPÊ.

### 📌 Integrantes envolvidos no projeto: 

 - [Cauã Augusto Machado de Negreiros - (Front-End)](https://github.com/cauaaugustow)
 - [José Victor dos Santos Lima - (Front-End)](https://github.com/VictorSLima7)
 - [Ryan Emanuel Lima Miranda - (Front-End)](https://github.com/ryanlimaw)

 - [Lucca de Sena Barbosa - (Back-End)](https://github.com/luccasena)
 - [Leonardo Lucas de Brito Silva - (Back-End)](https://github.com/leonardolucasbs)
 - [Maximus Feitoza Lira Cunha - (Back-End)](https://github.com/MaxFeitoza)

### 📌 Imagens da plataforma:

<img src="imgs/menu.jpg" alt="Menu do Site"><br>
<img src="imgs/cursos.jpg" alt="Cursos do Site"><br>
<img src="imgs/resumo_curso.jpg" alt="Resumo dos cursos"><br>
<img src="imgs/email_bem_vindo.jpg" alt="E-mail de Bem vindo"><br>
<img src="imgs/email_confirmacao_curso.jpg" alt="E-mail de Confirmação do curso">

### 📌 Ferramentas Utilizadas para o Projeto:

<p align="center">
  <a href="https://skillicons.dev">
    <img src="https://skillicons.dev/icons?i=js,html,css,php" />
  </a>
</p>

### 📌 PHPmailer - Biblioteca:

Esta biblioteca é responsável por realizar o envio de e-mails pelo PHP.  

#### Mas Porquê NÃO utilizar a função padrão mail() do PHP?

- A função mail() criada pelo próprio PHP para o envio de e-mails é considerada limitada e desatualizada devido a uma certa quantidade de fatores que levam ela a ser caracterizada como tal. Entre elas, existem esses problemas:

    1. Não suporta Autenticação SMTP: Esta autenticação é essencial para o envio de e-mails.
    2. Dificuldades ao criar E-mails complexos: Criar um e-mail personalizado da própria empresa é essencial para cativar a atenção do destinatário.
    3. Problemas de entrega: Pelo fato de que está função não possui suporte para os protocolos mais modernos, como dito anteriormente, os e-mail enviados por essa função podem ser considerado um spam.

Para evitar todos esses problemas, optamos por utilizar uma biblioteca chamada PHPMailer, uma biblioteca que utiliza-se de uma classe para o envio de e-mails modernos e autenticados pelo SMTP.
