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
     * Vehicle type -> each province -> each province it's data
     */
    provinceWeightFuelPricesVehicles: {
        personen_auto: {
            noord_holland: dataNoordHolland,
            zeeland: dataZeeland
            //TODO: Add all the provinces with it's data to the personen_auto object
        },
        kampeer_auto : {
            //TODO: Add all the data, not nessecary here. You get the point.
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
     * Vehicle type -> each province -> each province it's data
     */
    weightFuelPricesData: {
        bestel_auto_personen: {
            //TODO: Add all the provinces with it's data to the personen_auto object
        }
    },

    weightQuarterPriceYearPriceData  : {
        //TODO: Add all the data, not nessecary here. You get the point.
    },
    provinceQuarterPriceYearPriceData: {
        handelaars_kenteken: {
            //TODO: Add all the data, not nessecary here. You get the point.
        },
        motoren            : {
            //TODO: Add all the data, not nessecary here. You get the point.
        }
    }
};