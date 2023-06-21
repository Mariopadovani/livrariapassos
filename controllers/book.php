<?php
header('Content-Type: application/json; charset=utf-8');
// Verifica o método de requisição
$method = $_SERVER['REQUEST_METHOD'];
$data = $_POST; // Assume que os dados do livro são enviados via formulário POST

if ($method === 'GET') {
    // Lógica para recuperar um livro específico ou todos os livros
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $book = Book::read($id);
        echo json_encode($book);
        // Faça algo com o livro retornado
    } else {
        $books = Book::readAll();
        // Faça algo com a lista de livros retornada
        echo json_encode($books);
    }
} elseif ($method === 'POST') {
    // Lógica para criar um novo livro
    $data = [];
    
    $data["nome"] = $_POST["nome"];
    $data["genero"] = $_POST["genero"];
    $data["editora"] = $_POST["editora"];
    $data["ano_publi"] = $_POST["ano_publi"];

    // Processa o upload da imagem
    $uploadsDirectory = 'uploads/';
    $uploadFile = $uploadsDirectory . md5(basename($_FILES['imagem']['name']) ) . "." . $parsed = explode(".", basename($_FILES['imagem']['name']))[1];

    if (move_uploaded_file($_FILES['imagem']['tmp_name'], $uploadFile)) {
        $imagemUrl = 'http://localhost/livrariapassos/' . $uploadFile;
        $data["imagem"] = $imagemUrl;
    } else {
        echo "Erro ao fazer upload da imagem.";
    }

    $success = Book::create($data);
    echo json_encode($success);
    // Faça algo com o resultado da criação
} elseif ($method === 'PUT') {
    
} elseif ($method === 'DELETE') {
    // Lógica para excluir um livro existente
    $id = $_GET['id'];
    $success = Book::delete($id);
    // Faça algo com o resultado da exclusão
}

// Outras lógicas ou redirecionamentos conforme necessário
?>
