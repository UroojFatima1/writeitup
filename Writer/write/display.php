<?php
include_once '../../signin-signup/config.php';
session_start();
$output="";
$chapter="";
$username=$_SESSION['si_username'];
$title=$_SESSION['titlename'];
$story=$_SESSION['novel'];
$chapno=$_SESSION['chap'];
$sql="SELECT * FROM story WHERE authorUsername='$username' AND chapterNumber='$chapno'AND title='$title'";
    $query=mysqli_query($conn,$sql);
    if(mysqli_num_rows($query)>0){
    $output .= '<div class="story-container">
    <textarea name="story"  spellcheck="true" placeholder="Write your story here" class="story" autocomplete="off"> '. ucfirst('$story') .'
        </textarea></div>';
    $chapter.='<div class="chapter" ><input type="number" min="1" max="20" required name="chap" autocomplete="off" placeholder=" '. $chapno .'"></div>';
    
    echo $chapter;
    echo $output;
}
else{  echo ("<script>alert(\"manhoos.\");
    </script>");}

?>

