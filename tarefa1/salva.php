<?php

// conexao
$servidor = 'localhost';
$banco = 'receitas';
$usuario = 'root';
$senha = '';

$conexao = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);

echo "Conectado!<br>";

echo "Recebido: <br>";
echo $_POST['nome'];
echo "<br>";
echo $_POST['quantidade'];

$codigoSQL = "INSERT INTO `ingredientes` (`id`, `nome`, `quantidade`) VALUES (NULL, :nm, :qtd)";

try {
    $comando = $conexao->prepare($codigoSQL);
    $quantidade = str_replace(",",".", $_POST["quantidade"]);
    $resultado = $comando->execute(array('nm' => $_POST['nome'], 'qtd' => $quantidade));

    if($resultado) {
	echo "Comando executado!";
    } else {
	echo "Erro ao executar o comando!";
    }
} catch (Exception $e) {
    echo "Erro $e";
}

$conexao = null;

?>