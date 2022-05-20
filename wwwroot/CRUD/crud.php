<?php
$server = "127.0.0.1";
$user = "root";
$password = "";
$dbname = "projeto";
$connect =  mysqli_connect($server, $user, $password, $dbname);
//Inserção
if(isset($_POST["cadastrar"])){
   $nome = mysqli_escape_string($connect, $_POST["nome"]);
   $email = mysqli_escape_string($connect, $_POST["email"]);
   $idade = mysqli_escape_string($connect, $_POST["idade"]);
   
   if(empty($_POST["nome"]) or (empty($_POST["email"])) or (empty($_POST["idade"]))){
    echo "<p>Preencha todos os campos!</p>";
}
else{
       $cadastrar = "INSERT INTO clientes ";
       $cadastrar .="(nome,email,idade)";
       $cadastrar .= "VALUES ";
       $cadastrar .= "('$nome', '$email', '$idade') ";
       if($cadastrarquery = mysqli_query($connect, $cadastrar)){
           echo "<p>Usuário Cadastrado com Sucesso</p>";
       }
}
}
?>

<!Doctype html>
<html lang="pt-br">
    <head>
        <title>Insert</title>
        <meta charset="utf-8">
        <style>
            .formulario{
                display:flex;
                justify-content:center;
            }
            .form{
                position:absolute;
                display:flex;
                flex-direction: column;
                width:20%;
            }
            .form input{
                margin:5%;
                height:20px;
            }
            .form button{
                width:50%;
                margin-left:5%;
            }
            .form label{
                margin-left:5%;
            }
        </style>
    </head>
    <body>
        <div class="formulario">

            <form action="" method="POST" class="form">
                <label for="name">Nome:</label>
                <input type="name" name="nome" id="nome">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email">
                <label for="idade">Idade:</label>
                <input type="text" name="idade" id="idade">
                <button type="submit" name="cadastrar">Cadastrar Cliente</button>
            </form>
        </div>
        </body>
</html>