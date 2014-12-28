<?php

    /**
     * Storage for all road tax data
     */
    class RoadTaxDataTemporaryRegistry
    {
        /**
         * The character which gets and sets the specific $_SESSION
         */
        const SESSION_NAME = 'rtd';

        /**
         * Stores all data in a session
         *
         * @param $data array The data which is getting stored
         */
        public static function store ($data) {
            $_SESSION[self::SESSION_NAME] = $data;
        }

        /**
         * Gets the whole storage which has just been parsed
         *
         * @param string $vehicle
         *
         * @return array
         */
        public static function getStorageByVehicle ($vehicle) {
            return $_SESSION[self::SESSION_NAME]["$vehicle"];
        }
    }