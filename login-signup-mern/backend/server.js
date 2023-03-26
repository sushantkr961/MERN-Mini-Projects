require("dotenv").config();
const express = require("express");
const cors = require("cors");
const apiRoutes = require("./routes/api.Routes");

const app = express();
const PORT = process.env.PORT;

app.use(express.urlencoded({ extended: true }));
app.use(express.json());
app.use(cors());

app.get("/", (req, res) => {
  res.json({ message: "API is running..." });
});
app.use("/", apiRoutes);

// mongoDB connection
require("./database/db");

const start = async () => {
  try {
    app.listen(PORT, () => {
      console.log(`Yes I am connected on port http://localhost:${PORT}`);
    });
  } catch (error) {
    console.log(error);
  }
};
start();
