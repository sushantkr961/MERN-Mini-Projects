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
