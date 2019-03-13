
<?php
/**
 * Author: Md Touhidul Islam
 * Date: 02/25/2019
 * Discription: 
 */
require('form_info.php');
if(isset($_POST['submit'])){
    $graduate_year = $_POST['graduate_year'];

    $salary = $_POST['salary'];
    $employment_position = $_POST['employment_position'];

    $country = $_POST['country'];
    $city = $_POST['city'];
    $zip_code = $_POST['zip_code'];

    $program_name = $_POST['program_id'];
    $employer_name = $_POST['employer_name'];
    $continue_edu = $_POST['continue_edu'];
    $state = $_POST['states'];
    //$location = $_POST['location'];
    $form_info = new form_info($graduate_year,$salary,$employment_position,$program_name,$employer_name,$continue_edu,$country,$state,$city,$zip_code);
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