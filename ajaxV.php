<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="Author" content="Patrick Homburg">
    <title>Ajax 5</title>
  </head>
  <body style="background: gray">
    <div class="wrapper">
      <p><img src="http://ma-web.nl/static/vector/Logo_blok.svg" alt="MA logo" width="30">Ajax 5</p>
      <input type="text" id="searchCountry" placeholder="Zoek een land">
      <div id="txtHint">
        Hier komt de lijst
      </div>
      <script>
        let searchCountry = document.getElementById('searchCountry');
        let txtHint = document.getElementById('txtHint');
        searchCountry.addEventListener('keyup', function(){
          showList(searchCountry.value,'list');
        });
      </script>
    </div>

    <script src="ajax.js"></script>
  </body>
  </html>
