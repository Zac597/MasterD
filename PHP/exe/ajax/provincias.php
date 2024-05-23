<?php
$hostname = 'localhost';
$username = 'root';
$password = 'senha';
$dbname = 'biblioteca';
$conn = @mysql_connect($hostname, $username, $password);
if ($conn) {
  if (mysql_select_db($dbname, $conn) === TRUE) {
    echo  'Províncias  : <select id="provincia" name="provincia">';
    $sql = "SELECT * FROM provincias where pais = '" . $GET['pais'] . "'";
    $result = mysql_query($sql);
    if ($result) {
      if (mysql_num_rows($result) !== 0) {
        while ($row = mysql_fetch_array($result)) {
          echo '<option value="' . $row['id'] . '">' . $row['provincia'] . '</option>';
        }
      } else {
        echo 'Não foram encontrados registos';
      }
    }
  } else {
    echo 'Erro ao selecionar  a base de dados';
  }
  echo '</select>';
  mysql_close($conn);
} else {
  echo 'Falha na conexão';
}