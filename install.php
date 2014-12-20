<?php

    header('Content-Type: application/json');

    $data = json_decode($_POST['data']);

    var_dump($data[0]);