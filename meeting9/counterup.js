const waktu=document.getElementById("waktu");
const timerUp=setInterval(counterDown,1000);
let menit=0;
let detik=0;
let output_menit=0;
let output_detik=0;

function counterDown(){

    if(detik==0){
        detik=59;
        --menit;

    }else{
        --detik;
    }
    if(detik<10){
         detik="0"+detik;
    }
    if(menit<10){
        output_menit="0"+menit;
    }
    // if(menit==1){
    //     waktu.style.color="red"
    // }
    waktu.innerHTML=output_menit+":"+detik;
    clearInterval(menit && detik)
}