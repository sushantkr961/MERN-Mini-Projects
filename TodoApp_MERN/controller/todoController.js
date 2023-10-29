const Todo = require("../model/todoModel");
const User = require("../model/userModel");

const addTask = async (req, res) => {
  const { title, body, email } = req.body;

  try {
    const existingUser = await User.findOne({ email });

    if (!existingUser) {
      return res.status(400).json({
        type: "danger",
        message: "User not found",
      });
    }

    const newTask = await Todo.create({
      title,
      body,
      user: existingUser,
    });

    existingUser.todos.push(newTask._id);
    await existingUser.save();

    return res.status(200).json({
      type: "success",
      message: "Task Created successfully",
      todo: newTask,
    });
  } catch (error) {
    return res.status(500).json({
      type: "danger",
      message: "Task creation failed",
    });
  }
};

const updateTask = async (req, res) => {
  try {
    const { title, body, email } = req.body;
    const existingUser = await User.findOne({ email });
    if (existingUser) {
      const task = await Todo.findByIdAndUpdate(req.params.id, { title, body });
      if (!task) {
        return res.status(404).json({
          type: "danger",
          message: "Task not found",
        });
      }
      return res.status(200).json({
        type: "success",
        message: "Task updated successfully",
        todo: task,
      });
    }
    return res.status(404).json({
      type: "danger",
      message: "User not found",
    });
  } catch (error) {
    return res.status(500).json({
      type: "danger",
      message: "Task update failed",
    });
  }
};

const deleteTask = async (req, res) => {
  try {
    const taskId = req.params.id;
    const { email } = req.body;
    const existingUser = await User.findOneAndUpdate(
      { email },
      { $pull: { todos: taskId } }
    );
    if (existingUser) {
      await Todo.findByIdAndDelete(taskId).then(() =>
        res
          .status(200)
          .json({ type: "success", message: "Task deleted successfully" })
      );
    }
  } catch (error) {
    return res.status(500).json({
      type: "danger",
      message: "Task deletion failed",
    });
  }
};

const getAllTask = async (req, res) => {
  const tasks = await Todo.find({ user: req.params.userId }).sort({
    createdAt: -1,
  });
  if (tasks.length === 0) {
    return res.status(200).json({ message: "No Tasks" });
  }
  return res.status(200).json({ Tasks: tasks });
};

module.exports = { addTask, updateTask, deleteTask, getAllTask };
