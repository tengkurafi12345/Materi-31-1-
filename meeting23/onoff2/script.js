$("document").ready(function () {
  $("#image").click(function () {
    if ($(this).attr("src") == "OFFbulb.jpg") {
      $(this).attr("src", "ONbulb.jpg");
    } else {
      $(this).attr("src", "OFFbulb.jpg");
    }
  });
});
