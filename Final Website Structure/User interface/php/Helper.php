<?php
/*function insert_db($user_info){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Kirkwood_Survey";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

$sql = "INSERT INTO State (state_name)VALUES ('$user_info.getState');";
//$sql .= "INSERT INTO Country (country_code,country_name)VALUES ('US','USA');";
//$sql .= "INSERT INTO Location (city, zip, state_name , country_code)VALUES ('cedar Rapids', '2344', 'Iowa', 'US');";
//$sql .= "INSERT INTO Program (program_name)VALUES ('jjjh');";
//$sql .= "INSERT INTO Form (graduate_id, graduate_year, salary_range, employment_position, location_id, submission_date, program_name, employer_name, continue_edu, have_job)VALUES ('232' , '2019' , '2000' , 'asjdlkfj' , (SELECT location_idFROM LocationWHERE zip = '2344'),'495894085904','jjjh','adsfdsa',true,true);";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
*/

?>