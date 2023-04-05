<?php
session_start(); // Inicia uma nova sessão

if(isset($_POST['login'])) { // Verifica se o botão de login foi pressionado
  
  // Conecta-se ao banco de dados
  $conn = mysqli_connect('localhost', 'usuario', 'senha', 'nome_do_banco_de_dados');

  // Obtém os valores do formulário de login
  $email = $_POST['email'];
  $password = $_POST['password'];
  
  // Faz uma consulta SQL para verificar se as credenciais de login estão corretas
  $query = "SELECT * FROM usuarios WHERE email='$email' AND password='$password'";
  $result = mysqli_query($conn, $query);
  
  if(mysqli_num_rows($result) == 1) { // Se as credenciais estiverem corretas
    $_SESSION['email'] = $email; // Armazena o email do usuário na sessão
    header('Location: dashboard.php'); // Redireciona para a página de dashboard
  } else {
    echo "E-mail ou senha inválidos.";
  }
}
?>