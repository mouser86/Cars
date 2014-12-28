/**
 * @type {string} The data which is getting send to PHP
 */
var data = "";

/**
 * Parses the road tax data and stores it into the data string as JSON format
 */
function parseRoadTaxData () {
    var object = {};
    /*
     Loop through all the road tax data
     */
    for (var vehicleFormatType in roadTaxData) {
        /*
         Define all vehicle types which belong to that vehicle type format
         */
        var vehicleTypes = roadTaxData[vehicleFormatType];

        /*
         Loop through all the vehicle types
         */
        for (var vehicleType in vehicleTypes) {
            /*
             Add the vehicle data to the JSON object
             */
            object[vehicleType.toLowerCase()] = vehicleTypes[vehicleType];
        }
    }
    /*
     Parse the javascript object (converted to JSON format) into the data string.
     */
    data = JSON.stringify(object);
}

/**
 * Gets the data which is going to be send to PHP
 *
 * @returns {string} The JSON data string
 */
function getData () {
    return data;
}

/*
 Call the function to parse all data into the HTTP query string
 */
parseRoadTaxData();

/*
 Call the function to pass the whole HTTP query to PHP in seperate $_POST variables
 */
passToPHP('road-tax_data', getData());