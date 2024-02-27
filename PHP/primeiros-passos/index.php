<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="index.php" method="post">
    Nome> <input type="text" name="nome"><br/>
    Idade: <input type="text" name="idade"><br/>
    Telemóvel: <input type="text" name="telemovel"><br/>
    Horas semanais: <input type="number" name="WeekHrs"><br/>
    Dias da semana: <input type="number" name="DaysWeek"><br/>
    Preço por hora: <input type="number" name="preco"><br/>
    <input name="enviar" type="submit" value="Enviar"><br/>


  </form>
  <?php

  $nome = $_POST['nome'];
  $idade = $_POST['idade'];
  $telemovel = $_POST['telemovel'];
  $horas  = $_POST['WeekHrs'];
  $dias = $_POST['DaysWeek'];
  $preco = $_POST['preco'];
  $semana = ($dias*$horas)*$preco;


  echo "Nome: $nome.<br>";
  echo "Idade: $idade.<br>";
  echo "Telemóvel: $telemovel.<br>";
  echo "Horas semanais: $horas.<br>";
  echo "Dias da semana: $dias.<br>";
  echo "Preço por hora = $preco.<br>";
  echo "Preço semanal: $semana.";


?>
</body>
</html>

