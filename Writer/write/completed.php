<?php
include_once '../../signin-signup/config.php';
session_start();


$username=$_SESSION['si_username'];
    $title=$_SESSION['titlename'];
    $comp=1;
    echo ($username);

$sql = mysqli_query($conn, "UPDATE details SET completed = 1 where authorUsername='$username' AND title='$title");
    

?>