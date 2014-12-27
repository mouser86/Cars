<?php

    class Car
    {

        /**
         * @var string $model The car model
         */
        private $model;

        /**
         * @var int $make The year the car was build in
         */
        private $make;

        /**
         * @var int $fuelType The car's fuel type
         */
        private $fuelType;

        /**
         * @var float $weight The weight of the car
         */
        private $weight;

        /**
         * @var float $price The price of the car
         */
        private $price;

        /**
         * Instantiates a new car based on it's model, make year, fuel type, weight and price
         *
         * @param string $model    The car model
         * @param int    $make     The year the car was build
         * @param int    $fuelType The car's fuel type
         * @param float  $weight   The weight of the car
         * @param float  $price    The price of the car
         */
        public function __construct ($model, $make, $fuelType, $weight, $price) {
            $this->model    = $model;
            $this->make     = $make;
            $this->fuelType = $fuelType;
            $this->weight   = $weight;
            $this->price    = $price;
        }

        /**
         * @return string The car model
         */
        public function getModel () {
            return $this->model;
        }

        /**
         * @return int The year the car was built in
         */
        public function getMake () {
            return $this->make;
        }

        /**
         * @return int The car's fuel type
         */
        public function getFuelType () {
            return $this->fuelType;
        }

        /**
         * @return float The weight of the car
         */
        public function getWeight () {
            return $this->weight;
        }

        /**
         * @return float The price of the car
         */
        public function getPrice () {
            return $this->price;
        }
    }