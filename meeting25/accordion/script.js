document.querySelectorAll(".accordion").forEach((button) => {
  button.addEventListener("click", () => {
    button.classList.toggle("active");
    if (button.classList.contains("active")) {
      content.style.display = "block";
    } else {
      content.style.display = "none";
    }
  });
});
//   let accordion = document.getElementById("accordion");
//   let panel1 = document.getElementById("panel1");
