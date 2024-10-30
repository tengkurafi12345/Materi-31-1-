var btn = document.getElementById("btn");

btn.addEventListener("click", function (event) {
    event.preventDefault();  // Mencegah form dari reload

    var hargaPokok = parseFloat(document.getElementById("harga").value);  // Konversi input harga pokok ke number
    var hargaPenjualan = parseFloat(document.getElementById("harga_penjualan").value); // Konversi input harga penjualan ke number
    var hasil = document.getElementById("hasil");

    // Fungsi untuk menghitung persentase margin
    function hitungMargin(hargaPokok, hargaPenjualan) {
        return ((hargaPenjualan - hargaPokok) / hargaPokok) * 100;
    }

    // Hitung margin
    var margin = hitungMargin(hargaPokok, hargaPenjualan).toFixed(2);  // Dibatasi dua angka desimal

    // Tampilkan hasil perhitungan
    hasil.innerHTML = "Persentase margin adalah: " + margin + "%";
});
