import React, { useState } from "react";
import { Link, useNavigate } from "react-router-dom";

const SignUp = () => {
  const [username, setUsername] = useState("");
  const [email, setEmail] = useState("");
  const [password, setPassword] = useState("");
  const [confirmPassword, setConfirmPassword] = useState("");
  const [error, setError] = useState(null);

  const navigate = useNavigate();

  const handleSubmit = async (event) => {
    event.preventDefault();

    if (password !== confirmPassword) {
      setError("Passwords do not match");
      return;
    }

    try {
      const response = await fetch("https://mock-6-api.vercel.app/users", {
        method: "POST",
        headers: {
          "Content-Type": "application/json",
        },
        body: JSON.stringify({ username, email, password }),
      });

    //   if (!response.ok) {
    //     throw new Error(response.statusText);
    //   }

      const responseData = await response.json();
      console.log(responseData);
      setError("Registered successfully");
      // navigate("/login");
    } catch (error) {
      // console.error(error);
      // setError(error.message);
    }
    navigate("/login");
  };

  return (
    <>
      
      <form onSubmit={handleSubmit}>
      {error && <p>{error}</p>}
      <span>Welcome !</span>
      <h1>Sign up</h1>
        <div>
          <label htmlFor="username">Username</label> <br />
          <input
            required
            type="text"
            id="username"
            value={username}
            onChange={(event) => setUsername(event.target.value)}
          />
        </div>
        <div>
          <label htmlFor="email">Email</label> <br />
          <input
            required
            type="email"
            id="email"
            value={email}
            onChange={(event) => setEmail(event.target.value)}
          />
        </div>
        <div>
          <label htmlFor="password">Password</label> <br />
          <input
            required
            type="password"
            id="password"
            value={password}
            onChange={(event) => setPassword(event.target.value)}
          />
        </div>
        <div>
          <label htmlFor="confirmPassword">Confirm Password</label> <br />
          <input
            required
            type="password"
            id="confirmPassword"
            value={confirmPassword}
            onChange={(event) => setConfirmPassword(event.target.value)}
          />
        </div>
        <input type="submit" value="Sign Up" />
        <p className="account">Already have a account? <Link to={"/login"}>Login</Link></p>
      </form>
    </>
  );
};

export default SignUp;
