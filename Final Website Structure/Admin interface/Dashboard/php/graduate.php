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
    private $middle_name;
    private $graduate_id;
    /**
     * This is the main constructure of graduate class
     *
     * @param [type] $k_number
     * @param [type] $first_name
     * @param [type] $last_name
     * @param [type] $email
     */
    function __construct($k_number,$first_name,$middle_name,$last_name,$email,$graduate_id) {
        $this->k_number = $k_number;
        $this->first_name = $first_name;
        $this->middle_name = $middle_name;
        $this->last_name = $last_name;
        $this->email = $email;
        $this->graduate_id =$graduate_id;
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

    /**
     * Get the value of middle_name
     */ 
    public function getMiddle_name()
    {
        return $this->middle_name;
    }

    /**
     * Set the value of middle_name
     *
     * @return  self
     */ 
    public function setMiddle_name($middle_name)
    {
        $this->middle_name = $middle_name;

        return $this;
    }

    /**
     * Get the value of graduate_id
     */ 
    function insert_graduate(){
     
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
     
        $sql = "INSERT IGNORE INTO graduate (k_number,first_name,middle_name,last_name,email)VALUES ('$this->k_number','$this->first_name','$this->middle_name','$this->last_name','$this->email') ;";
        if ($conn->multi_query($sql) === TRUE) {
                echo "New record created successfully";
                echo "Thank you for your help";
            return true;
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
                return false;
            }
        $conn->close();
    }
   
    
}
?>