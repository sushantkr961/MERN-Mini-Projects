const form = document.querySelector("#car-form");

form.addEventListener("submit", (event) => {
  event.preventDefault();

  const brand = document.querySelector("#brand").value;
  const type = document.querySelector("#transmission").value;
  const year = document.querySelector("#year").value;
  const kms = document.querySelector("#km").value;
  const Description = document.querySelector("#description").value;
  const Price = document.querySelector("#price").value;
  const Image = document.querySelector("#image").value;

  // console.log(brand, type, year, kms, Description, Price);

  fetch(`https://mock-5-api.vercel.app/cars`, {
    method: "POST",
    body: JSON.stringify({ brand, type, year, kms, Description, Price, Image }),
    headers: {
      "Content-Type": "application/json",
    },
  })
    .then((res) => res.json())
    .then((data) => {
      console.log(data);
    });
});
