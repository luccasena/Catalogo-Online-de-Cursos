<?php
    include "connection.php";

    $connection = create_connection();
    $email = $_POST["email"];
    $password_user = $_POST["psw1"]; 
    $result = mysqli_query($connection,"SELECT * FROM users WHERE email = '$email' AND password = '$password_user'");
    if(mysqli_num_rows($result)<1){
        header('Location:login.html');
    }
    else{
        header('Location:menu.html');
    }