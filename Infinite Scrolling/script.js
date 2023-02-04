const container = document.querySelector(".container");

let limit = 10;
let pageCount = 1;
let postCount = 1;

const getPost = async () => {
  const response = await fetch(
    `https://jsonplaceholder.typicode.com/comments?_page=${pageCount}&_limit=${limit}`
  );
  const data = await response.json();
  console.log(data);

  // data.forEach((item) => {
  //   const htmlData = `<div class="comment-div">
  //   <p class="comment">
  //   <b class="name">${postCount++ + ". "}</b>${item.body}</p></div>`;
  //   container.insertAdjacentHTML("beforeend", htmlData);
  // });

  data.forEach((item) => {
    const div = document.createElement("div");
    div.className = "single";
    const b = document.createElement("b");
    b.className = "sno";
    b.innerHTML = postCount++ + ".";
    const p = document.createElement("p");
    p.innerHTML = item.body;

    div.addEventListener("click", () => {
      const modal = document.getElementById("myModal");
      modal.style.display = "block";
      document.getElementById("commentNumber").innerHTML = item.id;
      document.getElementById("name").innerHTML = item.name;
      document.getElementById("email").innerHTML = item.email;
      document.getElementById("comment").innerHTML = item.body;
    });

    div.append(b, p);
    container.appendChild(div);
  });
};

getPost();

const showData = () => {
  setTimeout(() => {
    pageCount++;
    getPost();
  }, 1000);
};

window.addEventListener("scroll", () => {
  const { scrollHeight, scrollTop, clientHeight } = document.documentElement;
  if (scrollTop + clientHeight >= scrollHeight) {
    console.log("bottom");
    showData();
  }
});

// Get the modal elements
let modal = document.getElementById("myModal");
let commentNumber = document.getElementById("commentNumber");
let name = document.getElementById("name");
let email = document.getElementById("email");
let comment = document.getElementById("comment");

// Get the close button element
var close = document.getElementsByClassName("close")[0];

// When the user clicks the close button, close the modal
close.onclick = function () {
  modal.style.display = "none";
};

// When the user clicks outside of the modal, close it
window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
};
