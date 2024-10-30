// CARA 1

// function minMax(arr) {
//     // Menggunakan Math.min dan Math.max dengan spread operator untuk menemukan nilai terkecil dan terbesar
//     return [Math.min(...arr), Math.max(...arr)];
// }

// console.log(minMax([1, 2, 3, 4, 5]));     // Output: [1, 5]
// console.log(minMax([2334454, 5]));         // Output: [5, 2334454]
// console.log(minMax([1]));                  // Output: [1, 1]
// console.log(minMax([-10, 0, 5, 100]));     // Output: [-10, 100]



// CARA 2
// function minMax(arr) {
//     let min = arr[0];
//     let max = arr[0];
    
//     arr.forEach(num => {
//         if (num < min) {
//             min = num;
//         }
//         if (num > max) {
//             max = num;
//         }
//     });
    
//     return [min, max];
// }
// console.log(minMax([42, 42, 42]));         // Output: [42, 42]


// CARA 3

// const arr=[500,798,878,356,21,1021,623,211206,]
// let min=arr[0]
// let max=arr[0]
// let hasil=arr[0]

// for(let i=0;i<arr.length;i++){
//     if(min>arr[i]){  //min
//         min=arr[i];
//     }
//     if(max<arr[i]){  //max
//         max=arr[i];
//     }
// }
// console.log(min);
// console.log(max);



// CARA 4

function minmax(arr) {
    if (arr.length === 0) return []; // Menangani kasus array kosong

    let min = arr[0];
    let max = arr[0];

    for (let i = 1; i < arr.length; i++) {
        if (min > arr[i]) {
            min = arr[i];
        }
        if (max < arr[i]) {
            max = arr[i];
        }
    }

    return [min, max]; // Mengembalikan array dengan nilai minimum dan maksimum
}

let arr = [3, 5, 1, 9, -2];
console.log(minmax(arr)); // Output: [-2, 9]
