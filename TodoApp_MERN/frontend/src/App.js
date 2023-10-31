import React from "react";
import "./App.css";
import Signin from "./Pages/Signin";
import Login from "./Pages/Login";
import Navbar from "./components/Navbar";
import { Routes, Route, BrowserRouter } from "react-router-dom";
import Todo from "./components/Todo";
import { ToastContainer } from "react-toastify";

function App() {
  return (
    <div className="App">
      <ToastContainer />
      <BrowserRouter basename="/">
        <Navbar />
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
