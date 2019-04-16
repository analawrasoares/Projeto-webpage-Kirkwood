<?php
require('Helper.php');
public function insert_graduate_info(form_info Graduate){
            $conn = connect_db("Kirkwood_Survey");
            $date = date("Ymd");

            $sql = "INSERT IGNORE INTO State (state_name)VALUES ('Graduate->state') ;";
            $sql .= "INSERT IGNORE INTO Location (city, zip, state_name , country_code)VALUES ('Graduate->city', 'Graduate->zip_code', (SELECT state_name FROM state WHERE state_name = 'Graduate->state' ), (SELECT country_code FROM country WHERE country_code = 'Graduate->country' ));";
            $sql .= "INSERT IGNORE INTO program (program_name)VALUES ('Graduate->program_name');";
            

            if ($conn->multi_query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $newsql = "INSERT INTO Form (graduate_id, graduate_year, salary_range, employment_position, location_id, submission_date, program_name, employer_name, continue_edu, have_job)VALUES ('Graduate->graduate_id' , 'Graduate->graduate_year' , 'Graduate->salary' , 'Graduate->employment_position' , (SELECT location_id FROM Location WHERE zip = 'Graduate->zip_code' ),'Graduate','Graduate->program_name','Graduate->employer_name','Graduate->continue_edu',true);";
            $conn->close();
            $conn = connect_db("Kirkwood_Survey");
            if ($conn->query($newsql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $newsql . "<br>" . $conn->error;
            }


            $conn->close();
    }
public function insert_graduate(graduate Graduate){
        $conn = connect_db("Kirkwood_Survey");
        $sql = "INSERT IGNORE INTO graduate (k_number,first_name,middle_name,last_name,email)VALUES ('Graduate->k_number','Graduate->first_name','Graduate->middle_name','Graduate->last_name','Graduate->email') ;";
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