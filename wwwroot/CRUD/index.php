<?php
session_start();
$_SESSION['usuario'] = "564564456464sgfd65465g4g4dsf56564";
?>
<!Doctype html>
<html lang="pt-br">
    <head>
        <title>Insert</title>
        <meta charset="utf-8">
        <link rel = "stylesheet" href = "css/style.css"> <!--Importando o css -->
    </head>
    <body>
        <div class="formulario">

            <form action="php/crud.php" method="POST" class="form">
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