var image=document.getElementById("fileinput");
var p=document.getElementById("plustext");
var btn=document.getElementById("clearb");
image.addEventListener("change",(event) =>{var img = document.getElementById('output');
img.src = URL.createObjectURL(event.target.files[0]);
img.style.display="block";
p.style.display="none";
btn.style.display="flex";

})
btn.addEventListener("click",(event) =>{var img = document.getElementById('output');
btn.disabled = true;
img.src="";
img.style.display="none";
p.style.display="block";
btn.style.display="none";})