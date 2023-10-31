import React from "react";
import "./App.css";
import { Routes, Route, BrowserRouter } from "react-router-dom";

import Login from "./pages/Login";
import Signin from "./pages/Signup";
import Todo from "./pages/Todo";


function App() {
  return (
    <div className="App">
      <BrowserRouter basename="/">
        <Routes>
          <Route path="/" element={<Login />} />
          <Route path="/register" element={<Signin />} />
          <Route path="/todo" element={<Todo />} />
          {/* <Route path="*" element={} /> */}
        </Routes>
      </BrowserRouter>
    </div>
  );
}

export default App;
