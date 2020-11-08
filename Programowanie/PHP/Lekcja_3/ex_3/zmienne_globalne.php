<!-- 
Użytkownik w formularzu ma dwa pola input (wynik oraz liczba).
Za pomocą radio buttona wybiera działanie (dodawanie / odejmowanie)
Dodaj w formularzu przycisk.
Utwórz dwie funkcje (dodawanie / odejmowanie), które pobierają dane z wyniku oraz liczbę z pola formularza.
Wynik wyświetl z precyzją dwóch miejsc.
Pole wynik jest nieaktywne, tylko wyświetla wynik.
Wartość początkowa wyniku wynosi 0.
 -->
<?php
session_start();
if (!isset($_SESSION['result'])) {
$_SESSION['result'] = 0;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dodawanie / odejmowanie</title>
</head>

<body>
  <form name="form1" method="POST">

    <label for="liczba">Liczba:</label>
    <input type="number" name="liczba" value="0"><br><br>

    <label for="radio">Rodzaj działania:</label><br>
    <label for="dodawanie">Dodawanie</label>
    <input type="radio" name="metoda" value="add" checked><br>
    <label for="odejmowanie">Odejmowanie</label>
    <input type="radio" name="metoda" value="sub"><br><br>
    <?php
    function add(int $num1,int $num2)
    {
        $num1+=$num2;
        return $num1;
    }

    function sub(int $num1,int $num2)
    {
        $num1-=$num2;
        return $num1;
    }
    $ans = 0;
    if (isset($_POST['button'])) {
      $num = $_POST['liczba'];

      switch ($_POST['metoda']) {
        case 'add':
                $ans = add($ans,$num);
                $ans = number_format($ans, 2, ',', ' ');
                break;
        case 'sub':
                $ans = sub($ans,$num);
                $ans = number_format($ans, 2, ',', ' ');
                break;
        default:
          echo "Proszę wypełnić Pola!";
          break;
      }

    }

  ?>

    <label for="wynik">Wynik:</label>
    <!-- <input type="number" name="wynik" placeholder="0" id="wynik" value="0" ><br><br> -->
    <input type="text" name="wynik" id="echo" value="<?php
      echo $ans;?>" readonly><br><br>
    <input type="submit" name="button" value="Oblicz">

  </form>
</body>

</html>