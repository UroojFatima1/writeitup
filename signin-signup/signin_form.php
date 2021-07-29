<?php
include 'config.php';
session_start();
if(isset($_SESSION['si_username'])){
    echo "<script>window.location.href='../reader/reader.html';</script>";
}
if(isset($_POST["login"])){
    $s_username=mysqli_real_escape_string($conn,$_POST["si_username"]);
    $s_password=mysqli_real_escape_string($conn,md5($_POST["si_password"]));
    $user=mysqli_query($conn,"SELECT username,dp from users where username='$s_username' AND pass='$s_password'");
    if(mysqli_num_rows($user)>0){
        $row=mysqli_fetch_assoc($user);
        $_SESSION['si_username']=$row['username'];
        $_SESSION['dp']=$row['dp'];
        echo "<script>window.location.href='../reader/reader.html';</script>";
    }
    else{
        echo "<script>alert(\"Username is incorrect.\");
        window.location.href='signin.html';
        </script>";
    }
}
?>