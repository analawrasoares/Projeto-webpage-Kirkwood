
<?php 
// define variables and set to empty values


  
//---------------function to check if is empty
function isempty($value,$place){
    if(empty($value)){
        header("Location: ..\Graduate_form.html?error=1&&p=$place");
    }else{
        return $value;
    }
}
//--------------function to check if is letters
function isLetter($value,$place){
    if (!preg_match("/^[a-zA-Z ]*$/",$value)) {
       
      header("Location: ..\Graduate_form.html?error=2&&p=$place");
    }else{
        return $value;
    }
}
//--------------function to check if the email is correct
function isEmail($email){
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        
      header("Location: ..\Graduate_form.html?error=3&&p=$place"); 
    
    }else{
        return $value;
    }
}
//--------------

?>
    