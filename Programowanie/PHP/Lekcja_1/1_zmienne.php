<?php
    $name = 'Jan';
    echo'Test';
    echo'Test<br>';
    echo "Imie: $name<br>";
    //konkatenacja
    $name = 'Jan'.' Kowalski';
    echo "Imie: $name<br>";

    //dodawanie
    $add = 2 + 3;
    echo "$add<br>";

    //typy danych
    //boolen

    $prawda = true;
    echo $prawda; //wartość true to 1

    $fałsz = false;
    echo "$fałsz<br>"; //false nic nie wyświetli

    //integer
    $bin = 0b1101; //13
    $oct = 01101;
    $dec = 13;
    $hex = 0xA1;
    echo "$bin<br>";
    echo "$oct<br>";
    echo "$dec<br>";
    echo "$hex<br>";
    //interpolacja
    echo $hex, '<hr>';

    echo 'a'.'b'.'c'; //wolniejszy sposób a dodać b dodać c
    echo 'a','b','c'; //wyświetl a wyświetl b wyświetl c

    //składnia heredoc

    $name = "Paulina";
    echo <<<LABEL
        <br>Imię:$name
LABEL;

    $imie = "Paulina";
    $nazwisko = "Gierszewska";
    $miejscowosc = "Złotów";
    $urodzenia = "Piła";
    echo <<<DANE
        <br><br><hr>
        <u>Dane użytkownika</u>
        <br>Imię i Nazwisko: $imie $nazwisko
        <br>Miejscowość: $miejscowosc
        <br>Miejsce urodzenia: $urodzenia
DANE;

?>