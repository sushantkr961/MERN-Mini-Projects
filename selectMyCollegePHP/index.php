<?php include 'head.php'; ?>
<style>
  /*  */
  .gMmobileView .inner {
    left: 50%;
    transform: translate(-50%, -50%);
    border-radius: 35px;
    width: 70%;
    font-size: 1.5rem;
  }

  .gMmobileView .innner {
    left: 50%;
    transform: translate(-50%, 68%);
    border-radius: 34px;
    width: 50%;
  }

  .gMmobileView .inner h2 {
    font-size: 30px;
  }

  svg {
    height: 50px;
    width: 50px;
  }

  .SkPhoto div {
    width: 100px;
    height: 100px;
    border-radius: 100%;
    box-shadow: 0px 3px 6px #00000029;
    padding: 10px;
    min-width: 100px;
    margin: 10px 40px;
  }

  .city-name {
    font-size: x-large;
  }

  /* svg */
  .sk-city {
    background-color: #f0fff7;
    cursor: pointer;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .sk-city:hover {
    background-color: white;
    box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
  }

  .sk-city:hover svg path,
  .sk-city:hover svg g {
    fill: #f6a96c;
  }

  @media screen and (max-width: 1024px) {

    .gMmobileView .inner h2 {
      font-size: 22px;
    }

    .modal {
      top: 10%;
    }

    svg {
      height: 30px;
      width: 30px;
    }

    .city-name {
      font-size: large;
    }
  }

  @media screen and (max-width: 768px) {
    .gMmobileView .inner {
      left: 50%;
      transform: translate(-50%, 15%);
      border-radius: 23px;
      width: 100%;
    }

    .elfo {
      height: fit-content;
      overflow: hidden;
    }

    .gMmobileView .inner h2 {
      font-size: 16px;
    }

    .gMmobileView .innner:nth-child(2) h2 {
      font-size: 18px;
    }

    .gMmobileView .innner:nth-child(2) {
      left: 50%;
      transform: translate(-50%, 151%);
      border-radius: 34px;
    }

    svg {
      height: 30px;
      width: 30px;
    }

    .city-name {
      font-size: large;
    }
  }

  @media screen and (max-width: 567px) {
    .gMmobileView .inner {
      width: 100%;
      font-size: 18px;
    }

    .gMmobileView .inner h2 {
      font-size: 16px;
    }

    .gMmobileView .innner:nth-child(2) {
      width: 75%;
    }

    .gMmobileView .innner:nth-child(2) h2 {
      font-size: 18px;
    }

    .city-name {
      font-size: large;
    }
  }

  @media screen and (max-width: 567px) {
    .gMmobileView .inner h2 {
      font-size: 12px;
    }
  }
</style>
<div class="body">
  <!-- Front Photo and All -->
  <div class="slider">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" style="opacity: 0.7;">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="image/sk-clg3.jpg" class="d-block w-100" alt="image/s1.png" />
        </div>
        <div class="carousel-item">
          <img src="image/sk-clg2.jpg" class="d-block w-100" alt="image/s1.png" />
        </div>
        <div class="carousel-item">
          <img src="image/sk-clg1.jpg" class="d-block w-100" alt="image/s1.png" />
        </div>
        <div class="carousel-item">
          <img src="image/sk-clg5.png" class="d-block w-100" alt="image/s1.png" />
        </div>
      </div>
    </div>
    <div class="slider-top d-flex align-items-center">
      <div class="container">
        <div class="d-flex flex-direction-row align-items-center justify-content-md-between justify-content-center">
          <div>
            <button type="button" class="btn fw-bold rounded-pill text-white shadow-lg eligibility_btn" onclick="document.getElementById('choose_college').scrollIntoView({ behavior: 'smooth',block:'center' });">
              Check your eligibility
            </button>
            <p class="sk-confused text-start mt-3">
              <span class="me-2" style="color: #ff8900">Confused ?</span>
              <strong data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo" style="cursor: pointer; color: #50FF78; text-decoration: none" onmouseover="this.style.textDecoration='underline'" onmouseout="this.style.textDecoration='none'">
                Get free counselling</strong>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal for Register -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content py-2 px-3">
        <div class="d-flex justify-content-end p-3">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <h1 class="modal-title fs-5 fw-bold text-center" id="exampleModalLabel">
          To apply for this college we need a few details from you
        </h1>
        <div class="modal-body">
          <form>
            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
              <input type="text" class="form-control m-0 shadow-none rounded-end-2" placeholder="Full Name" aria-label="Full Name" aria-describedby="basic-addon1" />
            </div>
            <div class="d-lg-flex justify-content-start">
              <div class="input-group mb-3">
                <span class="input-group-text">+91 </span>
                <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-phone"></i></span>
                <input type="text" class="form-control m-0 shadow-none rounded-end-2" placeholder="Phone Number" aria-label="Phone Number" aria-describedby="basic-addon1" maxlength="10" />
              </div>
              <div id="otp" class="inputs d-flex flex-row justify-content-center ms-3">
                <input class="mx-2 text-center form-control rounded shadow-none" type="text" id="first" maxlength="1" />
                <input class="mx-2 text-center form-control rounded shadow-none" type="text" id="second" maxlength="1" />
                <input class="mx-2 text-center form-control rounded shadow-none" type="text" id="third" maxlength="1" />
                <input class="mx-2 text-center form-control rounded shadow-none" type="text" id="fourth" maxlength="1" />
              </div>
            </div>
            <div class="d-flex justify-content-between align-items-center mb-2">
              <div></div>
              <div></div>
              <div class="text-muted">
                Verify OTP
                <span><i class="fa-solid fa-circle-check" style="color: #002f26"></i>
                  <i class="fa-solid fa-circle-xmark" style="color: #f50000"></i></span>
              </div>
              <div><a href="#">Resend OTP</a></div>
            </div>
            <div>
              <div class="d-md-flex justify-content-between">
                <div class="input-group mb-2">
                  <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-envelope"></i></span>
                  <input type="text" class="form-control m-0 shadow-none rounded-end-2" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1" />
                </div>
                <div class="ms-5">
                  <button type="button" class="btn px-5 text-white" style="background-color: #002f26">
                    Submit
                  </button>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer d-none d-lg-block" style="color: #002F26;">
          <h3 class="text-center fs-5 ">How select my college is contributing in student’s higher education and managing budget for parents</h3>
          <div class="d-block container my-5 text-center">
            <div class="py-4" style="width: 100%;">
              <div class="skBody">
                <div class="skSlider">
                  <div class="skSlide-track">
                    <div class="skSlide">
                      <img src="image/sk1.svg" height="100" width="100" alt="" />
                      <p>Free Councelling</p>
                    </div>
                    <div class="skSlide">
                      <img src="image/sk2.svg" height="100" width="100" alt="" />
                      <p>College with Budget friendly</p>
                    </div>
                    <div class="skSlide">
                      <img src="image/sk3.svg" height="100" width="100" alt="" />
                      <p>College with good Placement</p>
                    </div>
                    <div class="skSlide">
                      <img src="image/sk4.svg" height="100" width="100" alt="" />
                      <p>Top rated Colleges</p>
                    </div>
                    <div class="skSlide">
                      <img src="image/sk5.svg" height="100" width="100" alt="" />
                      <p>Genuine Colleges</p>
                    </div>
                    <div class="skSlide">
                      <img src="image/sk6.svg" height="100" width="100" alt="" />
                      <p>Free Councelling</p>
                    </div>
                    <div class="skSlide">
                      <img src="image/sk7.svg" height="100" width="100" alt="" />
                      <p>Free Councelling</p>
                    </div>
                    <div class="skSlide">
                      <img src="image/sk8.svg" height="100" width="100" alt="" />
                      <p>Best College Near Home Location</p>
                    </div>
                    <div class="skSlide">
                      <img src="image/sk1.svg" height="100" width="100" alt="" />
                      <p>Free Councelling</p>
                    </div>
                    <div class="skSlide">
                      <img src="image/sk8.svg" height="100" width="100" alt="" />
                      <p>Free Councelling</p>
                    </div>
                    <div class="skSlide">
                      <img src="image/sk1.svg" height="100" width="100" alt="" />
                      <p>Free Councelling</p>
                    </div>
                    <div class="skSlide">
                      <img src="image/sk2.svg" height="100" width="100" alt="" />
                      <p>College with Budget friendly</p>
                    </div>
                    <div class="skSlide">
                      <img src="image/sk3.svg" height="100" width="100" alt="" />
                      <p>College with good Placement</p>
                    </div>
                    <div class="skSlide">
                      <img src="image/sk4.svg" height="100" width="100" alt="" />
                      <p>Top rated Colleges</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Find the best college -->
  <div class="container mb-5">
    <h1 class="text-center mt-5 fs-2 fs-md-1 fw-bolder" style="color: #002F26;">
      Find you best college, around India
    </h1>
    <p class="text-center fs-4 fs-md-3 fw-bold" style="color: #ff8900">
      Find you best college, around India
    </p>
    <div class="row text-center mb-5 py-3 py-md-5">
      <!-- Delhi NCR -->
      <div class="col-6 col-sm-6 col-md-4 col-lg-4 gy-4">
        <div class="card py-3 py-md-5 sk-city rounded-4 ">
          <a href="topclg.php" class="text-decoration-none text-black row justify-content-between align-items-center">
            <svg class="col-md-4" viewBox="-18 0 512 512.00253" xmlns="http://www.w3.org/2000/svg">
              <path d="m320 182.859375h137.144531v-18.285156h-438.859375v18.285156zm0 0" />
              <path d="m438.859375 128.003906h-402.285156v18.285156h402.285156zm0 0" />
              <path d="m146.285156 201.144531h-128v109.714844h128zm-64 91.429688c-20.195312 0-36.570312-16.375-36.570312-36.570313 0-20.199218 16.375-36.574218 36.570312-36.574218 20.199219 0 36.574219 16.375 36.574219 36.574218 0 20.195313-16.375 36.570313-36.574219 36.570313zm0 0" />
              <path d="m457.144531 310.859375v-109.714844h-128v109.714844zm-64-91.429687c20.199219 0 36.570313 16.375 36.570313 36.574218 0 20.195313-16.371094 36.570313-36.570313 36.570313s-36.570312-16.375-36.570312-36.570313c0-20.199218 16.371093-36.574218 36.570312-36.574218zm0 0" />
              <path d="m100.574219 256.003906c0 10.097656-8.1875 18.285156-18.289063 18.285156-10.097656 0-18.285156-8.1875-18.285156-18.285156 0-10.101562 8.1875-18.285156 18.285156-18.285156 10.101563 0 18.289063 8.183594 18.289063 18.285156zm0 0" />
              <path d="m411.429688 256.003906c0 10.097656-8.1875 18.285156-18.285157 18.285156-10.097656 0-18.285156-8.1875-18.285156-18.285156 0-10.101562 8.1875-18.285156 18.285156-18.285156 10.097657 0 18.285157 8.183594 18.285157 18.285156zm0 0" />
              <path d="m365.714844 82.289062c0 15.148438-12.28125 27.429688-27.429688 27.429688-15.148437 0-27.425781-12.28125-27.425781-27.429688 0-15.148437 12.277344-27.429687 27.425781-27.429687 15.148438 0 27.429688 12.28125 27.429688 27.429687zm0 0" />
              <path d="m263.222656 36.574219h75.0625v-18.285157h-67.5625c-3.355468 0-6.4375-1.835937-8.039062-4.78125-5.507813-8.429687-14.898438-13.507812-24.96875-13.507812-10.066406 0-19.457032 5.078125-24.96875 13.507812-1.597656 2.945313-4.683594 4.78125-8.035156 4.78125h-67.566407v18.285157zm0 0" />
              <path d="m91.429688 82.289062c.035156-9.925781 3.328124-19.5625 9.378906-27.429687h-27.664063v54.859375h27.664063c-6.050782-7.867188-9.34375-17.507812-9.378906-27.429688zm0 0" />
              <path d="m402.285156 109.71875v-54.859375h-27.664062c12.503906 16.148437 12.503906 38.710937 0 54.859375zm0 0" />
              <path d="m263.222656 54.859375h-89.746094c12.503907 16.148437 12.503907 38.710937 0 54.859375h128.476563c-12.503906-16.148438-12.503906-38.710938 0-54.859375zm0 0" />
              <path d="m164.574219 82.289062c0 15.148438-12.28125 27.429688-27.429688 27.429688-15.148437 0-27.429687-12.28125-27.429687-27.429688 0-15.148437 12.28125-27.429687 27.429687-27.429687 15.148438 0 27.429688 12.28125 27.429688 27.429687zm0 0" />
              <path d="m155.429688 329.144531h-146.285157c-5.050781 0-9.144531 4.09375-9.144531 9.144531 0 5.046876 4.09375 9.140626 9.144531 9.140626h146.285157c5.050781 0 9.144531-4.09375 9.144531-9.140626 0-5.050781-4.09375-9.144531-9.144531-9.144531zm0 0" />
              <path d="m329.144531 365.71875h18.285157v45.710938h-18.285157zm0 0" />
              <path d="m310.859375 201.144531h-64v18.753907c25.484375 2.597656 48.707031 15.785156 64 36.34375zm0 0" />
              <path d="m329.144531 429.71875h18.285157v82.285156h-18.285157zm0 0" />
              <path d="m365.714844 429.71875h91.429687v82.285156h-91.429687zm0 0" />
              <path d="m365.714844 365.71875h91.429687v45.710938h-91.429687zm0 0" />
              <path d="m466.285156 329.144531h-146.285156c-5.046875 0-9.140625 4.09375-9.140625 9.144531 0 5.046876 4.09375 9.140626 9.140625 9.140626h146.285156c5.050782 0 9.144532-4.09375 9.144532-9.140626 0-5.050781-4.09375-9.144531-9.144532-9.144531zm0 0" />
              <path d="m18.285156 429.71875h91.429688v82.285156h-91.429688zm0 0" />
              <path d="m18.285156 365.71875h91.429688v45.710938h-91.429688zm0 0" />
              <path d="m128 429.71875h18.285156v82.285156h-18.285156zm0 0" />
              <path d="m164.574219 256.242188c15.289062-20.558594 38.511719-33.746094 64-36.34375v-18.753907h-64zm0 0" />
              <path d="m128 365.71875h18.285156v45.710938h-18.285156zm0 0" />
            </svg><span class="text-center fw-bold city-name col-md-8">Delhi NCR</span>
          </a>
        </div>
      </div>
      <!-- Delhi -->
      <div class="col-6 col-sm-6 col-md-4 col-lg-4 gy-4">
        <div class="card py-3 p-md-5 sk-city rounded-4">
          <a href="topclg.php" class="text-decoration-none text-black row justify-content-between align-items-center">
            <svg class="col-md-4" height="50pt" viewBox="0 -8 480 480" width="50pt" xmlns="http://www.w3.org/2000/svg">
              <path d="m440 448v-49.960938c10.546875-6.214843 16.726562-17.816406 16-30.039062 0-17.671875-10.742188-32-24-32s-24 14.328125-24 32c-.726562 12.222656 5.453125 23.824219 16 30.039062v49.960938h-56v-243.054688l-48-24v43.054688h24v16h-24v32h24v16h-24v32h24v16h-24v32h24v16h-24v32h24v16h-24v16h-16v-321.96875l-96-27.421875v29.390625h56v16h-56v32h56v16h-56v32h56v16h-56v32h56v16h-56v32h56v16h-56v32h56v16h-56v32h56v16h-56v16h-16v-448h-144v32h72v16h-72v32h72v16h-72v32h72v16h-72v32h72v16h-72v32h72v16h-72v32h72v16h-72v32h72v16h-72v32h72v16h-72v32h72v16h-72v16h-48v16h480v-16zm0 0" />
            </svg>
            <span class="text-center fw-bold city-name col-md-8">Delhi</span>
          </a>
        </div>
      </div>
      <!-- Hydrabad -->
      <div class="col-6 col-sm-6 col-md-4 col-lg-4 gy-4">
        <div class="card py-3 py-md-5 px-md-4 sk-city rounded-4">
          <a href="topclg.php" class="text-decoration-none text-black row justify-content-between align-items-center">
            <svg class="col-md-4" viewBox="0 0 56 56" xmlns="http://www.w3.org/2000/svg">
              <g id="007---Hyderabad-Charminar">
                <path id="Shape" d="m12 46v10h7v-13h-7zm3 0c0-.5522847.4477153-1 1-1s1 .4477153 1 1v7c0 .5522847-.4477153 1-1 1s-1-.4477153-1-1z" />
                <path id="Shape" d="m12 41h7v-9h-7zm3-6c0-.5522847.4477153-1 1-1s1 .4477153 1 1v3c0 .5522847-.4477153 1-1 1s-1-.4477153-1-1z" />
                <path id="Rectangle-path" d="m12 28h7v2h-7z" />
                <path id="Shape" d="m28 41.41c-2.56 2.23-3 3.44-3 5.18v9.41h6v-9.41c0-1.74-.45-2.95-3-5.18z" />
                <path id="Rectangle-path" d="m21 32h14v3h-14z" />
                <path id="Shape" d="m21 42v14h2v-9.41c0-2.59.93-4.28 3.67-6.68.7581689-.6750844 1.9018311-.6750844 2.66 0 2.74 2.4 3.67 4.09 3.67 6.68v9.41h2v-19h-14z" />
                <path id="Shape" d="m0 41h10v-9h-10zm6-5c0-.5522847.44771525-1 1-1s1 .4477153 1 1v2c0 .5522847-.44771525 1-1 1s-1-.4477153-1-1zm-4 0c0-.5522847.44771525-1 1-1s1 .4477153 1 1v2c0 .5522847-.44771525 1-1 1s-1-.4477153-1-1z" />
                <path id="Shape" d="m1 28h-1v2h10v-2h-1z" />
                <path id="Rectangle-path" d="m0 47h10v9h-10z" />
                <path id="Shape" d="m9 16h1l-.02-2h-3.51-2.94-3.51l-.02 2h1z" />
                <path id="Shape" d="m8 26v-3-5h-6v8z" />
                <path id="Rectangle-path" d="m0 43h10v2h-10z" />
                <path id="Rectangle-path" d="m21 28h14v2h-14z" />
                <path id="Shape" d="m37 36v5h7v-9h-7zm2-1c0-.5522847.4477153-1 1-1s1 .4477153 1 1v3c0 .5522847-.4477153 1-1 1s-1-.4477153-1-1z" />
                <path id="Rectangle-path" d="m46 47h10v9h-10z" />
                <path id="Shape" d="m46 41h10v-9h-10zm6-5c0-.5522847.4477153-1 1-1s1 .4477153 1 1v2c0 .5522847-.4477153 1-1 1s-1-.4477153-1-1zm-4 0c0-.5522847.4477153-1 1-1s1 .4477153 1 1v2c0 .5522847-.4477153 1-1 1s-1-.4477153-1-1z" />
                <path id="Rectangle-path" d="m46 43h10v2h-10z" />
                <path id="Shape" d="m49.53 12h2.94c1.9495652 0 3.53-1.5804348 3.53-3.53 0-1.9-.93-2.88-2.1-4.12-.6547985-.64814085-1.2412157-1.3618944-1.75-2.13-.4347217-.71222752-.8189964-1.45404465-1.15-2.22-.3008969.76483397-.676023 1.49833943-1.12 2.19-.5079987.76589431-1.0908636 1.47940133-1.74 2.13-1.21 1.26-2.14 2.25-2.14 4.15 0 1.9495652 1.5804348 3.53 3.53 3.53z" />
                <path id="Shape" d="m47 28h-1v2h10v-2h-1z" />
                <path id="Shape" d="m48 18v5 3h6v-8z" />
                <path id="Shape" d="m52.47 14h-2.94-3.51l-.02 2h1 8 1l-.02-2z" />
                <path id="Shape" d="m37 56h7v-13h-7zm2-10c0-.5522847.4477153-1 1-1s1 .4477153 1 1v7c0 .5522847-.4477153 1-1 1s-1-.4477153-1-1z" />
                <path id="Rectangle-path" d="m37 28h7v2h-7z" />
                <path id="Shape" d="m3.53 12h2.94c1.94956517 0 3.53-1.5804348 3.53-3.53 0-1.9-.93-2.88-2.1-4.12-.6547985-.64814085-1.24121574-1.3618944-1.75-2.13-.43472172-.71222752-.81899636-1.45404465-1.15-2.22-.3092658.77290265-.69448762 1.51319851-1.15 2.21-.50799867.76589431-1.09086356 1.47940133-1.74 2.13-1.18 1.24-2.11 2.23-2.11 4.13 0 1.9495652 1.58043483 3.53 3.53 3.53z" />
                <path id="Shape" d="m46 24h-36v2h1 9 16 9 1z" />
              </g>
            </svg><span class="text-center fw-bold city-name col-md-8">Hydrabad</span>
          </a>
        </div>
      </div>
      <!-- Mumbai -->
      <div class="col-6 col-sm-6 col-md-4 col-lg-4 gy-4">
        <div class="card py-3 p-md-5 sk-city rounded-4">
          <a href="topclg.php" class="text-decoration-none text-black row justify-content-between align-items-center">
            <svg class="col-md-4" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
              <g>
                <g>
                  <path d="M0,120v135h120.5V120H0z M75.25,225h-30v-60h30V225z" />
                </g>
              </g>
              <g>
                <g>
                  <rect y="285" width="120.5" height="227" />
                </g>
              </g>
              <g>
                <g>
                  <polygon points="60.25,0 0,90 120.5,90 		" />
                </g>
              </g>
              <g>
                <g>
                  <polygon points="451.75,0 391.5,90 512,90 		" />
                </g>
              </g>
              <g>
                <g>
                  <path d="M391.5,120v135H512V120H391.5z M466.75,225h-30v-60h30V225z" />
                </g>
              </g>
              <g>
                <g>
                  <rect x="391.5" y="285" width="120.5" height="227" />
                </g>
              </g>
              <g>
                <g>
                  <rect x="211" y="405" width="30" height="107" />
                </g>
              </g>
              <g>
                <g>
                  <rect x="271" y="405" width="30" height="107" />
                </g>
              </g>
              <g>
                <g>
                  <polygon points="331.25,150 331.25,120 301.25,120 301.25,150 271,150 271,120 241,120 241,150 210.75,150 210.75,120 180.75,120 
			180.75,150 150.5,150 150.5,255 361.5,255 361.5,150 		" />
                </g>
              </g>
              <g>
                <g>
                  <path d="M150.5,285v227H181V390c0-41.355,33.645-75,75-75s75,33.645,75,75v122h30.5V285H150.5z" />
                </g>
              </g>
              <g>
                <g>
                  <path d="M256,345c-19.555,0-36.228,12.542-42.42,30h84.839C292.228,357.542,275.555,345,256,345z" />
                </g>
              </g>
            </svg>

            <span class="text-center fw-bold city-name col-md-8">Mumbai</span>
          </a>
        </div>
      </div>
      <!-- Pune -->
      <div class="col-6 col-sm-6 col-md-4 col-lg-4 gy-4">
        <div class="card py-3 p-md-5 sk-city rounded-4">
          <a href="topclg.php" class="text-decoration-none text-black row justify-content-between align-items-center">
            <svg class="col-md-4" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 512 512" xml:space="preserve">
              <g>
                <g>
                  <path d="M450.22,384.425l-11.82-11.19l-11.83,11.19c-1.43,1.36-2.29,3.51-2.29,5.75v47.71v15v15h28.24v-15v-15v-47.71 C452.52,387.935,451.66,385.775,450.22,384.425z" />
                </g>
              </g>
              <g>
                <g>
                  <path d="M279.46,342.685L256,320.495l-23.46,22.19c-3.8,3.59-5.97,8.88-5.97,14.51v80.69v15v15h58.86v-15v-15v-80.69 C285.43,351.565,283.26,346.275,279.46,342.685z" />
                </g>
              </g>
              <g>
                <g>
                  <path d="M84.77,384.425l-11.82-11.19l-11.83,11.19c-1.43,1.36-2.29,3.51-2.29,5.75v47.71v15v15h28.24v-15v-15v-47.71 C87.07,387.935,86.21,385.785,84.77,384.425z" />
                </g>
              </g>
              <g>
                <g>
                  <polygon points="0,220.405 0,261.615 15,261.615 30,261.615 146.38,261.615 146.38,236.845 146.38,221.845 146.38,220.405 		" />
                </g>
              </g>
              <g>
                <g>
                  <polygon points="364.99,220.405 364.61,220.405 364.61,221.845 364.61,236.845 364.99,236.845 364.99,261.615 482,261.615  497,261.615 512,261.615 512,220.405 		" />
                </g>
              </g>
              <g>
                <g>
                  <path d="M30,291.615H15H0v176.27h28.83v-15v-62.71c0-3.2,0.4-6.37,1.17-9.42c1.73-6.93,5.36-13.26,10.51-18.13l32.44-30.67 l32.43,30.67c7.43,7.02,11.69,17.06,11.69,27.55v47.71v15v15h29.31v-15v-15v-146.27H30z" />
                </g>
              </g>
              <g>
                <g>
                  <path d="M497,291.615h-15H364.99v146.27v15v15h29.29v-15v-15v-47.71c0-10.49,4.26-20.53,11.68-27.55l32.44-30.67l32.44,30.67 c5.91,5.59,9.82,13.11,11.16,21.24c0.35,2.07,0.52,4.18,0.52,6.31v62.71v15H512v-176.27H497z" />
                </g>
              </g>
              <g>
                <g>
                  <path d="M334.67,220.405h-19v0h-11h-97.96h-11.04h-18.96h-0.33v1.44v15v201.04v15v15h20.19v-15v-15v-80.69 c0-11.14,3.63-21.89,10.14-30.47c1.57-2.08,3.32-4.03,5.22-5.83l44.07-41.68l44.08,41.68c1.65,1.56,3.19,3.24,4.59,5.02 c6.9,8.71,10.76,19.79,10.76,31.28v80.69v15v15h19.56v-15v-15v-201.04v-15v-1.44H334.67z" />
                </g>
              </g>
              <g>
                <g>
                  <polygon points="334.67,154.235 315.67,154.235 304.67,154.235 206.71,154.235 195.67,154.235 176.71,154.235 176.38,154.235 176.38,190.405 176.71,190.405 177.39,190.405 195.67,190.405 206.71,190.405 304.67,190.405 315.67,190.405 334.61,190.405 334.67,190.405 334.99,190.405 334.99,154.235 		" />
                </g>
              </g>
              <g>
                <g>
                  <polygon points="304.67,44.115 304.67,86.287 206.71,86.287 206.71,44.115 176.71,44.115 176.71,124.235 195.67,124.235 206.71,124.235 304.67,124.235 315.67,124.235 334.67,124.235 334.67,44.115 		" />
                </g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
            </svg>

            <span class="text-center fw-bold city-name col-md-8">Pune</span>
          </a>
        </div>
      </div>
      <!-- Chennai -->
      <div class="col-6 col-sm-6 col-md-4 col-lg-4 gy-4">
        <div class="card py-3 p-md-5 sk-city rounded-4">
          <a href="topclg.php" class="text-decoration-none text-black row justify-content-between align-items-center">
            <svg class="col-md-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 371.541 371.541">
              <path d="M362.699,246.722c0.307-0.554,0.497-1.182,0.497-1.859c0-1.013-0.399-1.928-1.038-2.617c2.26-1.066,3.827-3.36,3.827-6.024c0-2.48-1.357-4.648-3.371-5.791l-3.286-5.209l-3.288,5.209c-2.016,1.143-3.378,3.311-3.378,5.791c0,2.664,1.571,4.959,3.835,6.025 c-0.639,0.689-1.037,1.604-1.037,2.616c0,0.678,0.189,1.306,0.496,1.859h-18.42c0.307-0.554,0.496-1.182,0.496-1.859 c0-1.013-0.398-1.928-1.037-2.616c2.264-1.066,3.835-3.361,3.835-6.025c0-2.48-1.366-4.648-3.378-5.791l-3.288-5.209l-3.286,5.209 c-2.014,1.143-3.375,3.311-3.375,5.791c0,2.664,1.57,4.959,3.832,6.025c-0.639,0.689-1.037,1.604-1.037,2.616 c0,0.678,0.19,1.306,0.496,1.859h-18.42c0.307-0.554,0.496-1.182,0.496-1.859c0-1.013-0.398-1.927-1.035-2.616 c2.264-1.064,3.833-3.359,3.833-6.025c0-2.48-1.359-4.648-3.378-5.791l-3.287-5.209l-3.289,5.209 c-2.012,1.143-3.371,3.311-3.371,5.791c0,2.664,1.568,4.959,3.83,6.024c-0.639,0.689-1.038,1.604-1.038,2.617 c0,0.678,0.19,1.306,0.497,1.859h-18.414c0.307-0.554,0.497-1.182,0.497-1.859c0-2.134-1.732-3.865-3.868-3.865 c-0.885,0-1.691,0.309-2.342,0.808l-0.266-1.338c0.801,0.341,1.683,0.53,2.607,0.53c3.678,0,6.657-2.985,6.657-6.663 c0-2.479-1.357-4.648-3.371-5.791l-3.286-5.209l-3.288,5.209c-0.54,0.306-1.028,0.689-1.46,1.129L238.577,25.358h0.056V9.891 l-15.626,15.468h-8.73c0.324-0.565,0.524-1.212,0.524-1.911c0-1.014-0.399-1.928-1.037-2.617c2.261-1.064,3.828-3.355,3.828-6.021 c0-2.486-1.359-4.647-3.371-5.789l-3.288-5.209l-3.288,5.209c-2.018,1.143-3.378,3.303-3.378,5.789c0,2.666,1.571,4.957,3.834,6.021 c-0.638,0.689-1.036,1.604-1.036,2.617c0,0.699,0.2,1.346,0.524,1.911h-18.475c0.324-0.565,0.524-1.212,0.524-1.911 c0-1.014-0.398-1.928-1.037-2.617c2.263-1.064,3.833-3.355,3.833-6.021c0-2.486-1.364-4.647-3.378-5.789L185.77,3.81l-3.288,5.209 c-2.012,1.143-3.378,3.303-3.378,5.789c0,2.666,1.571,4.957,3.834,6.021c-0.638,0.689-1.036,1.604-1.036,2.617 c0,0.699,0.199,1.346,0.523,1.911h-18.475c0.324-0.565,0.523-1.212,0.523-1.911c0-1.014-0.397-1.928-1.035-2.617 c2.264-1.063,3.833-3.355,3.833-6.021c0-2.486-1.359-4.647-3.378-5.789l-3.288-5.209l-3.286,5.209 c-2.014,1.143-3.371,3.303-3.371,5.789c0,2.666,1.567,4.957,3.827,6.021c-0.638,0.689-1.036,1.604-1.036,2.617 c0,0.699,0.2,1.346,0.523,1.911h-8.728l-15.63-15.468v15.468h0.056L92.44,229.672c-0.432-0.439-0.92-0.823-1.46-1.129l-3.286-5.209 l-3.288,5.209c-2.012,1.143-3.371,3.312-3.371,5.791c0,3.678,2.979,6.663,6.659,6.663c0.925,0,1.805-0.189,2.605-0.529l-0.266,1.336 c-0.651-0.499-1.456-0.807-2.34-0.807c-2.138,0-3.868,1.731-3.868,3.865c0,0.678,0.19,1.306,0.497,1.859H65.908 c0.307-0.554,0.497-1.182,0.497-1.859c0-1.013-0.399-1.928-1.038-2.616c2.261-1.066,3.829-3.361,3.829-6.025 c0-2.48-1.359-4.648-3.371-5.791l-3.288-5.209l-3.286,5.209c-2.021,1.143-3.378,3.311-3.378,5.791c0,2.665,1.569,4.961,3.834,6.025 c-0.638,0.689-1.036,1.604-1.036,2.616c0,0.678,0.189,1.306,0.496,1.859h-18.42c0.307-0.554,0.496-1.182,0.496-1.859 c0-1.013-0.398-1.928-1.037-2.617c2.263-1.065,3.833-3.36,3.833-6.024c0-2.48-1.364-4.648-3.376-5.791l-3.288-5.209l-3.288,5.209 c-2.012,1.143-3.378,3.311-3.378,5.791c0,2.664,1.572,4.959,3.835,6.024c-0.639,0.689-1.037,1.604-1.037,2.617 c0,0.678,0.19,1.306,0.497,1.859h-18.42c0.307-0.554,0.497-1.182,0.497-1.859c0-1.013-0.398-1.928-1.037-2.617 c2.262-1.065,3.833-3.36,3.833-6.024c0-2.48-1.359-4.648-3.378-5.791l-3.286-5.209l-3.288,5.209 c-2.012,1.143-3.371,3.311-3.371,5.791c0,2.664,1.567,4.959,3.828,6.024c-0.639,0.689-1.037,1.604-1.037,2.617 c0,0.678,0.189,1.306,0.496,1.859H0V367.73h40.498v-66.646h-2.395v-7.118h17.039v7.118h-2.395v66.646h12.907v-66.646h-2.393v-7.118 h17.042v7.118H77.91v66.646h12.907v-66.646h-2.395v-7.118h17.043v7.118h-2.393v66.646h59.216v-88.064h46.965v88.064h59.214v-66.646 h-2.39v-7.118h17.039v7.118h-2.395v66.646h12.907v-66.646h-2.395v-7.118h17.046v7.118h-2.395v66.646h12.907v-66.646h-2.395v-7.118 h17.037v7.118h-2.392v66.646h40.497V246.722H362.699z M58.312,292.416H34.937v-5.952h3.928v-3.409h5.366v3.409h4.787v-3.409h5.366 v3.409h3.928V292.416z M83.469,292.416h-23.37v-5.952h3.923v-3.409h5.371v3.409h4.782v-3.409h5.371v3.409h3.923V292.416z M108.631,292.416h-23.37v-5.952h3.923v-3.409h5.37v3.409h4.781v-3.409h5.371v3.409h3.925V292.416z M191.63,214.254h-11.721v-17.337 h11.721V214.254z M191.63,163.928h-11.721v-17.33h11.721V163.928z M191.63,113.61h-11.721V96.28h11.721V113.61z M191.63,63.291 h-11.721V45.954h11.721V63.291z M286.278,292.416h-23.37v-5.952h3.925v-3.409h5.371v3.409h4.785v-3.409h5.368v3.409h3.921V292.416z M311.442,292.416H288.07v-5.952h3.923v-3.409h5.373v3.409h4.782v-3.409h5.371v3.409h3.923V292.416z M336.604,292.416h-23.376 v-5.952h3.927v-3.409h5.368v3.409h4.787v-3.409h5.364v3.409h3.93V292.416z" />
            </svg>
            <span class="text-center fw-bold city-name col-md-8">Chennai</span>
          </a>
        </div>
      </div>
      <!-- Kolkata -->
      <div class="col-6 col-sm-6 col-md-4 col-lg-4 gy-4">
        <div class="card py-3 p-md-5 sk-city rounded-4">
          <a href="topclg.php" class="text-decoration-none text-black row justify-content-between align-items-center">
            <svg class="col-md-4" viewBox="0 0 469.334 469" xmlns="http://www.w3.org/2000/svg">
              <path d="m15.4375 148.375-9.542969-19.082031c22.597657-11.199219 36.859375-34.273438 36.773438-59.492188v-69.632812h21.332031v69.632812c.113281 33.308594-18.71875 63.78125-48.5625 78.574219zm0 0" />
              <path d="m202.667969 234.832031c-88.230469 0-160-71.769531-160-160v-74.664062h21.332031v74.664062c0 76.460938 62.207031 138.667969 138.667969 138.667969 76.457031 0 138.664062-62.207031 138.664062-138.667969v-32h21.335938v32c0 88.230469-71.773438 160-160 160zm0 0" />
              <path d="m341.332031 42.832031h21.335938v384h-21.335938zm0 0" />
              <path d="m362.667969 106.832031s0 21.335938 21.332031 21.335938c0 0 21.332031 0 21.332031-21.335938h21.335938v64h-21.335938s0-21.332031-21.332031-21.332031c0 0-21.332031 0-21.332031 21.332031h-21.335938v-64zm0 0" />
              <g>
                <path d="m344.457031 408.625 62.460938-62.457031 15.082031 15.082031-62.457031 62.457031zm0 0" />
                <path d="m344.457031 359.707031 15.085938-15.082031 64 64-15.085938 15.082031zm0 0" />
                <path d="m67.125 359.707031 15.082031-15.082031 106.667969 106.667969-15.082031 15.082031zm0 0" />
                <path d="m67.125 451.292969 106.667969-106.667969 15.082031 15.082031-106.667969 106.667969zm0 0" />
              </g>
              <path d="m85.332031 21.5s0 21.332031 21.335938 21.332031h42.664062s21.335938 0 21.335938-21.332031h21.332031v64h-21.332031s0-21.332031-21.335938-21.332031h-42.664062s-21.335938 0-21.335938 21.332031h-21.332031v-64zm0 0" />
              <path d="m362.667969 192.167969s0 21.332031 21.332031 21.332031c0 0 21.332031 0 21.332031-21.332031h21.335938v64h-21.335938s0-21.335938-21.332031-21.335938c0 0-21.332031 0-21.332031 21.335938h-21.335938v-64zm0 0" />
              <path d="m362.667969 277.5s0 21.332031 21.332031 21.332031c0 0 21.332031 0 21.332031-21.332031h21.335938v64h-21.335938s0-21.332031-21.332031-21.332031c0 0-21.332031 0-21.332031 21.332031h-21.335938v-64zm0 0" />
              <path d="m85.332031 128.167969s0 21.332031 21.335938 21.332031h42.664062s21.335938 0 21.335938-21.332031h21.332031v64h-21.332031s0-21.335938-21.335938-21.335938h-42.664062s-21.335938 0-21.335938 21.335938h-21.332031v-64zm0 0" />
              <path d="m85.332031 234.832031s0 21.335938 21.335938 21.335938h42.664062s21.335938 0 21.335938-21.335938h21.332031v64h-21.332031s0-21.332031-21.335938-21.332031h-42.664062s-21.335938 0-21.335938 21.332031h-21.332031v-64zm0 0" />
              <path d="m42.667969.167969h42.664062v469.332031h-42.664062zm0 0" />
              <path d="m64 341.5h106.667969v21.332031h-106.667969zm0 0" />
              <path d="m42.667969.167969h21.332031v469.332031h-21.332031zm0 0" />
              <path d="m42.667969 341.5h21.332031v42.667969h-21.332031zm0 0" />
              <path d="m469.335938 277.5-469.335938 85.332031v-106.664062h469.335938zm0 0" />
              <path d="m213.332031 256.167969h21.335938v64h-21.335938zm0 0" />
              <path d="m469.335938 277.5-469.335938 21.332031v-42.664062h469.335938zm0 0" />
              <path d="m405.332031 42.832031h21.335938v384h-21.335938zm0 0" />
              <path d="m405.332031 85.5h21.335938v106.667969h-21.335938zm0 0" />
              <path d="m170.667969.167969h42.664062v469.332031h-42.664062zm0 0" />
              <path d="m309.332031 234.832031c-64.769531-.074219-117.253906-52.5625-117.332031-117.332031v-117.332031h21.332031v117.332031c0 53.019531 42.980469 96 96 96s96-42.980469 96-96v-74.667969h21.335938v74.667969c-.078125 64.769531-52.566407 117.257812-117.335938 117.332031zm0 0" />
              <path d="m453.894531 191.042969c-29.839843-14.792969-48.675781-45.265625-48.5625-78.574219v-69.636719h21.335938v69.636719c-.085938 25.21875 14.175781 48.292969 36.769531 59.488281zm0 0" />
              <path d="m170.667969.167969h21.332031v469.332031h-21.332031zm0 0" />
              <path d="m170.667969.167969h21.332031v192h-21.332031zm0 0" />
              <path d="m341.332031 234.832031h21.335938v21.335938h-21.335938zm0 0" />
              <path d="m64 448.167969h106.667969v21.332031h-106.667969zm0 0" />
              <path d="m341.332031 405.5h64v21.332031h-64zm0 0" />
              <path d="m341.332031 341.5h64v21.332031h-64zm0 0" />
              <path d="m426.667969 256.167969h21.332031v21.332031h-21.332031zm0 0" />
              <path d="m341.332031 298.832031h21.335938v128h-21.335938zm0 0" />
              <path d="m64 234.832031h21.332031v21.335938h-21.332031zm0 0" />
              <path d="m234.667969 288.167969v-32h-21.332031v32.96875zm0 0" />
              <path d="m38.375 234.832031h-38.375v-21.332031h38.375c46.695312.105469 90.878906-21.132812 119.957031-57.667969 21.761719-27.257812 33.628907-61.089843 33.667969-95.96875v-59.695312h21.332031v59.695312c-.046875 39.722657-13.5625 78.253907-38.332031 109.304688-33.125 41.601562-83.445312 65.785156-136.625 65.664062zm0 0" />
            </svg><span class="text-center fw-bold city-name col-md-8">Kolkata</span>
          </a>
        </div>
      </div>
      <!-- Bengaluru -->
      <div class="col-6 col-sm-6 col-md-4 col-lg-4 gy-4">
        <div class="card py-3 py-md-5 px-md-4 sk-city rounded-4">
          <a href="topclg.php" class="text-decoration-none text-black row justify-content-between align-items-center">
            <svg class="col-md-4" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 19.5 19.5" style="enable-background:new 0 0 19.5 19.5;" xml:space="preserve">
              <g>
                <path d="M19.5,18.628l-0.164-2.409h-0.957v-0.625h-1.068l-0.273-2.375h-0.275v-0.291H15.97v0.274h-0.275
		l-0.123,2.41h-0.5l-0.206,0.475l-0.795-0.442l-1.589-11.57l-1.021,0.014V3.448h-0.772V2.997c0.207-0.225,0.331-0.523,0.331-0.855
		c0-0.7-0.568-1.27-1.268-1.27c-0.704,0-1.272,0.57-1.272,1.27c0,0.332,0.126,0.631,0.332,0.855v0.451H8.038v0.641L7.021,4.075
		L5.432,15.643l-0.797,0.443l-0.204-0.474H3.928l-0.12-2.41H3.531v-0.274H2.74v0.291H2.465l-0.276,2.375H1.122v0.625H0.165L0,18.628
		h8.966v-1.797h1.57v1.797H19.5z M8.623,7.226h2.256v5.238H8.623V7.226z M5.579,15.79h8.349l0.42,0.351l-0.203,0.127H5.48
		l-0.272-0.23L5.579,15.79z" />
              </g>
            </svg>

            <span class="text-center fw-bold city-name col-md-8">Bengaluru</span>
          </a>
        </div>
      </div>
      <!-- Jaipur -->
      <div class="col-6 col-sm-6 col-md-4 col-lg-4 gy-4">
        <div class="card py-3 p-md-5 sk-city rounded-4">
          <a href="topclg.php" class="text-decoration-none text-black row justify-content-between align-items-center">
            <svg class="col-md-4" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
              <path d="m0 361h163.753906c12.398438-22.9375 33.070313-41.085938 59.039063-49.730469l33.207031-11.074219 33.207031 11.074219c25.96875 8.644531 46.640625 26.792969 59.039063 49.730469h163.753906v-90h-512zm0 0" />
              <path d="m279.714844 339.714844-23.714844-7.910156-23.714844 7.910156c-30.675781 10.226562-51.285156 38.820312-51.285156 71.148437v101.136719h150v-101.136719c0-32.328125-20.609375-60.921875-51.285156-71.148437zm0 0" />
              <path d="m151 410.863281c0-6.785156.84375-13.382812 2.089844-19.863281h-153.089844v121h151zm0 0" />
              <path d="m361 410.863281v101.136719h151v-121h-153.089844c1.246094 6.480469 2.089844 13.078125 2.089844 19.863281zm0 0" />
              <path d="m451 153.753906c-17.4375 6.199219-30 22.679688-30 42.246094v45h91v-241h-61zm0 0" />
              <path d="m91 196c0-19.566406-12.5625-36.046875-30-42.246094v-153.753906h-61v241h91zm0 0" />
              <path d="m211 226v15h90v-15c0-24.8125-20.1875-45-45-45s-45 20.1875-45 45zm0 0" />
              <path d="m181 226c0-41.351562 33.648438-75 75-75s75 33.648438 75 75v15h60v-150h-31.515625c-7.355469-50.75-50.730469-91-103.484375-91s-96.128906 40.25-103.484375 91h-31.515625v150h60zm0 0" />
            </svg><span class="fw-bold city-name col-md-8">Jaipur</span>
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- check eligibility -->
  <div class="container border rounded-5 my-5" style="height: 200px;background-image: url('image/bg1.2x.png'); background-repeat: no-repeat;color: #002F26;">
    <div class="position-relative gMmobileView">
      <div class="position-absolute inner bg-white border p-2">
        <h2 class="text-center fw-bolder">
          Top colleges from our recommendation
        </h2>
      </div>
      <div class="d-flex justify-content-around w-100 position-absolute" style="left: 50%; top: 100%; transform: translate(-50%, 50%);height:125px;">
        <div class="skBody">
          <div class="skSlider">
            <div class="skSlide-track">
              <div class="skSlide">
                <img src="image/d1.png" alt="" />
                <p>G.I.T.A BBSR</p>
              </div>
              <div class="skSlide">
                <img src="image/d2.png" alt="" />
                <p>G.I.T.A BBSR</p>
              </div>
              <div class="skSlide">
                <img src="image/d1.png" alt="" />
                <p>G.I.T.A BBSR</p>
              </div>
              <div class="skSlide">
                <img src="image/d2.png" alt="" />
                <p>G.I.T.A BBSR</p>
              </div>
              <div class="skSlide">
                <img src="image/d1.png" alt="" />
                <p>G.I.T.A BBSR</p>
              </div>
              <div class="skSlide">
                <img src="image/d2.png" alt="" />
                <p>G.I.T.A BBSR</p>
              </div>
              <div class="skSlide">
                <img src="image/d1.png" alt="" />
                <p>G.I.T.A BBSR</p>
              </div>
              <div class="skSlide">
                <img src="image/d2.png" alt="" />
                <p>G.I.T.A BBSR</p>
              </div>
              <div class="skSlide">
                <img src="image/d1.png" alt="" />
                <p>G.I.T.A BBSR</p>
              </div>
              <div class="skSlide">
                <img src="image/d2.png" alt="" />
                <p>G.I.T.A BBSR</p>
              </div>
              <div class="skSlide">
                <img src="image/d1.png" alt="" />
                <p>G.I.T.A BBSR</p>
              </div>
              <div class="skSlide">
                <img src="image/d2.png" alt="" />
                <p>G.I.T.A BBSR</p>
              </div>
              <div class="skSlide">
                <img src="image/d1.png" alt="" />
                <p>G.I.T.A BBSR</p>
              </div>
              <div class="skSlide">
                <img src="image/d2.png" alt="" />
                <p>G.I.T.A BBSR</p>
              </div>
              <div class="skSlide">
                <img src="image/d1.png" alt="" />
                <p>G.I.T.A BBSR</p>
              </div>
              <div class="skSlide">
                <img src="image/d2.png" alt="" />
                <p>G.I.T.A BBSR</p>
              </div>
              <div class="skSlide">
                <img src="image/d1.png" alt="" />
                <p>G.I.T.A BBSR</p>
              </div>
              <div class="skSlide">
                <img src="image/d2.png" alt="" />
                <p>G.I.T.A BBSR</p>
              </div>
              <div class="skSlide">
                <img src="image/d1.png" alt="" />
                <p>G.I.T.A BBSR</p>
              </div>
              <div class="skSlide">
                <img src="image/d2.png" alt="" />
                <p>G.I.T.A BBSR</p>
              </div>
              <div class="skSlide">
                <img src="image/d1.png" alt="" />
                <p>G.I.T.A BBSR</p>
              </div>
              <div class="skSlide">
                <img src="image/d2.png" alt="" />
                <p>G.I.T.A BBSR</p>
              </div>
              <div class="skSlide">
                <img src="image/d1.png" alt="" />
                <p>G.I.T.A BBSR</p>
              </div>
              <div class="skSlide">
                <img src="image/d2.png" alt="" />
                <p>G.I.T.A BBSR</p>
              </div>
              <div class="skSlide">
                <img src="image/d1.png" alt="" />
                <p>G.I.T.A BBSR</p>
              </div>
              <div class="skSlide">
                <img src="image/d2.png" alt="" />
                <p>G.I.T.A BBSR</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- choose your college -->
  <div class="container d-flex p-0 elfo shadow-none flex-column flex-md-row my-5 rounded-5 border border-1 overflow-hidden" id="choose_college" style="color: #002F26;">
    <img src="image/gd.jpg" class="card-img rounded-start-md-5" />
    <div class="card-body w-100">
      <div class="my-2 mx-2 mx-md-5">
        <h1 class="mb-3 fs-3 fs-md-2 text-center text-md-start fw-bold">Choose your college according to your eligibility</h1>
        <form>
          <!-- Step-1 -->
          <div id="step-1">
            <div class="form-group sliderContainer fs-4">
              <label for="feeRange" style="font-size: large;">Fee structure: Rs.<span id="fee">0</span> - 500000</label>
              <input type="range" step="5000" max="500000" value="0" class="sliderRange" id="feeRange" oninput="document.getElementById('fee').innerHTML = this.value" style="
                  background: linear-gradient(
                    to right,
                    #00ff00,
                    #00ff00 ${value / 500000 * 100}%,
                    #ebebeb ${value / 500000 * 100}%,
                    #ebebeb
                  );
                " />
            </div>
            <div class="form-control input-group col-12 rounded-pill border border-1 mb-3 shadow-md">
              <span class="input-group-text border-0 rounded-pill bg-body ms-1" id="basic-addon1"><i class="fa-solid fa-magnifying-glass"></i></span>
              <input type="text" class="form-control p-0 mb-0 shadow-none border-0" placeholder="Search by City" aria-label="Username" aria-describedby="basic-addon1" required>
            </div>
            <div class="form-control input-group col-12 rounded-pill border border-1 mb-3 shadow-md">
              <span class="input-group-text border-0 rounded-pill bg-body ms-1" id="basic-addon1"><i class="fa-sharp fa-solid fa-location-dot"></i></span>
              <input type="text" class="form-control p-0 mb-0 shadow-none border-0" placeholder="Placement" aria-label="Username" aria-describedby="basic-addon1" required>
            </div>
            <div class="form-control input-group col-12 rounded-pill border border-1 mb-3 shadow-md">
              <span class="input-group-text border-0 rounded-pill bg-body ms-1" id="basic-addon1"><i class="fa-solid fa-book-open-reader"></i></span>
              <input type="text" class="form-control p-0 mb-0 shadow-none border-0" step="0.001" placeholder="%of marks (CGPA)" aria-label="Username" aria-describedby="basic-addon1" required>
            </div>
            <p class="fs-6 text-center text-danger" id="err-mess"></p>
            <div class="col-12 d-flex">
              <button type="button" class="btn-h bg-gr m-auto border border-0" style="padding: 15px 30px" onclick="validateStep1()" id="nextStepButton">
                Next Step
              </button>
            </div>
          </div>
          <!-- step-2 -->
          <div style="display: none" id="step-2">
            <div class="form-control input-group col-12 rounded-pill border border-1 mb-3 shadow-md">
              <span class="input-group-text border-0 rounded-pill bg-body ms-1" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
              <input type="text" class="form-control p-0 mb-0 shadow-none border-0" placeholder="Name" aria-label="Username" aria-describedby="basic-addon1" required>
            </div>
            <div class="form-control input-group col-12 rounded-pill border border-1 mb-3 shadow-md">
              <span class="input-group-text border-0 rounded-pill bg-body ms-1" id="basic-addon1"><i class="fa-solid fa-envelope"></i></span>
              <input type="text" class="form-control p-0 mb-0 shadow-none border-0" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1" required>
            </div>
            <div class="row">
              <div class="col-6">
                <input type="text" class="form-control mb-3" placeholder="Mobile Number" required>
              </div>
              <div class="col-6">
                <input type="text" class="form-control" placeholder="Select Course" required>
              </div>
            </div>
            <div class="row">
              <div class="col-6">
                <button type="button" class="btn bg-gr px-4" style="padding: 15px 30px" onclick="searchColleges()">
                  Search
                </button>
              </div>
              <div class="col-6 d-flex justify-content-end align-items-center">
                <strong class="fs-6 fs-md-4" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo" style="
                      cursor: pointer;
                      color: #ff8900;
                      text-decoration: none;
                    " onmouseover="this.style.textDecoration='underline'" onmouseout="this.style.textDecoration='none'">
                  Get free counseling
                </strong>
              </div>
            </div>
          </div>
        </form>
        <!-- <div class="text-end">
          <button class="border-0 bg-body" onclick="document.getElementById('step-2').style.display='none';document.getElementById('step-1').style.display='block';"><i class="fa-regular fa-circle"></i></button>
          <button class="border-0 bg-body" onclick="validateStep1()"><i class="fa-regular fa-circle"></i></button>
        </div> -->
        <div class="text-end">
          <button id="step1Button" class="border-0 bg-body" onclick="changeStep(1)"><i id="step1Icon" class="fa-regular fa-circle"></i></button>
          <button id="step2Button" class="border-0 bg-body" onclick="changeStep(2)"><i id="step2Icon" class="fa-regular fa-circle"></i></button>
        </div>

      </div>
    </div>
  </div>
  <script>
    function validateStep1() {
      const inputs = document.querySelectorAll('#step-1 input[required]');
      const nextStepButton = document.getElementById('nextStepButton');
      const errorMessage = document.getElementById("err-mess");
      let allFilled = true;
      inputs.forEach(input => {
        if (input.value.trim() === '') {
          allFilled = false;
          return;
        }
      });
      if (allFilled) {
        document.getElementById('step-1').style.display = 'none';
        document.getElementById('step-2').style.display = 'block';
        errorMessage.innerHTML = null;
      } else {
        // alert('Please fill in all the required fields.');
        errorMessage.textContent = "All inputs are required.";
        setTimeout(() => {
          errorMessage.textContent = null;
        }, 3000);
      }
    }

    function searchColleges() {
      // Add code to perform the search or any other action in step 2 here.
      // This function is triggered when the "Search" button is clicked in step 2.
      // can access the input values using JavaScript and perform the necessary operations.
    }


    // function for circle button
    function changeStep(stepNumber) {
      const step1Button = document.getElementById('step1Button');
      const step1Icon = document.getElementById('step1Icon');
      const step2Button = document.getElementById('step2Button');
      const step2Icon = document.getElementById('step2Icon');

      // Reset classes for both buttons
      step1Icon.classList.remove('fa-solid');
      step1Icon.classList.add('fa-regular');
      step2Icon.classList.remove('fa-solid');
      step2Icon.classList.add('fa-regular');

      // Set active classes based on the step number
      if (stepNumber === 1) {
        step1Icon.classList.add('fa-solid');
        step2Button.classList.remove('active');
      } else if (stepNumber === 2) {
        step2Icon.classList.add('fa-solid');
        step1Button.classList.remove('active');
      }

      // Update display for the respective steps
      document.getElementById('step1').style.display = (stepNumber === 1) ? 'block' : 'none';
      document.getElementById('step2').style.display = (stepNumber === 2) ? 'block' : 'none';
    }

    // Run the changeStep function on page load to set the initial state
    window.addEventListener('DOMContentLoaded', function() {
      changeStep(1);
    });
  </script>




  <!-- Why us -->
  <div class="d-block container my-5 text-center p-0" style="color: #002F26;">
    <h1 class="text-center fw-bold">Why us?</h1>
    <div class="py-4 border rounded-5" style="width: 100%;">
      <div class="skBody">
        <div class="skSlider">
          <div class="skSlide-track">
            <div class="skSlide">
              <img src="image/sk1.svg" height="100" width="100" alt="" />
              <p>Free Councelling</p>
            </div>
            <div class="skSlide">
              <img src="image/sk2.svg" height="100" width="100" alt="" />
              <p>College with Budget friendly</p>
            </div>
            <div class="skSlide">
              <img src="image/sk3.svg" height="100" width="100" alt="" />
              <p>College with good Placement</p>
            </div>
            <div class="skSlide">
              <img src="image/sk4.svg" height="100" width="100" alt="" />
              <p>Top rated Colleges</p>
            </div>
            <div class="skSlide">
              <img src="image/sk5.svg" height="100" width="100" alt="" />
              <p>Genuine Colleges</p>
            </div>
            <div class="skSlide">
              <img src="image/sk6.svg" height="100" width="100" alt="" />
              <p>Free Councelling</p>
            </div>
            <div class="skSlide">
              <img src="image/sk7.svg" height="100" width="100" alt="" />
              <p>Free Councelling</p>
            </div>
            <div class="skSlide">
              <img src="image/sk8.svg" height="100" width="100" alt="" />
              <p>Best College Near Home Location</p>
            </div>
            <div class="skSlide">
              <img src="image/sk1.svg" height="100" width="100" alt="" />
              <p>Free Councelling</p>
            </div>
            <div class="skSlide">
              <img src="image/sk8.svg" height="100" width="100" alt="" />
              <p>Free Councelling</p>
            </div>
            <div class="skSlide">
              <img src="image/sk1.svg" height="100" width="100" alt="" />
              <p>Free Councelling</p>
            </div>
            <div class="skSlide">
              <img src="image/sk2.svg" height="100" width="100" alt="" />
              <p>College with Budget friendly</p>
            </div>
            <div class="skSlide">
              <img src="image/sk3.svg" height="100" width="100" alt="" />
              <p>College with good Placement</p>
            </div>
            <div class="skSlide">
              <img src="image/sk4.svg" height="100" width="100" alt="" />
              <p>Top rated Colleges</p>
            </div>
            <div class="skSlide">
              <img src="image/sk1.svg" height="100" width="100" alt="" />
              <p>Free Councelling</p>
            </div>
            <div class="skSlide">
              <img src="image/sk2.svg" height="100" width="100" alt="" />
              <p>College with Budget friendly</p>
            </div>
            <div class="skSlide">
              <img src="image/sk3.svg" height="100" width="100" alt="" />
              <p>College with good Placement</p>
            </div>
            <div class="skSlide">
              <img src="image/sk4.svg" height="100" width="100" alt="" />
              <p>Top rated Colleges</p>
            </div>
            <div class="skSlide">
              <img src="image/sk5.svg" height="100" width="100" alt="" />
              <p>Genuine Colleges</p>
            </div>
            <div class="skSlide">
              <img src="image/sk2.svg" height="100" width="100" alt="" />
              <p>College with Budget friendly</p>
            </div>
            <div class="skSlide">
              <img src="image/sk3.svg" height="100" width="100" alt="" />
              <p>College with good Placement</p>
            </div>
            <div class="skSlide">
              <img src="image/sk4.svg" height="100" width="100" alt="" />
              <p>Top rated Colleges</p>
            </div>
            <div class="skSlide">
              <img src="image/sk1.svg" height="100" width="100" alt="" />
              <p>Free Councelling</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Testimonials -->
  <div class="container gtco-testimonials" style="color: #002F26;">
    <h1 class="fw-bold text-center text-decoration-underline" style="margin-bottom: -10px;">Testimonials</h1>
    <div class="owl-carousel owl-carousel1 owl-theme">
      <div>
        <div class="card text-center"><img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR0mnpz5BVcaHtJ3riXgxWaJL12sVSetyt1mA&usqp=CAU" alt="">
          <div class=" card-body">
            <h5 style="color: #002F26;">Nikhil<br />
              <span> Project Manager </span>
            </h5>
            <p class="card-text">Transformative college experience with passionate professors and rewarding coursework</p>
          </div>
        </div>
      </div>
      <div>
        <div class="card text-center"><img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR0mnpz5BVcaHtJ3riXgxWaJL12sVSetyt1mA&usqp=CAU" alt="">
          <div class=" card-body">
            <h5 style="color: #002F26;">Atul<br />
              <span> Engineer </span>
            </h5>
            <p class="card-text">Transformative college experience with passionate professors and rewarding coursework</p>
          </div>
        </div>
      </div>
      <div>
        <div class="card text-center"><img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR0mnpz5BVcaHtJ3riXgxWaJL12sVSetyt1mA&usqp=CAU" alt="">
          <div class=" card-body">
            <h5 style="color: #002F26;">Somnath<br />
              <span> Project Manager </span>
            </h5>
            <p class="card-text">Transformative college experience with passionate professors and rewarding coursework</p>
          </div>
        </div>
      </div>
      <div>
        <div class="card text-center"><img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR0mnpz5BVcaHtJ3riXgxWaJL12sVSetyt1mA&usqp=CAU" alt="">
          <div class=" card-body">
            <h5 style="color: #002F26;">Rachit<br />
              <span> Project Manager </span>
            </h5>
            <p class="card-text">Transformative college experience with passionate professors and rewarding coursework</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    (function() {
      "use strict";

      var carousels = function() {
        $(".owl-carousel1").owlCarousel({
          loop: true,
          center: true,
          margin: 0,
          responsiveClass: true,
          nav: false,
          responsive: {
            0: {
              items: 1,
              nav: false
            },
            680: {
              items: 2,
              nav: false,
              loop: false
            },
            1000: {
              items: 3,
              nav: true
            }
          }
        });
      };

      (function($) {
        carousels();
      })(jQuery);
    })();
  </script>

  <!-- Read articles -->
  <div class="container text-start my-5" style="color: #002F26;">
    <h1 class="fw-bold text-center text-decoration-underline">Read latest articles</h1>
    <div class="row">
      <div class="col-md-4 mb-3">
        <div class="mb-2">
          <img class="rounded-4" src="image/College Images-01.png" alt="image" width="100%" height="100%" />
        </div>
        <h4>Best colleges in India</h4>
        <p class="lh-1">Published on: 5 May 2023</p>
      </div>
      <div class="col-md-4 mb-3">
        <div class="mb-2">
          <img class="rounded-4" src="image/College Images-01.png" alt="image" width="100%" height="100%" />
        </div>
        <h4>Best colleges in India</h4>
        <p class="lh-1">Published on: 5 May 2023</p>
      </div>
      <div class="col-md-4 mb-3">
        <div class="mb-2">
          <img class="rounded-4" src="image/College Images-01.png" alt="image" width="100%" height="100%" />
        </div>
        <h4>Best colleges in India</h4>
        <p class="lh-1">Published on: 5 May 2023</p>
      </div>
    </div>
    <div class="d-flex justify-content-center my-3">
      <a href="blogs.php"><button type="button" class="btn px-5 bg-gr">Show More...</button></a>
    </div>
  </div>

  <!-- FAQ's -->
  <style>
    .accordion-item {
      background: none;
    }

    .accordion {
      --bs-accordion-active-bg: none;
    }

    .accordion-button:not(.collapsed) {
      box-shadow: none;
    }

    .accordion-button {
      background: none;
    }

    .accordion-body {
      border-left: 3px solid #002F26;
    }

    .collapse1 {
      transform: translateY(50%);
    }

    .collapse3 {
      transform: translateY(-85%);
    }

    .accordion-button:focus {
      border-color: none;
      box-shadow: none;
    }

    .accordion-item {
      height: 50px;
    }

    @media (max-width: 990px) {
      .collapse1 {
        transform: none;
      }

      .collapse3 {
        transform: none;
      }

      .accordion-item {
        height: auto;
      }
    }
  </style>
  <div class="container border border-1 p-4 rounded-top-5" style="background-color: #FAFAE5;">
    <h2 class="text-decoration-underline fw-bold" style="color:#002F26;">FAQs</h2>
    <div class="accordion" id="accordion-faqs">
      <div class="accordion-item row border-0">
        <h2 class="accordion-header col-lg-5" id="heading-1">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="false" aria-controls="collapse-1">
            What is the best colleges in india
          </button>
        </h2>
        <div id="collapse-1" class="accordion-collapse collapse col-lg-7 collapse1 show" aria-labelledby="heading-1" data-bs-parent="#accordion-faqs">
          <div class="accordion-body">
            The best college in India is xyzzy where you will get good campus selection and the college faculties and also good with budget friendly options.
          </div>
        </div>
      </div>
      <div class="accordion-item row border-0">
        <h2 class="accordion-header col-lg-5" id="heading-2">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
            What is the best colleges in india
          </button>
        </h2>
        <div id="collapse-2" class="accordion-collapse collapse col-lg-7" aria-labelledby="heading-2" data-bs-parent="#accordion-faqs">
          <div class="accordion-body">
            No. Twilight is a work of fiction.
          </div>
        </div>
      </div>
      <div class="accordion-item row border-0">
        <h2 class="accordion-header col-lg-5" id="heading-3">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
            What is the best colleges in india
          </button>
        </h2>
        <div id="collapse-3" class="accordion-collapse collapse col-lg-7 collapse3" aria-labelledby="heading-3" data-bs-parent="#accordion-faqs">
          <div class="accordion-body">
            The best college in India is xyzzy where you will get good campus selection and the college faculties and also good with budget friendly options.
          </div>
        </div>
      </div>
    </div>
  </div>
</div><?php include 'foot.php'; ?>