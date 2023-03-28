// toggle between login and signup section
const signUpButton = document.getElementById("signUp");
const signInButton = document.getElementById("signIn");
const container = document.getElementById("container");
const msg = document.getElementById("msg");
const signMsg = document.getElementById("signMsg");

const apiUrl = "https://loginsignupapi.onrender.com";

// function to remove message after 5 seconds
function removeMessage(element) {
  setTimeout(() => {
    element.textContent = "";
  }, 5000);
}

signUpButton.addEventListener("click", () => {
  container.classList.add("right-panel-active");
});

signInButton.addEventListener("click", () => {
  container.classList.remove("right-panel-active");
});

// signUp functionality
const signUpForm = document.getElementById("signUp-form");
signUpForm.addEventListener("submit", (e) => {
  e.preventDefault();
  //   console.log("singup");
  const name = document.getElementById("name").value;
  const email = document.getElementById("email").value;
  const password = document.getElementById("password").value;
  //   console.log(name, email, password);
  if (name == "" || email == "" || password == "") {
    msg.style.color = "red";
    msg.textContent = "All input required.";
    removeMessage(msg);
  } else {
    fetch(`${apiUrl}/users`)
      .then((res) => res.json())
      .then((data) => {
        const userExist = data.find((user) => user.email === email);
        if (userExist) {
          msg.style.color = "red";
          msg.textContent = "Email already registered.";
          removeMessage(msg);
        } else {
          const newUser = { name, email, password };
          //   console.log(newUser);
          fetch(`${apiUrl}/users`, {
            method: "POST",
            headers: {
              "Content-Type": "application/json",
            },
            body: JSON.stringify(newUser),
          })
            .then((res) => {
              if (!res.ok) {
                throw new Error(`HTTP error! status: ${res.status}`);
              }
              return res.json();
            })
            .then((data) => {
              //   console.log(data);
              msg.style.color = "teal";
              msg.textContent = "User Registered Successfully.";
              removeMessage(msg);
            })
            .catch((error) => {
              //   console.error("Error parsing JSON:", error);
              msg.style.color = "red";
              msg.textContent = "something went wrong.";
              removeMessage(msg);
            });
        }
      });
  }
});

// signIn functionality
const singInForm = document.getElementById("signIn-form");
singInForm.addEventListener("submit", (e) => {
  e.preventDefault();
  //   console.log("loign");
  const email = singInForm.signEmail.value;
  const password = singInForm.signPassword.value;
  //   console.log(email, password);

  if (email == "" || password == "") {
    signMsg.style.color = "red";
    signMsg.textContent = "All input required.";
    removeMessage(signMsg);
  } else {
    fetch(`${apiUrl}/users`)
      .then((res) => res.json())
      .then((data) => {
        //   console.log(data);
        const user = data.find(
          (user) => user.email === email && user.password === password
        );
        if (user) {
          signMsg.style.color = "teal";
          signMsg.textContent = "Login successful!";
          removeMessage(signMsg);
          // console.log(user);
          /** store the user to the local storage after successfull login */
          localStorage.setItem("userDetails", JSON.stringify(user));
        } else {
          signMsg.style.color = "red";
          signMsg.textContent = "Invalid email or password.";
          removeMessage(signMsg);
        }
      })
      .catch((error) => {
        // console.error(error);
        signMsg.style.color = "red";
        signMsg.textContent = "something went wrong.";
        removeMessage(signMsg);
      });
  }
});
