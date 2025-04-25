<?php
    include 'person.php';
    include 'licences.php';
    include 'licenceA.php';
    include 'licenceB.php';
    include 'licenceC.php';
    include 'student.php';

    $student = new student();
    $licenceA = new licenceA(227500);
    $licenceB = new licenceB(273900);
    $licenceC = new licenceC(273900);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4. Registro en un Instituto de Conducción</title>
</head>
<body>
    <?php
        echo "<h1>Student:</h1>";
        echo "Name: " . $student->getName() . " " . $student->getLastName() . "<br>";
        echo "Identity: " . $student->getIdentifity() . "<br>";
        echo "Address: " . $student->getAddress() . "<br>";
        echo "Telephone: " . $student->getTelephone() . "<br>";
        echo "RH: ". $student->getRh() . "<br>";
        echo "License: " . $student->getLicense() . "<br>";

        echo "<h1>Licences:</h1>";
        echo $licenceA->getName() . ": " . number_format($licenceA->calculateValue(), "0", ",", ".") . "<br>";
        echo $licenceB->getName() . ": " . number_format($licenceB->calculateValue(), "0", ",", ".") . "<br>";
        echo $licenceC->getName() . ": " . number_format($licenceC->calculateValue(), "0", ",", ".") . "<br>";
    ?>
</body>
</html>