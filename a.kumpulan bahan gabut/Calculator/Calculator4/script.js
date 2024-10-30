let currentInput = "";

// menambahkan angka yang ditekan pada kalkulator ke layar tampilan (display).
function addToDisplay(value) {
  const display = document.getElementById("display");
  display.value += value;
  currentInput += value;
}

function clearDisplay() {
  document.getElementById("display").value = "";
  currentInput = "";
}

function setToInputField(fieldId) {
  document.getElementById(fieldId).value = currentInput;
  clearDisplay(); // Clear display after setting the value
}

function calculateMargin() {
  const hargaJual = parseFloat(document.getElementById("hj").value);
  const hargaPokok = parseFloat(document.getElementById("hpp").value);

  if (isNaN(hargaJual) || isNaN(hargaPokok) || hargaPokok === 0) {
    document.getElementById("result").innerText = "Input tidak valid!";
    return;
  }

  const margin = ((hargaJual - hargaPokok) / hargaPokok) * 100;
  document.getElementById("result").innerText = "Margin: " + margin.toFixed(2) + "%";
}

function calculateHargaJual() {
  const hargaPokok = parseFloat(document.getElementById("hpp").value);
  const margin = parseFloat(document.getElementById("mrg").value);

  if (isNaN(hargaPokok) || isNaN(margin)) {
    document.getElementById("result").innerText = "Input tidak valid!";
    return;
  }

  const hargaJual = hargaPokok + (hargaPokok * margin) / 100;
  document.getElementById("result").innerText = "Harga Jual: Rp " + hargaJual.toFixed(2);
}

function calculateHargaPokok() {
  const hargaJual = parseFloat(document.getElementById("hj").value);
  const margin = parseFloat(document.getElementById("mrg").value);

  if (isNaN(hargaJual) || isNaN(margin)) {
    document.getElementById("result").innerText = "Input tidak valid!";
    return;
  }

  const hargaPokok = hargaJual / (1 + margin / 100);
  document.getElementById("result").innerText = "Harga Pokok Produk: Rp " + hargaPokok.toFixed(2);
}
