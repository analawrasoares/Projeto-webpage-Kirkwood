<?php
require('php/graduate.php');
require('php/form_info.php');
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

    $sql = "CALL SP_get_form_information()";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        $count = 0;
        while($row = $result->fetch_assoc()) {
           $graduate_info[$count]= new graduate($row['k_number'],$row['first_name'],$row['middle_name'],$row['last_name'],$row['email'],$row['graduate_id']);
            $form_info[$count] = new form_info(
                $row['graduate_year']
                , $row['salary_range']
                , $row['employment_position']
                , $row['program_name']
                , $row['employer_name']
                , $row['continue_edu']
                , $row['country_code']
                , $row['state_name']
                , $row['city']
                , $row['zip']
                , $row['have_job']
                , $row['graduate_id']
                , $row['submission_date']
            );
           $count++; 
        }
    } else {
        echo "0 results";
    }
    $conn->close();
?>