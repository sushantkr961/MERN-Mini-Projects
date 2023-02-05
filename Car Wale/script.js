let datas = [];
let container = document.getElementById("container");

let getData = async () => {
  try {
    const res = await fetch(`https://mock-5-api.vercel.app/cars`);
    const data = await res.json();
    console.log(data);
    datas = [...data];
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
    let edit = document.createElement("button");
    edit.className = "edit-button";
    edit.textContent = "Edit";
    edit.addEventListener("click", () => editItem(car));
    let del = document.createElement("button");
    del.className = "delete-button";
    del.textContent = "Delete";
    del.addEventListener("click", () => deleteItem(car));
    let wish = document.createElement("button");
    wish.textContent = "Wishlist";
    wish.className = "wishlist-button";
    wish.addEventListener("click", () => {
      wishListItem(car);
    });

    card.append(img, brand, type, year, dis, price, des, edit, del, wish);
    container.appendChild(card);
  });
};

document.getElementById("high").addEventListener("click", function () {
  datas.sort((a, b) => +b.Price - +a.Price);
  showData(datas);
});

document.getElementById("low").addEventListener("click", function () {
  datas.sort((a, b) => +a.Price - +b.Price);
  showData(datas);
});

function deleteItem(car) {
  fetch(`https://mock-5-api.vercel.app/cars/${car.id}`, {
    method: "DELETE",
  })
    .then((response) => response.json())
    .then((data) => {
      data.remove();
    });
  alert("Car is reomved successfully");
  window.location.reload();
}

function wishListItem(car) {
  fetch("https://mock-5-api.vercel.app/wishlisted_cars", {
    method: "POST",
    body: JSON.stringify(car),
    headers: {
      "Content-Type": "application/json",
    },
  })
    .then((response) => response.json())
    .then((data) => {
      console.log(data);
    });
  alert("Added to wishlist successfully");
}

let editItem = (car) => {
  let form = document.createElement("form");
  let label0 = document.createElement("b");
  label0.textContent = "Image Url :";
  let Image = document.createElement("input");
  Image.type = "url";
  Image.value = car.Image;
  let label = document.createElement("b");
  label.textContent = "Brand :";
  let brand = document.createElement("input");
  brand.type = "text";
  brand.value = car.brand;
  let label1 = document.createElement("b");
  label1.textContent = "Type :";
  let type = document.createElement("input");
  type.type = "text";
  type.value = car.type;
  let label2 = document.createElement("b");
  label2.textContent = "Year :";
  let year = document.createElement("input");
  year.type = "text";
  year.value = car.year;
  let label3 = document.createElement("b");
  label3.textContent = "Distance :";
  let kms = document.createElement("input");
  kms.type = "text";
  kms.value = car.kms;
  let label4 = document.createElement("b");
  label4.textContent = "Price :";
  let Price = document.createElement("input");
  Price.type = "text";
  Price.value = car.Price;
  let label5 = document.createElement("b");
  label5.textContent = "Description :";
  let Description = document.createElement("textarea");
  Description.type = "text";
  Description.value = car.Description;
  let submit = document.createElement("input");
  submit.type = "submit";
  submit.value = "Save";

  form.append(
    label0,
    Image,
    label,
    brand,
    label1,
    type,
    label2,
    year,
    label3,
    kms,
    label4,
    Price,
    label5,
    Description,
    submit
  );
  container.innerHTML = null;
  container.appendChild(form);

  form.addEventListener("submit", (event) => {
    event.preventDefault();
    fetch(`https://mock-5-api.vercel.app/cars/${car.id}`, {
      method: "PUT",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify({
        Image: Image.value,
        brand: brand.value,
        type: type.value,
        year: year.value,
        kms: kms.value,
        Price: Price.value,
        Description: Description.value,
      }),
    })
      .then((res) => res.json())
      .then((data) => {
        showData(datas);
      });
  });
};
