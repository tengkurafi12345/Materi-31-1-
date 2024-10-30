$(document).ready(function () {
  // JS STYLE
  document.getElementById("demo1").style.color = "BLUE";
  // JQUERY STYLE

  $("#demo2").css("color", "red");
  // JS STYLE
  let btn = document.getElementById("btn");
  let text = document.getElementById("output");
  btn.addEventListener("click", function () {
    text.style.color = "BLUE";
    text.style.fontSize = "40px";
    text.style.fontWeight = "Bold";
  });
  //   Menambahkan class kedalam HTML lalu dimasukan ke JS dan dirubah lewat css
  let btn1 = document.getElementById("btn1");
  let text1 = document.getElementById("output1");

  btn1.addEventListener("click", function () {
    text1.classList.toggle("change");
  });

  //   JQUERY STYLE
  $("#btn2").click(function () {
    $("#output2").addClass("change");
  });

  $("#btn2").mouseover(function () {
    $("#btn2").css("background-color", "black");
    $("#btn2").css("color", "white");
  });

  $("#btn2").mouseout(function () {
    $("#btn2").css("background-color", "white");
    $("#btn2").css("color", "black");
  });
});
