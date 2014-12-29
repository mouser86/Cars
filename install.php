<?php

    /*
     * Include the file
     */
    require "RoadTaxDataTemporaryRegistry.php";

    /*
     * Start the session
     */
    session_start();


    RoadTaxDataTemporaryRegistry::store(json_decode($_POST['road-tax_data'], true));

