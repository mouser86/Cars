<?php


    class RoadTaxDataFormatConverter
    {
        const EXPLODE_CHAR = "#";


        public function __construct () {

        }

        public function convert ($data) {
            return $data = implode(self::EXPLODE_CHAR, $data);
        }
    }