<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dane</title>
</head>

<body>
    <h4>Dane pobrane z formularza</h4>
    <?php
    //echo '<pre>',print_r($_GET), '</pre>'; , wysiwetla sie 1 na końcu
    /*echo '<pre>';
    print_r($_GET);
    echo '</pre>';
    */

    echo <<<T
    Imię: $_GET[name] <br>
    Nazwisko: $_GET[surname]<br>
    Hasło: {$_GET['pass']}
    T;

    //dodaj pole imie oraz kod pocztowy (składa się z dwóch pól, pierwsze ma rozmiar 2 , drugie 3)

    ?>

</body>

</html>