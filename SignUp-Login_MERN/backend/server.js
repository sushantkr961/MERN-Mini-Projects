require("dotenv").config();
const express = require("express");
const cors = require("cors");
const cookieParser = require("cookie-parser");
const apiRoutes = require("./routes/api.routes");

const app = express();
const PORT = process.env.PORT;

app.use(express.urlencoded({ extended: true }));
app.use(express.json());
app.use(cors());
// use cookie-parser middleware
app.use(cookieParser());

// MongoDB Connection
require("./database/db");
// connecting routes
app.use("/", apiRoutes);

app.get("/", (req, res) => {
  res.json({ message: "API is running..." });
});

const start = async () => {
  try {
    app.listen(PORT, () => {
      console.log(`Yes, I am connected on http://localhost:${PORT}`);
    });
  } catch (error) {
    console.log(error);
  }
};
start();
