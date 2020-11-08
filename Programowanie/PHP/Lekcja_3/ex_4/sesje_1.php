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
  <title>Formularz</title>
</head>
<body>
  <h4>Województwa</h4>
<form method="post" action="./sesje_2.php">
  <label for="wojewodztwo">Województwo:</label>
    <select name="wojewodztwo" id="woj">
      <option name="wojewodztwo" value="Wielkopolskie">Wielkopolskie</option>
      <option name="wojewodztwo" value="Małopolskie">Małopolskie</option>
      <option name="wojewodztwo" value="Pomorskie">Pomorskie</option>
    </select>
  <input type="submit" name="button" value="Prześlij">
</form>
</body>
</html>