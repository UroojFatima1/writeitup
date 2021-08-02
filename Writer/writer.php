<?php
include_once '../config.php';
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
    <link rel="stylesheet" href="writer.css">   
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
            <li><a href="../reader/reader.php" class="navbtn"><span class="text">Read</span> <i class="fas fa-book-open"></i></a></li>
            <li><a href="../index.html" class="navbtn"><span class="text">Home</span> <i class="fas fa-home"></i></a></li>
            <li class="menu-area">
                <img src="../signin-signup/user-dps/<?php echo $_SESSION["dp"]; ?>" alt="dp" class="dp">
                <div class="menu">
                    <a href="../chat/chat.php">Inbox</a>
                    <a href="#">Notifications
                    <a href="../index.html#footer">Help</a>
                    <a href="#">Logout</a>
                </div>
            </li>
        </ul>
    </nav>
    <div class="container">
        <div class="spikes">
            <h1 class="heading">Start Writing!</h1></div>
            
    <form action="writerback.php" method="POST" name="writer" enctype="multipart/form-data" >
        <div class="writeup">
            <div class="rect">
                <div class="rectangle">
                    <img id="output">
                    <div id="plustext">
                        <label id="plus" for="fileinput">&plus;</label>
                        <input type="file" name="uploadfile" id="fileinput"> 
                        <span class="addcover">Add Cover</span>
                    </div>
                    <div class="clearbtn" id="clearb" ><div class="clear" name="clear" ><p>Clear</p></div></div>
                </div>
               
            </div>
            <div class="form">
                <div class="input-field">
                    <i class="fa fa-book"></i>
                    <input type="text"  name="titlename" placeholder="Story Title" class="inp" required>
                </div>
                <div class="input-field">
                    <i class="fa fa-edit"></i>
                    <textarea name="description" id="desc" placeholder="Story Description" class="inp" row="3" required></textarea>
                </div>
                <div class="input-field">
                    <i class="fa fa-server"></i>
                    <select required class="inp" name="genre">
                        <option>Select a genre</option>
                        <option>Action</option>
                        <option>Comedy</option>
                        <option>Drama</option>
                        <option>Fantasy</option>
                        <option>Fiction</option>
                        <option>Horror</option>
                        <option>Mystery</option>
                        <option>Romantic</option>
                        <option>Thriller</option>
                    </select>
                </div>
                <div class="input-field">
                    <i class="fa fa-child"></i>
                    <div>
                    <label class="rate" class="inp"  id="Rating">Ratings:</label>
                    <label for="youngadult" class="radiobutton" >Young Adult</label>
                    <input type="radio"  placeholder="Story" id="youngadult" name="Rating" value="Young Adult"> 
                    <label for="adult" class="radiobutton" >Mature</label>
                    <input type="radio"  placeholder="Story" id="adult" name="Rating" value="Mature"> 
                    
                </div>
                </div>
                <div class="btncontainer">
                    <button name="upload" class="btn">Proceed</button>
                </div>
            </div></div>
        </form>
     
    </div>
    <footer>
        <div class="footer-logo">
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
    <script src="writer.js"></script>
</body>
</html>