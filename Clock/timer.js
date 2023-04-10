const leftDays = document.querySelector(".dd");
const leftHours = document.querySelector(".hh");
const leftMinutes = document.querySelector(".mm");
const leftSeconds = document.querySelector(".ss");

const second = 1000;
const minute = 60 * second;
const hour = 60 * minute;
const day = 24 * hour;

const timer = () => {
  const date = new Date();
  let din = String(date.getDate()).padStart(2, "0");
  let mahina = String(date.getMonth() + 1).padStart(2, "0");
  let saal = String(date.getFullYear()).padStart(2, "0");

  date = `${din}/${mahina}/${saal}`;

  const inputDay = prompt("Enter Day").padStart(2, "0");
  const inputMonth = prompt("Enter Month").padStart(2, "0");

  let finalDate = `${saal}/${inputMonth}/${inputDay}`;
  if (date > finalDate) {
    finalDate = `${saal + 1}/${inputMonth}/${inputDay}`;
  }

  setInterval(() => {
    const inputDate = new Date(finalDate).getTime();
    //   console.log(inputDate);
    const currentDate = new Date().getTime();
    //   console.log(currentDate);
    const diff = inputDate - currentDate;
    //   console.log(diff);
    const dd = Math.floor(diff / day);
    const hh = Math.floor((diff % day) / hour);
    const mm = Math.floor((diff % hour) / minute);
    const ss = Math.floor((diff % minute) / second);
    // console.log(`${dd}:${hh}:${mm}:${ss}`);
    leftDays.textContent = dd;
    leftHours.textContent = hh;
    leftMinutes.textContent = mm;
    leftSeconds.textContent = ss;
  }, 1000);
};
timer();
