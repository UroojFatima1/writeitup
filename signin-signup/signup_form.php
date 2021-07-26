<?php
include 'config.php';
if (isset($_POST["register"])) {
    $username = mysqli_real_escape_string($conn, $_POST["su_username"]);
    $email = mysqli_real_escape_string($conn, $_POST["su_email"]);
    $dob = mysqli_real_escape_string($conn, $_POST["su_dob"]);
    $pass= mysqli_real_escape_string($conn, md5($_POST["su_password"]));
    $dp = mysqli_real_escape_string($conn, $_POST["su_dp"]);

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
        $insert_q = "INSERT INTO users (username,email,dob,password,dp) VALUES ('$username','$email','$dob','$pass','$dp');";
        $insertion = mysqli_query($conn, $insert_q);
        if ($insertion){
            echo ("<script>alert(\"User registered successfully.\")</script>");
        } else {
            echo ("<script>alert(\"User registration unsuccessful.\")</script>");
        }
    }
}
?>
