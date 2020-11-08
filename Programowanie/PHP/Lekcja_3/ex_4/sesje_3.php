<!-- Dodać na pierwszej stronie formularz z województwami (3, select)
formularz przekierowuje do drugiej strony gdzie wyświetla wybrane województwo
na drugiej stronie w zależności od wybranego województwa mamy do wyboru po 3 miasta (checkbox)
po zatwierdzaniu formularza jesteśmy przekierowani do trzeciej strony, gdzie będzie wyświetlone wybrane województwo i miasta
na trzeciej stronie możliwość powrotu do strony pierwszej -->
<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Strona 3</title>
</head>
<body>
  <?php
    echo 'Twoje województwo: ';
    echo $_SESSION['wojewodztwo'];
    echo 'Twoje wybrane miasta: ';
    echo $_SESSION['miasta1'];

  ?>
</body>
</html>