/**
 * @type {string} The HTTP query which is getting send to PHP
 */
var httpQuery = "";

/**
 * Parses the road tax data (converted to JSON format) into the HTTP query
 */
function parseRoadTaxData () {
    /*
     Loop through all the road tax data
     */
    for (var vehicleFormatType in roadTaxData) {
        /*
         Define every vehicle type inside this vehicle type format
         */
        var vehicleTypes = roadTaxData[vehicleFormatType];

        /*
         Loop through the vehicle types
         */
        for (var vehicleType in vehicleTypes) {
            /*
             Add the vehicle type with it's data to the HTTP query
             */
            updateHTTPQuery(vehicleType, JSON.stringify(vehicleTypes[vehicleType]));
        }
    }
    /*
     Remove the & character from the end of the HTTP query string
     */
    trimHTTPQuery();
}

/**
 * Adds data to the HTTP query string
 *
 * @param parameterName The parameter name of the HTTP query which is getting added to the HTTP query string
 * @param value The value of the parameter name which is getting to the HTTP query string
 */
function updateHTTPQuery (parameterName, value) {
    httpQuery += (parameterName + "=" + value + "&");
}

/**
 * Removes the "&" character from the end of the HTTP query string
 */
function trimHTTPQuery () {
    httpQuery = httpQuery.replace(/&+$/, "");
}

/**
 * Gets the HTTP query string
 *
 * @returns {string} The HTTP query string
 */
function getHTTPQuery () {
    return httpQuery;
}

/*
 Call the function to parse all data into the HTTP query string
 */
parseRoadTaxData();

/*
 Call the function to pass the whole HTTP query to PHP in seperate $_POST variables
 */
passToPHP(getHTTPQuery());