<?php
include_once '../../signin-signup/config.php';
session_start();

if (isset($_POST['next'])) {
    $username=$_SESSION['si_username'];
    $title=$_SESSION['titlename'];
    $chapno=mysqli_real_escape_string($conn,$_POST["chap"]);
    $story=mysqli_real_escape_string($conn,$_POST["story"]);
    $user=mysqli_query($conn,"SELECT authorUsername,title from story where authorUsername='$username' AND title='$title'");
    if(mysqli_num_rows($user)>0){
        $query=mysqli_query($conn,"SELECT authorUsername,title from story where authorUsername='$username' AND title='$title'");
        $sql = mysqli_query($conn, "UPDATE story SET chapterNumber = '$chapno',text = '$story' where authorUsername='$username' AND title='$title'");}
    else{
        echo "<script>alert(\"not done.\");
        
        </script>";
    
}
$inputst=mysqli_query($conn,"SELECT * from story where authorUsername='$username' AND title='$title' chapterNumber='$chapno'");
    if(mysqli_num_rows($inputst)>0){
        echo "<script>alert(\"not done.\");
        
        </script>";
    }
    else{
        $sql ="INSERT INTO story (authorUsername,title,chapterNumber,story) VALUES ('$username','$title','$dob','$chapno','$story');";
       
}}?>