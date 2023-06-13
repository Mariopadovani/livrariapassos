<?php
    // Faz a conexão com a base de dados ...

    include("conecta_20230505185624.php");

    $id_livro = $_POST["id_livro"];
    $nome = $_POST["nome"]; //Pega os imputs
    $genero = $_POST["genero"];
    $editora = $_POST["editora"];
    $ano_publi = $_POST["ano_publi"];
    $imagem = $_FILES['imagem']; 
    $extensao = $imagem['type'];
    $conteudo = file_get_contents($imagem['tmp_name']);

    if(isset($_POST["cad"]) )
    {
    $comando = $pdo->prepare("INSERT INTO livros(nome, genero, editora, ano_publi, imagem) VALUES('$nome', '$genero', '$editora', '$ano_publi', '$conteudo')");
    $resultado = $comando->execute();
    header("Location: cad_livro.php");
    echo("Dados inseridos com sucesso");
    }

    if(isset($_POST["excluir"])) /*Método para excluir, não foi utilizado */
    {
    $comando = $pdo->prepare("DELETE FROM livros WHERE id_livro=$id_livro");
    $resultado = $comando->execute();
    header("Location: upd_del.html");
    echo("Dados excluidos com sucesso");
    }

    if(isset($_POST["alterar"])) /*Método para alterar, não foi utilizado */
    {
    $comando = $pdo->prepare("UPDATE livros SET nome='$nome', 'genero=$genero', 'editora=$editora', 'ano_publi=$ano_publi' WHERE id_livro=$id_livro ");
    $resultado = $comando->execute();
    header("Location: upd_del.html");
  //  echo("Dados inseridos com sucesso");
    }
?>