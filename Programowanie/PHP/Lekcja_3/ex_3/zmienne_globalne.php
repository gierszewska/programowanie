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
 <?php $_SESSION[`ans`] = 0; ?>
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

    function multiply(int $num1,int $num2)
    {
        $num1*=$num2;
        return $num1;
    }

    function divide(int $num1,int $num2)
    {
        $num1/=$num2;
        return $num1;
    }

    // $ans = 0;
    //   if ( $ans !== 0) {
    //   $nowa_zmienna = $ans + $number;
    //   echo $nowa_zmienna;
    // } else {
    //   $ans = 0;
    // }


    if (isset($_POST['button'])) {
      $num = $_POST['liczba'];





      switch ($_POST['metoda']) {
        case 'add':
          $_SESSION[`ans`] = add($_SESSION[`ans`],$num);
          $_SESSION[`ans`] = number_format($_SESSION[`ans`], 2, ',', ' ');
              // $nowa_zmienna = add($ans,$num);
              // $nowa_zmienna = number_format($ans, 2, ',', ' ');

                break;
        case 'sub':
          $_SESSION[`ans`] = sub($_SESSION[`ans`],$num);
          $_SESSION[`ans`] = number_format($_SESSION[`ans`], 2, ',', ' ');
                break;

        case 'multiply':
          $_SESSION[`ans`] = multiply($_SESSION[`ans`],$num);
          $_SESSION[`ans`] = number_format($_SESSION[`ans`], 2, ',', ' ');
                break;

        case 'divide':
          $_SESSION[`ans`] = divide($_SESSION[`ans`],$num);
          $_SESSION[`ans`] = number_format($_SESSION[`ans`], 2, ',', ' ');
                break;
        default:
          echo "Proszę wypełnić Pola!";
          break;
      }

    }
// $nowa_zmienna = $ans + $number;
//  echo $nowa_zmienna;
  ?>

    <label for="wynik">Wynik:</label>
    <!-- <input type="number" name="wynik" placeholder="0" id="wynik" value="0" ><br><br> -->
    <input type="text" name="wynik" id="echo" value="<?php
      echo $_SESSION[`ans`];?>" readonly><br><br>
    <input type="submit" name="button" value="Oblicz">

  </form>
</body>

</html>