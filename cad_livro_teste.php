<?php
    include("conecta_20230505185624.php");
        
    //atribuindo valores dos campos a variaveis.
    $id_livro = $_POST["id_livro"];
    $nome = $_POST["nome"]; //Pega os imputs
    $genero = $_POST["genero"];
    $editora = $_POST["editora"];
    $ano_publi = $_POST["ano_publi"];
    $imagem = $_FILES['imagem']; 
    $extensao = $imagem['type'];
    $conteudo = file_get_contents($imagem['tmp_name']);
    $base64 = "data:".$extensao.";base64,".base64_encode($conteudo);


    //converte a senha para hash MD5, para que não seja armazenada em texto limpo no banco de dados.
    $senha = MD5($_POST["senha"]);

    //comando SQL.
    $comando = $pdo -> prepare("INSERT INTO livros(nome,genero,editora,ano_publi, imagem) VALUES(:nome,:genero,:editora,:ano_publi, :conteudo)");  
    
    //insere valores das variaveis no comando sql.
    $comando->bindValue(":nome",$nome);    
    $comando->bindValue(":genero",$genero);                                  
    $comando->bindValue(":editora",$editora);
    $comando->bindValue(":ano_publi",$ano_publi);
    $comando->bindValue(":conteudo", $base64);

    //executa o comando SQL, ou seja, insere os dados no banco de dados.
    $comando->execute();

    //redireciona para a pagina informada.
    header("Location:cad_livro.php");

    //Fecha declaração e conexão.
    unset($comando);
    unset($pdo);
?>