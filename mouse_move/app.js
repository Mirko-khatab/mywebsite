const container=document.querySelector('#container');
const box=document.querySelector('.box');

    container.onmousemove=function(event){
        let x=event.x;
        let y=event.y;
        box.style.left=x+'px';
        box.style.top=y+"px";

        let newbox=document.createElement('div');
        newbox.className= 'box';
        newbox.style.left=x+'px';
        newbox.style.top=y+"px";
        newbox.style.background='#'+(Math.floor((1<<24)*Math.random())).toString(16);
        container.appendChild(newbox);

    };