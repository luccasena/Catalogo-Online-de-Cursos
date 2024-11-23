<?php
    include "connection.php";
    session_start();
    $connection = create_connection();
    $email = $_POST["email"];
    $password_user = $_POST["psw1"]; 
    $result = mysqli_query($connection,"SELECT * FROM users WHERE email = '$email' AND password = '$password_user'");
    if(mysqli_num_rows($result)<1){
        echo(
            '<script language="javascript" type="text/javascript">
                alert("Senha ou E-mail incorreto");
                window.location.href = "login.html";
            </script>');
    }
    else{
        $row = mysqli_fetch_assoc($result);
        $user_id = $row['id'];
        $_SESSION['id'] = $user_id;
        header('Location:menu.html');
    }