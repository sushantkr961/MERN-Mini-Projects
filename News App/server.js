const express = require("express");
const path = require("path");

const app = express();
const PORT = 8080;

app.use(express.urlencoded({ extended: true }));
app.use(express.json());

app.get("/", (req, res) => {
  res.sendFile("index.html", { root: path.join(__dirname) });
});

app.listen(PORT, () => {
  console.log(`Listening on http://localhost:${PORT}`);
});
