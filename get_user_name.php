<?php
  include("conecta_20230505185624.php");

      global $pdo;
      
      // Verifica se o usuário existe no banco de dados
      $verificaUsuario = $pdo->prepare("SELECT * FROM cliente WHERE id_cliente = :id");
      $verificaUsuario->bindValue(":id", $_COOKIE['id']);
      $verificaUsuario->execute();

      if ($verificaUsuario->rowCount() > 0) {
          $usuario = $verificaUsuario->fetch(PDO::FETCH_ASSOC);
          
          // Verifica se o usuário é um administrador
          echo $usuario['nome_cliente'];
  }