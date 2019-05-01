<?php
require('graduate.php');
require('form_info.php');
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Kirkwood_Survey";

   
     $conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "CALL SP_get_form_information()";
        $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        $count = 0;
        while($row = mysqli_fetch_assoc($result)) {
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
                , $row['latitude']
                , $row['longitude']
            );
           $count++; 
        }
    } else {
        
    }
    
    $conn->close();
?>