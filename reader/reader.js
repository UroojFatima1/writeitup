var script = document.createElement('script');
script.src = 'https://code.jquery.com/jquery-3.4.1.min.js';
script.type = 'text/javascript';
document.getElementsByTagName('head')[0].appendChild(script);
var search_icon = document.querySelector(".search-r");
var search_box = document.querySelector(".search-box");
var logo = document.querySelector(".logonav");
var list_items = document.querySelector(".nav");
search_icon.addEventListener("click", toggle);
var dropdown=document.querySelector(".dp");
var menu=document.querySelector(".menu");
dropdown.addEventListener("click",show_menu);
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

$(document).ready(function() {
    $("#search").keyup(function() {
        var name = $('#search').val();
        if (name === "") { 
            $("#result").html("");}
        else {
            $.ajax({
                type: "POST",
                url: "search.php",
                data: {search: name},
                success: function(html) {
                    //Assigning result to "display" div in "search.php" file.
                    $("#result").html(html).show();
                }
            });
        }
    });
 });