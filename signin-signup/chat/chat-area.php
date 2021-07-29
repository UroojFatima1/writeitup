<?php
session_start();
include_once "config.php";
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
        <div class="chat outgoing">
            <div class="details">
             <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam, non! Nobis porro velit sed error, natus unde vitae delectus? Ullam dolor itaque nulla ipsam incidunt odio dolorem, tenetur eum maxime!</p>
            </div>
        </div>
        <div class="chat incoming">
            <img src="urooj.jpg" alt="">
            <div class="details">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam, non! Nobis porro velit sed error, natus unde vitae delectus? Ullam dolor itaque nulla ipsam incidunt odio dolorem, tenetur eum maxime!</p>
            </div>
        </div>
        <div class="chat outgoing">
            <div class="details">
             <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam, non! Nobis porro velit sed error, natus unde vitae delectus? Ullam dolor itaque nulla ipsam incidunt odio dolorem, tenetur eum maxime!</p>
            </div>
        </div>
        <div class="chat incoming">
            <img src="urooj.jpg" alt="">
            <div class="details">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam, non! Nobis porro velit sed error, natus unde vitae delectus? Ullam dolor itaque nulla ipsam incidunt odio dolorem, tenetur eum maxime!</p>
            </div>
        </div>
        <div class="chat outgoing">
            <div class="details">
             <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam, non! Nobis porro velit sed error, natus unde vitae delectus? Ullam dolor itaque nulla ipsam incidunt odio dolorem, tenetur eum maxime!</p>
            </div>
        </div>
        <div class="chat incoming">
            <img src="urooj.jpg" alt="">
            <div class="details">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam, non! Nobis porro velit sed error, natus unde vitae delectus? Ullam dolor itaque nulla ipsam incidunt odio dolorem, tenetur eum maxime!</p>
            </div>
        </div>
        <div class="chat outgoing">
            <div class="details">
             <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam, non! Nobis porro velit sed error, natus unde vitae delectus? Ullam dolor itaque nulla ipsam incidunt odio dolorem, tenetur eum maxime!</p>
            </div>
        </div>
        <div class="chat incoming">
            <img src="urooj.jpg" alt="">
            <div class="details">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam, non! Nobis porro velit sed error, natus unde vitae delectus? Ullam dolor itaque nulla ipsam incidunt odio dolorem, tenetur eum maxime!</p>
            </div>
        </div>
    </div>
    <form action="#" method="POST" class="typing-area" autocomplete="off">
        <input type="text" name="outgoing_id" class="outgoing_id" value="<?php echo $_SESSION['si_username'];?>" hidden>
        <input type="text" name="incoming_id" class="incoming_id" value="<?php echo $user_id;?>" hidden> 
        <input type="text" class="input-field" name="message" placeholder="Type a message here...">
        <button><i class="fab fa-telegram-plane"></i></button>
    </form> 
        
    </section>
    </div>
    <script src="js/chat-area.js"></script>
</body>
</html>