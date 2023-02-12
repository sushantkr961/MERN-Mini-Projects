import React, { useState, useEffect } from "react";
import { useNavigate } from "react-router-dom";

const Tasks = () => {
  const [tasks, setTasks] = useState([]);
  const [newTask, setNewTask] = useState("");
  const [error, setError] = useState("");

  const navigate = useNavigate();

  useEffect(() => {
    // Fetch the tasks for the logged in user from the JSON server
    fetch("https://mock-6-api.vercel.app/tasks")
      .then((res) => res.json())
      .then((data) => {
        console.log(data);
        if (data.tasks) {
          setTasks(data.tasks.filter((task) => task.userId === 1));
        }
      })
      .catch((err) => {
        console.error(err);
      });
  }, []);

  const handleAddTask = (e) => {
    e.preventDefault();

    if (tasks.length >= 5) {
      setError("Daily limit exceeded");
      setTimeout(() => {
        setError("");
      }, 3000);
      return;
    }

    // Add the new task to the tasks array and update the state
    setTasks([
      ...tasks,
      { id: tasks.length + 1, userId: 1, date: "2023-02-06", task: newTask },
    ]);
    setNewTask("");
    setError("");

    // Update the tasks in the JSON server
    fetch("https://mock-6-api.vercel.app/tasks", {
      method: "POST",
      headers: { "Content-Type": "application/json" },
      body: JSON.stringify({
        userId: 1,
        date: Date.now(),
        task: newTask,
      }),
    })
      .then((res) => res.json())
      .then((data) => {
        console.log(data);
      })
      .catch((err) => {
        console.error(err);
      });
  };

  const handleDeleteTask = (taskId) => {
    // Remove the task with the given taskId from the tasks array and update the state
    setTasks(tasks.filter((task) => task.id !== taskId));

    // Delete the task from the JSON server
    fetch(`https://mock-6-api.vercel.app/tasks/${taskId}`, { method: "DELETE" })
      .then((res) => res.json())
      .then((data) => {
        // console.log(data);
      })
      .catch((err) => {
        // console.error(err);
      });
  };

  const handleLogout = () => {
    navigate("/login");
  };

  return (
    <>
      <h1>Task Manager</h1>
      <div>
        <form onSubmit={handleAddTask}>
          <input
            required
            placeholder="Enter Task"
            type="text"
            value={newTask}
            onChange={(e) => setNewTask(e.target.value)}
          />
          <button type="submit">Add Task</button>
          <button onClick={handleLogout}>Logout</button>
        </form>
        {error && <p>{error}</p>}
        <ol>
          {tasks.map((task) => (
            <li key={task.id}>
              {task.task}
              <button type="button" onClick={() => handleDeleteTask(task.id)}>
                Delete
              </button>
            </li>
          ))}
        </ol>
      </div>
    </>
  );
};

export default Tasks;
