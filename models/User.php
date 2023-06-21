<?php

class User {
  protected $id;
  protected $name;
  protected $lastName;
  protected $email;
  protected $password;
  protected $isAdmin;

  public function create($data) {

  }

  public static function read($id) {
    include("conecta_20230505185624.php");
    $query = $pdo->prepare("SELECT * FROM cliente WHERE id_cliente = :id;");

    $query->bindValue(':id', $id);

    $query->execute();
    $user = '';

    if ($query->rowCount() > 0) {
      $user = $query->fetch(PDO::FETCH_ASSOC);
    }

    unset($query);
    unset($pdo);

    return $user;
  }

  public function update($id, $data) {

  }

  public function delete($id) {

  }
}
