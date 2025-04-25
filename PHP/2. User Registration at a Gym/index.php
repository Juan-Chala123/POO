<?php
    include 'calculateTotal.php';
    include 'essential.php';
    include 'half.php';
    include 'premium.php';
    include 'person.php';
    include 'cliente.php';

    $essential = new Essential(10);
    $half = new Half(10);
    $premium = new Premium(10);

    $cliente = new Cliente("Juan", "Chala", 56.6, 1.70);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2. User Registration at a Gym</title>
</head>
<body>
    <h1>Gym</h1>
    <?php
        echo "Essential: $". number_format($essential->calculate(), 0, ',', '.') . "<br>";
        echo "La Hora cuesta: $" . number_format($essential->getValue(), 0, ',', '.') . "<br><br>";

        echo "Half: $" . number_format($half->calculate(), 0, ',', '.') . "<br>";
        echo "Guided Classes: $" . number_format($half->getGuidedClasses(), 0, ',', '.') . "<br>";
        echo "La Hora cuesta: $" . number_format($half->getValue(), 0, ',', '.') . "<br><br>";

        echo "Premium: $" . number_format($premium->calculate(), 0, ',', '.') . "<br>";
        echo "Coach: $" . number_format($premium->getCoach(), 0, ',', '.') . "<br>";
        echo "Humid Area: $" . number_format($premium->getHumidArea(), 0, ',', '.') . "<br>";
        echo "La Hora cuesta: $" . number_format($premium->getValue(), 0, ',', '.') . "<br><br>";

        echo "Cliente: " . $cliente->getName() . " " . $cliente->getLastName() . "<br>";
        echo "Weight: " . $cliente->getWeight() . "<br>";
        echo "Stature: " . $cliente->getStature() . "<br>";
        echo "ID: " . $cliente->getIdentifity() . "<br>";
    ?>
</body>
</html>