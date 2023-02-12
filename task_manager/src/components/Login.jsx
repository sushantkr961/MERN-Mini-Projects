import React, { useState } from "react";
import { Link, useNavigate } from "react-router-dom";

const Login = () => {
  const [email, setEmail] = useState("");
  const [password, setPassword] = useState("");
  const [error, setError] = useState("");

  const navigate = useNavigate();

  const handleLogin = async (e) => {
    e.preventDefault();

    // Check if the user with the given email and password exists in the JSON server

    try {
      const response = await fetch(
        "https://mock-6-api.vercel.app/users?email=" +
          email +
          "&password=" +
          password
      );
      const data = await response.json();

      if (data.length === 0) {
        setError("Email or password is incorrect");
      } else {
        navigate("/tasks");
      }
    } catch (error) {
      // console.error(error);
    }

  };

  return (
    <>
    <h1>Login</h1>
    <div>
      {error && <p>{error}</p>}
      <form onSubmit={handleLogin}>
      <label htmlFor="email">Email:</label> <br />
        <input
          type="email"
          value={email}
          onChange={(e) => setEmail(e.target.value)}
        /> <br />
        <label htmlFor="email">Password:</label> <br />
        <input
          type="password"
          value={password}
          onChange={(e) => setPassword(e.target.value)}
        /> <br />
        <button type="submit">Login</button>
        <p className="account">Don't have a account <Link to={"/"}>Register</Link></p>
      </form>
    </div>
    </>
  );
};

export default Login;