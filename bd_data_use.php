<?php
    include "bd_connection.php";
    include "bd_inscrever_curso.php";
    $connection = create_connection();
    session_start();

    $get_id_in_session = $_SESSION['id'];
    $result = mysqli_query($connection,"SELECT * FROM users WHERE id = '$get_id_in_session'");
    $row = mysqli_fetch_assoc($result);
    $nome = $row['name'];
    $email = $row['email'];
    $pegar_curso = $_GET['curso'];
    if ($pegar_curso == "design_web"){
        $curso = "Design para Web";
        mysqli_query($connection,"INSERT INTO cursos (user_id) VALUES ('$get_id_in_session')");
        inscrever_curso($email, $nome, $curso);
        
    }elseif($pegar_curso == "front_end"){
        $curso = "Front-End";
        mysqli_query($connection,"INSERT INTO cursos (user_id) VALUES ('$get_id_in_session)");
        inscrever_curso($email, $nome, $curso);

    }elseif($pegar_curso == "back_end"){
        $curso = "Back-End";
        mysqli_query($connection,"INSERT INTO cursos (user_id) VALUES ('$get_id_in_session')");
        inscrever_curso($email, $nome, $curso);

    }elseif($pegar_curso == "ia"){
        $curso = "Especialista em IA";
        mysqli_query($connection,"INSERT INTO cursos (user_id) VALUES ('$get_id_in_session')");
        inscrever_curso($email, $nome, $curso);

    }elseif($pegar_curso == "games"){
        $curso = "Desenvolvedor de Jogos";
        mysqli_query($connection,"INSERT INTO cursos (user_id) VALUES ('$get_id_in_session')");
        inscrever_curso($email, $nome, $curso);

    }
    echo('<script language="javascript" type="text/javascript">
        alert("Curso Registrado!");
        window.location.href = "fd_perfil.html";
    </script>');
?>