<?php
    session_start();
    if(isset($_SESSION['si-username'])){
        include_once "config.php";
        
        $outgoing_id = mysqli_real_escape_string($conn, $_POST['outgoing_id']);
        $incoming_id = mysqli_real_escape_string($conn, $_POST['incoming_id']);
        $message = mysqli_real_escape_string($conn, $_POST['message']);
        
        
            $insert_q = "INSERT INTO messages (incoming_msg_id,outgoing_msg_id,msg) VALUES ('$incoming_id','$outgoing_id','$message')";
                $insertion = mysqli_query($conn, $insert_q);
                if ($insertion) {
                    echo ("<script>alert(\"successfully.\")</script>");
                } else {
                    echo ("<script>alert(\"unsuccessful.\")</script>");
                }
    }
 

    
    else{echo("<script>alert(\"unsuccessful.\")</script>");}
   
    
    
?>