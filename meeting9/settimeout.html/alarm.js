let waktu_sekarang=document.getElementById("clock");
let input_jam=document.getElementById("clock");
let input_menit=document.getElementById("menit");
let set_alarm=document.getElementById("set_alarm");
let alarm_clock="";

function alarm_on(){
    if(input_jam<10){
        input_jam="0"+input_jam;
    }
    if(input_menit<10){
        input_menit="0"+input_menit;
    }
    alarm_clock=input_jam+":"+input_menit+":"+"00";
    set_alarm.innerHTML="alarm set on : "+alarm_clock;
}