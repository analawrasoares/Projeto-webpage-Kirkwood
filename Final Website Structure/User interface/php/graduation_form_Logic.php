<?php
require('Helper.php');
function insert_graduate_info($form_info){ 
            $newsql = "CALL sp_insert_graduate_info('$form_info->graduate_id','$form_info->graduate_year','$form_info->salary','$form_info->employment_position' ,'$form_info->city','$form_info->zip_code','$form_info->state','$form_info->country','$form_info->program_name','$form_info->employer_name','$form_info->continue_edu',true);";
            
     
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
            
            if ($conn->query($newsql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $newsql . "<br>" . $conn->error;
            }


            $conn->close();
    }
 function insert_graduate($Graduate){
     
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
     
        $sql = "INSERT IGNORE INTO graduate (k_number,first_name,middle_name,last_name,email)VALUES ('$Graduate->k_number','$Graduate->first_name','$Graduate->middle_name','$Graduate->last_name','$Graduate->email') ;";
        if ($conn->multi_query($sql) === TRUE) {
                echo "New record created successfully";
            return true;
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
                return false;
            }
        $conn->close();
    }
?>