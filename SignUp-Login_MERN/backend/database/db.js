const mongoose = require("mongoose");

mongoose
  .connect(process.env.MONGO_URI)
  .then(() => console.log(`Connected to MongoDB server`))
  .catch((error) =>
    console.log(`Connection Failed with MongoDB server.`, error)
  );
