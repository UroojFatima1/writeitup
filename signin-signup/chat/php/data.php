<?php
    while($row=mysqli_fetch_assoc($sql)){
            $output .= '<a href="chat-area.php?user_id='.$row['username'].'">
            <div class="content">
                <img src="ayesha.jpg" alt="">
                <div class="details">
                    <span>'.$row['username'].'</span>
                    <p>This is test message</p>
                </div>
            </div>
            <div class="status-dot"><i class="fa fa-circle"></i></div>
        </a>';
        
        }
?>