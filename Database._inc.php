<?php
function connectToDB(){
    $Hostname =         "127.0.0.1"; // the adres for the host adress
    $DBname =            ""; // the  database Name
    $Username=            ""; // the username for the user
    $Password=   ""; //the Generated password

    $oDbConnection= new PDO("mysql:host=$Hostname; dbname=$DBname", $Username, $Password);
    // Create the actual connection
    $oDbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //$ODbConnection(Sql);
    //
    return($oDbConnection);
}// close function
// Methode: Execute a SQL query and return the fetched data in an array
// @parameters: $sPdoQue type: string, scope: member
function PdoSqlReturnArray($sPdoQuery){
    $DBconnect = connectToDB(); // Connect to the MySQL database
    $statement = $DBconnect->prepare($sPdoQuery); // Make the query with the parameter(s)
    $aResult = $statement->execute(); // Execute the query and put the results in the $aResult
    $arr_rows = $statement->fetchAll(PDO::FETCH_ASSOC); // Put all fetched data into a nested array
    $DBconnect=NULL; // Close the connection
    return($arr_rows); // Return the array data back to the calling method
}

// Methode: Execute a SQL query and return a TRUE
// @parameters: $sPdoQue type: string, scope: member
function PdoSqlReturnTrue($sPdoQuery){
    $DBconnect = connectToDB(); // Connect to the MySQL database
    $statement = $DBconnect->prepare($sPdoQuery); // Make the query with the parameter
    $result = $statement->execute(); // Put the results in the $result (look into this epdoExeption)
    $DBconnect=NULL; // Close the connection
    return(TRUE); // Return to the calling method
}