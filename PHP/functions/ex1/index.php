<html>
  <body>
    <p>
      <?php
        function fatorial($numero){
          if($numero==0) return 1;
          return ($numero*fatorial($numero-1));
        }

        echo fatorial(15);

      ?>
    </p>
  </body>
</html>