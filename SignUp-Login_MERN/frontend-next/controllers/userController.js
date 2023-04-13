const User = require("@/models/userModel");

/** REGISTER USER */
const registerUser = async (req, res) => {
  try {
    let { name, email, password } = req.body;
    password = String(password); // Convert password to a string
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
      res.status(201).json({ success: "User registered successfully", user });
    }
  } catch (error) {
    console.log("error", error);
    res.status(500).json({ message: "Server Error" });
  }
};

/** GET ALL USERS */
const getUsers = async (req, res) => {
  try {
    const users = await User.find({});
    if (!users) {
      return res.status(404).json({ error: "No Data Found" });
    }
    res.status(200).json({ users });
  } catch (error) {
    // next(error);
    res.status(404).json({ error });
  }
};

module.exports = {
  getUsers,
  registerUser,
};
