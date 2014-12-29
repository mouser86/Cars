var roadTaxData = {
    /**
     * provinceWeightFuelPricesVehicles has the required parameters:
     *
     * - Province
     * - Weight from
     * - benzine price
     * - diesel price
     * - LPG3/earth-gas price
     * - LPG/others price
     *
     * Data for provinceWeightFuelPricesVehicles is defined like:
     *
     * VehicleType type -> each province -> each province it's data
     */
    provinceWeightFuelPricesVehicles: {
        passengerCar: {
            noord_holland: dataNoordHolland
            //TODO: Add all the provinces with it's data to the passenger_car object
        },
        /*
         Camping vehicle
         */
        kampeer_auto: {

        }
    },

    /**
     * weightFuelPricesData has the required parameters:
     *
     * - Weight from
     * - benzine price
     * - diesel price
     * - LPG3/earth-gas price
     * - LPG/others price
     *
     * Data for this is defined like:
     *
     * VehicleType type -> each province -> each province it's data
     */
    weightFuelPricesData: {
        bestel_auto_personen: {
            //TODO: Add all the provinces with it's data to the passenger_car object
        }
    },

    weightQuarterPriceYearPriceData  : {
        //TODO: Add all the data, not nessecary here. You getData the point.
    },
    provinceQuarterPriceYearPriceData: {
        handelaars_kenteken: {
            //TODO: Add all the data, not nessecary here. You getData the point.
        },
        motoren            : {
            //TODO: Add all the data, not nessecary here. You getData the point.
        }
    }
};