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
    <a href="#" id="logo"> <h1>Literatura Alves </h1></a>

    <button id="openmenu">&#9776;</button> <!--Se transforma nas três bolinhas para menu-->


    <nav id="menu">
        <button id="closemenu">X</button>
        <a href="#">Livros</a> 
        <a href="./login.php">Login</a>
       </nav>
   </header>
   
   <main>
   <?php
    include("conecta_20230505185624.php");

    $sql = 'SELECT * FROM livros';
    $stmt = $pdo->query($sql);
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($results as $result) {
        echo '<div class="content-card' . $result['id_livro'] . '">';
        echo 'imagem: ' . $result['imagem'] . '<br>';       
        echo '<content>';
        echo 'nome: ' . $result['nome'] . '<br>';
        echo 'editora: ' . $result['editora'] . '<br>';
        echo '</content>';
        echo '</div>';
    }
    ?>
    <section></section>
   </main>

   <aside>
    Promoções
   </aside>

   <footer>
    Contato
   </footer>

   <script type="text/javascript" src="js/script.js"></script>
    
</body>
</html>
