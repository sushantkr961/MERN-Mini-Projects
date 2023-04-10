const express = require("express");
const router = require("./user.routes");
const apiRoutes = express();

apiRoutes.use("/user", router);

module.exports = apiRoutes;
