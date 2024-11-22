<?php
    function create_connection(){
        $hostname = "localhost";
        $database = "Project";
        $user = "root";
        $password = "";
        return mysqli_connect($hostname, $user,"", $database);
    }
    function create_tables(){
        $connection = create_connection();

        if ($connection){
            echo "Conexao feita com sucesso";
        }
        else{
            echo "Ops! Erro na conexao";
        }
        mysqli_query($connection,"CREATE TABLE IF NOT EXISTS users 
            (id INT NOT NULL AUTO_INCREMENT,
            name VARCHAR(255)  NOT NULL,
            email VARCHAR(50) NOT NULL,
            password VARCHAR(50) NOT NULL,
            UNIQUE (`email`),
            PRIMARY KEY (id))");
  
        mysqli_query($connection,"CREATE TABLE IF NOT EXISTS cursos
            (id INT NOT NULL AUTO_INCREMENT,
            user_id INT NOT NULL,
            PRIMARY KEY (id))");
    }