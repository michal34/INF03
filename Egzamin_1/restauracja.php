<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Restauracja Wszystkie Smak</title>
    <link rel="stylesheet" href="./styl_1.css" />
  </head>
  <body>
    <div class="baner"><h1>Witamy w restauracji „Wszystkie Smaki”</h1></div>
    <div class="baners_container">
      <div class="panel_lewy">
        <img
          src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRc9uRCwCb4INztfLnzdmQdcrIYPP2KvN55zg&usqp=CAU"
          class="img"
        />
      </div>
      <div class="panel_prawy">
        <div>
          <h3><strong>U nas dobrze zjesz!</strong></h3>
          <ol>
            <?php
              $link = new mysqli("127.0.0.1", "root", "", "baza");
 
              if($link === false){
                  die("ERROR: Could not connect. " . mysqli_connect_error());
              }

              $sql = "SELECT * FROM dania";
              if($result = mysqli_query($link, $sql)){
                  if(mysqli_num_rows($result) > 0){
                      while($row = mysqli_fetch_array($result)){
                              echo "<li>" . $row['nazwa'] . " od " . $row['cena'] . " zł</li>";
                      }
                      mysqli_free_result($result);
                  } else{
                      echo "No records matching your query were found.";
                  }
              } else{
                  echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
              }
              mysqli_close($link);
            ?>
          </ol>
        </div>
      </div>
    </div>
    <form class="panel_dolny" action="rezerwacja.php">
      <h3>Zarezerwuj stolik on-line</h3>
      <p>Data (format rrrr-mm-dd):</p>
      <input name="data" id="data" />
      <p>Ile osób?:</p>
      <input name="ilosc_osob" id="ilosc_osob" />
      <p>Twój numer telefonu:</p>
      <input name="numer_telefonu" id="numer_telefonu" />
      <div class="checkbox">
        <input type="checkbox" />
        <p>Zgadzam się na przetwarzanie moich danych osobowych</p>
      </div>
      <div class="button_container">
        <input type="reset" class="button" />
        <input type="submit" class="button" />
      </div>
    </form>
    <div class="stopka">Stronę internetową opracował: <i>0000000000000000</i></div>
  </body>
</html>
