<?php

    class CarOwner
    {
        /**
         * @var Car $car The car of the owner of the car
         */
        private $car;

        /**
         * @var string The province the car owner is living in
         */
        private $province;

        /**
         * Instantiates a new car owner
         *
         * @param \Car $car The car
         * @param      $province
         */
        public function __construct (Car $car, $province) {
            $this->car      = $car;
            $this->province = $province;
        }

        /**
         * @return \Car The car of the owner of the car
         */
        public function getCar () {
            return $this->car;
        }

        /**
         * @return string The province the car owner is living in
         */
        public function getProvince () {
            return $this->province;
        }
    }