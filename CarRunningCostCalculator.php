<?php


    class CarRunningCostCalculator implements RunningCostCalculator
    {
        /**
         * @var \Car The car
         */
        private $car;

        /**
         * @var \CarOwner The owner of the car
         */
        private $carOwner;

        /**
         * Instantiates a new calculator for a car's running costs
         *
         * @param \Car      $car
         * @param \CarOwner $carOwner
         */
        public function __construct (Car $car, CarOwner $carOwner) {
            $this->car      = $car;
            $this->carOwner = $carOwner;
        }

        /**
         * Calculates the monthly costs of the car insurance
         *
         * @return float
         */
        public function calculateInsurancePrice () {
            // TODO: Implement calculateInsurancePrice() method.
        }

        /**
         * Calculates the monthly costs of the fuel price based by the fuel type of the car (which gets the price) and
         * how much the driver drives
         *
         * @return float
         */
        public function calculateFuelPrice () {
            // TODO: Implement calculateFuelPrice() method.
        }

        /**
         * Calculates the monthly costs of the road tax based on the weight of the car, the fuel type of the car and
         * car owner is living in
         *
         * @return float
         */
        public function calculateRoadTax () {
            // TODO: Implement calculateRoadTax() method.
        }
    }