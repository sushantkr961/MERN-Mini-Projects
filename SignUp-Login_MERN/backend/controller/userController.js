const bcrypt = require("bcrypt");
const User = require("../models/userModel");
const jwt = require("jsonwebtoken");
const nodemailer = require("nodemailer");

/** REGISTER */
const registerUser = async (req, res, next) => {
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
    password = String(password); // Convert password to a string
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
    // clear token from cookie
    res.cookie("token", "", {
      maxAge: 0,
      httpOnly: true,
      sameSite: "strict",
    });
    return res.json({ success: "User Logged out Successfully." });
  } catch (error) {
    next(error);
  }
};

/** FORGOT PASSWORD */
const forgotPassword = async (req, res, next) => {
  try {
    let { email } = req.body;
    email = email.toLowerCase();
    const user = await User.findOne({ email });
    if (!user) {
      return res.status(401).json({ message: "User does not exist." });
    } else {
      // Generate OTP
      function generateRandomOtp() {
        const chars =
          "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
        let result = "";
        for (let i = 0; i < 6; i++) {
          result += chars.charAt(Math.floor(Math.random() * chars.length));
        }
        return result;
      }
      const otp = generateRandomOtp();
      // Set OTP as cookie
      res.cookie("reset_password_otp", otp, {
        maxAge: 5 * 60 * 1000, // 5 minutes
        httpOnly: true, // cookie cannot be accessed by client-side JavaScript
      });
      // Send OTP to user's email
      const transporter = nodemailer.createTransport({
        host: process.env.SMTP_HOST || "smtp.ethereal.email",
        port: process.env.SMTP_PORT || 587,
        auth: {
          user: process.env.SMTP_EMAIL || "kavon16@ethereal.email",
          pass: process.env.SMTP_PASSWORD || "bwAFqjrTey9GAd3zzd",
        },
      });
      const mailOptions = {
        from: `"${process.env.EMAIL_SENDER_NAME || "susu"}" <${
          process.env.EMAIL_USERNAME || "susu@gmail.com"
        }>`,
        to: email,
        subject: "Password Reset OTP",
        text: `Your OTP for resetting password is ${otp}. It is valid for 5 minutes.`,
      };

      transporter.sendMail(mailOptions, (error, info) => {
        if (error) {
          // console.log("error", error);
          return res.status(500).json({
            message: "Error sending email.",
            error,
          });
        } else {
          console.log("Message sent: %s", info.messageId);
          return res.json({
            message: "OTP sent to email.",
            info,
          });
        }
      });
    }
  } catch (error) {
    next(error);
  }
};

/** VERIFY OTP AND RESET PASSWORD */
const resetPassword = async (req, res, next) => {
  try {
    let { email, otp, newPassword } = req.body;
    email = email.toLowerCase();
    // Check if email and OTP are provided
    if (!email || !otp || !newPassword) {
      return res.status(400).json({ message: "All inputs are required" });
    }
    // Find the user with the given email
    const user = await User.findOne({ email });
    if (!user) {
      return res.status(401).json({ message: "User does not exist." });
    }
    // Check if OTP is correct
    const resetPasswordOTP = req.cookies.reset_password_otp;
    console.log(resetPasswordOTP, otp);
    if (!resetPasswordOTP || resetPasswordOTP !== otp) {
      return res.status(401).json({ message: "Invalid OTP" });
    }
    // Convert newPassword to a string
    newPassword = String(newPassword);
    // Hash the new password
    const saltRounds = 10;
    const hashedPassword = await bcrypt.hash(newPassword, saltRounds);
    // Update the user's password
    user.password = hashedPassword;
    await user.save();
    // Remove the reset password OTP cookie
    res.clearCookie("reset_password_otp");
    return res.json({ message: "Password reset successful." });
  } catch (error) {
    next(error);
  }
};

module.exports = {
  registerUser,
  loginUser,
  logoutUser,
  forgotPassword,
  resetPassword,
};
