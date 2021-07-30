
<?php
session_start();
include_once "../signin-signup/config.php";
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
            <li><a href="../Writer/writer.html" class="navbtn"><span class="text">Write</span> <i class="fad fa-marker"></i></a></li>
            <li><a href="../index.html" class="navbtn"><span class="text">Home</span> <i class="fas fa-home"></i></a></li>
            <li class="profile-menu"><img src="../signin-signup/user-dps/<?php echo $_SESSION["dp"]; ?>" alt="dp" class="dp"></li>
        </ul>
    </nav>

    <div class="container">
        <div class="forms-container">
            <h1 class="heading">Start Writing..!!</h1>
<form action="reader.php" method="POST">
        <div class="write">
            <div class="rect">
            <div class="rectangle"><img id="output"><div id="plustext"><label id="plus" for="fileinput">&plus;</label><input type="file" accept=".jpg,.png,.jpeg" name="cover" id="fileinput"> <span>Add Cover</span></div></div>
            <div class="clearbtn" id="clearb"><button class="clear">Clear</button></div></div>
            <div class="form">
                <div class="input-field">
                    <i class="fa fa-book"></i>
                    <input type="text"  name="title" placeholder="Story Title" class="inp" required>
                </div>
                <div class="input-field">
                    <i class="fa fa-edit"></i>
                    <textarea type="text"  name="description" placeholder="Story Description" class="inp" row="3" required></textarea>
                </div>
                <div class="input-field">
                    <i class="fa fa-server"></i>
                    <select required class="inp">
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
                    <label class="rate" class="inp">Ratings:</label>
                    <label for="youngadult" class="radiobutton">Young Adult</label>
                    <input type="radio"  placeholder="Story" id="youngadult" name="Rating"> 
                    <label for="adult" class="radiobutton">Mature</label>
                    <input type="radio"  placeholder="Story" id="adult" name="Rating"> 
                    
                </div>
                </div>
                <div class="btncontainer">
                    <button class="btn"> Proceed</button>
                </div>
            </div></div>
        </form>
    </div>
    </div>
    <script src="writer.js"></script>

</body>
</html>