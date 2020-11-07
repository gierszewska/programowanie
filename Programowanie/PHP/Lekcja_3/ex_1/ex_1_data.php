<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wynik</title>
</head>
<body>
    <h4>Wynik</h4>
    <?php
        if (!empty($_GET['city'])&& !empty($_GET['age'])) {
            echo <<<T
            Miasto: $_GET[city]<br>
            Wiek: $_GET[age]<br>
            T;
        }else {
            header("location:./ex_1.php?city=$_GET[city]&age=$_GET[age]");
        }
    ?>
</body>
</html>