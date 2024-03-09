<?php

session_start();
if(!empty($_SESSION['cor'])){
  $cor = $_SESSION['cor'];
} else {
  $cor='vazio';
}
?>
<html>
  <body>
    <?php echo $cor ?>
  </body>
</html>