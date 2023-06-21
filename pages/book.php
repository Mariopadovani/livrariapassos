<?php
  function links () {
    if (isset($_COOKIE["admin"])) {
      if ($_COOKIE["admin"] == 1) {
?>
  <li> <a href="/livrariapassos/add">Cadastrar</a> </li>
  <li> <a href="/livrariapassos/update">Atualizar/Deletar</a> </li>
<?php
      } else {
?>
        <li> <a href="/livrariapassos/logout.php">Sair</a> </li>
<?php
      }
    } else {
?>
  <li> <a href="/livrariapassos/login">Entrar</a> </li>
<?php
    }
  }

  $id = $params["id"];
  $book = Book::read($id);
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

    <link rel="stylesheet" href="css/book.css" />
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
        <li> <a href="http://localhost/livrariapassos/">Voltar</a> </li>
        <?php links() ?>
      </ul>
    </header>

    <main>
      <h2>Produtos</h2>

      <div>
        <div class="container">
          <img src="<?= $book["imagem"] ?>" alt="">
          <div>
            <div class="label">Nome: <span><?= $book["nome"] ?><span> </div>
            <div class="label">Genero: <span><?= $book["genero"] ?><span> </div>
            <div class="label">Editora: <span><?= $book["editora"] ?><span> </div>
            <div class="label">Ano: <span><?= $book["ano_publi"] ?><span> </div>
          </div>
        </div>
      </div>
    </main>

    <footer>
      <h2>Contatos</h2>
    </footer>
  </body>
</html>