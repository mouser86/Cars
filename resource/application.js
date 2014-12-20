/**
 * The character that should explode the array.
 *
 * @type {string}
 */
const EXPLODE_CHAR = "#";

/**
 * The PHP file which installs and setups the database
 *
 * @type {string} The php filename
 */
const INSTALL_FILE = "install.php";

/**
 * Converts an array to JSON data
 *
 * @param array The original JavaScript array
 * @returns {*}
 */
function convertToJSON (array) {
    return JSON.stringify(array);
}

/**
 * Explodes a string by a specific character and converts it into an array
 *
 * @param string The string which is getting exploded
 * @param character The character which is getting used for the exploding
 *
 * @returns {Array} The returned array with all the apart values
 */
function explodeStringBy (string, character) {
    return string.split(character);
}

/**
 * Passes data to the php install file which could be get with the $_POST operator
 *
 * @param paramName The param name
 * @param data
 */
function passToPHP (paramName, data) {
    if (typeof paramName === "string" && typeof data === "string") {
        var httpc = new XMLHttpRequest(); // simplified for clarity"
        httpc.open("POST", INSTALL_FILE, true); // sending as POST

        httpc.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        /*
         Could possibly delete, just passing variables?
         */
        httpc.onreadystatechange = function () { //Call a function when the state changes.
            if (httpc.readyState == 4 && httpc.status == 200) { // complete and no errors
                alert(httpc.responseText); // some processing here, or whatever you want to do with the response
            }
        };
        httpc.send(paramName + "=" + data);
    }
}

/**
 * Testing purposes.
 *
 * TODO: Place this methods somewhere else
 */
generatePersonCarData();
passToPHP('personen_auto_data', convertToJSON(getPersonCarData));

