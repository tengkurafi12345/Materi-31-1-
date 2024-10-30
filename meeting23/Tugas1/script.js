let lamp = document.getElementById("lamp");
lamp.addEventListener("click", function () {
  if (lamp.src.match("OFFbulb")) {
    lamp.src = "ONbulb.jpg";
  } else {
    lamp.src = "OFFbulb.jpg";
  }
});
