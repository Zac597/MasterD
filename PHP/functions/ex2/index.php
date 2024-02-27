<html>
  <body>
    <p>
      <?php
        function somarDias($dias){
          $seguinte = time() + ($dias * 24 * 60 * 60);
          echo 'Próxima data '.date('Y.m.d', $seguinte);
        }
        somarDias(1)
      ?>
    </p>
  </body>
</html>