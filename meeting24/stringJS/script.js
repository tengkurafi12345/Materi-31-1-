//string length untuk mengembalikan panjang string/mengubah character menjadi angka:
let text = "SAKINAH B MAWADAH WAROHMAH AAMIIN";

document.getElementById("demo").innerHTML = text.length;
// charAt() method untuk mengambil character pada posisi yang di perintahkan
document.getElementById("demo1").innerHTML = text.charAt(8);
//charCodeAt()method untuk mengembalikan unicode character pada posisi yang di berikan di dalam string
document.getElementById("demo2").innerHTML = text.charCodeAt(8);
//repeat method untuk menjalankan dua kali
document.getElementById("demo3").innerHTML = text.repeat(2);
//untuk menimpa character pada posisi yang dituju
document.getElementById("demo3").innerHTML = text.replace();
//
// let text = "Please locate where 'locate' occurs!";
let index = text.indexOf("MAWADAH");
document.getElementById("demo4").innerHTML = index;
