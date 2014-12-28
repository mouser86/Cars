<?php


    class CarRunningCostCalculator implements RunningCostCalculator
    {
        /**
         * @var \PassengerCar The vehicle
         */
        private $car;

        /**
         * @var \VehicleOwner The owner of the vehicle
         */
        private $carOwner;

        /**
         * Instantiates a new calculator for a vehicle's running costs
         *
         * @param \PassengerCar $car
         * @param \VehicleOwner $carOwner
         */
        public function __construct (PassengerCar $car, VehicleOwner $carOwner) {
            $this->car      = $car;
            $this->carOwner = $carOwner;
        }

        /**
         * Calculates the monthly costs of the vehicle insurance
         *
         * @return float
         */
        public function calculateInsurancePrice () {
            // TODO: Implement calculateInsurancePrice() method.

        }

        /**
         * Calculates the monthly costs of the fuel price based by the fuel type of the vehicle (which gets the price) and
         * how much the driver drives
         *
         * @return float
         */
        public function calculateFuelPrice () {
            // TODO: Implement calculateFuelPrice() method.
        }

        /**
         * Calculates the monthly costs of the road tax based on the weight of the vehicle, the fuel type of the vehicle and
         * vehicle owner is living in
         *
         * @return float
         */
        public function calculateRoadTax () {
            // TODO: Implement calculateRoadTax() method.
        }
    }