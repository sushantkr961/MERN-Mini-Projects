const mongoose = require("mongoose");

// mongoose
//   .connect(process.env.MONGO_URI)
//   .then(() => console.log(`Connected to MongoDB server`))
//   .catch((error) =>
//     console.log(`Connection Failed with MongoDB server.`, error)
//   );

const connectMongo = async () => {
  try {
    await mongoose.connect(process.env.MONGO_URI);
    console.log("Connected to the MongoDB database!");
  } catch (error) {
    console.log("Error connecting to the MongoDB database:", error);
  }
};

export default connectMongo;
