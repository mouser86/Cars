/**
 * The PHP file which receives the data
 *
 * @type {string} The php filename
 */
const INSTALL_FILE = "install.php";

/**
 * Passes roadTaxData to the php install file which could be get with the $_POST operator
 */
function passToPHP (paramName, value) {
    var httpc = new XMLHttpRequest(); // simplified for clarity"
    httpc.open("POST", INSTALL_FILE, true); // sending as POST

    httpc.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    /*
     Test purposes
     */
    httpc.onreadystatechange = function () { //Call a function when the state changes.
        if (httpc.readyState == 4 && httpc.status == 200) { // complete and no errors
            console.log(httpc.responseText); // some processing here, or whatever you want to do with the response
        }
    };
    httpc.send(paramName + "=" + value);
}