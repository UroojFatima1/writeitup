<?php
include_once '../../signin-signup/config.php';
session_start();

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/jpg" href="favicon.png"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Slab&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>   <!---To add icons-->
    <link rel="stylesheet" href="write.css">   
    <link rel="preconnect" href="https://fonts.gstatic.com">   <!---Fonts-->
    <link rel="shortcut icon" href="../favicon.png" type="image/x-icon" />
    <title>WriteItUp</title>
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
            <li><a href="../Writer/writer.html" class="navbtn"><span class="text">Read</span> <i class="fas fa-book-open"></i></a></li>
            <li><a href="../index.html" class="navbtn"><span class="text">Home</span> <i class="fas fa-home"></i></a></li>
            <li class="profile-menu"><img src="../../signin-signup/user-dps/<?php echo $_SESSION["dp"]; ?>" alt="dp" class="dp"></li>
        </ul>
    </nav>
    <div class="box">
        <div class="left">
            <div class="rectangle">
            <img src="../../cover-pages/<?php echo $_SESSION["cover"]; ?>" alt="cover" class="cover">
            </div>
            <div class="details">
                <p class="name" id="title"><?php echo $_SESSION["title"]; ?></p>
            </div>
        </div>
        <div class="right">
            <label for="chapter">Chapter No</label>
            <form action="writeback.php" method="POST">
            <input type="number" min="1" max="20" required name="chap" autocomplete="off" >
            <hr>
            <textarea name="story" spellcheck="true" placeholder="Story here" class="story" autocomplete="off"></textarea>
            <input type="submit" name="save" value="Save">
            </form>
            <button>next chapter</button>
            <button>Completed</button>
        </div>
    </div>
    <footer><div class="footer-logo">
            <div class="footer-logo">WriteItUp</div>
            <p>&copy; CopyRight 2021</p>
        </div>
        <div class="write">
            <a href="../Writer/writer.html" class="footer-link">
                <p>Want to write your <br>own story? <i class="fas fa-edit"></i></p>
            </a>
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
    <script src="write.js"></script>
</body>
</html>