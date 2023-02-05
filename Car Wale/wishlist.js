let container = document.querySelector("#container");

let getData = async () => {
  try {
    const res = await fetch(`https://mock-5-api.vercel.app/wishlisted_cars`);
    const data = await res.json();
    console.log(data);
    showData(data);
  } catch (error) {
    console.log(error.message);
  }
};
getData();

let showData = (data) => {
  container.innerHTML = null;
  data?.forEach((car) => {
    let card = document.createElement("div");
    let img = document.createElement("img");
    img.src = car.Image;
    let brand = document.createElement("h2");
    brand.textContent = car.brand;
    let type = document.createElement("p");
    type.className = "type";
    type.innerHTML = `<b>Type : </b>` + car.type;
    let year = document.createElement("p");
    year.className = " year";
    year.innerHTML = `<b>Year : </b>` + car.year;
    let dis = document.createElement("p");
    dis.className = "dis";
    dis.innerHTML = `<b>Distance : </b>` + car.kms;
    let price = document.createElement("p");
    price.className = "price";
    price.innerHTML = `<b>Price : </b>` + "₹ " + car.Price + ".00";
    let des = document.createElement("p");
    des.className = "des";
    des.innerHTML = `<b>Description : </b>` + car.Description;
    let del = document.createElement("button");
    del.className = "delete-button";
    del.textContent = "Delete";
    del.addEventListener("click", () => deleteItem(car));

    card.append(img, brand, type, year, dis, price, des, del);
    container.appendChild(card);
  });
};

function deleteItem(car) {
  fetch(`https://mock-5-api.vercel.app/wishlisted_cars/${car.id}`, {
    method: "DELETE",
  })
    .then((response) => response.json())
    .then((data) => {
      data.remove();
    });
  alert("Car is reomved successfully");
  window.location.reload();
}
