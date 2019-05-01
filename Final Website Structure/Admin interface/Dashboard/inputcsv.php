
<?php
require('php/graduate.php');
require('php/Helper.php');
if (isset($_POST["upload"])) {
    
    // Get file extension
    $file_extension = pathinfo($_FILES["file-input"]["name"], PATHINFO_EXTENSION);
    // Validate file input to check if is not empty
    if (! file_exists($_FILES["file-input"]["tmp_name"])) {
        $response = array(
            "type" => "error",
            "message" => "File input should not be empty."
        );
    } // Validate file input to check if is with valid extension
    else if ($file_extension != "csv") {
            $response = array(
                "type" => "error",
                "message" => "Invalid CSV: File must have .csv extension."
            );
        } // Validate file size
    else if (($_FILES["file-input"]["size"] > 2000000)) {
            $response = array(
                "type" => "error",
                "message" => "Invalid CSV: File size is too large."
            );
        } // Validate if all the records have same number of fields
    else {
        $lengthArray = array();
        
        $row = 0;
        if (($fp = fopen($_FILES["file-input"]["tmp_name"], "r")) !== FALSE) {
            while (($data = fgetcsv($fp, 1000, ",")) !== FALSE) {
                $lengthArray[] = count($data);
                if(count($data) == 5){
                    $graduat_csv_info[$row] = new graduate($data[0],$data[1],$data[2],$data[3],$data[4]);
                     $response = array(
                    "type" => "success",
                    "message" => "File Validation Success."
                     );
                }else{
                    $response = array(
                    "type" => "error",
                    "message" => "Number of field in the file are not matching at line ".($row+1)
            );
                }
                $row ++;
            }
            fclose($fp);
        }
            
        $lengthArray = array_unique($lengthArray);
        
        if (count($lengthArray) == 1) {
           
        } else {
            $response = array(
                "type" => "error",
                "message" => "Invalid CSV: Count mismatch."
            );
        }
        if($response["type"] =="success"){
            // getting the last position of graduate before uploading
            $startingRowResult = runQuary("Call sp_get_last_uploaded_value()")['graduate_id'];
            for($i = 0;$i< count($graduat_csv_info);$i++){
                if(insert_graduate($graduat_csv_info[$i])){
                    $response = array(
                    "type" => "Success",
                    "message" => "Inserted gradute information succesfull");
                }
            }
            /// Getting the 
            $endingingRowResult = runQuary("Call sp_get_last_uploaded_value()")['graduate_id'];
            
                 runQuary("INSERT INTO graduate_table_update_info(date_uploaded, starting_point, ending_point, uploaded_person, uploading_status) VALUES (NOW(),'$startingRowResult','$endingingRowResult','','INSERTED')");
        }
    }
}
?>
   <form id="frm-upload" action="" method="post"
    enctype="multipart/form-data">
    <div class="form-row">
        <div>Choose file:</div>
        <div>
            <input type="file" class="file-input" name="file-input">
        </div>
    </div>

    <div class="button-row">
        <input type="submit" id="btn-submit" name="upload"
            value="Upload">
    </div>
</form>
<?php if(!empty($response)) { ?>
<div class="response <?php echo $response["type"]; ?>
    ">
    <?php echo $response["message"]; ?>
</div>
<?php }?>



