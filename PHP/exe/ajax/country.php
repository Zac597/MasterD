<html>
  <head>
    <meta charset="UTF-8">
    <script type="text/javascript">
      function getHTTPobject(){
        if (window.ActiveXObejct)
          return  new ActiveXObject("Microsoft.XMLHTTP");
        else if (window.XMLHttpRequest)
          return  new XMLHttpRequest();
        else{
          alert("Não suportado");
          return null
        }
      }
      function devoverProvincias(){
        var pais = document.getElementById('pais').value;
        httpObject  = getHTTPobject();
        if (httpObject != null) {
          httpObject.open("GET", "provincias.php?pais=" + pais, true);
          httpObject.onreadystatechange = function()
          {
            if(httpObject.readyState == 4)
            {
              document.getElementById('provincias').innerHTML = httpObject.responseText;
            }
          }
          httpObject.send(null);
        }  
      }
    </script>
  </head>
  <body>
    <form action="" name="" method="post">
      País: <select name="pais" id="pais" onchange="devolverProvincias()">
      <option value="">Selecione um país</option>
      <option value="pt">Portugal</option>
      <option value="es">Espanha</option>
      </select><br>
      <div id="provincias"></div>
    </form>
  </body>
</html>