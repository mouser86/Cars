<?php


    interface RunningCostCalculator
    {
        /**
         * Calculates the monthly costs of the car insurance
         *
         * @return float
         */
        public function calculateInsurancePrice ();

        /**
         * Calculates the monthly costs of the fuel price based by the fuel type of the car (which gets the price) and
         * how much the driver drives
         *
         * @return float
         */
        public function calculateFuelPrice ();

        /**
         * Calculates the monthly costs of the road tax based on the weight of the car, the fuel type of the car and
         * car owner is living in
         *
         * @return float
         */
        public function calculateRoadTax ();

    }