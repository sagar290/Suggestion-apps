<?php



 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>search apps</title>

    <script type="text/javascript">
      function  findmatch() {

        if (window.XMLHttpRequest) {
          xmlhttp = new XMLHttpRequest();
        }else {
          xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
        }

        xmlhttp.onreadystatechange = function() {
          if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById('result').innerHTML = xmlhttp.responseText;
          }
        }
        xmlhttp.open('GET', 'search.inc.php?search_txt='+document.search.search_txt.value, true);
        xmlhttp.send();
      }
    </script>

  </head>
  <body>

    <form id="search" action="anotherpage.php" method="GET" name="search">

      Type a name : <br>
      <input type="txt" name="search_txt" onkeyUp="findmatch();">

    </form>

    <div id="result">

    </div>

  </body>
</html>
