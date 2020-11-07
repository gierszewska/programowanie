<!-- 
Użytkownik podaje z klawiatury dwie długości do wyboru w polu radio ma pole i obwód domyślnie zaznaczone ma być 'pole'
Zabezpiecz formularz przed podaniem pustych danych
Wynik wyświetl w formacie:
Pole wynosi: 20cm2 (2 ma byc w indeksie górnym)
Obwód wynosi: 20cm
Dane wyślij z formularza bezpiecznie (POST)
Obliczenia mają być wyidoczne w innym pliku
 -->

 <?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obliczenia</title>
        <style>
            body {
                padding: 90px; line-height: 35px; border: groove 4px black; width: 40%; font: 200% Segoe UI; margin-left: auto; margin-right: auto; transform: translateY(95%); box-shadow: inset 0 0 0 15px lightblue;
            }
        </style>
</head>
<body>
    <center>
    <?php

        $pole = $_SESSION['bokA'] * $_SESSION['bokB'];
        $obwod = 2 *$_SESSION['bokA'] + 2 * $_SESSION['bokB'];     

        if (!empty($_SESSION['bokA'])&& !empty($_SESSION['bokB'])&& $_SESSION['guzik'] == "p") {
            echo "Pole: $_SESSION[bokA] cm x $_SESSION[bokB] cm = $pole cm<sup>2</sup>";
        }elseif (!empty($_SESSION['bokA'])&& !empty($_SESSION['bokB'])&& $_SESSION['guzik'] == "o") {
            echo "Obwód: 2 x $_SESSION[bokA] cm + 2 x $_SESSION[bokB] cm = $obwod cm";
        }else {
            ?>
            <script>
              history.back();
            </script>
            <?php
        }
    ?><br>
    <a href="./1_zadanie.php">Powrót do obliczeń</a>
    </center>
</body>
</html>