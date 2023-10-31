import React, { useState } from "react";

const Todo = () => {
  const [title, setTitle] = useState("");
  const [body, setBody] = useState("");
  // const [todos, setTodos] = useState([]);

  const handleAddTodo = async () => {};

  return (
    <div className="container w-50">
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
          rows={3}
          value={body}
          onChange={(e) => setBody(e.target.value)}
        ></textarea>
      </div>
      <button
        type="button"
        className="btn btn-secondary"
        onClick={handleAddTodo}
      >
        Add +
      </button>
      {/* <div>
        <h3>Todo List</h3>
        <ul>
          {todos.map((todo, index) => (
            <li key={index}>
              <strong>Title: </strong>
              {todo.title}
              <br />
              <strong>Body: </strong>
              {todo.body}
            </li>
          ))}
        </ul>
      </div> */}
    </div>
  );
};

export default Todo;
