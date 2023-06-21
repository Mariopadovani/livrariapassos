<?php
if (isset($_COOKIE[`id`])){
  header("Location: /livrariapassos");
};

if (isset($_POST["email"]) && isset($_POST["senha"])) {
  include("conecta_20230505185624.php");
  //atribuindo valores dos campos a variaveis.
  $email = $_POST["email"];
  $senha = $_POST["senha"];

  //comando sql.
  $comando = $pdo -> prepare("SELECT senha FROM cliente WHERE email = :email");  

  //insere valores das variaveis no comando sql.
  $comando->bindValue(":email",$email);                                                         

  //executa a consulta no banco de dados.
  $comando->execute();

  //o fetch() transforma o retorno em um array (use apenas se o retorno for apenas um registro, ou seja, uma única linha da tabela).
  $get_senha = $comando->fetchColumn();   


  $comando = $pdo -> prepare("SELECT id_cliente FROM cliente WHERE email = :email");  

  //insere valores das variaveis no comando sql.
  $comando->bindValue(":email",$email);                                                         

  //executa a consulta no banco de dados.
  $comando->execute();

  $admin_validation = $pdo -> prepare("SELECT admin FROM cliente WHERE email = :email");  

  //insere valores das variaveis no comando sql.
  $admin_validation->bindValue(":email",$email);                                                         

  //executa a consulta no banco de dados.
  $admin_validation->execute();

  //o fetch() transforma o retorno em um array (use apenas se o retorno for apenas um registro, ou seja, uma única linha da tabela).
  $get_id = $comando->fetchColumn();  
  //Comparar senha informada com a senha armazenado no banco de dados.
  if($get_senha == MD5($senha)){ // 
    setcookie("id", $get_id, time()+1500);
    setcookie("admin", $admin_validation->fetchColumn(), time()+1500);
    header("Location: /livrariapassos");
  }else{
    echo("Email ou Senha Inválida");
  }

  //Fecha declaração e conexão.
  unset($comando);
  unset($pdo);
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
  <form action="#" method="post">
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