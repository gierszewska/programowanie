<!--
Użytkownik w formularzu ma dwa pola input wynik oraz liczba.
Za pomocą radio buttona wybiera działanie dodawanie / odejmowanie
Dodaj w formularzu przycisk.
Utwórz dwie funkcje dodawanie / odejmowanie, które pobierają dane z wyniku oraz liczbę z pola formularza.
Wynik wyświetl z precyzją dwóch miejsc.
Pole wynik jest nieaktywne, tylko wyświetla wynik.
Wartość początkowa wyniku wynosi 0.
 -->
<?php
    session_start();
    if (!isset($_SESSION['ans'])) {
        $_SESSION[`ans`] = 0;
    }
?>
<!DOCTYPE html>
<html lang="pl">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dodawanie / odejmowanie</title>
</head>
<body>
<?php
  function add($wynik, $liczba){
    return $wynik+$liczba;
  }

  function sub($wynik, $liczba){
    return $wynik-$liczba;
  }

  function multiply($wynik, $liczba){
    return $wynik*$liczba;
  }

  function divide($wynik, $liczba){
    return $wynik/$liczba;
  }
?>
<form method="get">
    <label for="liczba">Liczba:</label>
    <input type="number" name="liczba" value="0" step="0.01"><br><br>
    <label for="radio">Rodzaj działania:</label><br>
    <label for="dodawanie">Dodawanie</label>
    <input type="radio" name="metoda" value="add"><br>
    <label for="odejmowanie">Odejmowanie</label>
    <input type="radio" name="metoda" value="sub"> <br>
    <label for="mnożenie">Mnożenie</label>
    <input type="radio" name="metoda" value="multiply"><br>
    <label for="dzielenie">Dzielenie</label>
    <input type="radio" name="metoda" value="divide"><br><br>
    <label for="wynik">Wynik:</label>
    <!-- <input type="number" name="wynik" placeholder="0" id="wynik" value="0" ><br><br> -->
    <input type="text" name="wynik" id="echo" value="<?php
      echo number_format($_SESSION[`ans`],2);?>" readonly><br><br>
    <input type="submit" name="button" value="Oblicz">

    <input type="number" step="0.01" name="liczba" placeholder="Liczba"><br><br>
    <input type="text" name="wynik" id="echo" value="<?php echo number_format($_SESSION['ans'],2); ?>" disabled><br><br>
    <input type="radio" name="metoda" value="add" checked>Dodawanie
    <input type="radio" name="metoda" value="sub">Odejmowanie
    <input type="radio" name="metoda" value="multiply">Mnożenie
    <input type="radio" name="metoda" value="divide">Dzielenie<br><br>
    <input type="reset" value="Reset">
    <input type="submit" name="button" value="Oblicz">

  </form>

  <?php
    if (isset($_GET['button'])) {
      if (!empty($_GET['liczba']) && !empty($_GET['metoda'])) {
        switch ($_GET['metoda']) {
          case 'add':
            $_SESSION['ans'] = add($_SESSION['ans'], $_GET['liczba']);
          break;
          case 'sub':
            $_SESSION['ans'] = sub($_SESSION['ans'], $_GET['liczba']);
            break;
          case 'multiply':
            $_SESSION['ans'] = multiply($_SESSION['ans'], $_GET['liczba']);
            break;
          case 'divide':
            $_SESSION['ans'] = divide($_SESSION['ans'], $_GET['liczba']);
            break;
          default:
            echo 'Wypełnij prawidłowo pole działanie!';
            exit();
            break;
        }

        ?>
          <script>
            document.getElementById('wynik').value = <?php echo number_format($_SESSION['ans'], 2); ?>;
          </script>
        <?php

      } else {
        echo '<hr>Wypełnij wszystkie pola!';
      }
    }
  ?>

</body>