let paragraph = document.getElementsByClassName("p");
let btn1 = document.getElementById("btn1");
let btn2 = document.getElementById("btn2");

function genap() {
  for (let i = 1; i <= paragraph.length; i++) {
    if (i % 2 == 0) {
      paragraph[i - 1].style.color = "blue";
    }
  }
}

function ganjil() {
  for (let i = 1; i <= paragraph.length; i++) {
    if (i % 2 != 0) {
      paragraph[i - 1].style.color = "red";
    }
  }
}

btn1.addEventListener("click", genap);
btn2.addEventListener("click", ganjil);
