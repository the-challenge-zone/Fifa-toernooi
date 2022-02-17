<?php

/*
 * This file contains all functions needed for this application
 *
 */

// ============= Functions ==============================
// ========== Saving an array to a file =================
// methode: Do Purity
// @parameters: $p_
//              type: array
//              description: Has the content of the form
function saveArray($p_aArrayContent){
    // Load current content of the file
    $aDatabaseArray = readArray();
    // Count the current number of records in the (database)array
    $iNumberOfRecords = count($aDatabaseArray);
    // Add the new record to the database array
    $aDatabaseArray[$iNumberOfRecords] = $p_aArrayContent;
    // Use JSON to encode the database array into a storeable string
    $sJSONstring = json_encode($aDatabaseArray);
    // Open the file in 'write' modus
    $file = fopen('database.json','w');
    // Save the content of the JSON string into the file
    file_put_contents('database.json', $sJSONstring);
    // Close the file
    fclose($file);
    // Go back to the calling routine.
    return;
} // End of function saveArray

// ========== Read an array from a file ===================
// This function loads an array from a file.
// @parameters: none
function readArray(){
    // Open the file in 'read' modus
    $file = fopen('database.json','r');
    // Read the JSON array from the file
    $sJSONString = file_get_contents('database.json');
    // Convert to JSON array back to a PHP array
    $aReadArray = json_decode($sJSONString,TRUE);
    // Close the file again
    fclose($file);
    // Return content of $aReadArray
    return($aReadArray);
} // End function readArray

function checkpost($p_sPostinput){
    // Filter the correct posting value
    $sUnclean = filter_input(INPUT_POST, $p_sPostinput);
    // Delete unnessesary spaces from the string
    $sTrimmed = trim($sUnclean);
    // Delete all HTML tags from the string;
    $sHtmlStripped = strip_tags($sTrimmed);
    return($sHtmlStripped);
}

?>