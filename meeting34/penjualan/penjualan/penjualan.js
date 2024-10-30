var btn = document.getElementById("btn");

btn.addEventListener("click", function (event) {
    event.preventDefault();  
    var harga = parseFloat(document.getElementById("harga").value);  
    var margin = parseFloat(document.getElementById("margin").value); 
    var hasil = document.getElementById("hasil");

    function penjualan(harga, margin) {
        return harga + (harga * (margin / 100));
    }
    var hargaPenjualan = penjualan(harga, margin).toLocaleString('id-ID', { style: 'currency', currency: 'IDR' });
    hasil.innerHTML = "Harga penjualan adalah: " + hargaPenjualan;
});
