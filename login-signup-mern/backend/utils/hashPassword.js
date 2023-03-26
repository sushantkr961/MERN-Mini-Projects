const bcrypt = require("bcryptjs");
const salt = bcrypt.genSaltSync(10);

// function for hashing the password
const hashPassword = (password) => bcrypt.hashSync(password, salt);

// function for compare the hashing password at the time of login
const comparePasswords = (inputPassword, hashedPassword) => {
  return bcrypt.compareSync(inputPassword, hashedPassword);
};

module.exports = { hashPassword, comparePasswords };
