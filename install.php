<?php

    header('Content-Type: application/json');

    $personen_auto = $_POST['personen_auto'];
    $kampeer_auto  = $_POST['kampeer_auto'];


    print_r(json_decode($personen_auto));
    print_r(json_decode($kampeer_auto));
