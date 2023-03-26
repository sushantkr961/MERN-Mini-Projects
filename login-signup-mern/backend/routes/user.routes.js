const { Router } = require("express");
const {
  loginUser,
  registerUser,
  userDetails,
} = require("../controller/userController");
const userRoutes = Router();

userRoutes.post("/login", loginUser);

userRoutes.post("/register", registerUser);

userRoutes.get("/:id", userDetails);

module.exports = userRoutes;
