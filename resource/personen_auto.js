/**
 * A placeholder to know which province is part of which data array
 *
 * @type {{noord_holland: (dataNoordHolland|*)}}
 */
var provincesWithData = {
    noord_holland: dataNoordHolland
};

/**
 * Converts the original JS array's to JSON arrays based on what data is available
 */
function convertPersonCarData () {
    /*
     Loop through all the provinces with it's data
     */
    for (var province in provincesWithData) {

        /*
         Get the province data
         */
        var provinceData = provincesWithData[province];

        /*
         Loop through all the rows inside the province data
         */
        for (var row = 0; row < provinceData.length; row++) {

            /*
             Explode the row by the # character and convert it back into an array
             */
            var item = explodeStringBy(provinceData[row], EXPLODE_CHAR);

            /*
             Add the province name to the array
             */
            item.splice(0, 0, province);

            /*
             Convert it all to JSON
             */
            console.log(convertToJSON(item));
        }
    }
}