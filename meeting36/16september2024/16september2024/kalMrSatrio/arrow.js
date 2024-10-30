function hello() {
    console.log('hello guys');
}

function data(x) {
    return x+8;
}

let y = (x) => {
    return x+8
}
// let y =x=> {
//     return x+8
// }

let x = data(8);

console.log(y(7));

// hello();