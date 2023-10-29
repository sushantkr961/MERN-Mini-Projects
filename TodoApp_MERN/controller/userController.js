const User = require("../model/userModel");
const bcrypt = require("bcryptjs");

const register = async (req, res) => {
  const { username, email, password } = req.body;
  const hashedPassword = bcrypt.hashSync(password);
  try {
    const existingUser = await User.findOne({ email });
    if (existingUser) {
      return res.status(400).json({
        type: "danger",
        message: "Email already exists",
      });
    }

    const newUser = await User.create({
      username,
      email,
      password: hashedPassword,
    });

    return res.status(200).json({
      type: "success",
      message: "User Created successfully",
      user: newUser,
    });
  } catch (error) {
    return res.status(400).json({
      type: "danger",
      message: "Registration failed",
    });
  }
};

const login = async (req, res) => {
  const { email, password } = req.body;

  try {
    const user = await User.findOne({ email });

    if (!user) {
      return res.status(401).json({
        type: "danger",
        message: "Invalid email or password",
      });
    }

    const passwordMatch = bcrypt.compareSync(password, user.password);

    if (!passwordMatch) {
      return res.status(401).json({
        type: "danger",
        message: "Invalid email or password",
      });
    }

    return res.status(200).json({
      type: "success",
      message: "Login successful",
      user: user,
    });
  } catch (error) {
    return res.status(500).json({
      type: "danger",
      message: "Login failed",
    });
  }
};

module.exports = { register, login };
