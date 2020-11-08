<?php 
  session_start();
  if (!isset($_SESSION['result'])) {
    $_SESSION['result'] = 0;
  }
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kalkulator</title>
</head>
<body>
<?php 
  function add($wynik, $liczba){
    return $wynik+$liczba;
  }

  function sub($wynik, $liczba){
    return $wynik-$liczba;
  }

  function multi($wynik, $liczba){
    return $wynik*$liczba;
  }

  function div($wynik, $liczba){
    return $wynik/$liczba;
  }
?>
  <h4>Kalkulator</h4>
  <form method="get">
    <input type="number" step="0.01" name="liczba" placeholder="Liczba"><br><br>
    <input type="text" name="wynik" id="wynik" value="<?php echo number_format($_SESSION['result'],2); ?>" disabled><br><br>
    <input type="radio" name="dzialanie" value="dodawanie" checked>Dodawanie
    <input type="radio" name="dzialanie" value="odejmowanie">Odejmowanie
    <input type="radio" name="dzialanie" value="mnozenie">Mnożenie
    <input type="radio" name="dzialanie" value="dzielenie">Dzielenie<br><br>
    <input type="reset" value="Reset">
    <input type="submit" name="button" value="Oblicz">
  </form>

  <?php 
    if (isset($_GET['button'])) {
      if (!empty($_GET['liczba']) && !empty($_GET['dzialanie'])) {
        switch ($_GET['dzialanie']) {
          case 'dodawanie':
            $_SESSION['result'] = add($_SESSION['result'], $_GET['liczba']);
          break;
          case 'odejmowanie':
            $_SESSION['result'] = sub($_SESSION['result'], $_GET['liczba']);
            break;
          case 'mnozenie':
            $_SESSION['result'] = multi($_SESSION['result'], $_GET['liczba']);
            break;
          case 'dzielenie':
            $_SESSION['result'] = div($_SESSION['result'], $_GET['liczba']);
            break;
          default:
            echo 'Wypełnij prawidłowo pole działanie!';
            exit();
            break;
        }

        ?>
          <script>
            document.getElementById('wynik').value = <?php echo number_format($_SESSION['result'], 2); ?>;
          </script>
        <?php

      } else {
        echo '<hr>Wypełnij wszystkie pola!';
      }
    }
  ?>


</body>
</html>