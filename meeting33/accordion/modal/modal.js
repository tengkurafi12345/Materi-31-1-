var modal = document.getElementById("myModal");
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("close")[0];
var msg = document.getElementById("id");
var input=document.getElementById("input").value;


btn.onclick = function() {
    // console.log(msg.value);
    msg.innerHTML=parseInt(msg.value)+1;
    modal.style.display = "block";
}
span.onclick = function() {
    modal.style.display = "none";
}
window.onclick = function(event) {
    if(event.target==modal) {
        modal.style.display = "none";
    }
}