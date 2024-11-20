<?php
  include "connection.php";
  $connection = create_connection();
  create_tables();

  $name = $_POST["name"];
  $email = $_POST["email"];
  $password_user = $_POST["psw1"];
  mysqli_query($connection,"INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password_user')");
  echo("<br>".$name . $email . $password_user);
