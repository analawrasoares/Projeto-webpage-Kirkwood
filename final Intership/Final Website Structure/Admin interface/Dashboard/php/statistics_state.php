<?php
 // Check connection
 
$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Kirkwood_Survey";
       
        $conn = new mysqli($servername, $username,$password, $dbname);
        $stmt = $conn->prepare("call SP_state_statistics()");
        $stmt->execute();
        $result = $stmt->get_result();
        $outp = $result->fetch_all(MYSQLI_ASSOC);
        
        echo json_encode($outp);
    ?>