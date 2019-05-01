
<?php 
// define variables and set to empty values


  
//---------------function to check if is empty
function isempty($value){
    if(empty($value)){
        header("Location: ..\Graduate_form.html?error=");
    }else{
        return $value;
    }
}
//--------------function to check if is letters
function isLetter($value){
    if (!preg_match("/^[a-zA-Z ]*$/")) {
       
      header("Location: ..\Graduate_form.html?error=");
    }else{
        return $value;
    }
}
//--------------function to check if the email is correct
function isEmail($email){
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        
      header("Location: ..\Graduate_form.html?error="); 
    
    }else{
        return $value;
    }
}
//--------------function to check if is number

function isNumber($value){
    
 if (!preg_match('/^[0-9]+(\\.[0-9]+)?$/', $value)){
     
     header("Location: ..\Graduate_form.html?error="); 
     
    }else{
        return $value; 
    }
}

?>
    