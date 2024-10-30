$("document").ready(function () {
  $("#btn1").click(function () {
    $(".p-ganjil").addClass("change");
  });
  $("#btn2").click(function () {
    $("#p-genap,#p-genap1,#p-genap2,#p-genap3,#p-genap4,#p-genap5").css("color", "blue");
  });

  $("#btn2").mouseover(function () {
    $("#btn2").css("background-color", "black");
    $("#btn2").css("color", "white");
  });

  $("#btn2").mouseout(function () {
    $("#btn2").css("background-color", "white");
    $("#btn2").css("color", "black");
  });
  $("#btn1").mouseover(function () {
    $("#btn1").css("background-color", "black");
    $("#btn1").css("color", "white");
  });

  $("#btn1").mouseout(function () {
    $("#btn1").css("background-color", "white");
    $("#btn1").css("color", "black");
  });
});
