<?php
include("conecta_20230505185624.php");

// Atribuindo valores dos campos a variáveis.
$nome = $_POST["nome"];
$sobrenome = $_POST["sobrenome"];
$email = $_POST["email"];
$senha = $_POST["senha"];

// Verifica se o usuário já existe no banco de dados
$verificaUsuario = $pdo->prepare("SELECT * FROM cliente WHERE email = :email");
$verificaUsuario->bindValue(":email", $email);
$verificaUsuario->execute();

if ($verificaUsuario->rowCount() > 0) {
    // Usuário já existe, redireciona para o root path
    header("Location: index.php");
    exit();
}

// Comando SQL para inserir os dados
$comando = $pdo->prepare("INSERT INTO cliente(nome_cliente, sobrenome, email, senha) VALUES(:nome, :sobrenome, :email, :senha)");

// Insere valores das variáveis no comando SQL
$comando->bindValue(":nome", $nome);
$comando->bindValue(":sobrenome", $sobrenome);
$comando->bindValue(":email", $email);
$comando->bindValue(":senha", $senha);

// Executa o comando SQL, ou seja, insere os dados no banco de dados
$comando->execute();

// Redireciona para a página informada
header("Location: index.php");

// Fecha declaração e conexão
unset($comando);
unset($pdo);
?>