<?php

require('conn.php');

if (isset($_POST['fLogin'])) {
  header('Location: ../index.php');
}

if (isset($_POST['cadastro'])) {
  header('Location: views/cadastro.php');
}

// Verifica se o formulário de cadastro foi enviado
if (isset($_POST['cadastrar'])) {
  $username = strip_tags($_POST['username']);
  $password = strip_tags($_POST['password']);

  // Verifica se o usuário já existe no banco de dados
  $sql = "SELECT * FROM usuarios WHERE nome='$username'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // Usuário já cadastrado
    echo "Usuário já cadastrado.";
  } else {
    // Insere o novo usuário no banco de dados
    $sql = "INSERT INTO usuarios (nome,senha) VALUES ('$username', '$password')";
    if ($conn->query($sql) === TRUE) {
      echo "Usuário cadastrado com sucesso!";
    } else {
      echo "Erro ao cadastrar usuário: ";
    }
  }
}

if (isset($_POST['login'])) {
  $username = strip_tags($_POST['username']);
  $password = strip_tags($_POST['password']);

  // Consulta o banco de dados para verificar se existe o usuario e senha
  $sql = "SELECT * FROM usuarios WHERE nome=? AND senha=?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("ss", $username, $password);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows == 1) {
    // se estiver corretos
    echo "Login efetuado com sucesso!";
    header('Location: ../views/home.php');
  } else {
    // Se não existir
    echo "<script>alert('Usuário ou senha inválidos.')</script>";
    header('Refresh: 0; url=../views/loginFuncionario.php');
  }
  $stmt->close();
}
$conn->close();
