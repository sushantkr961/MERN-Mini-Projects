const express = require("express");
const routes = require("./routes/routes");

const app = express();

app.use(express.urlencoded({ extended: true }));
app.use(express.json());

app.get("/", (req, res) => {
  res.send("hello");
});

// Routes
app.use("/api", routes);

// MongoDB Connection
require("./config/db");

app.listen(8080, () => {
  console.log("Listening on port 8080");
});
