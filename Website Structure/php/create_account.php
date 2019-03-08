
<?php
/**
 * Author: Md Touhidul Islam
 * Date: 02/25/2019
 * Discription: 
 */
require('form_info.php');
if(isset($_POST['submit'])){
    $graduate_year =htmlspecialchars( $_POST['graduate_year']);

    $salary =htmlspecialchars( $_POST['salary']);
    $employment_position = htmlspecialchars($_POST['employment_position']);

    $country = htmlspecialchars($_POST['country']);
    $city = htmlspecialchars($_POST['city']);
    $zip_code = htmlspecialchars($_POST['zip_code']);

    $program_name = htmlspecialchars($_POST['program_id']);
    $employer_name = htmlspecialchars($_POST['employer_name']);
    $continue_edu = htmlspecialchars($_POST['continue_edu']);
    if(isset($_POST['states'])){
        $state = htmlspecialchars($_POST['states']);
    }else{
        $state = " ";
    }
    
    $continue_edu = htmlspecialchars($_POST['continue_edu']);
    //$location = $_POST['location'];
    $form_info = new form_info($graduate_year,$salary,$employment_position,$program_name,$employer_name,$continue_edu,$country,$state,$city,$zip_code);
    $form_info->insert();
    echo "Program Name: ".$form_info->getProgram_name() ;
    echo "<br>Graduate Year: ".$form_info->getGraduate_year();
    echo "<br>Salary: ".$form_info->getSalary();
    echo "<br>Employment position:  ".$form_info->getEmployment_position();
    echo "<br>employer Name:  ".$form_info->getEmployer_name();
    echo "<br>continue:  ".$form_info->getContinue_edu();
    echo "<br>".$city."<br>".$zip_code;
    
    //echo "Program Name: ". $program_name."<br>Graduate Year: ".$graduate_year."<br>Continue:  ".$continue_edu."<br>Position: ".$employment_position."<br>Salary:  ".$salary."<br>Employer:  ".$employer_name."<br>Country:  ".$country;
}
    
?>