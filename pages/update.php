<?php
  if (isset($_COOKIE["admin"])) {
    if ($_COOKIE["admin"] != 1) {
      header("Location: /livrariapassos");
    }
  } else {
    header("Location: /livrariapassos");
  }

  $books = Book::readAll();
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/update.css" />
    <script src="js/save.js"></script>
    <title>Livraria Passos</title>
  </head>
  <body>
    <header>
      <div id="logo-container">
        <a href="/livrariapassos">
          <h1>Livraria passos</h1>
        </a>
      </div>

      <ul>
        <li> <a href="/livrariapassos/add">Cadastrar</a> </li>
        <li> <a href="/livrariapassos/logout.php">sair</a> </li>
      </ul>
    </header>

    <main>
      <h2>Livros</h2>
        <?php
          $books;
          foreach ($books as &$book) {
        ?>
          <div class="container" id="<?= $book['id_livro'] ?>">
            <img src="<?= $book["imagem"] ?>" alt="">
            <div>
              <div class="label">Nome: <input type="text" name="nome" value="<?= $book["nome"] ?>"> </div>
              <div class="label">TiGeneropo: <input type="text" name="genero" value="<?= $book["genero"] ?>"> </div>
              <div class="label">Editora: <input type="text" name="editora" value="<?= $book["editora"] ?>"> </div>
              <div class="label">Ano: <input type="text" name="ano_publi" value="<?= $book["ano_publi"] ?>"> </div>
            </div>

            <div class="buttons">
              <Button class="save" onclick="changeBook(<?= $book['id_livro'] ?>)">Salvar</Button>
              <Button class="delete" onclick="deleteBook(<?= $book['id_livro'] ?>)">Deletar</Button>
            </div>
          </div>
        <?php
          }
        ?>
      </div>
    </main>
  </body>
</html>