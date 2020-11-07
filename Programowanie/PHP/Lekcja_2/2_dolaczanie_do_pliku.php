<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wyświeltenie plików</title>
</head>
<body>
    Początek pliku
    <?php
    include '2_file.php';
    include_once '2_file.php';
    echo 'Require:';
    include '2_file.php';
    ?>
    Koniec pliku

    <hr>
    Mój zwierzak
    <?php
    include '2_file2.php';
    ?>

</body>
</html>