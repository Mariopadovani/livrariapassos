<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livraria Passos</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
   <header>
    <a href="/livrariapassos" id="logo">
        <?php
            if(isset($_COOKIE['id'])){
                echo "Bem vindo, ";
                include 'get_user_name.php';
            }else{
                echo '<h1>Literatura Alves </h1>';
            }
        ?>
    </a>

    <button id="openmenu">&#9776;</button>

    <?php
        if (isset($_COOKIE["id"])) {
            if ($_COOKIE["id"] == 1) {
    ?>
    <nav id="menu">
        <button id="closemenu">X</button>
        <a href="cad_livro.php">Cadastrar</a> 
        <a href="upd_del.html">Atualizar/Deletar</a>
    <?php
        } else {
    ?>
        <nav id="menu">
        <button id="closemenu">X</button>
        <a href="livros.php">Livros</a> 
        <a href="#">Mangas</a>
    <?php
            if (isset($_COOKIE['id'])){
                echo '<a href="./logout.php">Logout</a>';
            } else {
                echo '<a href="./login.php">Login</a>';
            }
                echo '</nav>';
            }
        }
    ?>
    </header>