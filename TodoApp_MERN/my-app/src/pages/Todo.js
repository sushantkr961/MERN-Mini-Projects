import React, { useState, useEffect } from "react";
import { useLocation } from "react-router-dom";
import Navbar2 from "../components/Navbar2";

const Todo = () => {
  const [title, setTitle] = useState("");
  const [body, setBody] = useState("");
  const [todos, setTodos] = useState([]);
  const [editingTask, setEditingTask] = useState(null);
  const location = useLocation();
  const user = location.state?.user;

  // Fetch tasks from your API when the component mounts
  useEffect(() => {
    fetchTasks();
  }, []);

  const fetchTasks = () => {
    fetch(`http://localhost:8080/api/task/${user._id}`)
      .then((response) => response.json())
      .then((data) => {
        setTodos(data.Tasks);
      })
      .catch((error) => {
        console.error("Error fetching tasks:", error);
      });
  };

  const handleEditTodo = (task) => {
    setEditingTask(task);
    setTitle(task.title);
    setBody(task.body);
  };

  const handleAddOrUpdateTodo = () => {
    if (editingTask) {
      // Update the task
      const updatedTaskData = { title, body, email: user.email };
      fetch(`http://localhost:8080/api/task/update/${editingTask._id}`, {
        method: "PUT",
        headers: {
          "Content-Type": "application/json",
        },
        body: JSON.stringify(updatedTaskData),
      })
        .then((response) => response.json())
        .then((data) => {
          fetchTasks();
          setEditingTask(null);
          setTitle("");
          setBody("");
        })
        .catch((error) => {
          console.error("Error updating task:", error);
        });
    } else {
      // Add a new task
      const taskData = { title, body, email: user.email };
      fetch("http://localhost:8080/api/task/add", {
        method: "POST",
        headers: {
          "Content-Type": "application/json",
        },
        body: JSON.stringify(taskData),
      })
        .then((response) => response.json())
        .then((data) => {
          fetchTasks();
          setTitle("");
          setBody("");
        })
        .catch((error) => {
          console.error("Error adding task:", error);
        });
    }
  };

  const handleDeleteTodo = (id) => {
    const email = user.email;

    fetch(`http://localhost:8080/api/task/delete/${id}`, {
      method: "DELETE",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify({ email }),
    })
      .then(() => {
        fetchTasks();
      })
      .catch((error) => {
        console.error("Error deleting task:", error);
      });
  };

  return (
    <>
      <Navbar2 />
      <div className="container w-75">
        <div className="mb-3">
          <label htmlFor="exampleFormControlInput1" className="form-label">
            Title
          </label>
          <input
            type="text"
            className="form-control"
            id="exampleFormControlInput1"
            placeholder="Title"
            value={title}
            onChange={(e) => setTitle(e.target.value)}
          />
        </div>
        <div className="mb-3">
          <label htmlFor="exampleFormControlTextarea1" className="form-label">
            Body
          </label>
          <textarea
            className="form-control"
            id="exampleFormControlTextarea1"
            rows="3"
            value={body}
            onChange={(e) => setBody(e.target.value)}
          ></textarea>
          <button
            className="btn btn-primary mt-3"
            onClick={handleAddOrUpdateTodo}
          >
            {editingTask ? "Update" : "ADD +"}
          </button>
        </div>
        <div className="container row gy-5 mt-3 m-auto justify-content-around">
          <h6 className="fs-2 text-black-50">All Tasks</h6>
          {Array.isArray(todos) && todos.length > 0 ? (
            todos.map((todo) => (
              <div className="card" style={{ width: "18rem" }} key={todo._id}>
                <div className="card-body">
                  <h5 className="card-title">{todo.title}</h5>
                  <p className="card-text">{todo.body}</p>
                  <div className="d-flex justify-content-between">
                    <button
                      className="btn btn-info"
                      onClick={() => handleEditTodo(todo)}
                    >
                      Edit
                    </button>
                    <button
                      className="btn btn-danger"
                      onClick={() => handleDeleteTodo(todo._id)}
                    >
                      Delete
                    </button>
                  </div>
                </div>
              </div>
            ))
          ) : (
            <p>No tasks available.</p>
          )}
        </div>
      </div>
    </>
  );
};

export default Todo;
