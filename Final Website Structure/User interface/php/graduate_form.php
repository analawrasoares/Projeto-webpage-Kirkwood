
<?php
/**
 * Author: Md Touhidul Islam
 * Date: 02/25/2019
 * Discription: 
 */
require('graduation_form_logic.php');
require('form_info.php');
require('validation.php');
if(isset($_POST['submit'])){
    $graduate_year = htmlspecialchars( $_POST['graduate_year']);
    
    
    $program_name = htmlspecialchars($_POST['program_id']);
    $continue_edu = htmlspecialchars($_POST['continue_edu']);
    $program_name = htmlspecialchars($_POST['program_id']);
    $continue_edu = htmlspecialchars($_POST['continue_edu']);
    $work_satatus = htmlspecialchars($_POST['work_state']);
    if($work_satatus=="yes"){
        $employer_name = htmlspecialchars($_POST['employer_fname'])." ".htmlspecialchars($_POST['employer_lname']);
        $employment_position = htmlspecialchars($_POST['employment_position']);
        $salary = htmlspecialchars( $_POST['salary']);
        $work_satatus = true;
    }else{
        $employer_name = "Not Apply";
        $employer_name = "Not Apply";
        $employment_position = "Not Apply";
        $salary = "0";
        $work_satatus = false;
    }
    
    $country =htmlspecialchars($_POST['country']);
    $city = htmlspecialchars($_POST['city']);
    $zip_code = htmlspecialchars($_POST['zip_code']);
    $graduate_id = $_GET['graduate_number'];
    if($graduate_id== ""||$graduate_id== null){
       echo "You need to have a graduate number";
    }else{
        if(isset($_POST['states'])){
        $state = htmlspecialchars($_POST['states']);
        }else{
            $state = "Not Apply";
        }
        $continue_edu = htmlspecialchars($_POST['continue_edu']);
        //$location = $_POST['location'];
        $form_info = new form_info($graduate_year,$salary,$employment_position,$program_name,$employer_name,$continue_edu,$country,$state,$city,$zip_code,$work_satatus);
        insert_graduate_info($form_info);
    }
    
   
    
    
}
    
?>