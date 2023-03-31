let startbtn = document.querySelector(".start");
let stopbtn = document.querySelector(".stop");
let resetbtn = document.querySelector(".reset");

let hour = (minute = second = milisec = "0" + 0);
let startTimer;

startbtn.addEventListener("click", start);
stopbtn.addEventListener("click", stop);
resetbtn.addEventListener("click", reset);

function start() {
  // Disable the "Start" button while the timer is running
  startbtn.disabled = true;

  startTimer = setInterval(() => {
    milisec++;
    milisec = milisec < 10 ? "0" + milisec : milisec;
    if (milisec == 100) {
      second++;
      second = second < 10 ? "0" + second : second;
      milisec = "0" + 0;
    }
    if (second == 60) {
      minute++;
      minute = minute < 10 ? "0" + minute : minute;
      second = "0" + 0;
    }
    if (minute == 60) {
      hour++;
      hour = hour < 10 ? "0" + hour : hour;
      minute = "0" + 0;
    }
    // console.log(`${hour}:${minute}:${second}:${milisec}`);
    showValue();
  }, 10);
}

function stop() {
  clearInterval(startTimer);
  // Enable the "Start" button after the timer is stopped
  startbtn.disabled = false;
}

function reset() {
  clearInterval(startTimer);
  hour = minute = second = milisec = "0" + 0;
  showValue();
  // Enable the "Start" button after the timer is reset
  startbtn.disabled = false;
}

function showValue() {
  document.querySelector(".hrs").innerHTML = hour;
  document.querySelector(".min").innerHTML = minute;
  document.querySelector(".sec").innerHTML = second;
  document.querySelector(".ms").innerHTML = milisec;
}
