const pickDate=document.getElementById("input-waktu");
const btn=document.getElementById("btn");
const hasil=document.getElementById("hasil");
const now=new Date();

function calculate(){
    const choosenTime=new Date(pickDate.value)
    
    let nowDate=now.getDate();
    let nowMonth=now.getMonth();
    let nowYear=now.getFullYear();
    let choosenDate=choosenTime.getDate();
    let choosenMonth=choosenTime.getMonth();
    let choosenYear=choosenTime.getFullYear();

    let date;
    let month;
    let year;

    if(nowDate<choosenDate){
        nowDate+=30;
        --nowMonth;
    }
    date=nowDate-choosenDate;

    if(nowMonth<choosenMonth){
        nowMonth+=12;
        --nowYear;
    }
    month=nowMonth-choosenMonth;
    year=nowYear-choosenYear;

    pickDate.value="";

    hasil.innerHTML=year+" tahun" +month+"bulan" +date+ "hari";

}