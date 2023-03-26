const User = require("../models/userModel");
const generateAuthToken = require("../utils/generateAuthToken");
const { hashPassword, comparePasswords } = require("../utils/hashPassword");

const registerUser = async (req, res, next) => {
  try {
    const { name, email, password } = req.body;
    // console.log(req.body);
    if (!name || !email || !password) {
      return res.status(400).send("All inputs are required");
    }
    const userExists = await User.findOne({ email });
    if (userExists) {
      return res.status(400).send("User Already Exists.");
    } else {
      // before creating user in db hash the password
      const hashedPassword = hashPassword(password);
      const user = await User.create({
        name,
        email: email.toLowerCase(),
        password: hashedPassword,
      });
      // console.log(user);
      // after register token created and store in cookie
      res
        .cookie(
          "access_token",
          generateAuthToken(user._id, user.name, user.email),
          {
            httpOnly: true,
            sameSite: "strict", //other site cannot access to this token
          }
        )
        .status(201)
        .json({ success: "User registered successfully", user: user });
    }
  } catch (error) {
    // console.log("error", error);
    next(error);
  }
};

const loginUser = async (req, res, next) => {
  try {
    const { email, password } = req.body;
    // console.log(req.body);
    if (!email || !password) {
      return res.status(400).send("All inputs are required");
    }
    const user = await User.findOne({ email }).orFail();
    // console.log(user);
    if (user && comparePasswords(password, user.password)) {
      let cookieParams = {
        httpOnly: true,
        sameSite: "strict",
      };
      return res
        .cookie(
          "access_token",
          generateAuthToken(user._id, user.name, user.email),
          cookieParams
        )
        .json({
          success: "User Logged in Successfully.",
          userInfo: { _id: user._id, name: user.name, email: user.email },
        });
    } else {
      return res.status(401).send("wrong credentials.");
    }
  } catch (error) {
    console.log(error);
    next(error);
  }
};

const userDetails = (req, res) => {
  res.send("user details");
};

module.exports = { loginUser, registerUser, userDetails };
