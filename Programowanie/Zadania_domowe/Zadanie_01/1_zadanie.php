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
    <title>Zadanie Domowe</title>
        <style>
            body {
                padding: 90px; line-height: 35px; border: groove 4px black; width: 30%; font: 200% Segoe UI; margin-left: auto; margin-right: auto; transform: translateY(50%); box-shadow: inset 0 0 0 15px lightblue;
            }
            input[type=submit] {
                width: 220px; height: 25px;
            }
            input[type=number] {
                font-size: 18pt; width: 220px; line-height: 60px;
            }
            #boxA, #boxB {
                height: 20px;
            }
            h1 {
                font-size: 90%
            }
        </style>
</head>
<body> 
    <center>
        <h1>Kalkulator pola i obwodu</h1>
        <form name="form1" action="./1_zadanie_data.php" method="post">

            <label>Bok A:</label>
            <input type="number" name="bok_A" size="1" id="boxA"><br>
            <label>Bok B:</label>
            <input type="number" name="bok_B" size="1" id="boxB"><br>

            <input type="radio" name="typ" value="p" checked>
            <label>Pole</label>
            <input type="radio" name="typ" value="o">
            <label>Obwód</label><br>

            <input type="submit" value="Pokaż wynik" size="5">

        </form>
    </center>
</body>
</html>