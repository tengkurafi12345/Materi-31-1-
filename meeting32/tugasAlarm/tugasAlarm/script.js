const currentTime = document.querySelector("h1"),
content = document.querySelector(".content"),
selectMenu = document.querySelectorAll("select"),
setAlarmBtn = document.querySelector("button"),
remainingTimeDisplay = document.querySelector(".remaining");

let alarmTime, isAlarmSet;
const ringtone = new Audio("./files/ringtone.mp3");

for (let i = 12; i > 0; i--) {
    i = i < 10 ? `0${i}` : i;
    let option = `<option value="${i}">${i}</option>`;
    selectMenu[0].firstElementChild.insertAdjacentHTML("afterend", option);
}

for (let i = 59; i >= 0; i--) {
    i = i < 10 ? `0${i}` : i;
    let option = `<option value="${i}">${i}</option>`;
    selectMenu[1].firstElementChild.insertAdjacentHTML("afterend", option);
}

for (let i = 2; i > 0; i--) {
    let ampm = i === 1 ? "AM" : "PM";
    let option = `<option value="${ampm}">${ampm}</option>`;
    selectMenu[2].firstElementChild.insertAdjacentHTML("afterend", option);
}

setInterval(() => {
    let date = new Date(),
    h = date.getHours(),
    m = date.getMinutes(),
    s = date.getSeconds(),
    ampm = "AM";

    if(h >= 12) {
        h = h - 12;
        ampm = "PM";
    }
    h = h === 0 ? 12 : h;
    h = h < 10 ? "0" + h : h;
    m = m < 10 ? "0" + m : m;
    s = s < 10 ? "0" + s : s;
    currentTime.innerText = `${h}:${m}:${s} ${ampm}`;

    if (alarmTime === `${h}:${m} ${ampm}`) {
        ringtone.play();
        ringtone.loop = true;
    }

    if (alarmTime) {
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
