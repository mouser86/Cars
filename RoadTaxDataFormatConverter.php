<?php


    class RoadTaxDataFormatConverter
    {
        const EXPLODE_CHAR = "#";

        /**
         * @var array
         */
        private $data = [];


        public function __construct (array $data) {
            $this->data = $data;
        }

        public function convert () {
            $this->data = implode(self::EXPLODE_CHAR, $this->data);
        }
    }