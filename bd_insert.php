<?php
  include "bd_connection.php";
  include "bd_email_bem_vindo.php";
  
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
    $_SESSION['id'] = $user_id;
    email_bem_vindo($email, $name);
  }

  header("Location: fd_menu.html");
  exit();

?>