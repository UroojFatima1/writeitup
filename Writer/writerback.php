
<?php
session_start();
include_once "../signin-signup/config.php";
    if (isset($_POST['upload'])) {$username=$_SESSION['si_username'];
    $titlename=mysqli_real_escape_string($conn,$_POST["titlename"]);
    $description=mysqli_real_escape_string($conn,$_POST["description"]);
    $genre=mysqli_real_escape_string($conn,$_POST["genre"]);
    $rating=mysqli_real_escape_string($conn,$_POST["Rating"]);
    $dpname= $_FILES['uploadfile']['name']; 
    $dpTmpName = $_FILES['uploadfile']['tmp_name']; //used to move image in folder
    $folder="../cover-pages/".$dpname;
        $insert_q = "INSERT INTO writeup (title, authorUsername, genre, coverPage, description, rating) VALUES ('$titlename','$username','$genre','$dpname','$description','$rating');";
        $insertion = mysqli_query($conn, $insert_q);
        $select_dp="SELECT * FROM writeup where authorUsername='$username' and title=' $titlename'";
        $selection_dp=mysqli_query($conn,$select_dp);
        if (move_uploaded_file($dpTmpName,$folder)) {
            echo "<script>alert(\"shukar\");
            </script>";
        }
    }


?>