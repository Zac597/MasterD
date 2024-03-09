<html>
  <body>
    <?php

      echo 'Olá bem-vindo/a  '.$_POST['nome'].'com morada  em '.$POST['morada'].', com '.$_POST['idade'].' anos ';

      if($_POST['animais'] == 'on'){
        echo ' e ten animais de estimação';
      }
    ?>
  </body>
</html>