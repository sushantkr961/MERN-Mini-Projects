const bcrypt = require("bcrypt");
const User = require("../models/userModel");
const jwt = require("jsonwebtoken");

/** REGISTER */
const registerUser = async (req, res, next) => {
  try {
    const { name, email, password } = req.body;
    if (!name || !email || !password) {
      return res.status(400).json({ message: "All inputs are required" });
    }
    const userExist = await User.findOne({ email });
    if (userExist) {
      return res.status(400).json({ message: "User Already Exists." });
    } else {
      const hashedPassword = await bcrypt.hash(password, 10);
      const user = await User.create({
        name,
        email: email.toLowerCase(),
        password: hashedPassword,
      });
      res
        .status(201)
        .json({ success: "User registered successfully", user: user });
    }
  } catch (error) {
    console.log("error", error);
    next(error);
  }
};

/** LOGIN */
const loginUser = async (req, res, next) => {
  try {
    let { email, password } = req.body;
    email = email.toLowerCase();
    if (!email || !password) {
      return res.status(400).json({ message: "All inputs are required" });
    }
    const user = await User.findOne({ email });
    if (user) {
      const match = await bcrypt.compare(password, user.password);
      if (match) {
        // remove password from user object
        const { password, ...userInfo } = user._doc;
        // Generate JWT token with an expiration of 7 days
        const token = jwt.sign(
          { userId: user._id },
          process.env.JWT_SECRET_KEY,
          {
            expiresIn: "7d",
          }
        );
        // store token in cookie using cookie-parser
        res.cookie("token", token, {
          maxAge: 7 * 24 * 60 * 60 * 1000,
          httpOnly: true,
          sameSite: "strict",
        });
        return res.json({
          success: "User Logged in Successfully.",
          userInfo,
          token: token,
        });
      } else {
        return res.status(401).json({ message: "Wrong credentials." });
      }
    } else {
      return res.status(401).json({ message: "User does not exist." });
    }
  } catch (error) {
    next(error);
  }
};

/** LOGOUT */
const logoutUser = async (req, res, next) => {
  try {
    res.clearCookie("token");
    res.status(200).json({ message: "Logout successful" });
  } catch (error) {
    next(error);
  }
};

module.exports = { registerUser, loginUser, logoutUser };
