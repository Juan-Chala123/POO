<?php
    include 'figureGeometric.php';
    include 'circumference.php';
    include 'rectangle.php';
    include 'triangle.php';
    include 'square.php';

    $circle = new Circle(5);
    $rectangle = new Rectangle(4);
    $triangle = new Triangle(3);
    $square = new Square(2);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Areas</title>
</head>
<body>
    <h1>Areas of Geometric Figures</h1>
    <?php
        echo "Area of Circle: " . $circle->calculate() . "<br>";
        echo "Area of Rectangle: " . $rectangle->calculate() . "<br>";
        echo "Area of Triangle: " . $triangle->calculate() . "<br>";
        echo "Area of Square: " . $square->calculate() . "<br>";
    ?>
</body>
</html>