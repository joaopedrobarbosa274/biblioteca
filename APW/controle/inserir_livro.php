<?php
if (isset($_POST['submit'])){
    include_once('conexao.php');

    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $editora = $_POST['editora'];
    $ano_publicacao = $_POST['ano'];
    $genero = $_POST['genero'];
    $isbn = $_POST['isbn'];

    $result = mysqli_query($conexao, "INSERT INTO livros(titulo, autor, editora, ano_publicacao, genero, isbn) 
    VALUES('$titulo', '$autor', '$editora', '$ano_publicacao', '$genero', '$isbn')");

    // if($result){
    //     echo "Livro cadastrado com sucesso!";
    // } else {
    //     echo "Erro ao cadastrar livro: " . mysqli_error($conexao);
    // }
}
?>