let recipes = document.querySelectorAll(".recipes div");
let previousText;

     for(let i = 0; i < recipes.length; i++){
recipes[i].onclick=function(){        

this.classList.toggle("show");
}
}