<?php

    class VehicleOwner
    {
        /**
         * @var PassengerCar $vehicle The vehicle of the owner of the vehicle
         */
        private $vehicleType;

        /**
         * @var int The province the vehicle owner is living in
         */
        private $province;

        /**
         * Instantiates a new vehicle owner
         *
         * @param \VehicleType $vehicleType
         * @param int          $province
         *
         */
        public function __construct (VehicleType $vehicleType, $province) {
            $this->vehicleType = $vehicleType;
            $this->province    = $province;
        }

        /**
         * @return \VehicleType The vehicle of the owner of the vehicle
         */
        public function getVehicleType () {
            return $this->$vehicleType;
        }

        /**
         * @return string The province the vehicle owner is living in
         */
        public function getProvince () {
            return $this->province;
        }
    }