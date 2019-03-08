
<?php 
var $error = '';
// define variables and set to empty values
 $k_number = $first_name = $Middle_name = $last_name = $email = "";



  
//---------------function to check if is empty
function isempty(var $value){
    if(empty($value)){
        var $error .="you should enter some value<br>"; 
    }
}
//--------------function to check if is letters
function isLetter(var $value){
    if (!preg_match("/^[a-zA-Z ]*$/",$value)) {
      $error .= "Only letters and white space allowed<br>";

}
//--------------function to check if the email is correct
function isEmail(var $email){
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $error . = "Invalid email format";  
    
    }
}
//------------function to check if 



?>
    