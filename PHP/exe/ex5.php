<html>
  <body>
    <?php
      $f = fopen('dadosconexao.txt','w+');
      
      fwrite($f, "IP : ".$SERVER['REMOTE_ADDR']."\r\n");
      fwrite($f, "Data e hora : ".date('Y-m-d H:i:s')."\r\n");
      fwrite($f, "Port : ".$SERVER['REMOTE_PORT']."\r\n");
      fwrite($f, "URL : ".$SERVER['REMOTE_URI']."\r\n");

    ?>
  </body>
</html>