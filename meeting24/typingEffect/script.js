var txt = "Sakinah Mawadah Warrohmah";
var speed = 50; //MiliSecond
var i = 0;
const text = document.getElementById("text");
const btn = document.getElementById("btn");
function type() {
  if (i < txt.length) {
    text.innerHTML += txt[i];
    i++;
    setTimeout(type, speed);
  }
}
btn.addEventListener("click", type);
