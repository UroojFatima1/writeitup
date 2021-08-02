<?php
include_once '../../signin-signup/config.php';
session_start();

if (isset($_POST['save'])) {$username=$_SESSION['si_username'];
    $title=$_SESSION['titlename'];
    $chapno=mysqli_real_escape_string($conn, $_POST["chap"]);
    $story=mysqli_real_escape_string($conn, $_POST["story"]);
    
    $sql = "INSERT INTO story (authorUsername,title,chapterNumber,text) VALUES ('$username','$title','$chapno','$story');";
    
    $insertion = mysqli_query($conn, $sql);
    
    $_SESSION["chap"]=$chapno;
    $_SESSION["novel"]=$story;
    echo ($_SESSION["novel"]);}


?>
