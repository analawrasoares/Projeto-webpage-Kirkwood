
<?php
/**
 * Author: Md Touhidul Islam
 * Date: 02/25/2019
 * Discription: 
 */
require('Helper.php');
class form_info{
    private $graduate_year;
    private $graduate;
    private $salary;
    private $employment_position;
    
    private $location_id;
    private $submission_date;
    private $submitted;
    
    private $program_name;
    private $employer_name;
    private $continue_edu;
    private $country;
    private $state;
    private $city;
    private $zip_code;
    private $country_code;

    /**
     * Undocumented function
     *
     * @param [type] $graduate_year
     * @param [type] $salary
     * @param [type] $employment_position
     * @param [type] $program_name
     * @param [type] $employer_name
     * @param [type] $continue_edu
     * @param [type] $country
     * @param [type] $state
     * @param [type] $city
     * @param [type] $zip_code
     */
    function __construct($graduate_year,$salary,$employment_position,$program_name,$employer_name,$continue_edu,$country,$state,$city,$zip_code){
        $this->graduate_year= $graduate_year;
        $this->graduate_id = "";
        $this->salary = $salary;
        $this->employment_position = $employment_position;
        $this->program_name = $program_name;
        $this->employer_name = $employer_name;
        $this->continue_edu = $continue_edu;

        $this->location_id = "";
        $this->submission_date = "";
        $this->submitted = "";

        $this->country = $country;
        $this->state = $state;;
        $this->city = $city;
        $this->zip_code = $zip_code;
        $this->country_code = "";
    }

    public function insert(){
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
            $date = date("Ymd");

            $sql = "INSERT IGNORE INTO State (state_name)VALUES ('$this->state') ;";
            $sql .= "INSERT IGNORE INTO Location (city, zip, state_name , country_code)VALUES ('$this->city', '$this->zip_code', (SELECT state_name FROM state WHERE state_name = '$this->state' ), (SELECT country_code FROM country WHERE country_code = '$this->country' ));";
            $sql .= "INSERT IGNORE INTO program (program_name)VALUES ('$this->program_name');";
            

            if ($conn->multi_query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $newsql = "INSERT INTO Form (graduate_id, graduate_year, salary_range, employment_position, location_id, submission_date, program_name, employer_name, continue_edu, have_job)VALUES ('$this->graduate_id' , '$this->graduate_year' , '$this->salary' , '$this->employment_position' , (SELECT location_id FROM Location WHERE zip = '$this->zip_code' and city='$this->city'),'$date','$this->program_name','$this->employer_name','$this->continue_edu',true);";
            $conn->close();
            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->query($newsql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $newsql . "<br>" . $conn->error;
            }


            $conn->close();
    }
    /**
     * Get the value of graduate_year
     */ 
    public function getGraduate_year()
    {
        return $this->graduate_year;
    }

    /**
     * Set the value of graduate_year
     *
     * @return  self
     */ 
    public function setGraduate_year($graduate_year)
    {
        $this->graduate_year = $graduate_year;

        return $this;
    }

    /**
     * Get the value of graduate
     */ 
    public function getGraduate()
    {
        return $this->graduate;
    }

    /**
     * Set the value of graduate
     *
     * @return  self
     */ 
    public function setGraduate($graduate)
    {
        $this->graduate = $graduate;

        return $this;
    }

    /**
     * Get the value of salary
     */ 
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * Set the value of salary
     *
     * @return  self
     */ 
    public function setSalary($salary)
    {
        $this->salary = $salary;

        return $this;
    }

    /**
     * Get the value of employment_position
     */ 
    public function getEmployment_position()
    {
        return $this->employment_position;
    }

    /**
     * Set the value of employment_position
     *
     * @return  self
     */ 
    public function setEmployment_position($employment_position)
    {
        $this->employment_position = $employment_position;

        return $this;
    }

    /**
     * Get the value of program_name
     */ 
    public function getProgram_name()
    {
        return $this->program_name;
    }

    /**
     * Set the value of program_name
     *
     * @return  self
     */ 
    public function setProgram_name($program_name)
    {
        $this->program_name = $program_name;

        return $this;
    }

    /**
     * Get the value of employer_name
     */ 
    public function getEmployer_name()
    {
        return $this->employer_name;
    }

    /**
     * Set the value of employer_name
     *
     * @return  self
     */ 
    public function setEmployer_name($employer_name)
    {
        $this->employer_name = $employer_name;

        return $this;
    }

    /**
     * Get the value of continue_edu
     */ 
    public function getContinue_edu()
    {
        return $this->continue_edu;
    }

    /**
     * Set the value of continue_edu
     *
     * @return  self
     */ 
    public function setContinue_edu($continue_edu)
    {
        $this->continue_edu = $continue_edu;

        return $this;
    }

    /**
     * Get the value of city
     */ 
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set the value of city
     *
     * @return  self
     */ 
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get the value of zip_code
     */ 
    public function getZip_code()
    {
        return $this->zip_code;
    }

    /**
     * Set the value of zip_code
     *
     * @return  self
     */ 
    public function setZip_code($zip_code)
    {
        $this->zip_code = $zip_code;

        return $this;
    }

    /**
     * Get the value of country
     */ 
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set the value of country
     *
     * @return  self
     */ 
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get the value of state
     */ 
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set the value of state
     *
     * @return  self
     */ 
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }
}

?>