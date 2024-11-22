<?php
  include "connection.php";
  include "email.php";
  
  $connection = create_connection();
  create_tables($connection);

  $name = $_POST["name"];
  $email = $_POST["email"];
  $password_user = $_POST["psw1"];
  $sql = mysqli_query($connection,"INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password_user')");
  if($sql){
    enviar_email($email, $name);
  }
  header("Location: menu.html");
  exit();
?>