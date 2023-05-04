<?php include 'head.php'; ?>
<style>
    .sk-topclg a {
        text-decoration: none;
    }

    .slider {
        height: 60vh;
    }

    .searchOption:nth-child(3) {
        border-radius: 0 20px 20px 0;
    }

    .searchOption:nth-child(2) {
        border-radius: 0;
    }

    .searchOption {
        line-height: 14px;
        border-radius: 20px 0 0 20px;
        padding: 9px;
        border: 0.4000000059604645px solid #707070;
        box-shadow: 0px 0px 8px #00000029;
    }

    .btn-search {
        background-color: #f7931e;
        color: #ffffff;
        line-height: 14px;
        width: 120px;
        padding: 10px;
    }

    .btn-black {
        background-color: #002F26;
        color: white;
        line-height: 14px;
        width: 120px;
        padding: 10px;
    }

    .sk-topclg input {
        width: 345px;
        border-radius: 20px;
        border: none;
        border: 0.4000000059604645px solid #707070;
        padding: 9px;
    }

    .sk-topclg h1,
    .sk-topclg h2,
    .sk-topclg h4,
    .sk-topclg h5,
    .sk-topclg h6,
    .sk-topclg p {
        margin: 0;
    }

    .minipara {
        font-size: 12px;
    }

    .minisection {

        border: 1px solid;
        margin: auto;
    }

    .minisection1 {
        width: 99%;
        border: 1px solid;
        margin: auto;
    }

    .hoverefct {
        color: #f7931e;
    }

    #hoverefct:hover * {
        color: #00e942;
        stroke: #00e942;
        fill: #00e942;
    }

    #hoverefct:hover .svgg {
        margin-left: 6px;
    }

    .selection {
        background: #fdfdfd;
        text-align: center;
        min-width: fit-content;
        max-width: 151px;
        box-shadow: 0px 0px 1px;
        margin: 1px 5px 1px 5px;
        border-radius: 15px;
        padding: 5px 10px;
        font-size: small;
    }

    .clgBorderBox {
        border-right: 1px solid;
    }

    .mbaOption {
        align-self: end;
    }

    .TopClg {
        font-size: 55px;
    }

    .filterDiv {
        width: 50%;
    }

    /* compare style */
    #myDiv {
        display: none;
    }

    @media only screen and (max-width:486px) {
        .minipara {
            padding: 0;
            margin: 5px;
        }

        .selection {
            display: flex;
            align-items: center;
            background: #fdfdfd;
            margin: 19px;
            border-radius: 33px;
            text-align: center;
            padding: 10px 20px;
            min-width: fit-content;
            max-width: 151px;
            box-shadow: 0px 0px 1px;
        }

        /* input {
            width: 345px;
            border-radius: 20px;
            border: none;
            border: 0.4000000059604645px solid #707070;
            padding: 4px;
        } */

        .mbaOption {
            align-self: end;
        }

        /* .btn {
            padding: 9px;
        } */

        .filterDiv {
            width: 300px;
        }

        .fillterBox {
            width: 320px;
            right: 4%;
            background: #002f26;
            color: white;
        }

        .mbaOption {
            align-self: start;
        }

        .clgBorderBox {
            border-right: none;
        }
    }

    @media only screen and (max-width:768px) {
        .clgBorderBox {
            border-right: none;

        }

        .TopClg {
            font-size: 25px;
        }

        .slider {
            height: fit-content;
        }

        .midLine {
            display: none;
        }

        .searchOption {
            line-height: 14px;
            border-radius: 20px !important;
            width: 90%;
            padding: 9px;
            border: 0.4000000059604645px solid #707070;
            box-shadow: 0px 0px 8px #00000029;
        }
    }
</style>
<div class="slider">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" style="opacity: 0.7;">
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
    <div class="slider-top d-flex align-items-center">
        <div class="container">
            <div class="d-flex flex-direction-row align-items-center justify-content-md-between justify-content-center">
                <div>
                    <p class="sk-confused text-start mt-3 fs-1">
                        Top colleges from Delhi
                    </p>
                    <button type="button" class="btn fs-2 rounded-pill text-white fw-bold shadow-lg eligibility_btn" style="backdrop-filter: blur(5px)" onclick="document.getElementById('exampleModal').scrollIntoView({ behavior: 'smooth',block:'center' });" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">
                        Let us select for you
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- below slider -->
<div class="container my-5 border border-1 sk-topclg">
    <!-- <div>
        <div class="d-flex row justify-content-around  my-3 flex-wrap align-items-around">
            <input type="text" class="searchOption shadow-sm col-12 col-lg-3 my-2" placeholder="Enter College Name">
            <select class="searchOption mx-2 col-12 col-lg-3 shadow-sm my-2" aria-label="Default select example">
                <option selected>Select Course</option>
                <option value="1">be.tech</option>
                <option value="2">m.tech</option>
                <option value="3">Bca</option>
            </select>
            <select class="searchOption mx-2 shadow-sm col-12 col-lg-3 my-2" aria-label="Default select example">
                <option selected>Select Location</option>
                <option value="1">delhi</option>
                <option value="2">karnatak</option>
                <option value="3">kolapur</option>
            </select>
            <button type="submit" class=" btn  btn-search col-12 col-lg-3 my-2">Search</button>
        </div>
        <div class="" style="overflow: hidden;">
            <div class="d-flex  justify-content-between my-3" style="overflow-x: auto;">
                <div class="selection">
                    <h5>MBA</h3>
                </div>
                <div class="selection">
                    <h5>Engeering</h3>
                </div>
                <div class="selection">
                    <h5>BBA/BCA</h3>
                </div>
                <div class="selection">
                    <h5>Medical</h3>
                </div>
                <div class="selection">
                    <h5>MBA</h3>
                </div>
                <div class="selection">
                    <h5>Engeering</h3>
                </div>
                <div class="selection">
                    <h5>BBA/BCA</h3>
                </div>
                <div class="selection">
                    <h5>Medical</h3>
                </div>
            </div>
        </div>
    </div> -->

    <div class="container mt-4 mb-md-4">
        <div class="row">
            <div class="col-md-9 mb-1">
                <div class="input-group">
                    <input type="text" class="form-control mb-0 shadow-none" aria-label="search">
                    <span class="input-group-text text-white" style="background: #002f26;border: 2px solid #002f26;cursor: pointer;">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </span>
                    <span class="input-group-text rounded-start rounded-pill text-white" style="background: #002f26;border: 2px solid #002f26;cursor: pointer;">Search</span>
                </div>
            </div>
            <div class="col-md-3 mb-3 position-relative">
                <div data-bs-toggle="collapse" data-bs-target="#fillter" aria-expanded="false" aria-controls="fillter">
                    <div class="fw-bold text-center border-dark border Compare-filter w-100  p-1 p-md-1 border-1 rounded-pill" style="cursor: pointer;">
                        <p class="fs-5"> Fillter</p>
                    </div>
                </div>
                <!-- fillter box start-->
                <div class="border fillterBox shadow-lg rounded p-3 collapse position-absolute " id="fillter">
                    <span data-bs-toggle="collapse" data-bs-target="#fillter" aria-expanded="false" aria-controls="fillter"><i class="fa-solid fa-xmark d-flex justify-content-end" style="cursor: pointer;"></i></span>
                    <div class="d-flex my-3 justify-content-between w-100">
                        <div class="w-75">
                            <p class="fw-bold text-start text-md-center">Fee Structure</p>
                            <div class="row gy-1 gx-1 m-auto">
                                <span class="col-6 col-md-4 p-0 ">
                                    <p class="border m-1 text-center">1Lpa-2Lpa</p>
                                </span>
                                <span class="col-6 col-md-4 p-0">
                                    <p class="border m-1 text-center">1Lpa-2Lpa</p>
                                </span>
                                <span class=" col-6 col-md-4 p-0">
                                    <p class="border m-1 text-center">1Lpa-2Lpa</p>
                                </span>
                                <span class=" col-6 col-md-4 p-0">
                                    <p class="border m-1 text-center">1Lpa-2Lpa</p>
                                </span>
                                <span class=" col-6 col-md-4 p-0">
                                    <p class="border m-1 text-center">1Lpa-2Lpa</p>
                                </span>
                                <span class="col-6 col-md-4 p-0">
                                    <p class="border m-1 text-center">
                                        < 7Lpa </p>
                                </span>
                            </div>
                        </div>
                        <div>
                            <select class=" text-center" style="font-weight: 600;" aria-label="Default select example">
                                <option selected>Short By</option>
                                <option value="1">Popularity</option>
                                <option value="2">High-Low</option>
                                <option value="3">Low-High</option>
                            </select>
                        </div>
                    </div>
                    <div class="my-3">
                        <p class="fw-bold text-start text-md-center">Precentage of Marks</p>
                        <div class="d-flex justify-content-evenly flex-wrap">
                            <span class="border text-center" style="width: 100px;">
                                <p>>50%</p>
                            </span>
                            <span class="border text-center" style="width: 100px;">
                                <p>50%-60%</p>
                            </span>
                            <span class="border text-center" style="width: 100px;">
                                <p>60%-70%</p>
                            </span>
                            <span class="border text-center" style="width: 100px;">
                                <p>70%-80%</p>
                            </span>
                            <span class="border text-center" style="width: 100px;">
                                <p>80% </p>
                            </span>
                        </div>
                    </div>
                    <div class="d-flex my-3  justify-content-between flex-wrap">
                        <div class=" d-flex flex-column align-items-start filterDiv my-3">
                            <p class="text-start text-md-center w-75 fw-bold">Select near location</p>
                            <select class=" text-center w-75 Compare-filter" aria-label="Default select example">
                                <option selected>None</option>
                                <option value="1">delhi</option>
                                <option value="2">karnatak</option>
                                <option value="3">kolapur</option>
                            </select>
                        </div>
                        <div class=" d-flex flex-column align-items-end filterDiv my-3">
                            <p class="text-start text-md-center fw-bold w-75">MBA Type</p>
                            <select class=" text-center w-75 Compare-filter  mbaOption" style="font-weight: 600;" aria-label="Default select example">
                                <option selected>None</option>
                                <option value="1">MBA</option>
                                <option value="2">MBA/PGDM</option>
                                <option value="2">MBA/PGDM</option>
                            </select>
                        </div>
                    </div>
                    <div class="w-100 my-3">
                        <p class="text-start text-md-center fw-bold">Select MBA Specialisation</p>
                        <select class=" text-center w-100 Compare-filter col-md-3 mx-2" style="font-weight: 600;" aria-label="Default select example">
                            <option selected>None</option>
                            <option value="1">Sales & marketing management Business</option>
                            <option value="2">Analytics & operation management</option>
                            <option value="3">Human Resource management Finance management</option>
                        </select>
                    </div>
                    <div class="d-flex my-3 justify-content-center align-items-center">
                        <div class="me-3">
                            <button type="button" value="" class="btn py-2 px-3 mt-0 me-1 bg-light">
                                submit
                            </button>
                        </div>
                        <div class="ms-1">
                            <p>Clear all filter</p>
                        </div>
                    </div>
                </div>
                <!-- fillter box end -->
            </div>
            <!-- fillter div end -->
        </div>
    </div>

    <script>
        // Get the filter div element
        const filterDiv = document.getElementById("fillter");

        // Close the filter div when clicking outside of it
        window.addEventListener("click", function(event) {
            if (!filterDiv.contains(event.target)) {
                filterDiv.classList.remove("show");
            }
        });
    </script>

    <!-- <div class="row"> -->
    <div class="container mt-md-4 mb-4">
        <div class="row me-0">
            <div class="col-md-6 mb-1">
                <div class="input-group form-control p-0 border border-1 rounded-pill shadow-none">
                    <input type="text" class="form-control border-0 shadow-none" placeholder="Choose College" aria-label="Username">
                    <span class="input-group-text border-0"><i class="fa-solid fa-arrow-right-arrow-left"></i></span>
                    <input type="text" class="form-control border-0 shadow-none" placeholder="Choose College" aria-label="Server">
                </div>
            </div>
            <div class="col-md-2 mb-1">
                <button type="submit" id="compareBtn" class="btn shadow-none border border-1" style="padding:10px;" onclick="var div=document.getElementById('myDiv'); var button=document.querySelector('#compareBtn'); if(div.style.display==='none'){div.style.display='flex'; button.innerHTML='Close';} else{div.style.display='none'; button.innerHTML='Compare';}">Compare</button>
            </div>
            <div class="col-md-4 row border border-1 p-0 ms-1 rounded-pill py-3" style="font-size: x-small;">
                <button class="col-4 border-0 bg-body rounded-pill p-0"><i class="fa-solid fa-arrow-up-wide-short"></i> Fee high to low</button>
                <button class="col-4 border-0 bg-body rounded-pill p-0"><i class="fa-solid fa-arrow-up-short-wide"></i> Fee low to high</button>
                <button class="col-4 border-0 bg-body rounded-pill p-0"><i class="fa-solid fa-star"></i> Popularity</button>
            </div>
        </div>
    </div>

    <!-- Compare div start -->
    <div id="myDiv" class="row">
        <div class="col-6 border border-1 rounded-3 p-3">
            <div class="row">
                <div class="col-12 col-md-4 m-auto border border-1" style="height:120px;width:150px;">
                    <img src="image/clg2.png" alt="phto" class="w-100 h-100" />
                </div>
                <div class="col-12 col-md-8">
                    <p class="fw-bold text-center text-md-start">Department of Management Studies IIT Delhi [DMS IITD], New Delhi</p>
                    <p>Course Fee: <span style="color: #F7931E;">100000</span></p>
                    <p>Course Name: <span>MBA/PGDM</span></p>
                    <p>Recommended Marks: <span>60%</span>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 d-flex flex-column justify-content-md-center">
                    <button type="button" class="btn m-2 w-100 text-white" style="background-color: #002f26;">Apply Now</button>
                </div>
                <div class="col-12 col-md-6 d-flex flex-column justify-content-md-center">
                    <button type="button" class="btn m-2 w-100">Download Brochure</button>
                </div>
            </div>

            <div class="">
                <p><i class="fa-solid fa-check me-3"></i> Near Delhi</p>
                <p><i class="fa-solid fa-xmark me-3"></i> Hostel Availability</p>
                <p><i class="fa-solid fa-check me-3"></i> College GYM </p>
                <p><i class="fa-solid fa-xmark me-3"></i> Open Library</p>
                <p><i class="fa-solid fa-xmark me-3"></i> College Bank</p>
                <p><i class="fa-solid fa-check me-3"></i> Hospital Facility</p>
                <p><i class="fa-solid fa-xmark me-3"></i> Police station </p>
                <p><i class="fa-solid fa-check me-3"></i> College Transportation</p>
                <p><i class="fa-solid fa-check me-3"></i> Workshops </p>
                <p><i class="fa-solid fa-check me-3"></i> Tech Facility </p>
                <p><i class="fa-solid fa-xmark me-3"></i> College Guest</p>
                <p><i class="fa-solid fa-check me-3"></i> House In Campus shop, canteen</p>
            </div>
        </div>
        <div class="col-6 border border-1 rounded-3 p-3">
            <div class="row">
                <div class="col-12 col-md-4 m-auto border border-1" style="height:120px;width:150px;">
                    <img src="image/clg2.png" alt="img" class="w-100 h-100" />
                </div>
                <div class="col-12 col-md-8">
                    <p class="fw-bold text-center text-md-start">Department of Management Studies IIT Delhi [DMS IITD], New Delhi</p>
                    <p>Course Fee: <span style="color: #F7931E;">100000</span></p>
                    <p>Course Name: <span>MBA/PGDM</span></p>
                    <p>Recommended Marks: <span>60%</span>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 d-flex flex-column justify-content-md-center">
                    <button type="button" class="btn m-2 w-100 text-white" style="background-color: #002f26;">Apply Now</button>
                </div>
                <div class="col-12 col-md-6 d-flex flex-column justify-content-md-center">
                    <button type="button" class="btn m-2 w-100">Download Brochure</button>
                </div>
            </div>

            <div class="">
                <p><i class="fa-solid fa-check me-3"></i> Near Delhi</p>
                <p><i class="fa-solid fa-xmark me-3"></i> Hostel Availability</p>
                <p><i class="fa-solid fa-check me-3"></i> College GYM </p>
                <p><i class="fa-solid fa-xmark me-3"></i> Open Library</p>
                <p><i class="fa-solid fa-xmark me-3"></i> College Bank</p>
                <p><i class="fa-solid fa-check me-3"></i> Hospital Facility</p>
                <p><i class="fa-solid fa-xmark me-3"></i> Police station </p>
                <p><i class="fa-solid fa-check me-3"></i> College Transportation</p>
                <p><i class="fa-solid fa-check me-3"></i> Workshops </p>
                <p><i class="fa-solid fa-check me-3"></i> Tech Facility </p>
                <p><i class="fa-solid fa-xmark me-3"></i> College Guest</p>
                <p><i class="fa-solid fa-check me-3"></i> House In Campus shop, canteen</p>
            </div>
        </div>

    </div>
    <!-- Compare div end -->

    <style>
        .selection {
            background: #fdfdfd;
            margin: 1px 5px 1px 5px;
            border-radius: 15px;
            text-align: center;
            padding: 5px 10px;
            min-width: fit-content;
            max-width: 151px;
            box-shadow: 0px 0px 1px;
            font-size: small;
        }

        /* Hide scrollbar for Chrome, Safari and Opera */
        .scrollable-section::-webkit-scrollbar {
            display: none;
        }

        /* Hide scrollbar for IE, Edge and Firefox */
        .scrollable-section {
            -ms-overflow-style: none;
            /* IE and Edge */
            scrollbar-width: none;
            /* Firefox */
        }

        .scroll-button {
            border: none;
            background: none;
            font-size: smaller;
        }
    </style>
    <div class="container row p-0" style="margin: 15px 0 15px 0;">
        <div class="col-md-2">
            <p>Filtered Results:</p>
        </div>
        <div class="col-md-10" style="overflow: hidden; user-select: none; display: flex; align-items: center;">
            <button class="scroll-button left-button" onclick="scrollContainer.scrollBy(-200, 0)" style="flex-shrink: 0;">
                <i class="fa-solid fa-chevron-left"></i>
            </button>
            <div class="d-flex justify-content-between scrollable-section" style="overflow-x: auto; flex-grow: 1;" id="scrollContainer">
                <div class="selection">
                    <p>State: New Delhi</p>
                </div>
                <div class="selection">
                    <p>City: Connaught Place</p>
                </div>
                <div class="selection">
                    <p>Fee: 1Lpa - 2Lpa</p>
                </div>
                <div class="selection">
                    <p>Marks: 70 - 80%</p>
                </div>
                <div class="selection">
                    <p>Course: MBA</p>
                </div>
                <div class="selection">
                    <p>MBA Type: MBA/PGDM</p>
                </div>
                <div class="selection">
                    <p>Specialisation: Sales & marketing management</p>
                </div>
            </div>
            <button class="scroll-button right-button" onclick="scrollContainer.scrollBy(200, 0)" style="flex-shrink: 0;">
                <i class="fa-solid fa-chevron-right"></i>
            </button>
        </div>

    </div>
</div>

<script>
    // JavaScript code for scroll functionality
    var scrollContainer = document.getElementById('scrollContainer');
    var isMouseDown = false;
    var scrollLeft = 0;
    var mouseX = 0;

    scrollContainer.addEventListener('mousedown', function(event) {
        isMouseDown = true;
        mouseX = event.pageX;
        scrollLeft = scrollContainer.scrollLeft;
    });

    scrollContainer.addEventListener('mouseup', function() {
        isMouseDown = false;
    });

    scrollContainer.addEventListener('mouseleave', function() {
        isMouseDown = false;
    });

    scrollContainer.addEventListener('mousemove', function(event) {
        if (!isMouseDown) return;
        var movementX = event.pageX - mouseX;
        scrollContainer.scrollLeft = scrollLeft - movementX;
    });
</script>


<div class="container my-5 border border-1 sk-topclg">
    <div class="pt-3">
        <div class="m-0 ">
            <div class="border text-center mb-2">
                <div class="row clgInfo2 d-none d-md-flex">
                    <div class="col-8 py-3 px-0" style="border-right: 1px solid; ">
                        <h4>College Name</h4>
                    </div>
                    <div class="col-4 py-3 px-0">
                        <h4>Information</h4>
                    </div>
                </div>
                <div class="py-3 d-md-none">
                    <h4>College Information</h4>
                </div>
            </div>
            <div class="clgInfoBox">
                <!-- 1 -->
                <div>
                    <a href="view.php" class="text-decoration-none text-black">
                        <div class="border border-1 border-black p-1 p-md-0 row m-auto px-1 px-md-3 justify-content-between">
                            <div class="d-flex flex-wrap clgBorderBox align-items-center col-12 col-md-8 p-md-1 row m-auto m-md-0 px-0 px-lg-3">
                                <div class="col-3 p-0 ">
                                    <div class="" style="aspect-ratio:16/9;">
                                    <img class="w-100 h-100" src="image/College Images-01.png" alt="">
                                    </div>
                                    
                                   
                                </div>
                                <div class="col-9">
                                <h6 class="fw-bold">Department of Management Studies IIT Delhi [DMS IITD], New Delhi
                                    </h6>
                                    <div class=" col-9">
                                        <p class="minipara mt-1 col-12 col-md-4">New Delhi, Delhi NCR </p>
                                        <span class="col-md-1 midLine"> |</span>
                                        <p class="minipara col-12 col-md-4"> AICTE, UGC,
                                            NBA
                                            Approved</p>
                                    </div>
                                </div>
                                
                                <div class="row justify-content-between">
                                   <div class="col-4">
                                   <span class="text-center text-md-center text-lg-start"><i class="fa-solid fa-user"></i>
                                        8.7/10</span>
                                   </div>
                                    
                                   
                                </div>
                            </div>
                            <div class="row my-1 col-12 col-md-4 m-auto p-0">
                                <p class="col-sm-6 col-12 p-0 col-md-12 px-md-2 text-center text-md-start"><span class="fw-bold">Course
                                        Fee: </span> ₹1,040,000 </h6>
                                <p class="col-sm-6 col-12 p-0 col-md-12 px-md-2 text-md-start text-center"> <span class="fw-bold">Course-Name:</span>MBA/PGDM</h6>
                                <form action="" class="col-12 d-flex align-items-center justify-content-center justify-content-md-start">
                                    <input style="width: 15px; margin: 5px;" type="checkbox" id="vehicle1" name="" value="">
                                    <label for="vehicle1">
                                        <p class="minipara fw-bold">Add to compare</p>
                                    </label>
                                </form>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="minisection1 mb-3 py-2 d-flex justify-content-between row">
                    <div class="d-flex flex-row align-items-center justify-content-center col-6 col-md-8">
                        <i class="fa-sharp fa-solid fa-check text-warning"></i>
                        <span class="minipara hoverefct" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo" style="cursor:pointer;">Apply Now</span>
                        <i class="fa-solid fa-arrow-right text-warning"></i>
                    </div>
                    <div class="d-flex justify-content-center col-6 col-md-4"> <a class="minipara hoverefct" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo" style="cursor:pointer;" id="hoverefct">
                            <div class="d-flex flex-row d-flex justify-content-around align-items-center ">
                                <span>Download Brochure</span>
                                <i class="fa-solid fa-arrow-right text-warning"></i>
                            </div>
                        </a></div>
                </div>
            </div>
            <!--  -->
        </div>
        <div class="d-flex my-4 justify-content-md-end justify-content-center w-100">
            <a href="">
                <p class="minipara ">Previous Page</p>
            </a>
            <a href="">
                <p class="minipara mx-3">Next Page</p>
            </a>
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
                    <div class="d-flex justify-content-center align-items-center ms-5 mb-3">
                        <div class="text-muted col-8 text-start text-md-end">Verify OTP <span><i class="fa-solid fa-circle-check" style="color: #002F26;"></i> <i class="fa-solid fa-circle-xmark" style="color: #f50000;"></i></span></div>
                        <div class="col-4 text-end"><a href="#">Resend OTP</a></div>
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
<?php include 'foot.php'; ?>


<!-- <style>
    .suggestions-list {
        position: absolute;
        background-color: #f9f9f9;
        border: 1px solid #ddd;
        max-height: 200px;
        overflow-y: auto;
        width: 100%;
    }

    .suggestion-item {
        padding: 8px 12px;
        cursor: pointer;
    }

    .suggestion-item:hover {
        background-color: #e9e9e9;
    }
</style>
<div class="form-group">
    <label for="cityInput">City:</label>
    <input type="text" class="form-control" id="cityInput" placeholder="Enter city">
    <div id="suggestions" class="suggestions-list"></div>
</div>
<script>
    const cities = [
        "Mumbai, Maharashtra",
        "Delhi, Delhi",
        "Bangalore, Karnataka",
        "Hyderabad, Andhra Pradesh",
        "Ahmedabad, Gujarat",
        "Chennai, Tamil Nadu",
        "Kolkata, West Bengal",
        "Surat, Gujarat",
        "Pune, Maharashtra",
        "Jaipur, Rajasthan",
        "Lucknow, Uttar Pradesh",
        "Kanpur, Uttar Pradesh",
        "Nagpur, Maharashtra",
        "Indore, Madhya Pradesh",
        "Thane, Maharashtra",
        "Bhopal, Madhya Pradesh",
        "Visakhapatnam, Andhra Pradesh",
        "Pimpri and Chinchwad, Maharashtra",
        "Patna, Bihar",
        "Vadodara, Gujarat",
        "Ghaziabad, Uttar Pradesh",
        "Ludhiana, Punjab",
        "Agra, Uttar Pradesh",
        "Nashik, Maharashtra",
        "Faridabad, Haryana",
        "Meerut, Uttar Pradesh",
        "Rajkot, Gujarat",
        "Kalyan and Dombivali, Maharashtra",
        "Vasai Virar, Maharashtra",
        "Varanasi, Uttar Pradesh",
        "Srinagar, Jammu and Kashmir",
        "Aurangabad, Maharashtra",
        "Dhanbad, Jharkhand",
        "Amritsar, Punjab",
        "Navi Mumbai, Maharashtra",
        "Allahabad, Uttar Pradesh",
        "Haora, West Bengal",
        "Ranchi, Jharkhand",
        "Gwalior, Madhya Pradesh",
        "Jabalpur, Madhya Pradesh",
        "Coimbatore, Tamil Nadu",
        "Vijayawada, Andhra Pradesh",
        "Jodhpur, Rajasthan",
        "Madurai, Tamil Nadu",
        "Raipur, Chhattisgarh",
        "Kota, Rajasthan",
        "Chandigarh, Chandigarh",
        "Guwahati, Assam",
        "Solapur, Maharashtra",
        "Hubli and Dharwad, Karnataka",
        "Bareilly, Uttar Pradesh",
        "Mysore, Karnataka",
        "Moradabad, Uttar Pradesh",
        "Gurgaon, Haryana",
        "Aligarh, Uttar Pradesh",
        "Jalandhar, Punjab",
        "Tiruchirappalli, Tamil Nadu",
        "Bhubaneswar, Orissa",
        "Salem, Tamil Nadu",
        "Mira and Bhayander, Maharashtra",
        "Thiruvananthapuram, Kerala",
        "Bhiwandi, Maharashtra",
        "Saharanpur, Uttar Pradesh",
        "Gorakhpur, Uttar Pradesh",
        "Guntur, Andhra Pradesh",
        "Amravati, Maharashtra",
        "Bikaner, Rajasthan",
        "Noida, Uttar Pradesh",
        "Jamshedpur, Jharkhand",
        "Bhilai Nagar, Chhattisgarh",
        "Warangal, Andhra Pradesh",
        "Cuttack, Orissa",
        "Firozabad, Uttar Pradesh",
        "Kochi, Kerala",
        "Bhavnagar, Gujarat",
        "Dehradun, Uttarakhand",
        "Durgapur, West Bengal",
        "Asansol, West Bengal",
        "Nanded Waghala, Maharashtra",
        "Kolapur, Maharashtra",
        "Ajmer, Rajasthan",
        "Gulbarga, Karnataka",
        "Loni, Uttar Pradesh",
        "Ujjain, Madhya Pradesh",
        "Siliguri, West Bengal",
        "Ulhasnagar, Maharashtra",
        "Jhansi, Uttar Pradesh",
        "Sangli Miraj Kupwad, Maharashtra",
        "Jammu, Jammu and Kashmir",
        "Nellore, Andhra Pradesh",
        "Mangalore, Karnataka",
        "Belgaum, Karnataka",
        "Jamnagar, Gujarat",
        "Tirunelveli, Tamil Nadu",
        "Malegaon, Maharashtra",
        "Gaya, Bihar",
        "Ambattur, Tamil Nadu",
        "Jalgaon, Maharashtra",
        "Udaipur, Rajasthan",
        "Maheshtala, West Bengal",
        "Tiruppur, Tamil Nadu",
        "Davanagere, Karnataka",
        "Kozhikode, Kerala",
        "Kurnool, Andhra Pradesh",
        "Akola, Maharashtra",
        "Rajpur Sonarpur, West Bengal",
        "Bokaro Steel, Jharkhand",
        "Bellary, Karnataka",
        "Patiala, Punjab",
        "South Dum Dum, West Bengal",
        "Rajarhat Gopalpur, West Bengal",
        "Bhagalpur, Bihar",
        "Agartala, Tripura",
        "Muzaffarnagar, Uttar Pradesh",
        "Bhatpara, West Bengal",
        "Latur, Maharashtra",
        "Panihati, West Bengal",
        "Dhule, Maharashtra",
        "Rohtak, Haryana",
        "Korba, Chhattisgarh",
        "Bhilwara, Rajasthan",
        "Brahmapur Town, Orissa",
        "Muzaffarpur, Bihar",
        "Ahmadnagar, Maharashtra",
        "Mathura, Uttar Pradesh",
        "Kollam, Kerala",
        "Avadi, Tamil Nadu",
        "Kadapa, Andhra Pradesh",
        "Rajahmundry, Andhra Pradesh",
        "Bilaspur, Chhattisgarh",
        "Kamarhati, West Bengal",
        "Shahjahanpur, Uttar Pradesh",
        "Bijapur, Karnataka",
        "Rampur, Uttar Pradesh",
        "Shimoga, Karnataka",
        "Chandrapur, Maharashtra",
        "Junagadh, Gujarat",
        "Thrissur, Kerala",
        "Alwar, Rajasthan",
        "Barddhaman, West Bengal",
        "Kulti, West Bengal",
        "Kakinada, Andhra Pradesh",
        "Nizamabad, Andhra Pradesh"
    ];

    const input = document.getElementById("cityInput");
    const suggestionsContainer = document.getElementById("suggestions");

    input.addEventListener("input", () => {
        const inputValue = input.value.toLowerCase();
        const matchingCities = cities.filter(city => {
            return city.toLowerCase().includes(inputValue);
        });

        renderSuggestions(matchingCities);
    });

    function renderSuggestions(suggestions) {
        suggestionsContainer.innerHTML = "";

        suggestions.forEach(suggestion => {
            const suggestionItem = document.createElement("div");
            suggestionItem.classList.add("suggestion-item");
            suggestionItem.textContent = suggestion;

            suggestionItem.addEventListener("click", () => {
                input.value = suggestion;
                suggestionsContainer.innerHTML = "";
            });

            suggestionsContainer.appendChild(suggestionItem);
        });
    }
</script> -->