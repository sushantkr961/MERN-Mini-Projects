const mongoose = require("mongoose");

mongoose.set("strictQuery", false);

mongoose
  .connect(process.env.MONGO_URI)
  .then(() => {
    console.log(`MongoDB connection SUCCESS`);
  })
  .catch((e) => console.log(`MongoDB connection FAILED`, e));
