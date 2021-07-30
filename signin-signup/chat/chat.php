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
    <section class="users">
      <header>
        <div class="content">
          <?php 
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE username='$user'");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>
          <img src="../user-dps/<?php echo $_SESSION["dp"]; ?>" alt="dp" class="dp">
          <div class="details">
            <span><?php echo ucfirst($row['username'])?></span>
            <p><?php echo $row['status']; ?></p>
          </div>
        </div>
        </header>
        
        <div class="search">
            <span class="text">Select an user to start chat</span>
            <input type="text" placeholder="Enter name to search..">
            <button><i class="fa fa-search"></i></button>
        </div>
        <div class="users-list">
        </div>
    </section>
    </div>
    <script src="chat.js"></script>
</body>
</html>