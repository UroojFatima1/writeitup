<?php
include '../config.php';
session_start();
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
    <link rel="shortcut icon" href="../favicon.png" type="image/x-icon" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</head>

<body>
    <nav class="topnav">
        <li><a class="logonav" href="../index.html">WriteItUp</a></li>
        <div class="search">
            <div class="search-box">
                <input type="text" placeholder="Browse" name="search" id="search" autocomplete="off">
                <i class="fa fa-search" id="search-icon"></i>
            </div>
            <div class="result" id="result"></div>
        </div>
        <ul class="nav" id="navi">
            <li><a class="navbtn search-r"><i class="fa fa-search"></i></a>
            <li>
            <li><a href="../Writer/writer.php" class="navbtn"><span class="text">Write</span> <i class="fad fa-marker"></i></a></li>
            <li><a href="../index.html" class="navbtn"><span class="text">Home</span> <i class="fas fa-home"></i></a></li>
            <li class="menu-area">
                <img src="../signin-signup/user-dps/<?php echo $_SESSION["dp"]; ?>" alt="dp" class="dp">
                <div class="menu">
                    <a href="../chat/chat.php">Inbox</a>
                    <a href="../index.html#footer">Help</a>
                    <a href="../logout.php">Logout</a>
                </div>
            </li>
        </ul>
    </nav>
    <div class="container">
        <div class="spikes">
            <h2 class="welcome">Welcome, <?php echo $_SESSION["si_username"]; ?> .</h2>
        </div>
        <!--Continue Reading
        <div class="row">
            <h2>Continue Reading</h2>
            <div class="row-posters">

            </div>
        </div>
        -->
        <!--Suggested Stories-->
        <div class="row">
            <h2>Suggested For You</h2>
            <div class="row-posters">
                <?php
                $all_covers = mysqli_query($conn, "SELECT * FROM details");
                foreach ($all_covers as $result) {
                ?>
                    <a href="writeup_details.php?title=<?php echo $result["title"]; ?>"><img class="poster" src="../cover-pages/<?php echo $result["coverPage"]; ?>" alt="book" /></a>
                <?php
                }
                ?>
            </div>
        </div>
        <!--Trending-->
        <div class="row">
            <h2>Lastest Story</h2>
            <div class="row-posters trending">
                <div>
                    <a href="writeup_details.php?title='The+Silent+Patient'"><img class="poster" src="../cover-pages/the-silent-patient.jpg" alt="book" /></a>
                </div>
                <div class="details">
                    <p>Title: The Silent Patient</p>
                    <p>By: Alex Michaelides</p>
                    <p>Genre: Mystery</p>
                </div>
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
    <script src="reader.js"></script>
</body>

</html>