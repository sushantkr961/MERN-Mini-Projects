const express = require("express");
const router = express.Router();

const controller = require("../controller/todoController");

router.route("/:userId").get(controller.getAllTask);
router.route("/add").post(controller.addTask);
router.route("/update/:id").put(controller.updateTask);
router.route("/delete/:id").delete(controller.deleteTask);

module.exports = router;
