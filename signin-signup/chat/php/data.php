<?php
    while($row=mysqli_fetch_assoc($sql)){
        $sql2 = "SELECT * FROM messages WHERE (incoming_msg_id = '$row[username]'
                OR outgoing_msg_id = '$row[username]') AND (outgoing_msg_id = '$outgoing_id'
                OR incoming_msg_id = '$outgoing_id') ORDER BY msg_id DESC LIMIT 1";
        $query2 = mysqli_query($conn, $sql2);
        $row2 = mysqli_fetch_assoc($query2);
        if(mysqli_num_rows($query2) > 0) {
            $result=$row2['msg'];
        }
        else{
            $result="No message available";
        }
        //trimming
        (strlen($result) > 28) ? $msg =  substr($result, 0, 28) . '...' : $msg = $result;
        ($row['status'] == "Offline now") ? $offline = "offline" : $offline = "";

        if(isset($row2['outgoing_msg_id'])){
            ($outgoing_id == $row2['outgoing_msg_id']) ? $you = "You: " : $you = "";
        }else{
            $you = "";
        }
            $output .= '<a href="chat-area.php?user_id='.$row['username'].'">
            <div class="content">
                <img src="ayesha.jpg" alt="">
                <div class="details">
                    <span>'.$row['username'].'</span>
                    <p>'. $you . $msg .'</p>
                </div>
            </div>
            <div class="status-dot '.$offline.'"><i class="fa fa-circle"></i></div>
        </a>';
        
        }
?>