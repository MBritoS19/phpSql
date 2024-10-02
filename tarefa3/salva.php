<?php

// conexao
$servidor = 'localhost';
$banco = 'loja';
$usuario = 'root';
$senha = '';

$conexao = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);

echo "Conectado!<br>";

echo "Recebido: <br>";
echo $_POST['nome'];
echo "<br>";
echo $_POST['url'];
echo "<br>";
echo $_POST['descricao'];
echo "<br>";
echo $_POST['preco'];
echo "<br>";

$codigoSQL = "INSERT INTO `produtos` (`id`, `nome`, `url`, `descricao`, `preco`) VALUES (NULL, :nm, :url, :des, :pre)";

try {
    $comando = $conexao->prepare($codigoSQL);
    $preco = str_replace(",",".", $_POST["preco"]);
    $resultado = $comando->execute(array('nm' => $_POST['nome'], 'url' => $_POST['url'], 'des' => $_POST['descricao'], 'pre' => $preco));

    if($resultado) {
	echo "Comando executado!<br>";
    } else {
	echo "Erro ao executar o comando!<br>";
    }
} catch (Exception $e) {
    echo "Erro $e";
}

$conexao = null;

?>