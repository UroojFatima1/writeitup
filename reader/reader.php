<?php
session_start();
//echo $_SESSION["si_username"];
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
            <li><a href="../Writer/writer.html" class="navbtn"><span class="text">Write</span> <i class="fad fa-marker"></i></a></li>
            <li><a href="../index.html" class="navbtn"><span class="text">Home</span> <i class="fas fa-home"></i></a></li>
            <li class="profile-menu"><img src="images/ayesha.png" alt="dp" class="dp"></li>
        </ul>
    </nav>
    <main>
    <h2>Welcome, <?php echo $_SESSION["si_username"]; ?></h2>
    <!--Suggested Stories-->
        <div class="row">
        <h2>Suggested For You</h2>
           <div class="row-posters">
               <img class="poster" src="../images/1.png" alt="book"/>
               <img class="poster" src="../images/2.png" alt="book"/>
               <img class="poster" src="../images/3.png" alt="book"/>
               <img class="poster" src="../images/4.png" alt="book"/>
               <img class="poster" src="../images/5.png" alt="book"/>
               <img class="poster" src="../images/1.png" alt="book"/>
               <img class="poster" src="../images/2.png" alt="book"/>
               <img class="poster" src="../images/3.png" alt="book"/>
               <img class="poster" src="../images/4.png" alt="book"/>
               <img class="poster" src="../images/5.png" alt="book"/>
               <img class="poster" src="../images/1.png" alt="book"/>
               <img class="poster" src="../images/2.png" alt="book"/>
               <img class="poster" src="../images/3.png" alt="book"/>
               <img class="poster" src="../images/4.png" alt="book"/>
               <img class="poster" src="../images/5.png" alt="book"/>
           </div>
        </div>
        <!--Trending-->
        <div class="row">
        <h2>Trending</h2>
           <div class="row-posters trending">
               <img class="poster" src="../images/2.png" alt="book"/>
           </div>
        </div>
        <!--Continue Reading-->
        <div class="row">
        <h2>Continue Reading</h2>
           <div class="row-posters">
               <img class="poster" src="../images/5.png" alt="book"/>
               <img class="poster" src="../images/4.png" alt="book"/>
               <img class="poster" src="../images/3.png" alt="book"/>
           </div>
        </div>
    </main>
    <footer>
        <div class="footer-logo">
            <div class="logonav">WriteItUp</div>
            <p>&copy; CopyRight 2021</p>
        </div>
        <div class="footer-links">
        <ul class="nav footer-nav">
            <li><a href="../index.html" class="navbtn">Home</a></li>
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
<script src="reader.js"></script>

</html>
<!--<?php echo '<img src="data:image/jpg;base64,' . base64_encode($_SESSION["dp"]) . '" alt="dp" class="dp">'; ?>-->