const clock=document.getElementById("clock");
        setInterval(showClock,1000
        );
        
        function showClock(){
            let time=new Date();
        let jam=time.getHours();
        let menit=time.getMinutes();
        let detik=time.getSeconds();
        if(detik<10){
            detik="0"+detik;
        }
        if(detik<10){
            detik="0"+menit;
        }
        if(detik<10){
            detik="0"+jam;
        }
        
        let waktu_sekarang=jam+":"+menit+":"+detik;

        clock.innerHTML=waktu_sekarang;

        }