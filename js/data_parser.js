/*
 Loop through all the specific vehicle types inside the provinceWeightFuelPricesData object
 */
for (var vehicleType in roadTaxData.provinceWeightFuelPricesData) {
    /*
     Where the data is getting stored for each vehicle type
     */
    var data = {},
    /*
     Every province with its data contained in the vehicle type
     */
        provinces = roadTaxData.provinceWeightFuelPricesData[vehicleType];

    /*
     Loop through all province's with its data in the specific vehicle type
     */
    for (var province in provinces) {
        /*
         Define each province data
         */
        var provinceData = provinces[province];
        /*
         Add the province to the object as an key
         */
        data[province] = [];
        /*
         Loop through the data which belongs to every province
         */
        for (var provinceDataIndex = 0; provinceDataIndex < provinceData.length; provinceDataIndex++) {

            /*
             Add the province data to the array
             */
            data[province].push(provinceData[provinceDataIndex]);
        }
        console.log('Parsed a the province: ' + province + " from the vehicle type " + vehicleType);
    }
    console.log('Parsed the vehicle type: ' + vehicleType);
    console.log(data);
    //passToPHP(vehicleType JSON.stringify(data));
}