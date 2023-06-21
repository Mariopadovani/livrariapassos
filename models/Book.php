<?php

class Book {
  protected $id;
  protected $name;
  protected $gender;
  protected $editory;
  protected $pubAge;
  protected $imageURL;

  public static function create($data) {
    include("conecta_20230505185624.php");
    $imagem = $data['imagem'];
    $query = $pdo->prepare("INSERT INTO livros (nome, genero, editora, ano_publi, imagem) VALUES (:nome, :genero, :editora, :ano_publi, '$imagem');");

    $query->bindValue(':nome', $data['nome']);
    $query->bindValue(':genero', $data['genero']);
    $query->bindValue(':editora', $data['editora']);
    $query->bindValue(':ano_publi', $data['ano_publi']);
    // $query->bindValue(':imagem', $data['imagem']);

    $success = $query->execute();

    unset($query);
    unset($pdo);

    return $success;
  }

  public static function readAll($type = false) {
    include("conecta_20230505185624.php");

    if (isset($type) AND $type != false) {
      $query = $pdo->prepare("SELECT * FROM livros WHERE genero = :genero;");
      $query->bindValue(':genero', $type);
    } else {
      $query = $pdo->prepare("SELECT * FROM livros;");
    }

    $query->execute();
    $books = $query->fetchAll(PDO::FETCH_ASSOC);
    unset($query);
    unset($pdo);
    return $books;
  }



  public static function read($id) {
    include("conecta_20230505185624.php");

    $query = $pdo->prepare("SELECT * FROM livros WHERE id_livro = :id;");
    $query->bindValue(':id', $id);
    $query->execute();
    $book = '';

    if ($query->rowCount() > 0) {
      $book = $query->fetch(PDO::FETCH_ASSOC);
    }

    unset($query);
    unset($pdo);

    return $book;
  }

  public static function update($id, $data) {
    include("conecta_20230505185624.php");  
    $query = $pdo->prepare("UPDATE livros SET nome = :nome, genero = :genero, editora = :editora, ano_publi = :ano_publi WHERE id_livro = :id;");

    $query->bindValue(':nome', $data['nome']);
    $query->bindValue(':genero', $data['genero']);
    $query->bindValue(':editora', $data['editora']);
    $query->bindValue(':ano_publi', $data['ano_publi']);
    $query->bindValue(':id', $id);

    $success = $query->execute();

    unset($query);
    unset($pdo);

    return $success;
  }

  public static function delete($id) {
    include("conecta_20230505185624.php");
    $query = $pdo->prepare("DELETE FROM livros WHERE id_livro = :id;");

    $query->bindValue(':id', $id);

    $success = $query->execute();

    unset($query);
    unset($pdo);

    return $success;
  }

}
