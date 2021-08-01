
var search_icon = document.querySelector(".search-r");
var search_box = document.querySelector(".search-box");
var logo = document.querySelector(".logonav");
var list_items = document.querySelector(".nav");
search_icon.addEventListener("click", toggle);
var dropdown=document.querySelector(".dp");
var menu=document.querySelector(".menu");
dropdown.addEventListener("click",show_menu);
read_button.addEventListener("click", redirect);
function show_menu(){
if(menu.style.display=="none"){
    menu.style.display="block";
}
else{
    menu.style.display="none";
}
}
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
function redirect() {
    window.location.href = 'writeup_story.php';
}