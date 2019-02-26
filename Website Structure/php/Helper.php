
<?php
/**
 * Author: Md Touhidul Islam
 * Date: 02/25/2019
 * Discription: 
 */
class graduate{
    private $k_number;
    private $first_name;
    private $last_name;
    private $email;
    /**
     * This is the main constructure of graduate class
     *
     * @param [type] $k_number
     * @param [type] $first_name
     * @param [type] $last_name
     * @param [type] $email
     */
    function __construct($k_number,$first_name,$last_name,$email) {
        $this->$k_number = $k_number;
        $this->$first_name = $first_name;
        $this->$last_name = $last_name;
        $this->$email = $email;
    }

    

    /**
     * Get the value of k_number
     */ 
    public function getK_number()
    {
        return $this->k_number;
    }

    /**
     * Set the value of k_number
     *
     * @return  self
     */ 
    public function setK_number($k_number)
    {
        $this->k_number = $k_number;

        return $this;
    }

    /**
     * Get the value of first_name
     */ 
    public function getFirst_name()
    {
        return $this->first_name;
    }

    /**
     * Set the value of first_name
     *
     * @return  self
     */ 
    public function setFirst_name($first_name)
    {
        $this->first_name = $first_name;

        return $this;
    }

    /**
     * Get the value of last_name
     */ 
    public function getLast_name()
    {
        return $this->last_name;
    }

    /**
     * Set the value of last_name
     *
     * @return  self
     */ 
    public function setLast_name($last_name)
    {
        $this->last_name = $last_name;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }
}
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

    /**
     * This is the constructord of form_info class
     *
     * @param [type] $graduate_year
     * @param [type] $salary
     * @param [type] $employment_position
     * @param [type] $program_name
     * @param [type] $employer_name
     * @param [type] $continue_edu
     */
    function __construct($graduate_year,$salary,$employment_position,$program_name,$employer_name,$continue_edu){
        $this->graduate_year= $graduate_year;
        $this->graduate = "null";
        $this->salary = $salary;
        $this->employment_position = $employment_position;
        $this->program_name = $program_name;
        $this->employer_name = $employer_name;
        $this->continue_edu = $continue_edu;

        $this->location_id = "null";
        $this->submission_date = "null";
        $this->submitted = "null";
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
}

?>