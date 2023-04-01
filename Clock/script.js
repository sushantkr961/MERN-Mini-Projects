let hh = document.querySelector(".hh");
let mm = document.querySelector(".mm");
let ss = document.querySelector(".ss");
let am_pm = document.querySelector(".am_pm");
let date = document.querySelector(".date");
let day = document.querySelector(".day");

let liveTime = () => {
  let currentDate = new Date();
  // console.log(currentDate.toString().slice(0, 4));
  // console.log(currentDate.toLocaleDateString());
  // console.log(currentDate.toString().slice(4, 15));
  day.textContent = currentDate.toString().slice(0, 4);
  date.textContent = currentDate.toLocaleDateString();
  let hour = currentDate.getHours();
  let minute = currentDate.getMinutes();
  let second = currentDate.getSeconds();
  // console.log("hour", hour, "minute", minute, "second", second);

  /** converting in 1-12 only if hour is >12 */
  hour = hour >= 12 ? hour - 12 : hour;

  /** showing 0 when time is less than 10 */
  hour = hour < 10 ? "0" + hour : hour;
  minute = minute < 10 ? "0" + minute : minute;
  second = second < 10 ? "0" + second : second;

  /** Showing data on HTML */
  hh.textContent = hour;
  mm.textContent = minute;
  ss.textContent = second;

  /** converting AM and PM */
  am_pm.textContent = hour >= 12 ? "AM" : "PM";
};

setInterval(liveTime, 1000);
