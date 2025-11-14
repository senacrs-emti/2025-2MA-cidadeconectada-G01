<?php
define('DBHOST', 'localhost');
define('DBNAME', 'cadastro');
define('DBUSER', 'root');
define('DBPASS', '');

$conexao = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);

// Verificar a conexão
if ($conexao->connect_error) {
    // Se houver um erro, exibe a mensagem de falha e interrompe o script
    die("Falha na conexão: " . $conexao->connect_error);
}

// Se a execução continuar, a conexão foi bem-sucedida
// EXCLUIR DEPOIS!
echo "Conexão bem-sucedida!";
?>