// Next.js API route support: https://nextjs.org/docs/api-routes/introduction

import connectMongo from "@/database/db";

export default function handler(req, res) {
  connectMongo();
  res.status(200).json({ name: "John Doe" });
}
