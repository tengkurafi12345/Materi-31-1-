let angka1=document.getElementsByClassName("numeric")[0];
let angka2=document.getElementsByClassName("numeric")[1];
let output=document.getElementById("output");
const btnOperator=document.getElementsByClassName("operator");


// btnOperator[0].addEventListener("click",function(){
//     console.log(angka1.value);
//     console.log(angka2.value);
// })

for(let i=0;i<btnOperator.length;i++){
    let status1=false;
    let status2=false;
    
    btnOperator[i].addEventListener("click",function(){
        if(angka1.value==""){ output.innerHTML+="angka 1 belom ke isi";}else{
            num1=parseFloat(angka1.value)}

        if(angka2.value==""){ output.innerHTML+="angka 2 belom ke isi";}else{
            num2=parseFloat(angka2.value)}


        // if(btnOperator[i].value=="+"){
        //     output.innerHTML=angka1.value+angka2.value;
        // }

        if (status1 == status2) {
            if (btnOperator[i].value =="+"){
                output.innerHTML = num1 + num2;
            }
            if (btnOperator[i].value =="-"){
                output.innerHTML = num1 - num2;
            }
            if (btnOperator[i].value =="x"){
                output.innerHTML = num1 * num2;
            }
            if (btnOperator[i].value =="/"){
                output.innerHTML = num1 / num2;
            }
            
        }
    })
}

