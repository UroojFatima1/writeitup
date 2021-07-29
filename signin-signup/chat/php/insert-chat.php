<?php 
    session_start();
    if(isset($_SESSION['si-username'])){
        include_once "config.php";
        $msgid="1";
        $outgoing_id = mysqli_real_escape_string($conn, $_POST['outgoing_id']);
        $incoming_id = mysqli_real_escape_string($conn, $_POST['incoming_id']);
        $message = mysqli_real_escape_string($conn, $_POST['message']);
        echo($outgoing_id);
        if(!empty($message)){
            $insert_q = "INSERT INTO messages (msg_id,incoming_msg_id,outgoing_msg_id,msg) VALUES ('$msgid','$$incoming_id','$$outgoing_id','$message');";
                $insertion = mysqli_query($conn, $insert_q);
                if ($insertion) {
                    echo ("<script>alert(\"User registered successfully.\")</script>");
                } else {
                    echo ("<script>alert(\"User registration unsuccessful.\")</script>");
                }
    }

    }
    
?>