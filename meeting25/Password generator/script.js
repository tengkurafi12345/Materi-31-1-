// var data = Math.floor(Math.random() * 10);
// document.write(data.toString());

// angka = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9"];

// function combine(length) {
//   const randomPassword = [randomNum, randomlower, randomUpper, symbol];
//   let result = "";
//   for (let i = 0; i < length; i++) {
//     const randomFunction = randomPassword[Math.floor(Math.random() * randomPassword.length)];
//     result += randomFunction();
//     function randomNum() {
//       var random = Math.floor(Math.random() * 10);
//       var results = random.toString();
//       return results;
//     }

//     function randomlower() {
//       const alpha = "abcdefghijklmnopqrstuvwxyz";
//       var index = Math.floor(Math.random() * alpha.length);
//       return alpha[index];
//     }
//     function randomUpper() {
//       const alpha = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
//       var index = Math.floor(Math.random() * alpha.length);
//       return alpha[index];
//     }
//     function symbol() {
//       const symbol = "!@)$&@^@*$($^%&";
//       var index = Math.floor(Math.random() * symbol.length);
//       return symbol[index];
//     }
//     i++;
//   }
//   return result;
// }
// console.log(combine(length));

// document.write(randomlower());
// document.write(randomNum());
// document.write(randomUpper());
// document.write(symbol());

function randomNum() {
  var random = Math.floor(Math.random() * 10);
  return random.toString();
}

function randomLower() {
  const alpha = "abcdefghijklmnopqrstuvwxyz";
  var index = Math.floor(Math.random() * alpha.length);
  return alpha[index];
}

function randomUpper() {
  const alpha = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
  var index = Math.floor(Math.random() * alpha.length);
  return alpha[index];
}

function randomSymbol() {
  const symbols = "!@)$&@^@*$($^%&";
  var index = Math.floor(Math.random() * symbols.length);
  return symbols[index];
}

function combine(length) {
  const randomFunctions = [randomNum, randomLower, randomUpper, randomSymbol];
  let result = "";

  for (let i = 0; i < length; i++) {
    // memiloh fungsi secara acak
    const randomFunction = randomFunctions[Math.floor(Math.random() * randomFunctions.length)];
    // Tambahkan karakter hasil dari fungsi yang dipilih
    result += randomFunction();
  }

  return result;
}

// Contoh penggunaan
const length = 4;
console.log(combine(length));
