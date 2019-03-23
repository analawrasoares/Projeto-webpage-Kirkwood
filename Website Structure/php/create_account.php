<?php
require('validation.php');
require('graduate.php');
if(isset($_POST['next'])){
    $k_number = isempty(htmlspecialchars($_POST['k_number']),1);
    $first_name = isempty(htmlspecialchars($_POST['first_name']),2);
    $middle_name = isempty(htmlspecialchars($_POST['Middle_name']),3);
    $last_name =isempty(htmlspecialchars($_POST['last_name']),4);
    $email = isempty(htmlspecialchars($_POST['email']),5);
$graduate = new graduate($k_number,$first_name,$middle_name,$last_name,$email);
$upload_success = $graduate->insert_graduate();
    if($upload_success){
        $graduate_id = $graduate->getGraduate_id();
        header("Location:../Graduate_form.html?graduate_number=$graduate_id");
    }   
echo $k_number.$first_name.$middle_name.$last_name.$email;     
}
?>