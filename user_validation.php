<?php
  include("conecta_20230505185624.php");

  // Função para verificar se o usuário existe e se é administrador
  function validarUsuarioAdmin($id) {
      global $pdo;
      
      // Verifica se o usuário existe no banco de dados
      $verificaUsuario = $pdo->prepare("SELECT * FROM cliente WHERE id_cliente = :id");
      $verificaUsuario->bindValue(":id", $id);
      $verificaUsuario->execute();

      if ($verificaUsuario->rowCount() > 0) {
          $usuario = $verificaUsuario->fetch(PDO::FETCH_ASSOC);
          
          // Verifica se o usuário é um administrador
          if ($usuario['admin'] == 1) {
              return true;
          }
      }
      return false;
  }

  // Exemplo de uso:
  $user = $_COOKIE["id"];

  if (validarUsuarioAdmin($user)) {
      // Usuário válido e é um administrador
      // Faça o que for necessário para lidar com um usuário administrador
      echo "Usuário é um administrador.";
  } else {
      // Usuário inválido ou não é um administrador
      // Faça o que for necessário para lidar com um usuário não administrador
      echo "Usuário não é um administrador";
  }
?>