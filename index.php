<?php

    $myCar    = new Car("BMW epic", 1999, FuelType::BENZINE, 209, 900.99);
    $carOwner = new CarOwner("Bas van Driel", Province::ZEELAND);
    $runningCostsCalculator = new CarRunningCostCalculator($myCar, $carOwner);

    echo $runningCostsCalculator->calculateFuelPrice();