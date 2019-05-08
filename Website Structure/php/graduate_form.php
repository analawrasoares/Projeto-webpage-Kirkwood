
<?php
/**
 * Author: Md Touhidul Islam
 * Date: 02/25/2019
 * Discription: 
 */
require('form_info.php');
require('validation.php');
if(isset($_POST['submit'])){
    $graduate_year = isempty(htmlspecialchars( $_POST['graduate_year']),'1');

    $salary = isNumber(isempty(htmlspecialchars( $_POST['salary'],'1'),'1'),'1');
    $employment_position = isLetter(isempty(htmlspecialchars($_POST['employment_position']),'2'),'2');

    $country =isLetter(isempty(htmlspecialchars($_POST['country']),'3'),'3');
    $city = isempty(htmlspecialchars($_POST['city']),'4');
    $zip_code = isNumber(isempty(htmlspecialchars($_POST['zip_code']),'5'),'5');


    $program_name = isLetter(isempty(htmlspecialchars($_POST['program_id']),'6'),'6');
    $employer_name = isLetter(isempty(htmlspecialchars($_POST['employer_name']),'7'),'7');
    $continue_edu = isempty(htmlspecialchars($_POST['continue_edu']),'8');
    $continue_edu = isempty(htmlspecialchars($_POST['continue_edu']),'9');

    $program_name = htmlspecialchars($_POST['program_id']);
    $employer_name = htmlspecialchars($_POST['employer_name']);
    $continue_edu = htmlspecialchars($_POST['continue_edu']);
    $graduate_id = $_GET['graduate_number'];
    if(isset($_POST['states'])){
        $state = isempty(htmlspecialchars($_POST['states']),'10');
    }else{
        $state = " ";
    }
    $continue_edu = htmlspecialchars($_POST['continue_edu']);
    //$location = $_POST['location'];
    $form_info = new form_info($graduate_year,$salary,$employment_position,$program_name,$employer_name,$continue_edu,$country,$state,$city,$zip_code);
    $form_info->insert();
    
}
    
?>