<?php
if (isset($_COOKIE[`id`])){
  header("/");
};
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

//o fetch() transforma o retorno em um array (use apenas se o retorno for apenas um registro, ou seja, uma única linha da tabela).
$get_id = $comando->fetchColumn();  
//Comparar senha informada com a senha armazenado no banco de dados.
if($get_senha == MD5($senha)){
  setcookie("id", $get_id, time()+1500);
  header("Location:index.php");
}else{
  echo("Email ou Senha Inválida");
}

//Fecha declaração e conexão.
unset($comando);
unset($pdo);

?>
 