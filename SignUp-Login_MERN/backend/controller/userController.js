const bcrypt = require("bcrypt");
const User = require("../models/userModel");
const jwt = require("jsonwebtoken");
const nodemailer = require("nodemailer");

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

// /** FORGOT PASSWORD */
// const forgotPassword = async (req, res, next) => {
//   try {
//     let { email } = req.body;
//     email = email.toLowerCase();
//     const user = await User.findOne({ email });
//     // console.log(user);
//     if (!user) {
//       return res.status(401).json({ message: "User does not exist." });
//     } else {
//       const resetToken = jwt.sign(
//         { userId: user._id },
//         process.env.RESET_SECRET_KEY || "hello",
//         { expiresIn: "20m" }
//       );
//       user.resetToken = resetToken;
//       user.resetTokenExpiration = Date.now() + 20 * 60 * 1000;
//       await user.save();

//       // create nodemailer transporter
//       let transporter = nodemailer.createTransport({
//         host: process.env.SMTP_HOST || "smtp.ethereal.email",
//         port: process.env.SMTP_PORT || 587,
//         auth: {
//           user: process.env.SMTP_EMAIL || "kavon16@ethereal.email",
//           pass: process.env.SMTP_PASSWORD || "bwAFqjrTey9GAd3zzd",
//         },
//       });

//       // send reset password email to user
//       let info = await transporter.sendMail({
//         from: `"Login SignUp" <${
//           process.env.SMTP_EMAIL || "kavon16@ethereal.email"
//         }>`,
//         to: email,
//         subject: "Password Reset Request",
//         // text: `Click on the following link to reset your password: ${process.env.CLIENT_URL}/reset-password/${resetToken}`,
//         html: `
//           <p>Hello ${user.name},</p>
//           <p>You have requested to reset your password. Please click on the following link to reset your password:</p>
//           <a href="${process.env.APP_BASE_URL}/reset-password/${resetToken}">Reset Password</a>
//           <p>The link is valid for 20 minutes. If you did not request a password reset, please ignore this email.</p>
//           <p>Best Regards,</p>
//           <p>Your App Team</p>
//         `,
//       });

//       return res.json({
//         message: "Password reset link sent to your email.",
//         info,
//       });
//     }
//   } catch (error) {
//     next(error);
//   }
// };

// /** RESET PASSWORD */
// const resetPassword = async (req, res, next) => {
//   try {
//     const { resetToken, newPassword } = req.body;
//     if (!resetToken || !newPassword) {
//       return res.status(400).json({ message: "All inputs are required" });
//     }
//     const decoded = jwt.verify(
//       resetToken,
//       process.env.RESET_SECRET_KEY || "hello"
//     );
//     const user = await User.findById(decoded.userId);
//     if (!user || user.resetToken !== resetToken) {
//       return res.status(401).json({ message: "Invalid or Expired Token." });
//     } else {
//       const hashedPassword = await bcrypt.hash(newPassword, 10);
//       user.password = hashedPassword;
//       user.resetToken = null;
//       user.resetTokenExpiration = null;
//       await user.save();
//       return res.json({ success: "Password reset successful." });
//     }
//   } catch (error) {
//     next(error);
//   }
// };

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
      const otp = Math.floor(100000 + Math.random() * 900000);
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
          // Save OTP in database with a 5-minute expiration time
          // user.otp = otp;
          // user.otpExpiration = Date.now() + 5 * 60 * 1000;
          // user.save();
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
    const user = await User.findOne({ email });
    if (!user) {
      return res.status(401).json({ message: "User does not exist." });
    } else {
      // Retrieve OTP from cookie
      const savedOtp = req.cookies.reset_password_otp;
      console.log(savedOtp === otp, typeof savedOtp, typeof otp);
      if (savedOtp === otp) {
        // Hash new password and save it to database
        const hashedPassword = await bcrypt.hash(newPassword, 10);
        user.password = hashedPassword;
        user.save();
        // Clear OTP cookie
        res.clearCookie("reset_password_otp");
        return res.json({ message: "Password has been reset." });
      } else {
        return res.status(401).json({ message: "OTP is incorrect." });
      }
    }
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
