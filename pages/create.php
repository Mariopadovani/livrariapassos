<?php
  if (isset($_COOKIE["admin"])) {
    if ($_COOKIE["admin"] != 1) {
      header("Location: /livrariapassos");
    }
  } else {
    header("Location: /livrariapassos");
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    if (isset($_POST['name'])) {
      $name = $_POST['name'];
      if (empty($name)) {
        echo "Name is empty";
      } else {
        echo $name;
      }
    }
  }
  
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

    <link rel="stylesheet" href="css/create.css" />
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
        <li> <a href="/livrariapassos/update">Atualizar/Deletar</a> </li>
        <li> <a href="/livrariapassos/logout.php">sair</a> </li>
      </ul>
    </header>

    <main>
      <h2>Livros</h2>
        <form onsubmit="handleSubmit(event)" class="container">
          <div>
            Imagem: <input type="file" id="imagem" name="imagem" accept="image/*" required>
            Nome: <input type="text" name="nome">
            TiGeneropo: <input type="text" name="genero">
            Editora: <input type="text" name="editora">
            Ano: <input type="text" name="ano_publi">
          </div>

          <div class="buttons">
            <Button class="save" type="submit">Salvar</Button>
          </div>
        </form>
      </div>
    </main>
  </body>
</html>