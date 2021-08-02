var form=document.querySelector("form");
var image=document.getElementById("fileinput");
var p=document.getElementById("plustext");
var btn=document.getElementById("clearb");
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
image.addEventListener("change",(event) =>{var img = document.getElementById('output');
img.src = URL.createObjectURL(event.target.files[0]);
img.style.display="block";
p.style.display="none";
btn.style.display="flex";


})
btn.addEventListener("click",clear)
function clear(){var img = document.getElementById('output');
btn.disabled = true;
img.src="";
img.style.display="none";
p.style.display="block";
btn.style.display="none";}