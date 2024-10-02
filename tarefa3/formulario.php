<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recebe dados</title>
</head>
<body>
    <form action="salva.php" method="post">
	<label for="nome">Nome:</label>
	<input type="text" name="nome"><br>
	<label for="url">URL da foto:</label>
	<input type="text" name="url"><br>
    <label for="descricao">Descricao:</label>
	<input type="text" name="descricao"><br>
    <label for="preco">Preço:</label>
	<input type="number" name="preco"><br>
	<input type="submit">
    </form>
</body>
</html>