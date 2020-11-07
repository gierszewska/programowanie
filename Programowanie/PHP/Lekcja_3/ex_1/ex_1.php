<?php
// Utwórz plik o nazwie: ex_1.php a w nim formularz o nazwie form_ex
// Dodaj dwa pola: miasto oraz wiek (typ text)
// Dodaj przycisk (submit)

// Po zatwierdzeniu formularza wyświetl wynik na stronie ex_1_data.php (action => ex_1_data.php)
// Danie wyświetl w formacie:
// Miasto: ...
// Wiek: ... 

// Sprawdź czy wszystkie pola zostały wypełnione (!empty), jeśli nie to użytkownik będzie przekierowany do strony z formularzem (history.back) i
// wyświetli mu się komunikat o treści: wypełnij wszystkie pola.
// Dane, które wcześniej wprowadził użytkownik powinny być wypełnione
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Miasto i Wiek</title>
</head>
<body>
    <h4>Formularz</h4>
    <form name="form_ex" action="./ex_1_data.php" method="get">
        <?php
            $city = "<input type=\"text\" name=\"city\"";
            if (!empty($_GET['city'])) {
                $city .=" value=\"$_GET[city]\">";
            }else {
                $city .= " placeholder=\"Miasto\">";
            }
            echo $city;

            $age = "<input type=\"number\" name=\"age\"";
            if (!empty($_GET['age'])) {
                $age .=" value=\"$_GET[age]\">";
            }else {
                $age .= " placeholder=\"Wiek\">";
            }
            echo $age;
        ?>
    <input type="submit" value="Wyślij dane">
</body>
</html>