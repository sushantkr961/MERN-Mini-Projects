import React, { useState } from "react";
import { toast } from "react-toastify";

const Login = () => {
  const [username, setUsername] = useState("");
  const [password, setPassword] = useState("");

  const handleLogin = async (e) => {
    e.preventDefault();

    const loginData = {
      email: username,
      password: password,
    };

    try {
      const response = await fetch("http://localhost:8080/api/user/login", {
        method: "POST",
        headers: {
          "Content-Type": "application/json",
        },
        body: JSON.stringify(loginData),
      });

      if (response.ok) {
        const data = await response.json();
        toast.success(data.message);
      } else {
        const data = await response.json();
        toast.error(data.message);
      }
    } catch (error) {
      console.log(error);
    }
  };

  return (
    <div className="container w-25">
      <h2>Login</h2>
      <form onSubmit={handleLogin}>
        <div className="mb-3">
          <label htmlFor="username" className="form-label">
            Username
          </label>
          <input
            type="text"
            className="form-control"
            id="username"
            placeholder="Enter your username"
            value={username}
            onChange={(e) => setUsername(e.target.value)}
          />
        </div>
        <div className="mb-3">
          <label htmlFor="password" className="form-label">
            Password
          </label>
          <input
            type="password"
            className="form-control"
            id="password"
            placeholder="Enter your password"
            value={password}
            onChange={(e) => setPassword(e.target.value)}
          />
        </div>
        <button type="submit" className="btn btn-primary">
          Log In
        </button>
      </form>
    </div>
  );
};

export default Login;
