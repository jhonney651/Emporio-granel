<?php
session_start(); // Inicia a sessão

if(!isset($_SESSION['email'])) { // Verifica se o usuário está logado
  header('Location: login_form.php'); // Redireciona para a página de login se o usuário não estiver logado
}

echo "Bem-vindo, " . $_SESSION['email']; // Exibe uma mensagem de boas-vindas para o usuário logado
?>