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