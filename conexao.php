<?php
// Dados do banco
$host = "localhost";
$usuario = "root";
$senha = "root";
$banco = "usuario";


// Criar conexão
$conexao = new mysqli($host, $usuario, $senha, $banco);


// Verificar conexão
if ($conexao->connect_error) {
    die("Falha na conexão: " . $conexao->connect_error);
}


// Definir charset (opcional, recomendado)
$conexao->set_charset("utf8");


echo "Conexão realizada com sucesso!";
?>