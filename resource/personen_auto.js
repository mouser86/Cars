/**
 * Created by Bas on 19-12-2014.
 */

/**
 *
 * @type {{noord_holland: (dataNoordHolland|*)}}
 */
var provincesWithData = {
    noord_holland: dataNoordHolland
};


function generatePersonCarData() {
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
            var item = (provinceData[row].split(EXPLODE_CHAR));

            /*
             Add the province name to the array
             */
            item.splice(1, 0, province);

            /*
             Convert it all to JSON
             */
            convertToJSON(item);
        }
    }
}