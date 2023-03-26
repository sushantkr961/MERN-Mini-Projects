const express = require("express");
const userRoutes = require("./user.routes");
const apiRoutes = express();

apiRoutes.use("/user", userRoutes);

module.exports = apiRoutes;
