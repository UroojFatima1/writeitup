<?php
include 'config.php';
if (isset($_POST["register"])) {
    $username = mysqli_real_escape_string($conn, $_POST["su_username"]);
    $email = mysqli_real_escape_string($conn, $_POST["su_email"]);
    $dob = mysqli_real_escape_string($conn, $_POST["su_dob"]);
    $pass = mysqli_real_escape_string($conn, md5($_POST["su_password"]));
    $dpName = $_FILES["su_dp"]["name"]; //to get name of image
    $dpTmpName = $_FILES["su_dp"]["tmp_name"]; //used to move image in folder
    $folder="user-dps/".$dpName;

    $check_username = mysqli_num_rows(mysqli_query($conn, "SELECT username from users where username='$username'"));
    $check_email = mysqli_num_rows(mysqli_query($conn, "SELECT email from users where email='$email'"));
    if ($check_email > 0) {
        echo ("<script>alert(\"User already exists. Enter a new email.\");
        window.location.href='signin.html';
        </script>");
    } else if ($check_username > 0) {
        echo ("<script>alert(\"This username already exists. Enter a new one.\");
        window.location.href='signin.html';
        </script>");
    } else {
        $insert_q = "INSERT INTO users (username,email,dob,pass,dp) VALUES ('$username','$email','$dob','$pass','$dpName');";
        $insertion = mysqli_query($conn, $insert_q);
        $select_dp="SELECT * FROM users where username='$username'";
        $selection_dp=mysqli_query($conn,$select_dp);
        if (move_uploaded_file($dpTmpName,$folder)) {
            $_SESSION['dp']=$result['dp'];
        }
        if ($insertion) {
            echo "<script>alert(\"User registration successful. Please login now.\");
            window.location.href='signin.html';</script>";
        } else {
            echo "<script>alert(\"Username registration unsuccessful.\");
            window.location.href='signin.html';
            </script>";
        }
    }
}