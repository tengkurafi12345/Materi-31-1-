// querySelector memanggil data di html
const currentTime = document.querySelector("h1"),
content = document.querySelector(".content"),
selectMenu = document.querySelectorAll("select"),
setAlarmBtn = document.querySelector("button"),
// mengseleksi untuk wadah dari fitur remaining time
remainingTimeDisplay = document.querySelector(".remaining");

// membuat let waktu alarm dan setting alarm
let alarmTime, isAlarmSet;
// menambahkan konstanta ringtone dan mp3 nya
const ringtone = new Audio("./files/ringtone.mp3");

/* menambahkan opsi setting jam
untuk yang pertama itu adalah me looping, dimulai dari i diatur ke 12 dan berlanjut selama i lebih besar dari 0
i = --(dikurang) */
for (let i = 12; i > 0; i--) {
    /* operator ternary yang digunakan untuk memformat nilai i
    Jika i kurang dari 10, maka tambahkan angka nol di depan (0${i}).
    Jika tidak, nilai i tetap seperti itu. */
    i = i < 10 ? `0${i}` : i;
    /* Membuat string HTML untuk elemen <option>.
    value dan isi (inner text) dari elemen <option> diatur ke nilai i */
    let option = `<option value="${i}">${i}</option>`;
    /* selectMenu[0] adalah elemen <select> pertama dari selectMenu (seharusnya ada beberapa elemen <select> di HTML).
    firstElementChild mengacu pada elemen pertama di dalam elemen <select>, yang biasanya adalah elemen <option> default.
    insertAdjacentHTML("afterend", option) menyisipkan string HTML option setelah elemen pertama di dalam <select>. 
    */
    selectMenu[0].firstElementChild.insertAdjacentHTML("afterend", option);
}
// menambahkan opsi setting jam
for (let i = 59; i >= 0; i--) {
    i = i < 10 ? `0${i}` : i;
    let option = `<option value="${i}">${i}</option>`;
    selectMenu[1].firstElementChild.insertAdjacentHTML("afterend", option);
}
// menambahkan opsi setting jam
for (let i = 2; i > 0; i--) {
    let ampm = i === 1 ? "AM" : "PM";
    let option = `<option value="${ampm}">${ampm}</option>`;
    selectMenu[2].firstElementChild.insertAdjacentHTML("afterend", option);
}

// setInterval adalah fungsi JavaScript yang menjalankan kode di dalamnya setiap interval waktu tertentu, dalam hal ini setiap 1000 milidetik (1 detik).
setInterval(() => {
    // new Date() menciptakan objek Date baru yang mewakili waktu saat ini.
    // date.getHours(), date.getMinutes(), dan date.getSeconds() digunakan untuk mendapatkan jam, menit, dan detik dari waktu saat ini.
    // ampm diinisialisasi dengan "AM". Ini akan diubah menjadi "PM" jika waktu saat ini berada di sore hari.
    let date = new Date(),
    h = date.getHours(),
    m = date.getMinutes(),
    s = date.getSeconds(),
    ampm = "AM";

    if(h >= 12) {
        h = h - 12;
        ampm = "PM";
    }
    // perintah asli youtubenya
    // h = h == 0 ? h = 12 : h;
    h = h === 0 ? 12 : h;
    h = h < 10 ? "0" + h : h;
    m = m < 10 ? "0" + m : m;
    s = s < 10 ? "0" + s : s;
    currentTime.innerText = `${h}:${m}:${s} ${ampm}`;

    if (alarmTime === `${h}:${m} ${ampm}`) {
        ringtone.play();
        ringtone.loop = true;
    }

    // penambahan kode untuk fitur remaining timenya
    // membuat if condition untuk let alarmTime
    if (alarmTime) {
        // membuat konstanta alarmH, M dan AMPM dan di split(potong)
        const [alarmH, alarmM, alarmAMPM] = alarmTime.split(/[:\s]/);
        let alarmHour = parseInt(alarmH, 10);
        if (alarmAMPM === "PM" && alarmHour !== 12) alarmHour += 12;
        if (alarmAMPM === "AM" && alarmHour === 12) alarmHour = 0;

        let alarmDate = new Date();
        alarmDate.setHours(alarmHour, parseInt(alarmM, 10), 0, 0);

        const timeDiff = alarmDate - date;
        if (timeDiff > 0) {
            const diffHours = Math.floor(timeDiff / (1000 * 60 * 60));
            const diffMinutes = Math.floor((timeDiff % (1000 * 60 * 60)) / (1000 * 60));
            const diffSeconds = Math.floor((timeDiff % (1000 * 60)) / 1000);
            remainingTimeDisplay.innerText = `Sisa waktu: ${diffHours} jam ${diffMinutes} menit ${diffSeconds} detik`;
        } else {
            remainingTimeDisplay.innerText = "Alarm telah berlalu";
        }
    }
}, 1000);

function setAlarm() {
    if (isAlarmSet) {
        alarmTime = "";
        ringtone.pause();
        content.classList.remove("disable");
        setAlarmBtn.innerText = "Set Alarm";
        //ringtone.currentTime dan remainingTimeDisplay terinclude di fitur Remaining
        ringtone.currentTime = 0;
        remainingTimeDisplay.innerText = ""; 
        return isAlarmSet = false;
    }

    let time = `${selectMenu[0].value}:${selectMenu[1].value} ${selectMenu[2].value}`;
    if (time.includes("Hour") || time.includes("Minute") || time.includes("AM/PM")) {
        return alert("Please, select a valid time to set Alarm!");
    }
    alarmTime = time;
    isAlarmSet = true;
    content.classList.add("disable");
    setAlarmBtn.innerText = "Clear Alarm";
}

setAlarmBtn.addEventListener("click", setAlarm);
