<?php
if (isset($_COOKIE["id"])){
  header("Location: index.php");
} 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_login.css">
    <title>Livraria Passos</title>
</head>


<body>
  <div id="paralelo"></div>


<form action="login_entrada.php" method="post">
  <h2 id="titulo">Seu Cadastro</h2>

  <div class="container">
    <input  type="email" required name="email"> <!--required, segnifica que esse campo é obrigatório a resposta-->

    <label> E-mail</label> <!--Representa uma legenda ao elemento-->
  </div>
  <div class="container">
    <input type="password" required name="senha"> <!--required, segnifica que esse campo é obrigatório a resposta-->

    <label>Senha</label>
  </div>  
  <input type="submit" value="Entrar" id="button">
 <!-- <button>Entrar</button> -->

  <a href="cad_user.html">Criar conta</a>
</form> 
    
</body>
</html>
