
<?php
/**
 * Author: Md Touhidul Islam
 * Date: 02/25/2019
 * Discription: 
 */
class form_info{
    public $graduate_year;
    public $graduate;
    public $salary;
    public $employment_position;
    
    public $location_id;
    public $submission_date;
    public $submitted;
    
    public $program_name;
    public $employer_name;
    public $continue_edu;
    public $country;
    public $state;
    public $city;
    public $zip_code;
    public $country_code;
    public $work_satatus;
    public $latitude;
    public $longitude;

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
    function __construct($graduate_year,$salary,$employment_position,$program_name,$employer_name,$continue_edu,$country,$state,$city,$zip_code,$work_satatus,$graduate_id,$submission_date = "",$latitude,$longitude){
        $this->graduate_year= $graduate_year;
        $this->graduate_id = $graduate_id;
        $this->salary = $salary;
        $this->employment_position = $employment_position;
        $this->program_name = $program_name;
        $this->employer_name = $employer_name;
        $this->continue_edu = $continue_edu;

        $this->location_id = "";
        $this->submission_date = $submission_date;
        $this->submitted = "";

        $this->country = $country;
        $this->state = $state;;
        $this->city = $city;
        $this->zip_code = $zip_code;
        $this->country_code = "";
        $this->work_satatus = $work_satatus;
        $this->latitude = $latitude;
        $this->longitude =$longitude;
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

    /**
     * Get the value of work_satatus
     */ 
    public function getWork_satatus()
    {
        return $this->work_satatus;
    }

    /**
     * Set the value of work_satatus
     *
     * @return  self
     */ 
    public function setWork_satatus($work_satatus)
    {
        $this->work_satatus = $work_satatus;

        return $this;
    }

    /**
     * Get the value of country_code
     */ 
    public function getCountry_code()
    {
        return $this->country_code;
    }

    /**
     * Set the value of country_code
     *
     * @return  self
     */ 
    public function setCountry_code($country_code)
    {
        $this->country_code = $country_code;

        return $this;
    }

  

    /**
     * Get the value of submission_date
     */ 
    public function getSubmission_date()
    {
        return $this->submission_date;
    }

    /**
     * Set the value of submission_date
     *
     * @return  self
     */ 
    public function setSubmission_date($submission_date)
    {
        $this->submission_date = $submission_date;

        return $this;
    }
}

?>