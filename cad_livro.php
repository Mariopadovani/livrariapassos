<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livraria Passos</title>
    <link rel="stylesheet" href="css/style_cad.css">
</head>
<body>
    <div id="paralelo"></div>

    <div id="main">
        <form action="cad_livro_teste.php" method="POST">
            <h1>Cadastro de Livro</h1>
            <fieldset>
                <div class="container">
                    <input type="text" required name="nome" autofocus>
                    <label>Nome</label>
                </div>
                <div class="container">
                    <input type="text" required name="genero">
                    <label>Genêro</label>
                </div>
            </fieldset>

            <fieldset>
                <div class="container">
                    <input type="text" required name="editora">
                    <label>Editora</label>
                </div>
            </fieldset>
            <fieldset>
                <div class="container">
                    <input type="text" required name="ano_publi">
                    <label>Ano de publicação</label>
                </div>
            </fieldset>
            <fieldset>
            <input type="file" name="imagem" multiple accept="image/*"> 
            </fieldset>
            <fieldset>
                <!--<button> Cadastrar livro </button> -->
                <input name="cad" type="submit" value="Cadastrar livro" id="button">
            </fieldset>

        </form>
    </div>
    
</body>
</html>