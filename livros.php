
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
        <a href="#">Mangas</a>
        <a href="./login.html">Login</a>
       </nav>
   </header>
   
   <main>
        <?php
        include("conecta_20230505185624.php");

            $sql = 'SELECT * FROM livros';
            if($res=mysqli_query($pdo, $sql)){
                $nomeLivro = array();
                $generoLivro = array();
                $editoraLivro = array();
                $anoPubli = array();
                $i = 0;
                while($reg=mysqli_fetch_assoc($res)){

                    $nomeLivro[$i] = $reg['nome'];
                    $generoLivro[$i] = $reg['genero'];
                    $editoraLivro[$i] = $reg['editora'];
                    $anoPubli[$i] = $reg['ano_publi'];
                    ?>
                    <div>
                        <div>
                            <label><?php echo $nomeLivro[$i];?></label>
                </div>

                    </div>

                    <?php
                        $i++
                    
                }
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
