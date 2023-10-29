const express = require("express");
const router = express.Router();

const controller = require("../controller/userController");

router.route("/register").post(controller.register);
router.route("/login").post(controller.login);

module.exports = router;
