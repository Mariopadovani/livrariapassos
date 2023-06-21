<?php
include('Router.php');
include('models/User.php');
include('models/Book.php');

$router = new CreateRouter('/livrariapassos');

$router->get('/', 'home.php');
$router->get('/livro', 'book.php');
$router->get('/cadastro', 'createUser.php');
$router->get('/login', 'login.php');
$router->get('/update', 'update.php');
$router->get('/add', 'create.php');


$router->post('/book', 'book.php');
$router->post('/updatebook', 'updateBook.php');


$router->listen();