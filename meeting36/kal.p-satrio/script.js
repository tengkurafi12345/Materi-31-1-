const display=document.getElementById("display");
const numerics=document.getElementsByClassName("numeric");
let currentNumber="";
let number1=0;
let number2=0;
function updateDisplay(){
    display.innerText=currentNumber;
}
// for(let i=0;i<numerics.length;i++){
//     numerics[0].addEventListener("click",function(){
//         currentNumber+=numerics[0].innerText
//         updateDisplay();
//     })
// }

// function readNumber(element){
//     element.addEventListener("click",(e)=>{
//         currentNumber+=e.target.innerText;
//         updateDisplay();
//     })
// }
// numerics.forEach(readNumber(e),{

// })

// numerics[0].addEventListener("click",(e)=>{
//     currentNumber+=e.target.innerText;
//     updateDisplay();
// })
    

// numerics[1].addEventListener("click",number);

for (let i = 0;i < numerics.length; i++) {
    numerics[i].addEventListener('click', (e) => {
        currentNumber += e.target.innerText;
        updateDisplay();
    })
}