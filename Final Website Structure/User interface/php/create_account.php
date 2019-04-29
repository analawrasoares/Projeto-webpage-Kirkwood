<?php

require('validation.php');
require('graduation_form_Logic.php');

if(isset($_POST['next'])){
    $k_number = htmlspecialchars($_POST['k_number']);
    $first_name = htmlspecialchars($_POST['first_name']);
    $middle_name = htmlspecialchars($_POST['middle_name']);
    $last_name =htmlspecialchars($_POST['last_name']);
    $email = htmlspecialchars($_POST['email']);
    $Thegraduate = new graduate($k_number,$first_name,$middle_name,$last_name,$email,"");
    $upload_success = insert_graduate($Thegraduate);
    if($upload_success){
        $conn = connectDb();
            // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            $sql = "CALL sp_get_graduate_id_from_k_number('$k_number')";
            $result = mysqli_query($conn, $sql);
            $graduate_id="";
            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                   $graduate_id=  $row['graduate_id'];
                }
            } else {
                echo "0 results";
            }
             header("Location:../Graduate_form.php?graduate_number=$graduate_id");
            mysqli_close($conn);
      
    }   
echo $k_number.$first_name.$middle_name.$last_name.$email;     
}
?>