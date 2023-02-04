// Write code related to Home page here

// function task(n, d, m, w, mt) {
//   this.name = n;
//   this.desc = d;
//   this.month = m;
//   this.week = w;
//   this.meetType = mt;
// }

let form = document.querySelector("form");

function handleSubmit(event) {
  event.preventDefault();

  let name = form.name.value;
  let desc = form.desc.value;
  let month = form.month.value;
  let week = form.week.value;
  let meetType = form.meetType.value;

  //   console.log(name, desc, month, week, meetType);
  // let t1 = new task(name, desc, month, week, meetType);

  //   console.log(t1);
  let taskArr = JSON.parse(localStorage.getItem("meets")) || [];
  // taskArr.push(t1);
  taskArr.push({ name, desc, month, week, meetType });
  localStorage.setItem("meets", JSON.stringify(taskArr));
  console.log(taskArr);
  window.location.reload();
}
