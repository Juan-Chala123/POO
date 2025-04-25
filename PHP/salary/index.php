<?php
    include 'person.php';
    include 'coach.php';
    include 'supervisor.php';
    include 'administrador.php';

    $coach = new coach(200000, 20, 30000);
    $supervisor = new supervisor(200000, 20, 50000);
    $administrador = new administrador(200000, 20, 40000);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salary</title>
</head>
<body>
    <?php
        echo "<h1>Salary Calculation</h1>";
        echo "<h2>Coach</h2>";
        echo "Identification: " . $coach->getIdentification() . "<br>";
        echo "Name: " . $coach->getName() . "<br>";
        echo "Last Name: " . $coach->getLastName() . "<br>";
        echo "Salary: " . $coach->calculateSalary() . "<br><br>";

        echo "<h2>Administrator</h2>";
        echo "Identification: " . $administrador->getIdentification() . "<br>";
        echo "Name: " . $administrador->getName() . "<br>";
        echo "Last Name: " . $administrador->getLastName() . "<br>";
        echo "Salary: " . $administrador->calculateSalary() . "<br><br>";

        echo "<h2>Supervisor</h2>";
        echo "Identification: " . $supervisor->getIdentification() . "<br>";
        echo "Name: " . $supervisor->getName() . "<br>";
        echo "Last Name: " . $supervisor->getLastName() . "<br>";
        echo "Salary: " . $supervisor->calculateSalary() . "<br>";
    ?>
</body>
</html>