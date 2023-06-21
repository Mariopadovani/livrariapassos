<?php
// Lógica para atualizar um livro existente
$data = [];
$id = $_POST["id_livro"];
$data["nome"] = $_POST["nome"];
$data["genero"] = $_POST["genero"];
$data["editora"] = $_POST["editora"];
$data["ano_publi"] = $_POST["ano_publi"];
// Aqui você pode processar os dados do livro atualizado como desejar
// Por exemplo, atualizar as informações no banco de dados

// Retorna os dados atualizados em formato JSON

// print_r($putData[]);

$success = Book::update($id, $data);
echo json_encode($success);

// Faça algo com o resultado da atualização