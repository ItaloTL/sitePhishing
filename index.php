<?php
// salvar.php — recebe e salva o JSON em arquivo
$dados = json_decode(file_get_contents('php://input'), true);
file_put_contents('dados.json', json_encode($dados, JSON_PRETTY_PRINT));
echo json_encode(['ok' => true]);