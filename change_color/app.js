const contaner=document.querySelector(".contaner");
const change=document.querySelector(".change");
change.addEventListener("click",function(){
contaner.style.background='#'+(Math.floor((1<<24)*Math.random())).toString(16);
})