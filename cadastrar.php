<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Livro</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    include("menu.php")
        ?>
    <div class="content">
        <div class="card">
            <h2>Cadastro de Novo Livro</h2>
            <p>Adicione uma nova obra ao acervo digital da biblioteca.
                Preencha as informações abaixo e envie a capa e o 
                arquivo digital do livro em formato pdf.</p>
            <br>
            <form method="POST">
                <label>Título do Livro</label>
                <input type="text" name="titulo" required>
                <label>Autor</label>
                <input type="text" name="autor" required>
                <label>Ano de Publicação</label>
                <input type="number" name="ano" required>
                <label>Categoria</label>
                <select name="categoria" required>
                    <option value="">Selecione...</option>
                    <option value="romance">Romance</option>
                    <option value="literatura">Literatura Brasileira</option>
                    <option value="fantasia">Fantasia</option>
                    <option value="ficcao">Ficção Científica</option>
                    <option value="educacao">Educação</option>
                    <option value="tecnologia">Tecnologia</option>
                    <option value="historia">História</option>
                    <option value="biografia">Biografia</option>
                    <option value="infantil">Infantil</option>
                </select>
                <br><br>
                <label>Capa do Livro (imagem)</label>
                <input type="file" name="arquivo" accept="application/pdf" required>
                <br>
                <button class="btn">Cadastrar Livro</button>
            </form>
        </div>
    </div>

</body>

</html>