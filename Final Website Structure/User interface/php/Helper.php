<?php
function connectDb(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Kirkwood_Survey";

    // Create connection
    return $conn = new mysqli($servername, $username, $password, $dbname);
}
function runQuary($quary){
    

    // Create connection
    $conn = connectDb();
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
} 

if ($conn->query($quary) === TRUE) {
    echo "New record created successfully";
    return true;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    return false;
}

$conn->close();
}

function insert_graduate($newgraduate){
        $sql = "CALL sp_insert_into_graduate_table('$newgraduate->k_number','$newgraduate->email','$newgraduate->first_name','$newgraduate->middle_name','$newgraduate->last_name') ;";
        runQuary($sql);
    return true;
}
function getInfor($SQLQUary){
    
}
?>