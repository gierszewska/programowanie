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
  <title>Strona 2</title>
</head>
<body>
  <h4>Twoje województwo oraz miasta</h4>
    <form action="./sesje_3.php" method="post">
  <?php
    $_SESSION['wojewodztwo'] = $_POST['wojewodztwo'];
    switch ($_SESSION['wojewodztwo']) {
      case 'Wielkopolskie':
        ?>
        <label for="Poznań">Poznań</label>
          <input type="checkbox" name="Poznań" id="miasta1">
        <label for="Kalisz">Kalisz</label>
          <input type="checkbox" name="Kalisz" id="miasta1">
        <label for="Konin">Konin</label>
          <input type="checkbox" name="Konin" id="miasta1"><br><br>
        <?php
        break;

      case 'Małopolskie':
        ?>
        <label for="Kraków">Kraków</label>
          <input type="checkbox" name="Kraków" id="miasta2">
        <label for="Bochnia">Bochnia</label>
          <input type="checkbox" name="Bochnia" id="miasta2">
        <label for="Brzesko">Brzesko</label>
          <input type="checkbox" name="Brzesko" id="miasta2"><br><br>
        <?php
        break;

      case 'Pomorskie':
        ?>
        <label for="Gdańsk">Gdańsk</label>
          <input type="checkbox" name="Gdańsk" id="miasta3">
        <label for="Bytów">Bytów</label>
          <input type="checkbox" name="Bytów" id="miasta3">
        <label for="Poznań">Poznań</label>
          <input type="checkbox" name="Poznań" id="miasta3"><br><br>
        <?php
        break;

      default:
      echo 'error';
        break;
    }
  ?>
  <input type="submit" name="button" value="Prześlij">
</body>
</html>

<!--     Wielkopolskie
  <label for="Poznań">Poznań</label>
    <input type="checkbox" name="Poznań" id="miasta1">
  <label for="Kalisz">Kalisz</label>
    <input type="checkbox" name="Kalisz" id="miasta1">
  <label for="Konin">Konin</label>
    <input type="checkbox" name="Konin" id="miasta1"><br><br>
    Małopolskie
  <label for="Kraków">Kraków</label>
    <input type="checkbox" name="Kraków" id="miasta2">
  <label for="Bochnia">Bochnia</label>
    <input type="checkbox" name="Bochnia" id="miasta2">
  <label for="Brzesko">Brzesko</label>
    <input type="checkbox" name="Brzesko" id="miasta2"><br><br>
    Pomorskie
  <label for="Gdańsk">Gdańsk</label>
    <input type="checkbox" name="Gdańsk" id="miasta3">
  <label for="Bytów">Bytów</label>
    <input type="checkbox" name="Bytów" id="miasta3">
  <label for="Poznań">Poznań</label>
    <input type="checkbox" name="Poznań" id="miasta3"><br><br>
    </form> -->