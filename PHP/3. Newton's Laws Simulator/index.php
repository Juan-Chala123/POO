<?php
    include 'forces.php';
    include 'inertia.php';
    include 'force.php';
    include 'action.php';

    $inertia = new inertia(5);
    $force = new force(10, 4);
    $action = new action(5, 0);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3. Newton's Laws Simulator</title>
</head>
<body>
    <h1>Leyes de Newton</h1>
    <?php
        echo $inertia->getNameSpanish() . ": " . $inertia->calculateForce() . "<br><br>";
        echo $force->getNameSpanish() . ": <br>" . $force->getMass() . " x " . $force->getAcceleration() . ": " . $force->calculateForce() . "<br><br>";
        echo $action->getNameSpanish() . ": " . $action->calculateForce() . "<br>" . "Action: " . $action->getAction() . "<br>" . "Reaction: " . $action->getReaction() . "<br>";
    ?>
</body>
</html>