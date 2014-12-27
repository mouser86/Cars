<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <script src="data/js-files/data_personen_auto.js" type="application/javascript"></script>
    <script src="js/utility.js" type="application/javascript"></script>
    <script src="js/road_tax_data_mapper.js" type="application/javascript"></script>
    <script src="js/data_parser.js" type="application/javascript"></script>
</head>
<body>
<?php

    require "vehicle/Car.php";
    require "vehicle/owner/CarOwner.php";
    require "vehicle/calculator/RunningCostCalculator.php";
    require "vehicle/calculator/impl/CarRunningCostCalculator.php";
    require "vehicle/FuelType.php";
    require "vehicle/Province.php";

    $myCar    = new Car("BMW epic", 1999, FuelType::BENZINE, 209, 900.99);
    $carOwner = new CarOwner($myCar, Province::ZEELAND);
    $runningCostsCalculator = new CarRunningCostCalculator($myCar, $carOwner);

    echo $runningCostsCalculator->calculateFuelPrice();
?>
</body>
</html>

