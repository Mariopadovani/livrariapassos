<?php
    include("conecta_20230505185624.php");

    $id_livro = $_POST['id_livro'];
    $nome = $_POST["nome"];
    $genero = $_POST["genero"];
    $editora = $_POST["editora"];
    $ano_publi = $_POST["ano_publi"];


    if(isset($_POST["alterar"]))
    {
    //comando sql.
    $comando = $pdo->prepare("UPDATE livros SET nome = :nome, genero = :genero, editora = :editora, ano_publi = :ano_publi WHERE id_livro = :id_livro;");

    //insere valores das variaveis no comando sql.
    $comando->bindValue(':id_livro',$id_livro);
    $comando->bindValue(':nome',$nome);
    $comando->bindValue(':genero',$genero);
    $comando->bindValue(':editora',$editora);
    $comando->bindValue(':ano_publi',$ano_publi);

    //executa a consulta no banco de dados.
    $comando->execute();

    //Fecha declaração e conexão.
    unset($comando);
    unset($pdo);

    header("location:upd_del.html");
    }
    if(isset($_POST["excluir"]))
    {
    $comando = $pdo->prepare("DELETE FROM livros WHERE id_livro=$id_livro");
    $resultado = $comando->execute();
    header("Location: upd_del.html");
    echo("Dados excluidos com sucesso");
    }

?>