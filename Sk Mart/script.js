let container = document.getElementById("container");
let pagination = document.getElementById("pagination");
let prev = document.querySelector(".prev");
let next = document.querySelector(".next");
let price = document.getElementById("price");
let filter = document.getElementById("filter");

let output = [];
// let currentPage = 1;
let totalPages = [];
let page = 1;

let fetchData = async (filter = "", limit = 12) => {
  try {
    const res = await fetch(
      `https://dbioz2ek0e.execute-api.ap-south-1.amazonaws.com/mockapi/get-products?&filter=${filter}&limit=${limit}&page=${page}`
    );
    const data = await res.json();
    console.log(data.data);
    // console.log(data.totalPages);
    showData(data.data);
    output = [...data.data];
    totalPages = data.totalPages;
    // showPageButtons();
  } catch (error) {
    console.log(error);
  }
};
fetchData();

let arrWishlist = JSON.parse(localStorage.getItem("wishlist")) || [];
function showData(data) {
  container.innerHTML = null;
  data.forEach((el, i) => {
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
    let price = document.createElement("h3");
    price.textContent = "₹ " + el.price + ".00";
    let but = document.createElement("span");
    but.className = "wish";
    but.innerHTML = "&#x2665;";
    but.addEventListener("click", () => {
      wishlist(el, i);
    });
    let div2 = document.createElement("div");
    div2.className = "icon";
    div2.append(price, but);

    div.append(img, brand, title, cat, div2);
    container.append(div);
  });
}

function wishlist(el) {
  if (arrWishlist.includes(el)) {
    alert("already in wishlist");
  } else {
    arrWishlist.push(el);
    localStorage.setItem("wishlist", JSON.stringify(arrWishlist));
    alert("Added to Wishlist");
  }
}

price.addEventListener("change", () => {
  let selected = document.getElementById("price").value;
  // console.log(selected);
  if (selected == "") {
    return output;
  }
  if (selected == "asc") {
    output.sort((a, b) => +a.price - +b.price);
  }
  if (selected == "des") {
    output.sort((a, b) => +b.price - +a.price);
  }
  showData(output);
});

filter.addEventListener("change", () => {
  let selected = document.getElementById("filter").value;
  // console.log(selected);
  if (selected == "") {
    fetchData((filter = ""));
  }
  if (selected == "women") {
    // console.log("women");
    fetchData((filter = "women"));
  }
  if (selected == "men") {
    // console.log("men");
    fetchData((filter = "men"));
  }
  if (selected == "kids") {
    // console.log("kids");
    fetchData((filter = "kids"));
  }
  if (selected == "homedecor") {
    // console.log("homedecor");
    fetchData((filter = "homedecor"));
  }
});

prev.addEventListener("click", () => {
  if (page === 1) {
    // console.log("prev", page);
    return;
  }
  if (page < 1) {
    prev.disabled = true;
  }
  page--;
  fetchData(page);
});

next.addEventListener("click", () => {
  // console.log("next", page);
  if (page === totalPages) {
    return;
  }
  if (page > totalPages) {
    next.disabled = true;
  }
  page++;
  fetchData(page);
});

// let showPageButtons = () => {
//   pagination.innerHTML = null;
//   for (let i = 1; i <= totalPages; i++) {
//     let btn = document.createElement("button");
//     btn.innerHTML = i;
//     btn.addEventListener("click", () => {
//       currentPage = i;
//       showDataPerPage(output, currentPage);
//     });
//     pagination.append(btn);
//   }
// };

// let showDataPerPage = (data, page) => {
//   let start = (page - 1) * 12;
//   let end = start + 12;
//   let filteredData = data.slice(start, end);
//   showData(filteredData);
// };
