<?php include 'head.php'; ?>
<style>
  .btn.active {
    background-color: #002F26;
    color: #F7931E;
  }
</style>
<div class="body">
  <!-- Front photo and all -->
  <div class="body">
    <div class="slider">
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="image/sk-clg1.jpg" class="d-block w-100" alt="image/s1.png" />
          </div>
          <div class="carousel-item">
            <img src="image/sk-clg2.jpg" class="d-block w-100" alt="image/s1.png" />
          </div>
          <div class="carousel-item">
            <img src="image/sk-clg3.jpg" class="d-block w-100" alt="image/s1.png" />
          </div>
        </div>
      </div>
      <div class="slider-top d-flex">
        <div class="container">
          <div class="d-flex flex-direction-row h-100 justify-content-between">
            <div class="w-70 mt-5 d-flex align-items-center">
              <div class="d-flex justify-content-between ">
                <a class="text-decoration-none" href="topclg.php">
                  <div class="w-20 mt-5 goBackICon">
                    <i class="fa-solid fa-3x text-white fa-circle-arrow-left fs-1"></i>
                    <p class="fw-bold text-white text-center" style="font-size: 12px">
                      Go Back
                    </p>
                  </div>
                </a>
                <div class="w-70 coursesText " style="width: 90%">
                  <div>
                    <p class="fs-2 text-white fw-bold">
                      Department of Management Studies IIT Delhi [DMS IITD],New
                      Delhi
                    </p>
                    <p class="text-white fs-4 text-md-white text-black">
                      MBA | MBA/PGDM | sale & marketing Management
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Selection section -->
  <div class="position-sticky bg-light" id="second-navbar">
    <div class="d-lg-flex d-none justify-content-center align-items-center border border-1 shadow-sm">
      <button class="btn rounded-0 shadow-none border-end border-1 active" onclick="scrollToSection(this, 'about_college'); document.getElementById('college_gallery').style.display='none'; document.getElementById('about_college').style.display='block';">
        <i class="fa-solid fa-building-columns me-2"></i> About College
      </button>
      <button class="btn rounded-0 shadow-none" onclick="scrollToSection(this, 'college_gallery'); document.getElementById('about_college').style.display='none'; document.getElementById('college_gallery').style.display='block';">
        <i class="fa-regular fa-images"></i> College gallery
      </button>
      <button class="btn rounded-0 shadow-none border-end border-1" onclick="scrollToSection(this, 'fee_structure')">
        <i class="fa-solid fa-indian-rupee-sign me-2"></i> College fee
      </button>
      <button class="btn rounded-0 shadow-none border-end border-1" onclick="scrollToSection(this, 'testimonials')">
        <i class="fa-solid fa-user-group me-2"></i> Testimonials
      </button>
      <button class="btn rounded-0 shadow-none border-end border-1" onclick="scrollToSection(this, 'alumnus')">
        <i class="fa-solid fa-user-graduate me-2"></i> Alumnus
      </button>
      <button class="btn rounded-0 shadow-none" onclick="scrollToSection(this, 'choose_college')">
        <i class="fa-solid fa-check me-1"></i> Check eligibility
      </button>
    </div>
  </div>
  <script>
  function scrollToSection(button, id) {
    // remove active class from all buttons
    let buttons = document.querySelectorAll('.btn');
    for (let i = 0; i < buttons.length; i++) {
      buttons[i].classList.remove('active');
    }

    // add active class to clicked button
    button.classList.add('active');

    // scroll to section
    let section = document.getElementById(id);
    section.scrollIntoView({
      behavior: 'smooth',block: 'center',
    });
  }
</script>

  <!-- about us blog section -->
  <div class="container my-5">
    <div class="row">
      <div class="col-lg-8" id="about_college">
        <div class="d-flex justify-content-center align-items-center">
          <p class="fs-3 fw-bold">About the college</p>
        </div>
        <div class="border border-1 p-3" style="text-align: justify;">
          <p>
            The Department of Management Studies at the Indian Institute of
            Technology Delhi (DMS IITD) is one of the premier business schools
            in India. Established in 1993, the department has a strong
            reputation for academic excellence, research, and industry
            engagement.
          </p>
          <p>
            DMS IITD offers a two-year full-time MBA program that is designed to
            provide students with a solid foundation in management principles
            and practices, as well as to develop their critical thinking,
            problem-solving, and leadership skills. The curriculum includes
            courses in areas such as marketing, finance, operations,
            organizational behavior, and strategy.
          </p>
          <p>
            The faculty at DMS IITD comprises highly qualified and experienced
            academicians and industry experts who bring a wealth of knowledge
            and experience to the classroom. The department has a strong
            research focus, and the faculty regularly publish their research in
            leading academic journals and conferences.
          </p>
          <p>
            DMS IITD has strong industry connections, and the department works
            closely with leading companies to provide students with
            opportunities for internships, live projects, and placements. The
            department has an active placement cell that works tirelessly to
            ensure that students secure jobs with top companies across a range
            of industries
          </p>
          <p>
            In addition to the MBA program, DMS IITD also offers a Ph.D. program
            in management for students interested in pursuing a career in
            academia or research. The department has state-of-the-art
            facilities, including modern classrooms, a well-stocked library, and
            a computer lab.
          </p>
          <p>
            Overall, the Department of Management Studies at IIT Delhi is an
            excellent choice for students who are looking to pursue a career in
            management. With its strong academic reputation, industry
            connections, and research focus, DMS IITD provides students with a
            world-class education and prepares them for successful careers in
            management.
          </p>
        </div>
      </div>
      <!-- College Gallery -->
      <div class="col-lg-8" style="display: none;" id="college_gallery">
        <div class="d-flex justify-content-center align-items-center">
          <p class="fs-3 fw-bold">College Gallery</p>
        </div>
        <div class="container border border-1">
          <div class="row gy-4 my-4 my-md-0">
            <div class="col-12 col-md-7">
              <div style="height: 168px;">
                <img src="image/s2.png" class="card-img-top w-100 h-100" alt="Image 1">
              </div>
            </div>
            <div class="col-12 col-md-5">
              <div style="height: 168px;">
                <img src="image/s2.png" class="card-img-top w-100 h-100" alt="Image 2">
              </div>
            </div>
            <div class="col-12 col-md-5">
              <div style="height: 168px;">
                <img src="image/s2.png" class="card-img-top w-100 h-100" alt="Image 3">
              </div>
            </div>
            <div class="col-12 col-md-7">
              <div style="height: 168px;">
                <img src="image/s2.png" class="card-img-top w-100 h-100" alt="Image 4">
              </div>
            </div>
            <div class="col-12 col-md-5">
              <div style="height: 168px;">
                <img src="image/s2.png" class="card-img-top w-100 h-100" alt="Image 5">
              </div>
            </div>
            <div class="col-12 col-md-7">
              <div style="height: 168px;">
                <img src="image/s2.png" class="card-img-top w-100 h-100" alt="Image 6">
              </div>
            </div>
          </div>
        </div>
      </div>



      <div class="col-lg-4 asideBlog d-none d-md-block">
        <a data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo" style="cursor:pointer;" class="btn text-white">Check Eligibility</a>
        <div class="border border-2 mt-3">
          <h2 class="fs-3 text-center p-3">Similar colleges with same fee</h2>
          <div>
            <div class="row">
              <div class="col-4">
                <img src="image/clg2.png" alt="img" height="110px" width="100px" />
              </div>
              <div class="col-8">
                <p>
                  Department of Management Studies IIT Delhi [DMS IITD], New
                  Delhi
                </p>
                <p class="smallText">Fee: 2,500,000 Per annum</p>
              </div>
            </div>
            <div class="row">
              <div class="col-4">
                <img src="image/clg2.png" alt="img" height="110px" width="100px" />
              </div>
              <div class="col-8">
                <p>
                  Department of Management Studies IIT Delhi [DMS IITD], New
                  Delhi
                </p>
                <p class="smallText">Fee: 2,500,000 Per annum</p>
              </div>
            </div>
            <div class="row">
              <div class="col-4">
                <img src="image/clg2.png" alt="img" height="110px" width="100px" />
              </div>
              <div class="col-8">
                <p>
                  Department of Management Studies IIT Delhi [DMS IITD], New
                  Delhi
                </p>
                <p class="smallText">Fee: 2,500,000 Per annum</p>
              </div>
            </div>
            <div class="row">
              <div class="col-4">
                <img src="image/clg2.png" alt="img" height="110px" width="100px" />
              </div>
              <div class="col-8">
                <p>
                  Department of Management Studies IIT Delhi [DMS IITD], New
                  Delhi
                </p>
                <p class="smallText">Fee: 2,500,000 Per annum</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Fee Structure -->
  <div class="py-5 p-2 p-md-5" id="fee_structure">
    <h3 class="fw-bold">Fee Structure</h3>
    <div class="table-responsive">
      <table class="table table-hover table-striped">
        <thead>
          <tr class="text-center">
            <th scope="col" class=" border border-1 text-white" style="background-color: #002F26;">Course Structure</th>
            <th scope="col" class=" border border-1 text-white" style="background-color: #002F26;">Course Structure</th>
          </tr>
        </thead>
        <tbody>
          <tr class="text-center">
            <td class=" border border-1">College Fee</td>
            <td class=" border border-1">Rs. 50,000/-</td>
          </tr>
          <tr class="text-center">
            <td class=" border border-1">Tuition fee</td>
            <td class=" border border-1">Rs. 50,000/-</td>
          </tr>
          <tr class="text-center">
            <td class=" border border-1">College Fee</td>
            <td class=" border border-1">Rs. 50,000/-</td>
          </tr>
          <tr class="text-center">
            <td class=" border border-1">Tuition fee</td>
            <td class=" border border-1">Rs. 50,000/-</td>
          </tr>
          <tr class="text-center">
            <td class=" border border-1">College Fee</td>
            <td class=" border border-1">Rs. 50,000/-</td>
          </tr>
          <tr class="text-center border border-1 text-white" style="background-color: #002F26;">
            <td>Total</td>
            <td>Rs. 50,000,000/-</td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="col-12 d-md-flex justify-content-evenly">
      <!-- <a data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo" style="cursor:pointer;"><button type="button" class="btn text-white btn-lg col-12 col-md-6" style="width: max-content; padding: 15px 20px;background-color: #002F26;">Apply Now</button></a> -->
      <button type="button" class="btn text-white btn-lg col-12 col-md-6" style="width: max-content; padding: 15px 80px;background-color: #F7931E;" onclick="document.getElementById('choose_college').scrollIntoView({ behavior: 'smooth',block:'center' });">Check Eligibility</button>
    </div>
  </div>

  <!-- Testimonials -->
  <div class="container gtco-testimonials" style="color: #002F26;" id="testimonials">
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

  <!-- Alumnus -->
  <div class="py-5 p-2 p-md-5" id="alumnus">
    <h3 class="fw-bold">Alumnus</h3>
    <div class="table-responsive">
      <table class="table table-hover table-striped">
        <thead>
          <tr class="text-center">
            <th scope="col" class=" border border-1 text-white" style="background-color: #FF8900;">Full Name</th>
            <th scope="col" class=" border border-1 text-white" style="background-color: #FDA032;">Passing Year</th>
            <th scope="col" class=" border border-1 text-white" style="background-color: #FDA032;">Placement</th>
          </tr>
        </thead>
        <tbody>
          <tr class="text-center">
            <td class=" border border-1">Sushant</td>
            <td class=" border border-1">2021</td>
            <td class=" border border-1">2021</td>
          </tr>
          <tr class="text-center">
            <td class=" border border-1">Somnath</td>
            <td class=" border border-1">2021</td>
            <td class=" border border-1">2021</td>
          </tr>
          <tr class="text-center">
            <td class=" border border-1">Atul</td>
            <td class=" border border-1">2021</td>
            <td class=" border border-1">2021</td>
          </tr>
          <tr class="text-center">
            <td class=" border border-1">Himanshu</td>
            <td class=" border border-1">2021</td>
            <td class=" border border-1">2021</td>
          </tr>
          <tr class="text-center">
            <td class=" border border-1">Rachit</td>
            <td class=" border border-1">2021</td>
            <td class=" border border-1">2021</td>
          </tr>
        </tbody>
      </table>
    </div>
    <!-- <div class="d-flex justify-content-between">
      <strong>1 2 3 4 ..... 20</strong>
      <strong>Previous | Next</strong>
      <strong>Last...</strong>
    </div> -->
  </div>

  <!-- Check Eligibility -->
  <div class="container-fluid p-5" style="background-color: #F0FFF7;" id="choose_college">
    <h3>Check Eligibility</h3>
    <div class="d-md-flex justify-content-between">
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
        <input type="text" class="form-control m-0 shadow-none rounded-0" placeholder="Full Name" aria-label="Username" aria-describedby="basic-addon1">
      </div>
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-graduation-cap"></i></span>
        <input type="text" class="form-control m-0 shadow-none rounded-0" placeholder="Marks (in Percentage /C.G.P.A)" aria-label="Username" aria-describedby="basic-addon1">
      </div>
    </div>
    <div class="d-md-flex col-12 justify-content-evenly">
      <h5 class="col-md-6 col-12">YAY! You’re eligible according to your marks</h5>
      <!-- <a data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo" style="cursor:pointer;"><button type="button" class="btn text-white btn-lg col-12 col-md-3" style="width: max-content; padding: 15px 20px;background-color: #002F26;">Apply Now</button></a> -->
      <button type="button" class="btn text-white btn-lg col-12 col-md-3" style="width: max-content; padding: 15px 115px;background-color: #002F26;" onclick="document.getElementById('choose_college').scrollIntoView({ behavior: 'smooth',block:'center' });">Check</button>
    </div>
  </div>

  <!-- other Specialisation -->
  <div class="text-center py-5 p-2 p-md-5">
    <h1 class="fw-bold">Other Course Specialisation in same college</h1>
    <h5>Course Specialisation | Department of Management Studies IIT Delhi [DMS IITD], New Delhi</h5>
    <div class="table-responsive mt-4">
      <table class="table table-hover">
        <thead>
          <tr class="text-center">
            <th scope="col" class="border-1">Course Name</th>
            <th scope="col" class="border-1">Course Spécialisation</th>
            <th scope="col" class="border-1">Course Fee</th>
          </tr>
        </thead>
        <tbody class="border-1">
          <tr>
            <td class="border-0">Engeering</td>
            <td class="border-0">B-Tech (Mechanical Engineering)</td>
            <td class="border-0">Rs. 1,000,0000 Lpa</td>
          </tr>
          <tr>
            <td class="border-0"></td>
            <td class="border-0">B-Tech (Electrical Engineering)</td>
            <td class="border-0">Rs. 1,000,0000 Lpa</td>
          </tr>
          <tr>
            <td class="border-0"></td>
            <td class="border-0">B-Tech (Computer science)</td>
            <td class="border-0">Rs. 1,000,0000 Lpa</td>
          </tr>
          <tr>
            <td class="border-0"></td>
            <td class="border-0">B-Tech (Civil Engineering)</td>
            <td class="border-0">Rs. 1,000,0000 Lpa</td>
          </tr>
        </tbody>
        <tbody class="border-1 mt-2">
          <tr>
            <td class="border-0">MBA</td>
            <td class="border-0">B-Tech (Mechanical Engineering)</td>
            <td class="border-0">Rs. 1,000,0000 Lpa</td>
          </tr>
          <tr>
            <td class="border-0"></td>
            <td class="border-0">B-Tech (Electrical Engineering)</td>
            <td class="border-0">Rs. 1,000,0000 Lpa</td>
          </tr>
          <tr>
            <td class="border-0"></td>
            <td class="border-0">B-Tech (Computer science)</td>
            <td class="border-0">Rs. 1,000,0000 Lpa</td>
          </tr>
          <tr>
            <td class="border-0"></td>
            <td class="border-0">B-Tech (Civil Engineering)</td>
            <td class="border-0">Rs. 1,000,0000 Lpa</td>
          </tr>
        </tbody>
      </table>
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
      <h1 class="modal-title fs-5 fw-bold text-center" id="exampleModalLabel">To apply for this college we need a few details from you</h1>
      <div class="modal-body">
        <form>
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
            <input type="text" class="form-control m-0 shadow-none rounded-end-2" placeholder="Full Name" aria-label="Full Name" aria-describedby="basic-addon1">
          </div>
          <div class="d-lg-flex justify-content-start">
            <div class="input-group mb-3">
              <span class="input-group-text">+91 </span>
              <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-phone"></i></span>
              <input type="text" class="form-control m-0 shadow-none rounded-end-2" placeholder="Phone Number" aria-label="Phone Number" aria-describedby="basic-addon1" maxlength="10">
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
            <div class="text-muted">Verify OTP <span><i class="fa-solid fa-circle-check" style="color: #002F26;"></i> <i class="fa-solid fa-circle-xmark" style="color: #f50000;"></i></span></div>
            <div><a href="#">Resend OTP</a></div>
          </div>
          <div>
            <div class="d-md-flex justify-content-between">
              <div class="input-group mb-2">
                <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-envelope"></i></span>
                <input type="text" class="form-control m-0 shadow-none rounded-end-2" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1">
              </div>
              <div class="ms-5">
                <button type="button" class="btn px-5 text-white" style="background-color:#002F26;">Submit</button>
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

<?php include 'foot.php'; ?>

