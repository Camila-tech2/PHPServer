<?php

// Lê os usuários do arquivo users.txt
$usuarios = file_get_contents('senhas.txt');
$usuarios = json_decode($usuarios, true);
//$admin = $usuarios['admin'];

// Obtém os dados do formulário
$login = $_POST['login'];
$senha = $_POST['senha'];

// Procura o usuário com o login e senha fornecidos
foreach ($usuarios as $usuario) {
  if ($usuario['login'] === $login && $usuario['senha'] === $senha) {
    $cargo = $usuario['cargo'];

    header('Location: card-green.php?login=' . urlencode($login) . '&cargo=' . urlencode($cargo));
    exit();
    
  }
 //$admin++;
}
// a autenticação falhou e o usuário é redirecionado para a página de erro
header('Location: card-red.php');
exit();

?>