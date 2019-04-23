<?php
require('graduate.php');
function insert_graduate_info($form_info){ 
            $newsql = "CALL sp_insert_graduate_info('$form_info->graduate_id','$form_info->graduate_year','$form_info->salary','$form_info->employment_position' ,'$form_info->city','$form_info->zip_code','$form_info->state','$form_info->country','$form_info->program_name','$form_info->employer_name','$form_info->continue_edu','$form_info->work_satatus');";
            
     
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
   function getGraduateInfo($graduate_id){
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

        $sql = "SELECT `graduate_id`, `form_id`, `k_number`, `first_name`, `middle_name`, `last_name`, `email` FROM graduate WHERE graduate_id = '$graduate_id' LIMIT 1";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $graduate =new graduate($row['k_number'],$row['first_name'],$row['middle_name'],$row['last_name'],$row['email'],$row['graduate_id']);
            }
        } else {
            echo "0 results";
        }
        $conn->close();
        return $graduate;
    }
  

?>