const display = document.getElementById('display');
const numerics = document.getElementsByClassName('numeric');
let currentNumber = "";
let number1 = 0;
let number2 = 0;

function updateDisplay() {
    display.innerText = currentNumber;
}

// // // ini cara pertama
// for(let i = 0;i <numerics.length; i++) {
//     numerics[i].addEventListener('click', function() {
//         currentNumber += numerics[i].innerText
//         updateDisplay();
//     })
// }

// // // ini cara kedua
// number = () => {
//     currentNumber += numerics[0].innerText;
//     updateDisplay();
// }
// numerics[0].addEventListener('click', number);

// // // ini cara ketiga
for (let i = 0;i < numerics.length; i++) {
    numerics[i].addEventListener('click', (e) => {
        currentNumber += e.target.innerText;
        updateDisplay();
    })
}

// // // ini cara ke empat, breakk
// function readNumber(element) {
//     element.addEventListener('click', (e) => {
//         currentNumber += e.target.innerText;
//         updateDisplay();
//     })
// }
// numerics.forEach(readNumber(element));
