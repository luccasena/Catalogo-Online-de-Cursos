<?php
  include "connection.php";
  include "email.php";
  
  $connection = create_connection();
  create_tables($connection);

  session_start();

  $name = $_POST["name"];
  $email = $_POST["email"];
  $password_user = $_POST["psw1"];
  $sql = mysqli_query($connection,"INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password_user')");

  if($sql){
    $result = mysqli_query($connection,"SELECT * FROM users WHERE email = '$email'");
    $row = mysqli_fetch_assoc($result);
    $user_id = $row['id'];
    $_SESSION['user_id'] = $user_id;
    enviar_email($email, $name);
  }

  header("Location: menu.html");
  exit();

?>