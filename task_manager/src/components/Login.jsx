import axios from "axios";
import React, { useState } from "react";
import { Link, useNavigate } from "react-router-dom";

const Login = () => {
  const [email, setEmail] = useState("");
  const [password, setPassword] = useState("");
  const [error, setError] = useState("");

  const navigate = useNavigate();

  const handleLogin = (event) => {
    event.preventDefault();

    axios
      .get("http://localhost:3000/users", {
        params: {
          email,
          password,
        },
      })
      .then((response) => {
        if (response.data.length === 0) {
          setError("Email or password is incorrect");
          return;
        }
        console.log(response.data)
        navigate("/profile")
      })
      .catch((error) => {
        console.error(error);
      });

  };

  // const handleLogin = async (e) => {
  //   e.preventDefault();

  //   // Check if the user with the given email and password exists in the JSON server

  //   try {
  //     const response = await fetch(
  //       "https://mock-6-api.vercel.app/users?email=" +
  //         email +
  //         "&password=" +
  //         password
  //     );
  //     const data = await response.json();

  //     if (data.length === 0) {
  //       setError("Email or password is incorrect");
  //     } else {
  //       console.log(data)
  //       navigate("/tasks");
  //     }
  //   } catch (error) {
  //     // console.error(error);
  //   }

  // };

  return (
    <>
    <div>
      
      <form onSubmit={handleLogin}>
      {error && <p>{error}</p>}
      <span>Welcome !</span>
      <h1>Login</h1>
      <label htmlFor="email">Email</label> <br />
        <input
          type="email"
          value={email}
          onChange={(e) => setEmail(e.target.value)}
        /> <br />
        <label htmlFor="email">Password</label> <br />
        <input
          type="password"
          value={password}
          onChange={(e) => setPassword(e.target.value)}
        /> <br />
        <input type="submit" value="Login" />
        <p className="account">Don't have a account <Link to={"/"}>Register</Link></p>
      </form>
    </div>
    </>
  );
};

export default Login;
