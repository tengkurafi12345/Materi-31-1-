const hoursSelect = document.getElementById('hours');
const minutesSelect = document.getElementById('minutes');
const ampmSelect = document.getElementById('ampm');
const currentTimeDisplay = document.getElementById('current-time');
const alarmSound = document.getElementById('alarm-sound');
const alarmStatus = document.getElementById('alarm-status');
let alarmTime = null;
let isAlarmSet = false;

// Populate hours and minutes dropdowns
for (let i = 1; i <= 12; i++) {
    let option = document.createElement('option');
    option.value = i;
    option.innerText = i;
    hoursSelect.appendChild(option);
}

for (let i = 0; i < 60; i++) {
    let option = document.createElement('option');
    option.value = i < 10 ? '0' + i : i;
    option.innerText = option.value;
    minutesSelect.appendChild(option);
}

// Function to update the current time every second
function updateTime() {
    const now = new Date();
    let hours = now.getHours();
    let minutes = now.getMinutes();
    let seconds = now.getSeconds();
    let ampm = hours >= 12 ? 'PM' : 'AM';
    
    hours = hours % 12 || 12;  // Convert to 12-hour format
    minutes = minutes < 10 ? '0' + minutes : minutes;
    seconds = seconds < 10 ? '0' + seconds : seconds;
    
    currentTimeDisplay.innerHTML = `${hours}:${minutes}:${seconds} ${ampm}`;
    
    // Check if the current time matches the alarm time
    if (alarmTime === `${hours}:${minutes} ${ampm}` && !isAlarmSet) {
        alarmSound.play();
        alarmStatus.innerText = "Alarm is ringing!";
        isAlarmSet = true;
    }
}

setInterval(updateTime, 1000);

// Set the alarm
document.getElementById('set-alarm').addEventListener('click', function() {
    const selectedHour = hoursSelect.value;
    const selectedMinute = minutesSelect.value;
    const selectedAmpm = ampmSelect.value;
    
    if (selectedHour === "Hour" || selectedMinute === "Minute" || selectedAmpm === "AM/PM") {
        alert('Please select a valid time for the alarm.');
        return;
    }
    
    alarmTime = `${selectedHour}:${selectedMinute} ${selectedAmpm}`;
    alarmStatus.innerText = `Alarm set for ${alarmTime}`;
    isAlarmSet = false;
});
