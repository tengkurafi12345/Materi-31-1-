function dec2bin(dec) {
    if (dec >= 0) {
        // Jika bilangan positif, konversi langsung ke biner
        return dec.toString(2);
    } else {
        // Jika negatif, lakukan operasi untuk two's complement 32-bit
        return (dec >>> 0).toString(2);
    }
}
console.log(dec2bin(5));   //  "101"
console.log(dec2bin(-5));  //  "11111111111111111111111111111011"
console.log(dec2bin(0));   //  "0"

