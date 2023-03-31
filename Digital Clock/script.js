let hh = document.querySelector(".hh");
let mm = document.querySelector(".mm");
let ss = document.querySelector(".ss");
let am_pm = document.querySelector(".am_pm");

let liveTime = () => {
  let currentDate = new Date();
  //   console.log(currentDate);
  let hour = currentDate.getHours();
  let minute = currentDate.getMinutes();
  let second = currentDate.getSeconds();
  //   console.log("hour", hour, "minute", minute, "second", second);

  /** converting in 1-12 only if hour is >12 */
  hour = hour >= 12 ? hour - 12 : "";

  /** showing 0 when time is less than 10 */
  hour = hour < 10 ? "0" + hour : hour;
  minute = minute < 10 ? "0" + minute : minute;
  second = second < 10 ? "0" + second : second;

  /** Showing data on HTML */
  hh.textContent = hour;
  mm.textContent = minute;
  ss.textContent = second;

  /** converting AM and PM */
  hour >= 12 ? (am_pm.textContent = "PM") : (am_pm.textContent = "AM");
};

setInterval(liveTime, 1000);
