<?php


    interface RunningCostCalculator
    {
        /**
         * Calculates the monthly costs of the vehicle insurance
         *
         * @return float
         */
        public function calculateInsurancePrice ();

        /**
         * Calculates the monthly costs of the fuel price based by the fuel type of the vehicle (which gets the price) and
         * how much the driver drives
         *
         * @return float
         */
        public function calculateFuelPrice ();

        /**
         * Calculates the monthly costs of the road tax based on the weight of the vehicle, the fuel type of the vehicle and
         * vehicle owner is living in
         *
         * @return float
         */
        public function calculateRoadTax ();

    }