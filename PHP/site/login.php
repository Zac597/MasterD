<?php
  include('conection.php');
  if(isset($_POST['email']) || isset($_POST['senha'])){
    if(strlen($_POST['email']) == 0) {
      echo "Preencha seu email";
    } else if(strlen($_POST['senha']) == 0) {
      echo "Preencha sua senha";
    } else {
      $email = $mysqli->real_escape_string($_POST['email']); // forma de limpar a string dentro do campo
      $senha = $mysqli->real_escape_string($_POST['senha']);

      $sql_code = "SELECT * FROM users WHERE email = '$email' AND senha = '$senha'"; 
      $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

      $quantidade = $sql_query->num_rows;

      if($quantidade == 1) {
        $user = $sql_query->fetch_assoc();
        if(!isset($_SESSION)) {
          session_start();
        }

        $_SESSION['id'] = $user['id'];
        $_SESSION['name'] = $user['name'];

        header("Location: painel.php");

      } else {
        echo "Falha ao logar! E-mail ou senha incorretos";
      }
    }
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>

<body>
  <a href="index.php">Voltar</a>

  <form action="" method="POST">
    <p>
      <label for="">Email</label>
      <input type="text" name="email">
    </p>
    <p>
      <label for="">Senha</label>
      <input type="password" name="senha">
    </p>
    <p>
      <button type="submit">Login</button>
    </p>
  </form>
</body>

</html>