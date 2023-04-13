import { getUsers, registerUser } from "@/controllers/userController";
import connectMongo from "@/database/db";

export default async function handler(req, res) {
  connectMongo().catch(() =>
    res.status(405).json({ error: "Error in Connection" })
  );

  /** type of request */
  /** ["GET", "POST", "PUT", "DELETE"] */
  const { method } = req;

  switch (method) {
    case "GET":
      getUsers(req, res);
      //   res.status(200).json({ method, name: "GET Request" });
      break;
    case "POST":
      registerUser(req, res);
      //   res.status(200).json({ method, name: "POST Request" });
      break;
    case "PUT":
      res.status(200).json({ method, name: "PUT Request" });
      break;
    case "DELETE":
      res.status(200).json({ method, name: "DELETE Request" });
      break;
    default:
      res.setHeader("Allow", ["GET", "POST", "PUT", "DELETE"]);
      res.status(405).end(`Method ${method} Not Allowd.`);
  }
}
