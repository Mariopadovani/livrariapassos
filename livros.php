<?php
    include_once 'header.php';
    include("conecta_20230505185624.php");

    $sql = 'SELECT * FROM livros';
    $stmt = $pdo->query($sql);
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($results as $result) {
        echo '<div class="content-card' . $result['id_livro'] . '">';
        echo 'imagem: ' . $result['imagem'] . '<br>';       
        echo '<content>';
        echo 'nome: ' . $result['nome'] . '<br>';
        echo 'editora: ' . $result['editora'] . '<br>';
        echo '</content>';
        echo '</div>';
    }
?>
    </main>
<?php
    include_once 'footer.php';
?>
