/**
 * The character that should explode the array.
 *
 * @type {string}
 */
const EXPLODE_CHAR = "#";

/**
 * Converts an array to JSON data
 *
 * @param array The original JavaScript array
 * @returns {*}
 */
function convertToJSON(array) {
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
function explodeStringBy(string, character) {
    return string.split(character);
}

/**
 * Testing purposes.
 */
convertPersonCarData();