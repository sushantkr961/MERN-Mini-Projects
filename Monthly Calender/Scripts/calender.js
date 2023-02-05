// Write code related to Calender page here
const monthSelect = document.getElementById("month");
const week1Div = document.getElementById("Week-1");
const week2Div = document.getElementById("Week-2");
const week3Div = document.getElementById("Week-3");
const week4Div = document.getElementById("Week-4");

let meets = JSON.parse(localStorage.getItem("meets")) || [];

const showMeets = () => {
  let selectedMonth = monthSelect.value;

  // clear the previous meets
  week1Div.innerHTML = "";
  week2Div.innerHTML = "";
  week3Div.innerHTML = "";
  week4Div.innerHTML = "";

  // loop through the meets array and render only the meets with the selected month
  meets.forEach((meet) => {
    if (meet.month === selectedMonth) {
      let weekDiv;
      switch (meet.week) {
        case "Week-1":
          weekDiv = week1Div;
          break;
        case "Week-2":
          weekDiv = week2Div;
          break;
        case "Week-3":
          weekDiv = week3Div;
          break;
        case "Week-4":
          weekDiv = week4Div;
          break;
      }
      weekDiv.innerHTML += `
      <div class="single">
      <p><b>Name: </b> ${meet.name}</p>
      <p><b>Description: </b> ${meet.desc}</p>
      <p><b>Type: </b> ${meet.meetType}</p>
      <select id="weekUpdate" onchange="updateMeet(this, 'week', '${
        meet.name
      }')">
          <option value="Week-1" ${
            meet.week === "Week-1" ? "selected" : ""
          }>Week-1</option>
          <option value="Week-2" ${
            meet.week === "Week-2" ? "selected" : ""
          }>Week-2</option>
          <option value="Week-3" ${
            meet.week === "Week-3" ? "selected" : ""
          }>Week-3</option>
          <option value="Week-4" ${
            meet.week === "Week-4" ? "selected" : ""
          }>Week-4</option>
        </select>
        <button onclick="deleteMeet('${meet.name}')">Delete</button>
     </div>
      `;
    }
  });
};

// listen to the change event on the month select
monthSelect.addEventListener("change", showMeets);

// render meets initially with the default selected month
showMeets();

//function to update a meet
function updateMeet(elem, prop, name) {
  //get data from localStorage
  let meets = JSON.parse(localStorage.getItem("meets")) || [];

  //update the meet
  let meet = meets.find((meet) => meet.name === name);
  meet[prop] = elem.value;

  //update localStorage
  localStorage.setItem("meets", JSON.stringify(meets));

  //display updated meets
  showMeets();
  window.location.reload();
}

//function to delete a meet
function deleteMeet(name) {
  //get data from localStorage
  let meets = JSON.parse(localStorage.getItem("meets")) || [];

  //delete the meet
  meets = meets.filter((meet) => meet.name !== name);

  //update localStorage
  localStorage.setItem("meets", JSON.stringify(meets));

  //display updated meets
  showMeets();
  window.location.reload();
}
