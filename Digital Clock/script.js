let hh = document.querySelector(".hh");
let mm = document.querySelector(".mm");
let ss = document.querySelector(".ss");
let am_pm = document.querySelector(".am_pm");

let liveTime = () => {
  let currentDate = new Date();
  console.log(currentDate);
  let hour = currentDate.getHours();
  console.log("hour", hour);
  hh.innerHTML = hour;
  let minute = currentDate.getMinutes();
  console.log("minute", minute);
  mm.innerHTML = minute;
  let second = currentDate.getSeconds();
  console.log("second", second);
  ss.innerHTML = second;

  hour >= 12 ? (am_pm.textContent = "PM") : (am_pm.textContent = "AM");

  hour >= 12 ? hour - 12 : "";
};

setInterval(liveTime, 1000);
