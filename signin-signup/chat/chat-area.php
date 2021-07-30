<?php
session_start();
include_once "php/config.php";
$user=$_SESSION['si_username'];
if(!isset($_SESSION['si_username'])){
    header("location: ../signin-signup/signin.html"); //redirect to login if not logged into the app
}

?>

<?php include_once "once.php"; ?>
<body>
    <div class="wrapper">
        <section class="chat-area">
        <header>
            <?php 
            include_once "config.php";
                $user_id=mysqli_real_escape_string($conn,$_GET['user_id']);
                $sql = mysqli_query($conn, "SELECT * FROM users WHERE username='$user_id'");
                if(mysqli_num_rows($sql) > 0){
                $row = mysqli_fetch_assoc($sql);
                }
            ?>
            <a href="chat.php" class="back-icon"><i class="fa fa-arrow-left"></i></a>
            <img src="ayesha.jpg" alt="">
            <div class="details">
                <span><?php echo $row['username']?></span>
                <p><?php echo $row['status']; ?></p>
             </div>
        </header>
    <div class="chat-box">
        
    </div>
    <form action="#" class="typing-area">
        <input type="text" class="outgoing_id" name="outgoing_id" value="<?php echo $_SESSION['si_username']; ?>" hidden>   
        <input type="text" class="incoming_id" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
        <input type="text" name="message" class="input-field" placeholder="Type a message here..." autocomplete="off">
        <button><i class="fab fa-telegram-plane"></i></button>
    </form>
        
    </section>
    </div>
    <script src="js/chat-area.js"></script>
</body>
</html>