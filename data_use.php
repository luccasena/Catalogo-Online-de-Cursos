<?php
    include "inscrever_curso.php";

    $pegar_curso = $_POST["curso"];

    $email = $_COOKIE["email"];
    $nome = $_COOKIE["nome"];

    if ($pegar_curso == "design_para_web"){
        $curso = "Design para Web";
        inscrever_curso($email, $nome, $curso);
    
    }elseif($pegar_curso == "front_end"){
        $curso = "Front-End";
        inscrever_curso($email, $nome, $curso);

    }elseif($pegar_curso == "back_end"){
        $curso = "Back-End";
        inscrever_curso($email, $nome, $curso);

    }elseif($pegar_curso == "ia"){
        $curso = "Especialista em IA";
        inscrever_curso($email, $nome, $curso);

    }elseif($pegar_curso == "games"){
        $curso = "Desenvolvedor de Jogos";
        inscrever_curso($email, $nome, $curso);

    }
    echo('<script language="javascript" type="text/javascript">
            alert("Curso Registrado!");
            window.location.href = "menu.html";
        </script>');
 


?>