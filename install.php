<?php

    header('Content-Type: application/json');

    $personen_auto = json_decode($_POST['personen_auto'], true);
    $kampeer_auto  = json_decode($_POST['kampeer_auto'], true);
    //... All the vehicle types


    print_r($personen_auto);
    print_r($kampeer_auto);
    //... Testing
