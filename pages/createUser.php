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
        <form action="inser_cliente.php" method="POST">
            <h1>Seu Cadastro</h1>
            <fieldset>
                <div class="container">
                    <input type="text" required name="nome" autofocus>
                    <label>Nome</label>
                </div>
                <div class="container">
                    <input type="text" required name="sobrenome">
                    <label>Sobrenome</label>
                </div>
            </fieldset>

            <fieldset>
                <div class="container">
                    <input type="email" required name="email">
                    <label>E-mail</label>
                </div>
            </fieldset>
            <fieldset>
                <div class="container">
                    <input type="password" required name="senha">
                    <label>Senha</label>
                </div>
                <div class="container">
                    <input type="password" required name="confirm">
                    <label>Confirmar senha</label>
                </div>
            </fieldset>
            <fieldset>
                <!--<button> Criar conta </button> -->
                <input type="submit" value="Criar conta" id="button">
            </fieldset>

        </form>
    </div>
</body>
</html>