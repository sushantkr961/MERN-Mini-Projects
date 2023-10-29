const mongoose = require("mongoose");

mongoose
  .connect(
    "mongodb+srv://sushantpantheon:Sushant123@cluster0.uqswkar.mongodb.net/todo?retryWrites=true&w=majority"
  )
  .then(() => console.log(`Connected to MongoDB server`))
  .catch((error) =>
    console.log(`Connection Failed with MongoDB server.`, error)
  );
