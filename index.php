<?php

    $myCar                  = new Car("BMW epic", 1999, FuelType::GAS, 209, 900.99);
    $carOwner               = new CarOwner("Bas van Driel", "Zeeland");
    $runningCostsCalculator = new CarRunningCostCalculator($myCar, $carOwner);

    echo $runningCostsCalculator->calculateFuelPrice();