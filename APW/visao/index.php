<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Livros</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Cadastro de Livros</h1>
        <form action="../controle/inserir_livro.php" method="post">
            <label for="titulo">Título do Livro</label>
            <input type="text" id="titulo" name="titulo" required>

            <label for="autor">Autor</label>
            <input type="text" id="autor" name="autor" required>

            <label for="editora">Editora</label>
            <input type="text" id="editora" name="editora" required>

            <label for="ano">Ano de Publicação</label>
            <input type="number" id="ano" name="ano" required min="1000" max="9999">

            <label for="genero">Gênero</label>
            <input type="text" id="genero" name="genero" required>

            <label for="isbn">ISBN</label>
            <input type="text" id="isbn" name="isbn" required>

            <input type="submit" value="Cadastrar Livro" class="button">
        </form>
    </div>
</body>
</html>