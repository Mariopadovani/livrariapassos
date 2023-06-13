<?php
    include("conecta_20230505185624.php");

        
    //atribuindo valores dos campos a variaveis.
    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    //converte a senha para hash MD5, para que não seja armazenada em texto limpo no banco de dados.
    //$senha = MD5($_POST["senha"]);

    //comando SQL.
    $comando = $pdo -> prepare("INSERT INTO cliente(nome_cliente,sobrenome,email,senha) VALUES(:nome,:sobrenome,:email,:senha)");  
    
    //insere valores das variaveis no comando sql.
    $comando->bindValue(":nome",$nome);    
    $comando->bindValue(":sobrenome",$sobrenome);                                  
    $comando->bindValue(":email",$email);                                  
    $comando->bindValue(":senha", $senha);

    //executa o comando SQL, ou seja, insere os dados no banco de dados.
    $comando->execute();

    //redireciona para a pagina informada.
    header("Location:index.html");

    //Fecha declaração e conexão.
    unset($comando);
    unset($pdo);
?>