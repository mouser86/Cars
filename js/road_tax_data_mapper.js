var roadTaxData = {
    /**
     * provinceWeightFuelPricesData has the required parameters:
     *
     * - Province
     * - Weight from
     * - benzine price
     * - diesel price
     * - LPG3/earth-gas price
     * - LPG/others price
     *
     * Data for provinceWeightFuelPricesData is defined like:
     *
     * Vehicle type -> each province -> each province it's data
     */
    provinceWeightFuelPricesData: {
        personen_auto: {
            noord_holland: dataNoordHolland,
            data_zeeland: dataZeeland
            //TODO: Add all the provinces with it's data to the personen_auto object
        },
        kampeer_auto: {}
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

    weightQuarterPriceYearPriceData: {},
    provinceQuarterPriceYearPriceData: {
        handelaars_kenteken: {
            noord_holland: dataNoordHolland
        },
        motoren: {}
    }
};