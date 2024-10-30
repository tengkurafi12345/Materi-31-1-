let display = document.getElementById('display');

// Fungsi untuk membersihkan layar
function clearDisplay() {
    display.value = '';
}

// Fungsi untuk menghapus karakter terakhir
function deleteLast() {
    display.value = display.value.slice(0, -1);
}

// Fungsi untuk menambahkan karakter ke layar
function appendCharacter(character) {
    display.value += character;
}

// Fungsi untuk mengganti istilah bisnis menjadi simbol matematika
function translateExpression(expression) {
    return expression
        .replace(/hpp/g, '+')     // Mengganti HPP dengan operasi penjumlahan
        .replace(/hj/g, '-')      // Mengganti Harga Jual (HJ) dengan pengurangan
        .replace(/mgn/g, '*')     // Mengganti Margin (MGN) dengan perkalian
        .replace(/%/g, '/');      // Mengganti Persentase (%) dengan pembagian
}

// Fungsi untuk melakukan perhitungan
function calculate() {
    try {
        let translatedExpression = translateExpression(display.value);
        let result = eval(translatedExpression); // Menggunakan eval untuk menghitung
        display.value = result;
    } catch (error) {
        display.value = 'Error';
    }
}
