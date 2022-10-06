<?php
session_start();
if(isset($_SESSION['usuario'])){

$server = "127.0.0.1";
$user = "root";
$password = "";
$dbname = "projeto";
$connect =  mysqli_connect($server, $user, $password, $dbname);

if(isset($_POST["cadastrar"])){

   $nome = mysqli_escape_string($connect, $_POST["nome"]); //criando as conexões com a base de dados
   $email = mysqli_escape_string($connect, $_POST["email"]);
   $idade = mysqli_escape_string($connect, $_POST["idade"]);
   
   //caso falte algum campo a ser preenchido o usuário recebera a mensagem
   if(empty($_POST["nome"]) or (empty($_POST["email"])) or (empty($_POST["idade"]))){  
    echo "<p>Preencha todos os campos!</p>";
}
else{
       $cadastrar = "INSERT INTO clientes "; //Inserção no banco de dados
       $cadastrar .="(nome,email,idade)";
       $cadastrar .= "VALUES ";
       $cadastrar .= "('$nome', '$email', '$idade') ";
       if($cadastrarquery = mysqli_query($connect, $cadastrar)){
           echo "<p>Usuário Cadastrado com Sucesso</p>";
       }
    }
}
echo "foi";
}else{
    echo "não foi";
}