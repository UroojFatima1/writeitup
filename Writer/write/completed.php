<?php
include_once '../../signin-signup/config.php';
session_start();
$username=$_SESSION['si_username'];
$title=$_SESSION['titlename'];
$story=$_SESSION['novel'];
$chapno=$_SESSION['chap'];

$comp=1;

$sql = mysqli_query($conn, "UPDATE details SET completed = '$comp' where authorUsername='$username' AND title='$title");
    
?>