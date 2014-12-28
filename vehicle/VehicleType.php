<?php


    abstract class VehicleType
    {
        /**
         * Gets the name of the vehicle type based on the class name
         *
         * @return string
         */
        public function __toString () {
            return strtolower(get_called_class());
        }
    }