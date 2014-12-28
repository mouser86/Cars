<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <script src="data/js-files/data_personen_auto.js" type="application/javascript"></script>
    <script src="js/road_tax_data_mapper.js" type="application/javascript"></script>
    <script src="js/utility.js" type="application/javascript"></script>
    <script src="js/data_parser.js" type="application/javascript"></script>
</head>
<body>

<?php

    require "RoadTaxDataTemporaryRegistry.php";
    require "vehicle/VehicleType.php";
    require "vehicle/owner/VehicleOwner.php";
    require "vehicle/PassengerCar.php";
    require "vehicle/calculator/RunningCostCalculator.php";
    require "vehicle/calculator/impl/CarRunningCostCalculator.php";
    require "vehicle/FuelType.php";
    require "vehicle/Province.php";

    /*
     * Start the session to retrieve all the road tax data
     */
    session_start();

    $myCar    = new PassengerCar(1999, FuelType::BENZINE, 209, 900.99);
    $carOwner = new VehicleOwner($myCar, Province::ZEELAND);


    $vehicleData = RoadTaxDataTemporaryRegistry::getStorageByVehicle($myCar)['noord_holland'];

    for ($vehicleDataIndex = 0; $vehicleDataIndex < count($vehicleData); $vehicleDataIndex++) {
        //....
    }

    //session_destroy();

?>
</body>
</html>

