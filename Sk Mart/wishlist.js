let data = JSON.parse(localStorage.getItem("wishlist"));
showData(data);

let item = JSON.parse(localStorage.getItem("count")) || 1;
function showData(data) {
  document.getElementById("container").innerHTML = "";
  data?.map((el, i) => {
    let div = document.createElement("div");
    div.setAttribute("class", "products");
    let img = document.createElement("img");
    img.src = el.image;
    let brand = document.createElement("h3");
    brand.textContent = el.brand;
    let title = document.createElement("p");
    title.textContent = el.title;
    let cat = document.createElement("p");
    cat.innerHTML = `<b>category: </b>` + el.category;
    cat.textContent = el.category;
    let price = document.createElement("h3");
    price.textContent = "₹ " + el.price + ".00";

    div.append(img, brand, title, cat, price);
    document.getElementById("container").append(div);
  });
}
