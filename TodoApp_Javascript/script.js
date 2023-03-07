const newTaskInput = document.getElementById("new-task");
const addTaskButton = document.getElementById("add-task");
const taskList = document.getElementById("task-list");
const tasks = JSON.parse(localStorage.getItem("allTasks")) || [];

addTaskButton.addEventListener("click", () => {
  const task = document.createElement("li");
  const taskText = document.createElement("span");
  taskText.innerText = newTaskInput.value;
  task.appendChild(taskText);

  const completeCheckbox = document.createElement("input");
  completeCheckbox.type = "checkbox";
  completeCheckbox.addEventListener("change", () => {
    const taskIndex = tasks.findIndex((t) => t.text === taskText.innerText);
    tasks[taskIndex].completed = completeCheckbox.checked;
    localStorage.setItem("allTasks", JSON.stringify(tasks));
  });
  task.appendChild(completeCheckbox);

  const deleteButton = document.createElement("button");
  deleteButton.innerHTML = "&#10006";
  deleteButton.addEventListener("click", () => {
    task.remove();
    const taskIndex = tasks.findIndex((t) => t.text === taskText.innerText);
    tasks.splice(taskIndex, 1);
    localStorage.setItem("allTasks", JSON.stringify(tasks));
  });
  task.appendChild(deleteButton);

  taskList.appendChild(task);
  newTaskInput.value = "";

  // Save task to localStorage
  tasks.push({
    text: taskText.innerText,
    completed: false,
    deleted: false,
  });
  localStorage.setItem("allTasks", JSON.stringify(tasks));
});

// // Load saved tasks from localStorage
// const savedTasks = JSON.parse(localStorage.getItem('tasks')) || [];
// savedTasks.forEach((task) => {
//     addTask(task);
// });

// // Add new task
// function addTask(taskText) {
//     const task = document.createElement('li');
//     task.innerHTML = `
//         <span class="task-text">${taskText}</span>
//         <button class="delete-button">Delete</button>
//         <button class="complete-button">Complete</button>
//     `;
//     taskList.appendChild(task);

//     // Save task to localStorage
//     const tasks = JSON.parse(localStorage.getItem('tasks')) || [];
//     tasks.push(taskText);
//     localStorage.setItem('tasks', JSON.stringify(tasks));

//     // Add event listeners
//     const deleteButton = task.querySelector('.delete-button');
//     const completeButton = task.querySelector('.complete-button');

//     deleteButton.addEventListener('click', () => {
//         taskList.removeChild(task);

//         // Remove task from localStorage
//         const tasks = JSON.parse(localStorage.getItem('tasks')) || [];
//         const index = tasks.indexOf(taskText);
//         if (index !== -1) {
//             tasks.splice(index, 1);
//             localStorage.setItem('tasks', JSON.stringify(tasks));
//         }
//     });

//     completeButton.addEventListener('click', () => {
//         task.classList.toggle('completed');
//     });
// }

// // Add new task when button is clicked
// addTaskButton.addEventListener('click', () => {
//     const taskText = newTaskInput.value.trim();
//     if (taskText !== '') {
//         addTask(taskText);
//         newTaskInput.value = '';
//     }
// });

// // Add new task when enter key is pressed
// newTaskInput.addEventListener("keypress", (event) => {
//   if (event.keyCode === 13) {
//     const taskText = newTaskInput.value.trim();
//     if (taskText !== "") {
//       addTask(taskText);
//       newTaskInput.value = "";
//     }
//   }
// });
