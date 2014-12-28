<?php

    /**
     * Represents a Passenger Car object (as a value object)
     */
    class PassengerCar extends VehicleType
    {

        /**
         * @var int $make The year the vehicle was build in
         */
        private $make;

        /**
         * @var int $fuelType The vehicle's fuel type
         */
        private $fuelType;

        /**
         * @var float $weight The weight of the vehicle
         */
        private $weight;

        /**
         * Instantiates a new vehicle based on it's model, make year, fuel type, weight and price
         *
         * @param int   $make     The year the vehicle was build
         * @param int   $fuelType The vehicle's fuel type
         * @param float $weight   The weight of the vehicle
         */
        public function __construct ($make, $fuelType, $weight) {
            $this->make     = $make;
            $this->fuelType = $fuelType;
            $this->weight   = $weight;
        }

        /**
         * @return int The year the vehicle was built in
         */
        public function getMake () {
            return $this->make;
        }

        /**
         * @return int The vehicle's fuel type
         */
        public function getFuelType () {
            return $this->fuelType;
        }

        /**
         * @return float The weight of the vehicle
         */
        public function getWeight () {
            return $this->weight;
        }
    }