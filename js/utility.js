/**
 * The PHP file which receives the data
 *
 * @type {string} The php filename
 */
const INSTALL_FILE = "install.php";

/**
 * Passes roadTaxData to the php install file which could be getData with the $_POST operator
 */
function passToPHP (paramName, data) {
    var httpc = new XMLHttpRequest(); // simplified for clarity"
    httpc.open("POST", INSTALL_FILE, true); // sending as POST
    httpc.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    httpc.send(paramName + "=" + data);
}