const express = require("express");
const routes = express();

const userRoutes = require("./user.routes");
const todoRoutes = require("./todo.routes");

routes.use("/user", userRoutes);
routes.use("/task", todoRoutes);

module.exports = routes;
