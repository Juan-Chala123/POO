<?php
    include 'salary.php';
    include 'discount.php';
    include 'extras.php';

    $discount = new discount(0.04, 0.04, 0.20, 1000000);
    $extras = new extras(5, 6, 7, 1000000);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=}, initial-scale=1.0">
    <title>1. Calculating an Employee's Salary</title>
</head>
<body>
    <?php
        echo "<h1>Employee Salary</h1>";
        echo "Name: " . $discount->getName() . " " . $discount->getLastName() . "<br>";
        echo "Identification: " . $discount->getIdentifity() . "<br>";
        echo "Salary Base: " . $discount->getSalario() . "<br>";
        $discount->salarios();
        echo "Salary with Bonus: " . $discount->getSalario() . "<br>";
        echo "Discount: ". $discount->payTotal() . "<br>";
        echo "Extras: " . $extras->payTotal() . "<br>";
        echo "Total Salary: " . ($discount->getSalario() + $extras->payTotal() - $discount->payTotal()) . "<br>";
    ?>
</body>
</html>