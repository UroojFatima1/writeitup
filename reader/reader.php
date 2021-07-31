<?php
include '../signin-signup/config.php';
session_start();
$display_cover = mysqli_query($conn, "SELECT DISTINCT * from story");
$result = mysqli_fetch_assoc($display_cover);
$_SESSION["cover"] = $result["coverPage"];
$_SESSION["title"] = $result["title"];
$_SESSION["authorUsername"] = $result["authorUsername"];
$_SESSION["desc"] = $result["description"];
$_SESSION["genre"] = $result["genre"];
$_SESSION["rating"] = $result["rating"];
$_SESSION["chapterNumber"] = $result["chapterNumber"];
$_SESSION["noOfChapters"] = $result["noOfChapters"];
$_SESSION["text"] = $result["text"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>WriteItUp</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Slab&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="reader.css" />
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" />
</head>

<body>
<nav class="topnav">
        <li><a class="logonav" href="../index.html">WriteItUp</a></li>
        <div class="search-box">
            <input type="search" placeholder="Browse">
            <i class="fa fa-search" id="search-icon"></i>
        </div>
        <ul class="nav" id="navi">
            <li><a class="navbtn search-r"><i class="fa fa-search"></i></a>
            <li><a href="../Writer/writer.php" class="navbtn"><span class="text">Write</span> <i class="fad fa-marker"></i></a></li>
            <li><a href="../index.html" class="navbtn"><span class="text">Home</span> <i class="fas fa-home"></i></a></li>
            <li class="menu-area">
                <img src="../signin-signup/user-dps/<?php echo $_SESSION["dp"]; ?>" alt="dp" class="dp">
                <div class="menu">
                    <a href="#">Inbox</a>
                    <a href="#">Notifications
                    <a href="#">Help</a>
                    <a href="#">Logout</a>
                </div>
            </li>
        </ul>
    </nav>
    <div class="container">
        <div class="spikes">
            <h2 class="welcome">Welcome, <?php echo $_SESSION["si_username"]; ?> .</h2>
        </div>
        <!--Continue Reading-->
        <div class="row">
            <h2>Continue Reading</h2>
            <div class="row-posters">
                <img class="poster" src="../cover-pages/<?php echo $_SESSION["cover"]; ?>" alt="book" onclick="loadStory()" />
            </div>
        </div>
        <!--Trending-->
        <div class="row">
            <h2>Trending</h2>
            <div class="row-posters trending">
                <img class="poster" src="../images/2.png" alt="book" />
                <div class="details">
                    <p>Title: The Great Amazon</p>
                    <p>By: Ayesha Khalid</p>
                    <p>Genre: Adventure</p>
                    <p>Reads: 345 <i class="fas fa-eye" style="font-size:1.75rem"></i></p>
                </div>
            </div>
        </div>
        <!--Suggested Stories-->
        <div class="row">
            <h2>Suggested For You</h2>
            <div class="row-posters">
                <img class="poster" src="../images/1.png" alt="book" />
                <img class="poster" src="../images/2.png" alt="book" />
                <img class="poster" src="../images/3.png" alt="book" />
                <img class="poster" src="../images/4.png" alt="book" />
                <img class="poster" src="../images/5.png" alt="book" />
                <img class="poster" src="../images/1.png" alt="book" />
                <img class="poster" src="../images/2.png" alt="book" />
                <img class="poster" src="../images/3.png" alt="book" />
                <img class="poster" src="../images/4.png" alt="book" />
                <img class="poster" src="../images/5.png" alt="book" />
                <img class="poster" src="../images/1.png" alt="book" />
                <img class="poster" src="../images/2.png" alt="book" />
                <img class="poster" src="../images/3.png" alt="book" />
                <img class="poster" src="../images/4.png" alt="book" />
                <img class="poster" src="../images/5.png" alt="book" />
            </div>
        </div>
    </div>
    <footer>
        <div class="footer-logo">
            <div class="footer-logo">WriteItUp</div>
            <p>&copy; CopyRight 2021</p>
        </div>
        <div class="write">
            <a href="../Writer/writer.php" class="footer-link">
                <p>Want to write your <br>own story? <i class="fas fa-edit"></i></p>
            </a>
        </div>
        <div class="footer-links">
            <ul class="nav footer-nav">
                <li><a href="../index.php" class="navbtn">Home</a></li>
                <li><a href="../index.html#features" class="navbtn">Features</a></li>
                <li><a href="../index.html#scroll" class="navbtn">About</a></li>
                <li><a href="../index.html#footer" class="navbtn">Contact</a></li>
            </ul>
            <ul class="footer-icons">
                <a href="mailto:someone@example.com" target="_blank"><i class="fas fa-envelope f"></i></a>
                <a href="https://www.facebook.com/writeitup" target="_blank"><i class="fab fa-facebook-f f"></i></a>
                <a href="https://www.instagram.com/writeitup" target="_blank"><i class="fab fa-instagram f"></i></a>
            </ul>
        </div>
    </footer>

</body>
<script>
    var search_icon = document.querySelector(".search-r");
    var search_box = document.querySelector(".search-box");
    var logo = document.querySelector(".logonav");
    var list_items = document.querySelector(".nav");
    search_icon.addEventListener("click", toggle);

    function toggle() {
        search_box.style.display = "flex";
        search_box.style.margin = "auto";
        search_icon.style.display = "none";
        logo.style.display = "none";
        list_items.style.display = "none";
    }

    function loadStory() {
        window.location.href = 'writeup_details.php';
    }
</script>

</html>