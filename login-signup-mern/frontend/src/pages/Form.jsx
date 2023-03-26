import React, { useState } from "react";
import "./Form.css";
import FormComponent from "../components/FormComponent";

function Form() {
  const [isSignUpActive, setIsSignUpActive] = useState(false);
  const [user, SetUser] = useState({ name: "", email: "", password: "" });

  function handleSignUpClick() {
    setIsSignUpActive(true);
  }
  function handleSignInClick() {
    setIsSignUpActive(false);
  }

  const handleInputRegis = (e) => {
    const { name, value } = e.target;
    SetUser({ ...user, [name]: value });
  };

  const handleRegister = async (e) => {
    e.preventDefault();
    // console.log("register");
    const { name, email, password } = user;
    // console.log("register1");
    const res = await fetch("http://localhost:7070/signin", {
      method: "POST",
      headers: { "Content-Type": "application/json" },
      body: JSON.stringify({ name, email, password }),
    });
    const data = await res.json();
    console.log(data);
    // axios
    //   .post("/signin", { name, email, password })
    //   .then((res) => console.log(res))
    //   .catch((err) => console.log(err));
  };

  return (
    <FormComponent
      handleSignInClick={handleSignInClick}
      handleSignUpClick={handleSignUpClick}
      isSignUpActive={isSignUpActive}
      handleRegister={handleRegister}
      handleInputRegis={handleInputRegis}
      user={user}
    />
  );
}

export default Form;
